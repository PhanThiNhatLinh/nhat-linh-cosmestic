<?php

namespace App\Http\Controllers;

use Cart;
use App\Product;
use App\Customer;
use App\Order;
use App\Orderdetail;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        // dd($request->productId);
        $product = Product::find($request->productId);
        // Cart::add($product->STT, $product->product_name, $request->quantity, array());
        // dd($product);
        Cart::session(Auth::user()->id)->add(array(
            'id' => $product->STT, // inique row ID
            'name' => $product->product_name,
            'image' => $product->image,
            'price' => $product->price,
            'quantity' => $request->quantity,
            'attributes' => array(),
            'associatedModel' => 'App\Product'
        ));

        return back()->with('success', "$product->product_name đã được thêm vào giỏ hàng");
    }
    public function cart()
    {
        $params = [
            "title" => "shopping cart checkout",
        ];
        return view('cart.checkout')->with($params);
    }
    public function clear()
    {
        Cart::session(Auth::user()->id)->clear();
        return back()->with('success', "xóa giỏ hàng thành công");
    }
    public function update(Request $request)
    {
        $product = Product::find($request->productId);

        // Cart::add($product->STT, $product->product_name, $request->quantity, array());
        // dd($request->productId);


        Cart::session(Auth::user()->id)->update($request->productId, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity
            ),
        ));

        return back()->with('success', "sản phẩm đã được cập nhật");
    }
    public function remove(Request $request)
    {
        // $product = Product::find($request->productId);

        // Cart::add($product->STT, $product->product_name, $request->quantity, array());
        // dd($request->productId);
        Cart::session(Auth::user()->id)->remove($request->productId);

        return back()->with('success', "sản phẩm đã được xóa");
    }


    public function view()
    {
        $params = [
            "title" => "shopping cart view",
        ];
        return view('cart.view')->with($params);
    }

    public function checkout(Request $request)
    {
        // dd(Cart::session(Auth::user()->id)->getTotal());
        $oderdetail = array();
        if (Auth::user()) {
            $check_customer = Customer::where('email', Auth::user()->email)->first();
            // Check if user current have made a previous purchase
            if ($check_customer == true) {
                $customer = Customer::findOrFail($check_customer->customer_id);
                $customer->name = Auth::user()->name;
                $customer->email = Auth::user()->email;
                $customer->address = Auth::user()->address;
                $customer->city = Auth::user()->city;
                $customer->phone = Auth::user()->phone;
                $customer->save();
            } else {
                $customer = new Customer();
                // $customer->username = Auth::user()->username;
                $customer->name = Auth::user()->name;
                $customer->email = Auth::user()->email;
                $customer->address = Auth::user()->address;
                $customer->city = Auth::user()->city;
                $customer->phone = Auth::user()->phone;
                $customer->save();
            }

            $data = $request->all();
            $data["id_customer"] = $customer->customer_id;
            $data["date_order"] = date('Y-m-d H:i:s');
            // $data["requiredDate"] = date('Y-m-d H:i:s');
            // $data["shippedDate"] = date('Y-m-d H:i:s');
            // $data["comment"] = date('Y-m-d H:i:s');
            $data["total"] = Cart::session(Auth::user()->id)->getTotal();
            //tổng đơn hàng
            // $data["payment"] = $request->payment;
            $bills = Order::create($data);
            $id_order = $bills->id;

            foreach (Cart::session(Auth::user()->id)->getContent() as $key => $cart) {
                $bill_detail["id_bill"] = $id_order;
                $bill_detail["id_product"] = $cart->id;
                $bill_detail["name_products"] = $cart->name;
                // $bill_detail["size"] = $cart->options->namesize;
                $bill_detail["quantity"] = $cart->quantity;
                $bill_detail["unit_price"] = $cart->price;
                $bill_detail["total_price"] = $cart->quantity * $cart->price;

                Orderdetail::create($bill_detail);
                Cart::remove($cart->id);
            }

            return redirect()->route('home')->with('success', "Bạn đã tạo đơn hàng thành công - mã đơn hàng của bạn là: $bills->id");
        } else {
            return redirect()->route('login');
        }
    }
}

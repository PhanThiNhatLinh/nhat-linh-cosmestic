<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\typeproduct;
use App\brand;
use App\Http\Requests\ProductRequest;
use Carbon\Carbon;




class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            $products = Product::all();
            return view('products.index', ['products' => $products]);
        }
        return redirect('/login');
    }
    public function showpromotion()
    {
        $productpromotions = Product::all();
        // dd($productpromotions);

        return view('productpromotions.index', ['productpromotions' => $productpromotions]);
    }
    public function showdeletedproducts()
    {
        $deletedproducts = Product::onlyTrashed()->get();
        return view('deletedproducts.index', ['deletedproducts' => $deletedproducts]);
    }


    public function restoreDelete(Request $request)
    {

        // dd($request->all());
        $deletedproducts = Product::onlyTrashed()->find($request->id);

        $deletedproducts->restore();

        return redirect('/products');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeproducts = Typeproduct::all();
        $brands = Brand::all();
        return view('products.create', ['typeproducts' => $typeproducts, 'brands' => $brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate(
            $request,
            [
                'product_code' => 'required',
                'product_name' => 'required|min:5|max:200',
                'price' => 'required|numeric|min:1000',
                'promotion' => 'required|numeric|lt:price',
                // 'hot' => 'required',
                'enstock' => 'required',
                'description' => 'required|min:5',
                'image_product' => 'image | mimes:jpg,jpeg,png',
            ],
            [
                'required' => ':attribute yêu cầu điền nội dung',
                'min' => ':attribute Không được nhỏ hơn :min kí tự',
                'max' => ':attribute Không được lớn hơn :max',
                'unique' => ':attribute Không được trùng lặp lại ',
                'lt' => ':attribute Không được lớn hơn giá sản phẩm'
            ],
            [
                'product_code' => 'Mã sản phẩm',
                'product_name' => 'Tên sản phẩm',
                'price' => 'Giá sản phẩm',
                'enstock' => 'Lượng sản phẩm trong kho',
                'description' => 'Mô tả sản phẩm',
                'image' => 'Hình ảnh',
                'promotion' => ' Giá Khuyến mãi',
                'hot' => 'Sản phẩm nổi bật',
            ]
        );
        $products = new Product();
        $products->product_code = request('product_code');
        $products->product_name = request('product_name');
        $products->product_type_id = request('product_type_id');
        $products->brand_id = request('brand_id');
        $products->price = request('price');
        $products->promotion = request('promotion');
        // $products->hot = request('hot') ? true : false;
        $products->enstock = request('enstock');
        $products->description = request('description');
        if (request('image_product')) {
            $products->image = base64_encode(file_get_contents($request->file('image_product')->getRealPath()));
        }
        $products->user_id = Auth::user()->id;
        // $article->user_id = Auth::user()->id; Truy vấn thông tin người đăng nhập với id
        $products->save();

        return back()->with('success', 'Tạo mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.detail', compact('product'));
        // admin
    }
    public function showproductweb($id)
    {
        // dd($id);
        $product = Product::findOrFail($id);

        return view('products.detailweb', compact('product'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {

        $typeproducts = Typeproduct::all();
        $brands = Brand::all();
        return view('products.edit', ['product' => $product, 'typeproducts' => $typeproducts, 'brands' => $brands]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        $this->validate(
            $request,
            [
                'product_code' => 'required',
                'product_name' => 'required|min:5|max:200',
                'price' => 'required|numeric|min:1000',
                'promotion' => 'required|numeric|lt:price',
                'enstock' => 'required',
                'description' => 'required|min:5|max:200',
                'image' => 'image | mimes:jpg,hpeg,png'
            ],
            [
                'required' => ':attribute yêu cầu điền nội dung',
                'min' => ':attribute Không được nhỏ hơn :min',
                'max' => ':attribute Không được lớn hơn :max',
                'lt' => ':attribute Không được lớn hơn giá sản phẩm'
            ],
            [
                'product_code' => 'Mã sản phẩm',
                'product_name' => 'Tên sản phẩm',
                'price' => 'Giá sản phẩm',
                'enstock' => 'Lượng sản phẩm trong kho',
                'promotion' => 'Giá Khuyến Mãi',
                'description' => 'Mô tả sản phẩm'
            ]
        );
        $product->product_code = request('product_code');
        $product->product_name = request('product_name');
        $product->product_type_id = request('product_type_id');
        $product->brand_id = request('brand_id');
        $product->price = request('price');
        $product->promotion = request('promotion');
        // $product->hot = request('hot');
        $product->enstock = request('enstock');
        $product->description = request('description');
        // dd($request->file('image_product_update'));
        if ($request->file('image_product_update')) {
            $product->image = base64_encode(file_get_contents($request->file('image_product_update')->getRealPath()));
        }
        $product->user_id = Auth::user()->id;
        // $article->user_id = Auth::user()->id; Truy vấn thông tin người đăng nhập với id
        $product->save();

        return redirect('/products')->with('success', 'Chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        $product->delete();

        return redirect('/products')->with('success', 'Xóa thành công');
    }
    public function hotproduct(product $product)
    {
        // dd($product);
        $product->hot = !$product->hot;
        $product->save();

        return redirect()->back();
        // redirect()->back(): Quay lại trang ,giống nút back của chrome, quay lại 1 lần
        // Khi mình bấm nút submit, nó sẽ qua trang mới, nhưng khi redirect()->back() thì nó trở về trang lúc nãy
    }
    public function showhotproduct()
    {
        // $shows = product::where('hot', '<>', false)->groupBy('product_type_id')
        //     ->having('product_type_id', '=', 1)
        //     ->get();

        $shows = DB::table('products')
            ->select('product_type_id')
            ->where('hot', '=', 1)
            ->groupBy('product_type_id')
            ->having('product_type_id', '=', 'NRT002')
            ->get();
        // DB::raw('product_type_id, count(*) as product_count')
        return view('productpromotions.shows', ['shows' => $shows]);
    }
    public function showNewProducts()
    {
        $newproducts = DB::table('products')->whereMonth('created_at', '=', Carbon::now()->month)->get();
        // $newproducts = product::whereMonth('created_at', '=', Carbon::now()->month)->get();
        return view('newproducts.newproducts', ['newproducts' => $newproducts]);
    }
    public function search(Request $request)
    {
        $value = $request->input('search');
        // lấy request ở ô input;
        $search = Product::where('product_name', 'LIKE', '%' . $value . '%')->limit(25)->get();
        if (count($search) >= 1) {
            return view('products.search', ['search' => $search]);
        } else {
            return redirect('/')->with('success', 'Không có kết quả');
        }
    }
    public function contact()
    {
        return view('products.contact');
    }
}

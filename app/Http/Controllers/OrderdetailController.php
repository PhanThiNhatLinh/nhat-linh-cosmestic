<?php

namespace App\Http\Controllers;

use App\Orderdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            $orderdetails = Orderdetail::all();
            return view('orderdetails.index', ['orderdetails' => $orderdetails]);
        }
        return redirect('/login');
    }
    public function status(Orderdetail $orderdetail)
    {
        // dd($product);
        $orderdetail->status = !$orderdetail->status;
        $orderdetail->save();

        return redirect()->back();
        // return redirect('/customers')->with('success', 'Xóa thành công');
        // redirect()->back(): Quay lại trang ,giống nút back của chrome, quay lại 1 lần
        // Khi mình bấm nút submit, nó sẽ qua trang mới, nhưng khi redirect()->back() thì nó trở về trang lúc nãy
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

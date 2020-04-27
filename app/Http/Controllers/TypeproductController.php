<?php

namespace App\Http\Controllers;

use App\typeproduct;
use App\Groupproduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TypeproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            $typeproducts = Typeproduct::all();
            return view('typeproducts.index', ['typeproducts' => $typeproducts]);
        }
        return redirect('/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groupproducts = Groupproduct::all();
        return view('typeproducts.create', ['groupproducts' => $groupproducts]);
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
                'product_type_id' => 'required|min:5|max:20|unique:typeproducts',
                'product_type_name' => 'required|min:5|max:200',
                'description' => 'required|min:5|max:255',
            ],
            [
                'required' => ':attribute yêu cầu điền nội dung',
                'min' => ':attribute Không được nhỏ hơn :min kí tự',
                'max' => ':attribute Không được lớn hơn :max',
                'unique'  => ':attribute Không được lặp',
            ],
            [
                'product_type_id' => 'Mã loại sản phẩm',
                'product_type_name' => 'Tên loại sản phẩm',
                'description' => 'Mô tả loại sản phẩm'
            ]
        );
        $typeproduct = new typeproduct();
        $typeproduct->product_type_id = request('product_type_id');
        $typeproduct->product_type_name = request('product_type_name');
        $typeproduct->description = request('description');
        $typeproduct->group_code = request('group_code');
        $typeproduct->user_id = Auth::user()->id;
        // $article->user_id = Auth::user()->id; Truy vấn thông tin người đăng nhập với id
        $typeproduct->save();

        return redirect('/typeproducts')->with('success', 'Tạo mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\typeproduct  $typeproduct
     * @return \Illuminate\Http\Response
     */
    public function show(typeproduct $typeproduct)
    {
        // dd($typeproduct);
        return view('typeproducts.detail', ['typeproduct' => $typeproduct]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\typeproduct  $typeproduct
     * @return \Illuminate\Http\Response
     */
    public function edit(typeproduct $typeproduct)
    {
        $groupproducts = Groupproduct::all();
        return view('typeproducts.edit', ['typeproduct' => $typeproduct, 'groupproducts' => $groupproducts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\typeproduct  $typeproduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, typeproduct $typeproduct)
    {
        $this->validate(
            $request,
            [
                'product_type_id' => 'required|min:5|max:20|unique',
                'product_type_name' => 'required|min:5|max:200',
                'description' => 'required|min:5|max:255',
            ],
            [
                'required' => ':attribute yêu cầu điền nội dung',
                'min' => ':attribute Không được nhỏ hơn :min kí tự',
                'max' => ':attribute Không được lớn hơn :max',
                'unique'  => ':attribute Không được lặp',
            ],
            [
                'product_type_id' => 'Mã loại sản phẩm',
                'product_type_name' => 'Tên loại sản phẩm',
                'description' => 'Mô tả loại sản phẩm'
            ]
        );

        $typeproduct->product_type_id = request('product_type_id');
        $typeproduct->product_type_name = request('product_type_name');
        $typeproduct->description = request('description');
        $typeproduct->group_code = request('group_code');
        $typeproduct->save();

        return redirect('/typeproducts')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\typeproduct  $typeproduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(typeproduct $typeproduct)
    {
        $typeproduct->delete();

        return redirect('/typeproducts')->with('success', 'Xóa thành công');
    }
}

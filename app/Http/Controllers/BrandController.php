<?php

namespace App\Http\Controllers;

use App\brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            $brands = Brand::all();
            return view('brands.index', ['brands' => $brands]);
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
        return view('brands.create');
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
                'brand_id' => 'required|min:1|max:20',
                'brand_name' => 'required|min:1|max:200',
                'country' => 'required|min:1|max:20',
                'description' => 'required|min:5|max:255',
            ],
            [
                'required' => ':attribute yêu cầu điền nội dung',
                'min' => ':attribute Không được nhỏ hơn :min kí tự',
                'max' => ':attribute Không được lớn hơn :max',
            ],
            [
                'brand_id' => 'Mã thương hiệu',
                'brand_name' => 'Tên thương hiệu',
                'country' => 'Nơi ra đời',
                'description' => 'Mô tả',
            ]
        );
        $brand = new Brand();
        $brand->brand_id = request('brand_id');
        $brand->brand_name = request('brand_name');
        $brand->country = request('country');
        $brand->description = request('description');
        $brand->image = base64_encode(file_get_contents($request->file('image_post')->getRealPath()));
        $brand->user_id = Auth::user()->id;
        // $article->user_id = Auth::user()->id; Truy vấn thông tin người đăng nhập với id
        $brand->save();

        return redirect('/brands')->with('success', 'Tạo mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand = Brand::findOrFail($id);
        return view('brands.detail', compact('brand')); //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(brand $brand)
    {
        return view('brands.edit', ['brand' => $brand]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, brand $brand)
    {
        $this->validate(
            $request,
            [
                'brand_id' => 'required|min:1|max:20',
                'brand_name' => 'required|min:1|max:200',
                'country' => 'required|min:1|max:20',
                'description' => 'required|min:5|max:255',
            ],
            [
                'required' => ':attribute yêu cầu điền nội dung',
                'min' => ':attribute Không được nhỏ hơn :min kí tự',
                'max' => ':attribute Không được lớn hơn :max',
            ],
            [
                'brand_id' => 'Mã thương hiệu',
                'brand_name' => 'Tên thương hiệu',
                'country' => 'Nơi ra đời',
                'description' => 'Mô tả',
            ]
        );
        $brand->brand_id = request('brand_id');
        $brand->brand_name = request('brand_name');
        $brand->country = request('country');
        $brand->description = request('description');
        $brand->image = base64_encode(file_get_contents($request->file('image_update')->getRealPath()));
        $brand->user_id = Auth::user()->id;
        // $article->user_id = Auth::user()->id; Truy vấn thông tin người đăng nhập với id
        $brand->save();

        return redirect('/brands')->with('success', 'Chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(brand $brand)
    {
        $brand->delete();

        return redirect('/brands')->with('success', 'Xóa thành công');
    }
}

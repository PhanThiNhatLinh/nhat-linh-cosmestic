<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            $blogs = Blog::all();
            return view('blogs.index', ['blogs' => $blogs]);
        }
        return redirect('/login');
    }
    public function listblog()
    {

        $listblog = Blog::all();
        return view('blogs.listblog', ['listblog' => $listblog]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
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
                'name' => 'required',
                'content' => 'required|min:5',
                'image' => 'image | mimes:jpg,jpeg,png',
            ],
            [
                'required' => ':attribute yêu cầu điền nội dung',
                'min' => ':attribute Không được nhỏ hơn :min kí tự',
            ],
            [
                'name' => 'Tên bài viết',
                'content' => 'Nội dung bài viết',
                'image' => 'Hình ảnh bài viết',
            ]
        );
        $blogs = new Blog();
        $blogs->name = request('name');
        $blogs->content = request('content');
        if (request('image')) {
            $blogs->image = base64_encode(file_get_contents($request->file('image')->getRealPath()));
        }
        $blogs->user_id = Auth::user()->id;
        // $article->user_id = Auth::user()->id; Truy vấn thông tin người đăng nhập với id
        $blogs->save();

        return redirect('/blogs')->with('success', 'Tạo bài viết mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.detail', compact('blog'));
    }
    public function showdetailblog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.detailweb', compact('blog'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'content' => 'required|min:5',
                'image' => 'image | mimes:jpg,jpeg,png',
            ],
            [
                'required' => ':attribute yêu cầu điền nội dung',
                'min' => ':attribute Không được nhỏ hơn :min kí tự',
            ],
            [
                'name' => 'Tên bài viết',
                'content' => 'Nội dung bài viết',
                'image' => 'Hình ảnh bài viết',
            ]
        );
        $blog->name = request('name');
        $blog->content = request('content');
        if ($request->file('image_update')) {
            $blog->image = base64_encode(file_get_contents($request->file('image_update')->getRealPath()));
        }
        $blog->user_id = Auth::user()->id;
        // $article->user_id = Auth::user()->id; Truy vấn thông tin người đăng nhập với id
        $blog->save();

        return redirect('/blogs')->with('success', 'Chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog $blog)
    {
        $blog->delete();

        return redirect('/blogs')->with('success', 'Xóa thành công');
    }
}

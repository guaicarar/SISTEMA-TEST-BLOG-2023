<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBlog = Blog::all();
        $user = User::get(['type']);
        return view('Blogs.index', compact('dataBlog','user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        Blog::create($data);
        return redirect()->route('blog.index');
    }

    public function searchDate(Request $request)
    {

        $date = $request->except('_token');
        //DB::table('fichas')->whereDate('created_at', $fecha)->get();
        $dataBlog = Blog::where('date', $date)->get();
        return view('Blogs.index', compact('dataBlog'));
        
    }
    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('Blogs.edit' , compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->update($request->except('_token','_method'));

        return redirect()->route('blog.index')
            ->with('success', ' Blog Actualizado Satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog = Blog::find($blog->id);
        $blog->delete($blog);
        return redirect()->route('blog.index')
            ->with('success', 'Blog Eliminado Satisfactoriamente');
    }
}

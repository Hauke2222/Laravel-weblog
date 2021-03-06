<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogPost;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use Auth;

class BlogItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user() && Auth::user()->subscription_status) {
            return view('blogs.index', ['blogItemsFromDatabase' => Blog::orderBy('date', 'desc')->get()]);
        } else {
            return view('blogs.index', ['blogItemsFromDatabase' => Blog::orderBy('date', 'desc')
            ->where('premium_content_status', '0')
            ->get()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blogs.create', ['blogCategoriesFromDatabase' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPost $request)
    {
        //
        $validated = $request->validated();
        $validated['premium_content_status'] = $request->has('premium_content_status');
        if ($request->has('image')){
            $validated['image'] = $request->file('image')->store('public/images');
        }
        Blog::create($validated)->categories()->sync($request->categories);

        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
        return view('blogs.show', ['blog' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blogs.edit',
        [
            'blog' => $blog,
            'blogCategoriesFromDatabase' => Category::all(),
            'selectedCategories' => $blog->categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBlogPost $request, Blog $blog)
    {
        //
        $validated = $request->validated();
        $validated['premium_content_status'] = $request->has('premium_content_status');
        if ($request->has('image')){
            $validated['image'] = $request->file('image')->store('public/images');
        }
        $blog->update($validated);
        $blog->categories()->sync($request->categories);

        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
        $blog->delete();
        return redirect()->route('blogs.index');
    }
}

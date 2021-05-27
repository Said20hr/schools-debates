<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class blogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('dashboard.blog.list',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image' => ['required','image','mimes:jpeg,png,jpg,gif,svg|max:512'],
        ]);
        $blog =  Blog::create([
            'title' => $request->title,
            'author' => $request->author,
            'text' => $request->description,
            'image' => $this->uploadImagesArray($request->image,'blogs/')
        ]);
        return redirect()->route('news.index')->with('success_message','تمت اضافة المقالة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('dashboard.blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('dashboard.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image' => ['required','image','mimes:jpeg,png,jpg,gif,svg|max:512'],
        ]);
        $blog = Blog::find($id);
        $blog->title = $request->input('title');
        $blog->author = $request->input('author');
        $blog->text = $request->input('description');
        //case
        if ($request->image)
        {
            $blog->image = $this->uploadImagesArray($request->image, 'blogs/');
        }
        $blog->save();
        $request->session()->flash('success_message', 'لقد تم تعديل المقالة بنجاح');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Blog = Blog::find($id);
        if($Blog){
            $Blog->delete();
        }
        return redirect()->route('news.index')->with('error_message','تم حذف المقالة بنجاح');
    }

    /**
     * @param $image
     * @param string $directory
     * @return string
     */
    private function uploadImagesArray( $image, string $directory)
    {
        if ($image) {
            $extension = $image->getClientOriginalName();
            $name = time() . '.' . $extension;
            $image->move('storage/' . $directory . '/', $name);
            return $name;
        }
    }
}

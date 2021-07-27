<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(){
        $categories = Category::select('id', 'categoryName')->get();
        $blogs = Blog::orderBy('id', 'desc')->with(['cat', 'user'])->limit(6)->get(['id','title','user_id','post_excerpt','slug','featuredImage']);
        return view('home')->with(['categories'=>$categories, 'blogs'=>$blogs]);
    }

    public function blogSingle(Request $request, $slug){
        $categories = Category::select('id', 'categoryName')->get();
        $blog = Blog::where('slug', $slug)->with(['cat', 'tag', 'user'])->first(['id','title','user_id','featuredImage', 'post']);
        $category_ids = [];
        foreach ($blog->cat as $cat) {
            array_push($category_ids, $cat->id);
        }
        $relatedBlogs = Blog::with('user')->where('id', '!=', $blog->id)->whereHas('cat', function($q) use($category_ids){
            $q->whereIn('category_id', $category_ids);
        })->limit(5)->orderBy('id', 'desc')->get(['id','title','user_id','slug','featuredImage']);
        return view('blogsingle')->with(['blog'=>$blog, 'relatedBlogs'=>$relatedBlogs]);
    }

    public function compose(View $view)
    {
        $cat = Category::select('id', 'categoryName')->get(['id', 'categoryName']);
        $view->with('cat', $cat);
    }

    public function categoryIndex(Request $request, $categoryName, $id){
        $blogs = Blog::with('user')->whereHas('cat', function($q) use($id){
            $q->where('category_id', $id);
        })->orderBy('id', 'desc')->select('id','title','user_id','slug','featuredImage')->paginate(1);
        return view('category')->with(['categoryName'=>$categoryName, 'blogs'=>$blogs]);
    }   
    public function tagIndex(Request $request, $tagName, $id){
        $blogs = Blog::with('user')->whereHas('tag', function($q) use($id){
            $q->where('tag_id', $id);
        })->orderBy('id', 'desc')->select('id','title','user_id','slug','featuredImage')->paginate(1);
        return view('tag')->with(['tagName'=>$tagName, 'blogs'=>$blogs]);
    }

    public function allBlogs(){
        $blogs = Blog::orderBy('id', 'desc')->with(['cat', 'user'])->select('id','title','user_id','post_excerpt','slug','featuredImage')->paginate(1);
        return view('blogs')->with(['blogs'=>$blogs]);
    }
}

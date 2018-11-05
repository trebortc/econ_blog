<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Tag;
use App\Post;

class PageController extends Controller
{

    public function inicio(){
        return view('web.inicio');
    }

    public function financiamiento(){
        return view('web.financiamiento');
    }

    public function noticias(){
        return view('web.noticias');
    }

    public function proyectos(){
        return view('web.proyectos');
    }

    public function quienesomos(){
        return view('web.quienesomos');
    }

    public function contactos(){
        return view('web.contactos');
    }

    public function blog(){
    	$posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

    	return view('web.posts', compact('posts'));
    }

    public function category($slug){
        $category = Category::where('slug', $slug)->pluck('id')->first();

        $posts = Post::where('category_id', $category)
            ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(10);

        return view('web.posts', compact('posts'));
    }

    public function tag($slug){ 
        $posts = Post::whereHas('tags', function($query) use ($slug) {
            $query->where('slug', $slug);
        })
        ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

        return view('web.posts', compact('posts'));
    }

    public function post($slug){
    	$post = Post::where('slug', $slug)->first();

    	return view('web.post', compact('post'));
    }

}

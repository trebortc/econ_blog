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
        $posts_noticias = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        $posts_proyectos = Post::orderBy('id', 'DESC')->where('status', 'DRAFT')->paginate(3);
        return view('web.inicio', compact('posts_noticias','posts_proyectos'));
    }

    public function financiamiento(){
        $posts_noticias = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        $posts_proyectos = Post::orderBy('id', 'DESC')->where('status', 'DRAFT')->paginate(3);
        return view('web.financiamiento', compact('posts_noticias','posts_proyectos'));
    }

    public function noticias(){
        $posts_noticias = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        $posts_proyectos = Post::orderBy('id', 'DESC')->where('status', 'DRAFT')->paginate(3);
        return view('web.noticias', compact('posts_noticias','posts_proyectos'));
    }

    public function proyectos(){
        $posts_noticias = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        $posts_proyectos = Post::orderBy('id', 'DESC')->where('status', 'DRAFT')->paginate(3);
        return view('web.proyectos', compact('posts_noticias','posts_proyectos'));
    }

    public function quienesomos(){
        $posts_noticias = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        $posts_proyectos = Post::orderBy('id', 'DESC')->where('status', 'DRAFT')->paginate(3);
        return view('web.quienesomos', compact('posts_noticias','posts_proyectos'));
    }

    public function contactos(){
        $posts_noticias = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        $posts_proyectos = Post::orderBy('id', 'DESC')->where('status', 'DRAFT')->paginate(3);
        return view('web.contactos', compact('posts_noticias','posts_proyectos'));
    }

    public function blog(){
    	$posts = Post::orderBy('id', 'DESC')->paginate(3);
    	return view('web.posts', compact('posts'));
    }

    public function category($slug){
        $category = Category::where('slug', $slug)->pluck('id')->first();

        $posts = Post::where('category_id', $category)
            ->orderBy('id', 'DESC')->paginate(10);

        return view('web.posts', compact('posts'));
    }

    public function tag($slug){ 
        $posts = Post::whereHas('tags', function($query) use ($slug) {
            $query->where('slug', $slug);
        })
        ->orderBy('id', 'DESC')->paginate(3);

        return view('web.posts', compact('posts'));
    }

    public function post($slug){
    	$post = Post::where('slug', $slug)->first();

    	return view('web.post', compact('post'));
    }

}

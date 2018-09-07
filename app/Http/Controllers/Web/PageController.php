<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Event;
use App\Grandma;
use App\CAtegory;

class PageController extends Controller
{

    public function news() {

    	$posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(5);

    	return view('web.posts', compact('posts'));
    }

    public function post($slug) {

    	$post = Post::where('slug', $slug)->first();

    	return view('web.post', compact('post'));
    }

    public function events() {
    	$events = Event::orderBy('id', 'DESC')->paginate(3);

    	return view('web.events', compact('events'));
    }

    public function event($slug) {

        $event = Event::where('slug', $slug)->first();

        return view('web.event', compact('event'));
    }

    public function booking($slug) {

        $event = Event::where('slug', $slug)->first();

        return view('web.booking', compact('event'));
    }

    public function category($slug) {
        $category = Category::where('slug',$slug)->pluck('id')->first();
        $posts = Post::where('category_id',$category)->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(5);

        return view('web.posts', compact('posts'));
    }


    public function tag($slug) {
        $posts = Post::whereHas('tags', function($query) use($slug){
            $query->where('slug',$slug);
        })->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(5);

        return view('web.posts', compact('posts'));

    }

    public function term() {

      return view('web.term');
    }

}

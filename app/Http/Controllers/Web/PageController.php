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

    	$posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);

    	return view('web.posts', compact('posts'));
    }

    public function post($slug) {

    	$post = Post::where('slug', $slug)->first();

    	return view('web.post', compact('post'));
    }

    public function postdetails($slug) {

    	$post = Post::where('slug', $slug)->first();

    	return view('web.postdetails', compact('post'));
    }

    public function events() {
    	$events = Event::orderBy('id', 'DESC')->paginate(3);

    	return view('web.events', compact('events'));
    }

    //Newspage
    public function grandmaslist(){
      $grandmas = Grandma::orderBy('id', 'DESC')->get();

      return view('web.grandmaslist',compact('grandmas'));
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

    public function about() {

      return view('web.about');
    }

    public function aboutdetail() {

      return view('web.aboutdetail');
    }

    public function contacts() {

      return view('web.contacts');
    }

    //GrandmaDetails
    public function grandmadetails($slug){
      $grandma = Grandma::where('slug', $slug)->first();
      return view('web.grandmadetails',compact('grandma'));
    }

    //GrandmaEventList
    public function grandmaeventlist($slug){
      $grandma = Grandma::where('slug', $slug)->first();
      $events = Event::where('grandma_id',$grandma->id)->orderBy('id', 'DESC')->paginate(5);

      return view('web.grandmaeventslist',compact('grandma','events'));

    }

}

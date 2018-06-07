<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Event;
use App\Grandma;

class PageController extends Controller
{
   
    public function news() {

    	$posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

    	return view('web.posts', compact('posts'));
    }

    public function post($slug) {

    	$post = Post::where('slug', $slug)->first();

    	return view('web.post', compact('post'));
    }

    public function events() {
    	$events = Event::orderBy('id', 'DESC')->paginate(3);
        //$events = \DB::table('events')->join('grandmas', 'grandmas.id', '=', 'events.grandma_id')
        //        ->select('events.id as name', 'events.name', 'events.slug', 'events.data_time', 'events.local', 'events.excerpt', 'events.body', 'events.file', 'grandmas.name as grandma')->paginate(3);
              
    	return view('web.events', compact('events'));
    }

    public function event($slug) {

        $event = Event::where('slug', $slug)->first();

        return view('web.event', compact('event'));
    }
}

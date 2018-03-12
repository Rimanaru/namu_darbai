<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class pageController extends Controller
{
      
    public function testAction(Request $request, $ids = null){
      $posts = Post::where('category_id', 1)
->orderBy('id', 'desc')
->get();
        $posts = Post::all();
        return view('page');

    
   }
   

   public function store(Request $request){
    $data = $request->all();
   
    $post = new Post;
    $post->content = $data['content'];
    $post->author = $data['author'];
    $post->category_id = 0;
    $post->save();
    return redirect(route('TestAction'));

}
    }


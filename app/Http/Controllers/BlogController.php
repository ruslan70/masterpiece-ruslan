<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Photo;
use Illuminate\Support\Facades\Auth; 


class BlogController extends Controller
{
    //
    public function showAll() {
         $posts = Post::all()->sortByDesc('created_at');

         return view('home', ['posts' => $posts]);
    }

    

    public function postDetails($id) {
        $posts= Post::find($id);

        $photoId=1;
        $photo = Photo::findOrFail($photoId);
        
        $photos=Photo::where('postId', $id)->get();
        
        return view('postDetail', ['post' => $posts,'photos' => $photos]);

        
        
        
    


        
    }

    public function create(Request $request) {
 

        $post = new Post();
        // we set the properties title and content
        // with the values that we got in the post-request
        $post->title = $request->title;
        $post->author = Auth::user()->name;
        $post->content = $request->content;



        // we save the new book-Object in the books
        // table in our database
        $post->save();

        // at the end we make a redirect to the url /posts
        return redirect('/');

    }


    public function details($id) {
 

        $post = Post::findOrFail($id);
        
        return view('postDetail', ['post' => $post]);
    }


    public function delete($id) {
 

        $result = Post::findOrFail($id)->delete();

        // after that we redirect to the message list again
        return redirect('/postDetail');
    } 

    public function update(Request $request, $id) {
 
        $request->validate([
            'title' => 'required',
            // 'author' => 'required',
            'content' => 'required'
        ]);

        $data = Post::findOrFail($id);
        $data->title = $request->title;
        $data->author = $request->author;
        $data->content = $request->content;
        $data->save();

        return redirect('/postDetail');
    }
}
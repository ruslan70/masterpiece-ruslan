<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    function addComment(Request $request) {
  
        // load post with hidden field post_id
        $post = Post::find($request->post_id);
  
        // create a new comment object
        $comment = new Comment();
        // set attributes for the comment
        $comment->author = Auth::user()->name;
        $comment->comment = $request->comment;
        $comment->post_id = $request->post_id;        
        // save the new comment in the existing post's comments
        $post->comments()->save($comment);
  
        // redirect to the same post details page with the post_id
        // from the form
        return redirect('/postdetail/' . $request->post_id);          
    }  
    
    // public function deleteComment($id) {
 
    //         if($comment_id->author = Auth::user()->name){
    //             $result = Comment::findOrFail($id)->delete();
    //         }
    //     // $result = Comment::findOrFail($id)->delete();

    //     // after that we redirect to the message list again
    //     return redirect('/postDetail');
    // } 


    // public function destroy(Request $request)
    // {
    //     if($request->has('delete')){
    //     // if (auth()->user()->is($comment->user)) {
    //     //     $comment->delete();
    //     // }
    
    //     return redirect('/postDetail');}
    // }

    // public function deleteComment($id) {
    //     if (Auth::user() && (Auth::user()->id == $comment->author = Auth::user()->name)) {
    //         comment::where('id',$id)->delete();
    //         return back();
    //     }else
    //     return 'you dont have permission';
    // }

    public function delete($id) {
        
        // if($comment->author = Auth::user()->name){
            
            $comment = Comment::findOrFail($id);
            $comment->delete();
    
            
            return back();  
        // }else
        // return 'You dont have permission';

    } 


 }
 
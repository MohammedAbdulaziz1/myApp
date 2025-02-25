<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

use function Pest\Laravel\post;

class PostController extends Controller
{
    public function index(){
        

        $postFromDB= Post::all();
     

        // $allPosts=[
        //     ['id' => 1,'title' => 'php','posted_by' => 'ahmed','created_at' => '2024-10-07 06:30:30'],
        //     ['id' => 2,'title' => 'html','posted_by' => 'khaled','created_at' => '2023-10-07 06:30:30'],
        //     ['id' => 3,'title' => 'javascript','posted_by' => 'mohammed','created_at' => '2022-10-07 06:30:30'],
        //     ['id' => 4,'title' => 'css','posted_by' => 'omar','created_at' => '2021-10-07 06:30:30'],

        // ];
        return view('posts.index', ['posts' => $postFromDB]);
    }

    public function show(Post $post){ //(Post)->model post , (post)->{/post}in route
       
    //    $singlePostsFromDB = Post::findOrFail($postId); //model object

    // $singlePostsFromDB = Post::where('id',$postId)->first(); //model object
    
    // $singlePostsFromDB = Post::where('id', $postId)->get(); //collection object

        // dd(
        //     Post::where('title','php')->first()  //select * from posts where title = 'php' limit 1;
        // );

        // dd(
        //     Post::where('title','php')->get()  //select * from posts where title = 'php';
        // );


    //    if(is_null($singlePostsFromDB)){
    //         return to_route('posts.index');
    //    }
       
       
        return view('posts.show',['post'=> $post]);
    }

    public function create(){
        $users = User::all();
        return view('posts.create',['ussers'=>$users]);
    }

    public function store(){

        // dd(request()->title,request()->all());

       $data = request()->all();

       $title = request()->title;
       $description = request()->description;
       $postCreator = request()->post_creator;

    //    dd($data, $title,$description,$postCreator);

        // $post = new Post;

        // $post->title = $title;
        // $post->description = $description;

        // $post->save();

        Post::create([
            'title' => $title,
            'description' => $description,
            'user_id' => $postCreator,
        ]);
       
        return to_route('posts.index');
    }

    public function edit(Post $post){   //Post $post => add the data from DB
       
        $users = User::all();

        return view('posts.edit',['ussers'=> $users , 'posst'=>$post]);
    }

    public function update($postId){

        // dd(request()->title,request()->all());

       $title = request()->title;
       $description = request()->description;
       $postCreator = request()->post_creator;

    //    dd($title,$description,$postCreator);

               $singlePostsFromDB = Post::findOrFail($postId); //select post

               $singlePostsFromDB->update([   //update post
                    'title' => $title,
                    'description' => $description,
                    'user_id' => $postCreator,
               ]);
        
       return to_route('posts.show',$postId);
    }

    public function destory($postId){
      
        $post = Post::findOrFail($postId);   //select post
        $post->delete();    //delete post
        
        return to_route('posts.index',$postId); 
    }
}
// in create Fun we changed the option from static value to dynamic, and in store Fun we added create post ,
// in edit Fun we added the data and updated the post , in destory fun we selected the post and then deleted it


<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
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
        return view('posts.create');
    }

    public function store(){

        // dd(request()->title,request()->all());

       $data = request()->all();

       $title = request()->title;
       $description = request()->description;
       $postCreator = request()->post_creator;

    //    dd($data, $title,$description,$postCreator);


       
        return to_route('posts.index');
    }

    public function edit(){
        return view('posts.edit');
    }

    public function update(){
          
        // dd(request()->title,request()->all());

       $title = request()->title;
       $description = request()->description;
       $postCreator = request()->post_creator;

    //    dd($title,$description,$postCreator);
    
       return to_route('posts.show',1);
    }

    public function destory(){
        return to_route('posts.index');
    }
}


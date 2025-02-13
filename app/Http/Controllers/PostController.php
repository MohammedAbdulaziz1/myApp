<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        
        $allPosts=[
            ['id' => 1,'title' => 'php','posted_by' => 'ahmed','created_at' => '2024-10-07 06:30:30'],
            ['id' => 2,'title' => 'html','posted_by' => 'khaled','created_at' => '2023-10-07 06:30:30'],
            ['id' => 3,'title' => 'javascript','posted_by' => 'mohammed','created_at' => '2022-10-07 06:30:30'],
            ['id' => 4,'title' => 'css','posted_by' => 'omar','created_at' => '2021-10-07 06:30:30'],

        ];
        return view('posts.index', ['posts' => $allPosts]);
    }

    public function show(){
       
       $singlePosts=[
        'id' => 1,'title' => 'PHP','Discription' => 'this is discription','posted_by' => 'ahmed','created_at' => '2024-10-07 06:30:30',

       ];
       
       
        return view('posts.show',['post'=> $singlePosts]);
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


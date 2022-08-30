<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

    // \DB::enableQueryLog();  // ロギングを有効化する
        $wehere = array();
        $orWhere = array();
        if($search !== null){
            $wehere = [['author', 'like', "%{$search}%"]];
            $orWhere = [['message', 'like', "%{$search}%"]];
        }

        $posts = Post::where($wehere)->orWhere($orWhere)->orderByDesc('post_date')->paginate(5);
    // dd(\DB::getQueryLog()); // ログを出力する
 
        return view('posts.index', ['posts' => $posts, 'search' => $search]);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $validated = $request->validated();
        $request->merge(['post_date' => date_format(date_create(), 'Y-m-d H:i:s')]);
        Post::create($request->all()); 
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

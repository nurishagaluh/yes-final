<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('post.create', ['categories'=>$categories]);
    }


    public function store(Request $request)
    {
        $banner_image = null;
        if ($request->file('banner_image')) {
            $file = $request->file('banner_image');
            $filename = date('dmY') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $banner_image = $filename;
        }

        $post = Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'banner_image' => $banner_image,
            'author_id' => Auth::user()->id,
            'slug' => $this->createSlug($request->title)
        ]);

        $data = [];
        if($request->category_ids){
            foreach($request->category_ids as $category_id){
                $row = [
                    'post_id' => $post->id,
                    'category_id' => $category_id,
                    'created_at' => date('Y-m-d H:i:s', time()),
                    'updated_at' => date('Y-m-d H:i:s', time())
                ];
                array_push($data, $row);
            }
        }

        // if (count($request->category)>0){
        //     $post->categories()->attach($request->category);
        // }

        PostCategory::insert($data);

        return redirect()->route('post.index');
    }

    public static function createSlug($str, $delimiter = '-')
    {
        $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
        return $slug;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $post = Post::find($id);
        return view('post.edit', compact('post', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->author_id = Auth::user()->id;
        $post->slug = $this->createSlug($request->title);

        if ($request->file('banner_image')) {
            $file = $request->file('banner_image');
            $filename = date('dmYhis') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $post->banner_image = $filename;
        }
        // if(count($request->category)>0){
        //     $post->categories()->sync($request->category);
        // }

        $post->save();

        PostCategory::where('post_id', $post->id)->delete();

        $data = [];
        foreach($request->category_ids as $category_id) {
            $row = [
                'post_id' => $post->id,
                'category_id' => $category_id,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ];
            array_push($data, $row);
        }

        PostCategory::insert($data);

        return redirect()->route('post.index');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('post.index');
    }
}

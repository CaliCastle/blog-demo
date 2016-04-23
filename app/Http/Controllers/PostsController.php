<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller {

    /**
     * Show index page.
     *
     * @return mixed
     */
    public function showIndex()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show create page.
     *
     * @return mixed
     */
    public function showCreatePost()
    {
        return view('posts.create');
    }

    /**
     * Show update page.
     *
     * @return mixed
     */
    public function showUpdatePost(Post $post)
    {
        return view('posts.update', compact('post'));
    }

    /**
     * 新建一篇文章.
     *
     * @param Request $request
     * @return mixed
     */
    public function createPost(Request $request)
    {
        $request->user()->posts()->create([
            'title' => $request->input('title'),
            'body'  => $request->input('body')
        ]);

        return redirect('/')->with([
            'status'  => 'success',
            'message' => '文章创建成功!'
        ]);
    }

    /**
     * @param Post    $post
     * @param Request $request
     * @return mixed
     */
    public function updatePost(Post $post, Request $request)
    {
        if ($post->user->id === $request->user()->id) {
            $post->update([
                'title' => $request->input('title'),
                'body'  => $request->input('body')
            ]);

            return redirect('/')->with([
                'status'  => 'success',
                'message' => '《' . $post->title . '》文章更新成功!'
            ]);
        }

        return redirect('/')->with([
            'status'  => 'error',
            'message' => '你滚犊子, 不是你的文章'
        ]);
    }
}

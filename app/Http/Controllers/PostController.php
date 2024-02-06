<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::whereUserId(auth()->user()->id)
            ->latest()
            ->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(PostRequest $request): mixed
    {
        Post::create(array_merge(
            [
                'user_id' => auth()->user()->id,
            ],
            $request->validated()
        ));

        return redirect()
            ->route('posts.index')
            ->banner('Post created successfully.');
    }

    public function show(Post $post): View
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post): View
    {
        return view('posts.edit', compact('post'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->validated());

        return redirect()
            ->route('posts.index')
            ->banner('Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()
            ->route('posts.index')
            ->banner('Post deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\CommentStoreRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentStoreRequest $request): Comment
    {
        $data = $request->validated();

        $comment = new Comment();

        $comment->name = $data['name'];
        $comment->email = $data['email'];

        $comment->save();

        return $comment;
    }

    /**
     * Remove the specified resource from storage.
     */
//    public function destroy(Comment $comment, $id): ?bool
//    {
//         return $comment->delete()->with('success', 'Комментарий успешно удален');;
//    }
//    public function destroy($id): RedirectResponse
//    {
//        $comment=Comment::where('id',$id)->first();
//        $comment->delete();
//        return redirect()->back();
//    }

    public function destroy($id): void
    {
//        $post = Comment::find($id);
//        $post->delete();
//        return redirect()->back();
        $post = Post::find($id);
        $post->delete();
    }
}

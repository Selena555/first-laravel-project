<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\CommentStoreRequest;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;


class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentStoreRequest $request):RedirectResponse
    {
        $data = $request->validated();

        $comment= new Comment();

        $comment->content = $data['message'];
        $comment->user_id = 1;
        $comment->post_id = $data['post_id'];
        $comment->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
//
//    public function destroy(Comment $comment): RedirectResponse
//    {
//        // Проверяем, является ли текущий пользователь автором комментария или администратором
//        if ($comment->user_id !== auth()->id() && !auth()->user()->isAdmin()) {
//            abort(403, 'Unauthorized action.');
//        }
//
//        $comment->delete();
//
//        return redirect()->back()->with('success', 'Комментарий успешно удален.');
//    }
//
}

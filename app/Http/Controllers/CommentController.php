<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Product $product)
    {
        $attributes = request()->validate([
            'content' => 'required|min:3|max:1000',
        ]);

        $comment = new Comment();
        $comment->content = $attributes['content'];
        if (Auth::check()) {
            $comment->user()->associate(auth()->user());
        }
        $product->comments()->save($comment);

        return back()->with('success', "Commentaire publié!");
    }
}

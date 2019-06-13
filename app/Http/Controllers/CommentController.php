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
            'body' => 'required|min:3|max:100',
        ]);

        $comment = new Comment();
        $comment->body = $attributes['body'];
        if (Auth::check()) {
            $comment->user()->associate(auth()->user());
        }
        $product->comments()->save($comment);
    }
}

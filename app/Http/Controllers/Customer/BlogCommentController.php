<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogComment;

class BlogCommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new BlogComment();

        $comment->storeCmt();

        return back();
    }

    public function replyStore(Request $request)
    {

        $comment = new BlogComment();

        $comment->replyCmt();

        return back();
    }
}

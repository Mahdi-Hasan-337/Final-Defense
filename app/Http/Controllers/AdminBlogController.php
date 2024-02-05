<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function add_blog()
    {
        return view('components.dashboard.admin-add-blog');
    }
}

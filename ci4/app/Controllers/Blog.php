<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        return view("Blog/index");
    }
}
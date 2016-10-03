<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BookController extends Controller
{

    /**
    * Responds to requests to GET /books
    */
    public function index()
    {
        return 'Display all the books';
    }

} # end of class
<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //return all books
    public function index()
    {
        return Books::all();
    }
    //return a book by id
    public function show($id)
    {
        return Books::find($id);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index($id){
        
        $books = Book::where('authors_id', $id)->get();
        $author = Author::find($id);
        
        return view('authors.index', [
            'author' => $author, 
            'books' => $books,
        ]);
    }

    public function show(){  

    }

    public function store(){

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function sortByName(){  

        $authors = Author::orderBy('lastname', 'ASC')->paginate(50);

        return view('authors.authors', [
            'authors' => $authors,
        ]);
    }


    public function showdetails($id){
        
        $books = Book::where('authors_id', $id)->get();
        $author = Author::find($id);
        
        return view('authors.authordetails', [
            'author' => $author, 
            'books' => $books,
        ]);
    }

}

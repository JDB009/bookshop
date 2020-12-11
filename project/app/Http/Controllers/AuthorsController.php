<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function authorindex(){  

        $authors = Author::orderBy('lastname', 'ASC')->paginate(50);
        $authorsAll = Author::all();
        $booksAll = Book::all();
        $avgAge = Author::avg('age');

        $allCountries = Author::all('country')->unique('country');
        $uniqueCountries = count($allCountries);

        $totalAuthors = count($authorsAll);
        $totalBooks = count($booksAll);
        $booksPerAuthor = $totalBooks/$totalAuthors;

        return view('authors.authors', [
            'authors' => $authors,
            'avgAge' => $avgAge,
            'booksPerAuthor' => $booksPerAuthor,
            'uniqueCountries' => $uniqueCountries,
        ]);
    }


    public function showdetails($id){
        
        $books = Book::where('author_id', $id)->get();
        $author = Author::find($id);
        
        return view('authors.authordetails', [
            'author' => $author, 
            'books' => $books,
        ]);
    }

}

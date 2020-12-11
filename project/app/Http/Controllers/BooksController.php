<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){

        $books = Book::orderBy('title', 'ASC')->paginate(10);
        $authors = Author::all();

        return view('books.index', [
            'books' => $books,
            'authors' => $authors,
        ]);

    }


    public function show($id){

        $author = Author::all();
        $updatebook = Book::find($id);
        
        return view('books.bookdetails', [
            'updatebook' => $updatebook, 
            'author' => $author,
        ]);

    }

        public function update($id){

        $books = new Book();
        $updatebook = Book::find($id);

        $updatebook->isbn = request('newISBN');
        $updatebook->title = request('newTitle');
        //$updatebook->id = request('newAuthor');
        $updatebook->pages = request('newPages');

        $updatebook->save();

        return redirect('/books')->with('success', 'Book details has been updated successfully');

    }  

    public function store(){
        
        $books = new Book();

        $books->isbn = request('isbn');
        $books->title = request('title');
        $books->author_id = request('author_id');
        $books->pages = request('pages');

        $books->save();

         return redirect('/books')->with('success', 'Book has been added successfully');
    }
}

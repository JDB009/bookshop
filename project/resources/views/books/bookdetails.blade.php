@extends('includes.layout')
@section('content')

<div class="content-wrapper">

    <section class="content-header">
       
       <h1>
        Update Book Details
        </h1>

        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Authors</li>
        </ol>
    </section>

    <section class="content">

      @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
      @endif
      
    <form method="POST" action="">
        @csrf
        <div class="form-group">
            <label for="bookValues">ISBN:</label>
            <input type="text" class="form-control" id="newISBN" name="newISBN" value="{{ $updatebook->isbn }}" required>
        </div>
        
        <div class="form-group">
            <label for="bookValues">Title:</label>
            <input type="text" class="form-control" id="newTitle" name="newTitle" value="{{ $updatebook->title }}" required>
        </div>

        <div class="form-group">
            <label for="bookValues">Number of Pages:</label>
            <input type="text" class="form-control" id="newPages" name="newPages" value="{{ $updatebook->pages }}" required="">
        </div>

        <div class="form-group">
            <label for="bookValues">Author</label>
            <div>
                <select name="newAuthor" id="newAuthor">
                    <option value="{{ $updatebook->id }}">{{$updatebook->author->lastname}}, {{$updatebook->author->initials}}</option>
                    @foreach($author as $authors)
                    <option value="{{ $authors->id }}">{{$authors->lastname}}, {{ $authors->initials }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
        </div>
        <div class="form-group">
            <a type="button" href="/books" class="btn btn-default btn-flat pull-left"></i> Cancel</a>
        </div>
    </form>
    </section>
       
</div>

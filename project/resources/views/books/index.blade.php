@extends('includes.layout')
@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <h1>Books</h1>
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
        <div class="row">
            <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <a href="#addnewUser" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered">
                    <thead>
                        <th>ISBN #</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>No of Pages</th>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                        <tr>
                            <td>{{ $book->isbn }}</td>
                            <td><a href='bookdetails/{{$book->id}}'>{{ $book->title }}</a></td>
                            <td>{{ $book->author->lastname }}, {{ $book->author->initials }}</td>
                            <td>{{ $book->pages }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{ $books->links() }}
    @include('books.modals')
    </section>   
</div>
@endsection

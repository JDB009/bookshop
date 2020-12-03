@extends('includes.layout')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
      <h1>Author Details</h1>

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
                    <div class="box-body">
                        <table class="table table-bordered">
                            <col style="width:10%"> 
                            <col style="width:90%"> 
                            <tbody>
                                <tr>
                                    <th>Initials:</td>
                                    <td>{{$author->initials}}</td>
                                </tr>
                                <tr>
                                    <th>Last Name:</td>
                                    <td>{{$author->lastname}}</td>
                                </tr>
                                <tr>
                                    <th>Age</td>
                                    <td>{{$author->age}}</td>
                                </tr>
                                <tr>
                                    <th>Country</td>
                                    <td>{{$author->country}}</td>
                                 </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

      <h2>Written Books</h2>

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table id="example1" class="table table-bordered">
                            <thead>
                            <th>ISBN:</th>
                            <th>Title:</th>
                            <th>No of Pages:</th>
                        </thead>
                        <tbody>
                            @foreach($books as $book)
                            <tr>
                                <td>{{ $book->isbn }}</td>
                                <td>{{ $book->title }}</a></td>
                                <td>{{ $book->pages }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <div class="form-group">
        <a type="button" href="/books" class="btn btn-default btn-flat pull-left"></i> Return</a>
    </div>
    </section>   

  </div>
@endsection
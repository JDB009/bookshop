@extends('includes.layout')
@section('content')
<div class="content-wrapper">

    <section class="content-header">
        
        <h1>Authors</h1>
        
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Authors</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                    <table class="table table-bordered">
                        <col style="width:23%"> 
                        <col style="width:72%">
                            <tr>
                                <th>Average number of books written per author:</th>
                                <td>{{ $booksPerAuthor }}</td>
                            </tr>
                        </table>
                        <table class="table table-bordered">
                        <col style="width:14%"> 
                        <col style="width:86%"> 
                            <tr>
                                <th>Average age of authors:</th>
                                <td>{{ $avgAge }}</td>
                            </tr>
                        </table>
                        <table class="table table-bordered">
                        <col style="width:23%"> 
                        <col style="width:72%"> 
                            <tr>
                                <th>Number of different countries of origin:</th>
                                <td>{{ $uniqueCountries }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <table id="example1" class="table table-bordered">
                    <thead>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Country</th>
                    </thead>
                    <tbody>
                        @foreach($authors as $author)
                        <tr>
                            <td><a href='authordetails/{{ $author->id }}'>{{ $author->lastname }}, {{ $author->initials }}</a></td>
                            <td>{{ $author->age }}</td>
                            <td>{{ $author->country }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{ $authors->links() }}
    </section>   
</div>
@endsection

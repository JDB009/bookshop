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
        {{ $authors->links() }}
    </section>   
</div>
@endsection

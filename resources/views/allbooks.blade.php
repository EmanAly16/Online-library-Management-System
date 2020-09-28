@extends('layout')
@section('head')All Books            @endsection
@section('content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container bg-dark">
                <div class="row">
                    <div class="col-md-12">
                    <div class="card mt-5">
                    <div class="card-header">
                        <div class="col-md-10">
            @if(Auth::user()->state =='admin')
            <a class="btn btn-success ml-5" href="{{ route('books.create') }}" id="createNewItem"> Add Book</a>
            @endif

  </div>
</div>

    <table border="2">
                    <tr>
                        <th>ID</th>
                        <th>BookTitle</th>
                        <th>Author</th>
                        @if(Auth::user()->state =='student')
                        <th>Select Book to Borrow</th>
                        @else
                        <th>Operation</th>
                        @endif

                    </tr>
                    @foreach ($books as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->bookTitle}}</td>
                        <td>{{ $item->author}}</td>
                        @if(Auth::user()->state =='student')
                        <td>
                        <div class="center">
                            <a  class="btn btn-warning" href="{{ route('books.delete',$item->id)}}">Borrow </a>
                            </div>
                        </td>
                        @else

                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ route('books.edit',$item->id)}}">Edit</a>
                            <br>
                        {!! Form::open(['route'=>['books.destroy',$item->id],'method'=>'delete'])!!}
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button> 
                        {!! Form::close()!!}</td>
                        @endif


                    </tr>
                    @endforeach
                </table>
            </br>
            </div>
            </div></div></div></div></div>

            @endsection
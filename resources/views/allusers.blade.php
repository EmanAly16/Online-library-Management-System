@extends('layout')
@section('head')All Users           @endsection
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container bg-dark">
                <div class="row">
                    <div class="col-md-12">
                    <div class="card mt-5">
                    <div class="card-header">
                        <div class="col-md-10">
                        
<form action="/search" method="get">
<div class="input-group">
<input type="search" name="search" class="form-control">
<span class="input-group-prepend">
<button type="submit" class="btn btn-primary">Search</button>

<div >
  <a class="btn btn-success ml-5" href="{{ route('books.create') }}" id="createNewItem"> Add Admin</a></div>
</span>
</div>
</form></div>
</div>


<table border="2">
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Email</th>                   

                </tr>
                @foreach ($usersall as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->email}}</td>
                </tr>
                @endforeach
            </table>
        </br>
        </div>

        </div></div></div></div></div>
        @endsection
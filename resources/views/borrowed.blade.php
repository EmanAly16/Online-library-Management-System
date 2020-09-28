@extends('layout')
@section('head')Borrowed Books            @endsection
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container bg-dark">
                <div class="row">
                    <div class="col-md-12">
                    <div class="card mt-5">

<table border="2">
                <tr>
                    <th>ID</th>
                    <th>BookTitle</th>
                    <th>Author</th>
                    <th>Date_Time</th>

                </tr>
                @foreach ($brobooks as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->bookTitle}}</td>
                    <td>{{ $item->author}}</td>
                    <td>{{$item->date_time}}</td>
                </tr>
                @endforeach
            </table>
        </br>
        </div>
        </div></div></div></div></div>

        @endsection
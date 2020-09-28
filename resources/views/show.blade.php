@extends('layout')
    
@section('content')
<div class="card mt-5">
         <div class="card-header">
            <div class="col-md-12">
                  <a class="btn btn-success ml-5" href="{{ route('books.index') }}">Back</a>
                </h4>
            </div>
         </div>
         <div class="card-body">
           <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Book Title:</strong>
                        {{ $bro->bookTitle }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Author:</strong>
                        {{ $bro->author }}
                    </div>
                </div>
            </div>
            

        </div>
        @endsection

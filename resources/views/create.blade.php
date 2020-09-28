{!! Form::open(['url'=>'books','method'=>'post']) !!}
<div class="form-group">
<label for="title">Book Title</label>
{!! Form::text('bookTitle','',['placeholder'=>' Title...','required'])!!}
@error('bookTitle')
<div class="alert alert-danger">{{$message}}</div>
@enderror
</div>
<div class="from-group">
<label for="body">Author</label>
{!! Form::text('author','',['placeholder'=>'Author... ']) !!}
@error('author')
<div class="alert alert-danger">{{$message}}</div>
@enderror
</div>
<button type="submit" class="btn btn-primary">submit</button>
{!! Form::Close()!!}  
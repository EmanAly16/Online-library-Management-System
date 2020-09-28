{!! Form::open(['route'=>['books.update',$post->id],'method'=>'put'])!!}
<div class="form-group">
<label for="title">Book Title</label>
{!! Form::text('bookTitle',$post->bookTitle,['placeholder'=>'Title..'])!!}
@error('bookTitle')
<div class="alert alert-danger">{{$message}}</div>
@enderror
</div>
<div class="from-group">
<lavel for="body">Author</label>
{!! Form::text('author',$post->author,['placeholder'=>'Author...'])!!}
@error('author')
<div class="alert alert-danger">{{$message}}</div>
@enderror
</div>
<button type="submit" class="btn btn-primary">Submit</button>
{!! Form::close()!!}
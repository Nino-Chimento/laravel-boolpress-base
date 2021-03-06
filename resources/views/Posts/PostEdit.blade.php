@extends('layouts.layout')
@section('main')

   @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
             @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
          </ul>
       </div>
    @endif
<form action="{{route("posts.update",$post)}}" method="POST">
    @csrf
    @method("PATCH")
    <input class="form-control" type="text" name="title" value="{{$post->title}}" placeholder="title">
    <input class="form-control" type="text" name="genre" value="{{$post->genre}}" placeholder="genre">
    <input class="form-control" type="text" name="img" value="{{$post->img}}" placeholder="img  ">
     <textarea class="form-control" name="description" value="" placeholder="Descrizione" rows="3">{{$post->description}}</textarea>
     <button type="submit">Modifica articolo</button>
</form>
@endsection
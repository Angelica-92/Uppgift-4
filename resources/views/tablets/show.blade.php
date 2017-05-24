
@extends('master')

@section('content')

<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
    <div class="mobile">
      <h2>{{ $tablet->title }} </h2>

        <img src="{{ $tablet->image }}" alt="{{ $tablet->title }}" style="width:100%;">
        <div class="caption">
          <p class="title"> {{ $tablet->price }} kr</p>
          <p class="title">{{$tablet->brand}}</p>
          <p>{{$tablet->description}}</p>
        </div>

    </div>
    <a href="/tablet/{{ $tablet->id }}/edit" class="btn btn-primary btn-sm" style="float:right; color:white; margin-left:10;">Uppdatera</a>
      <form action="/tablet/{{ $tablet->id }}" method="post" style="float:right">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <input type="submit" value="Ta bort" class="btn btn-danger btn-sm" style="float:right">
      </form>
  </div>
  <div class="col-md-2">

  </div>
</div>
<br>
<br>
<div class="row">
  <div class="col-md-3">
  </div>
  <div class="col-md-6">
    @foreach($reviews as $review)
      <div class="panel panel-default">
        <div class="panel-heading">{{ $review->name }} {{ $review->grade }}</div>
        <div class="panel-body">{{ $review->comment }}</div>
      </div>
    @endforeach
  </div>
  <div class="col-md-3">
  </div>
  </div>
  </div>
  <br>
  <br>
@endsection

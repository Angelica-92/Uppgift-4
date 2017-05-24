
@extends('master')

@section('content')


<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
    <div class="mobile">
      <h2>{{ $computer->title }} </h2>

        <img src="{{ $computer->image }}" alt="{{ $computer->title }}" style="width:100%;">
        <div class="caption">
          <p class="title"> {{ $computer->price }} kr</p>
          <p class="title">{{$computer->brand}}</p>
          <p>{{$computer->description}}</p>
        </div>

    </div>
    <a href="/computers/{{ $computer->id }}/edit" class="btn btn-primary btn-sm" style="float:right; color:white; margin-left:10;">Uppdatera</a>
      <form action="/computers/{{ $computer->id }}" method="post" style="float:right">
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
  <div class="col-md-2">
  </div>
  <div class="col-md-8">

    @foreach($reviews as $review)
      <div class="panel panel-default">
        <div class="panel-heading">{{ $review->name }} {{ $review->grade }}</div>
        <div class="panel-body">{{ $review->comment }}</div>
      </div>
      @endforeach
  </div>
  <div class="col-md-2">

  </div>
  <br>
  <br>

@endsection

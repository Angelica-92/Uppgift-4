
@extends('master')

@section('content')


<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
    <div class="mobile">
      <h2>{{ $mobile->title }} </h2>

        <img src="{{ $mobile->image }}" alt="{{ $mobile->title }}" style="width:100%;">
        <div class="caption">
          <p class="title"> {{ $mobile->price }} kr</p>
          <p class="title">{{$mobile->brand}}</p>
          <p>{{$mobile->description}}</p>
        </div>

    </div>
    <a href="/mobiles/{{ $mobile->id }}/edit" class="btn btn-primary btn-sm" style="float:right; color:white; margin-left:10;">Uppdatera</a>
      <form action="/mobiles/{{ $mobile->id }}" method="post" style="float:right">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <input type="submit" value="Ta bort" class="btn btn-danger btn-sm" style="float:right">
      </form>
  </div>
  <div class="col-md-2">

  </div>

  <br>
  <br>
  <div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
      <form action="/mobiles" method="post">
        {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Namn</label>
        <input type="text" class="form-control" id="name" type="mobile" name="name" placeholder="Skriv namn här...">
    </div>
    <div class="form-group">
    <label for="comment">Kommentar:</label>
    <textarea class="form-control" rows="5" id="comment" type="mobile" name="comment"></textarea>
  </div>
  <div class="form-group">
  <label for="rating">Välj ett betyg:</label>
  <select type="number" class="form-control" id="rating" type="mobile" name="rating">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
  </select>
  </div>
  <input type="hidden" class="form-control" type="mobile" id="{{ $mobile->id }}" name="{{ $mobile->id }}" value="{{ $mobile->id }}" placeholder="Add the id here..." required>
    <input type="submit" value="Spara product" class="btn btn-success" style="float:right;"><p></p>
    </form>

    </div>
    <div class="col-md-2">
    </div>
  </div>
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
    </div>

@endsection

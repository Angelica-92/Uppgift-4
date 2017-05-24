
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
          <p class="title">{{ $tablet->brand }}</p>
          <p>{{ $tablet->description }}</p>
        </div>
      </a>
    </div>
    <a href="/tablets/{{ $tablet->id }}/edit" class="btn btn-primary btn-sm" style="float:right; color:white; margin-left:10;">Uppdatera</a>
      <form action="/tablets/{{ $tablet->id }}" method="post" style="float:right">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <input type="submit" value="Ta bort" class="btn btn-danger btn-sm" style="float:right">
      </form>
  </div>
  <div class="col-md-2">

  </div>
</div>

<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
    <div class="form-group">
  <label for="comment">Kommentar:</label>
  <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
</div>
<div class="form-group">
<label for="rating">Välj ett betyg:</label>
<select type="number" class="form-control" id="rating" name="rating">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
</div>
  <input type="submit" value="Spara product" class="btn btn-success" style="float:right;"><p></p>
  </form>
  </div>
  <div class="col-md-2">
  </div>
</div>
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
@endsection

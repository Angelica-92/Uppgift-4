
@extends('master')

@section('content')

<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
    <h2>Redigera en mobil</h2>

    <form action="/mobiles/{{ $mobile->id }}" method="post">
  <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="title">Titel</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $mobile->title }}" placeholder="{{ $mobile->title }}">
    </div>
    <div class="form-group">
      <label for="title">Märke</label>
      <input type="text" class="form-control" id="brand" name="brand" value="{{ $mobile->brand }}" placeholder="{{ $mobile->brand }}">
    </div>
    <div class="form-group">
      <label for="price">Pris</label>
      <input type="number" class="form-control" id="price" name="price" value="{{ $mobile->price }}" placeholder="{{ $mobile->price }}">
    </div>
    <div class="form-group">
      <label for="comment">Beskrivning:</label>
      <textarea class="form-control" rows="5" id="description" name="description" value="{{ $mobile->description }}" placeholder="{{ $mobile->description }}"></textarea>
    </div>
    <div class="form-group">
      <label for="image">Bild</label>
      <input type="text" class="form-control" id="image" name="image" value="{{ $mobile->image }}" placeholder="{{ $mobile->image }}">
    </div>
    <input type="submit" value="Spara mobil" class="btn btn-success">
  </form>
  </div>
  <div class="col-md-2">
  </div>
</div>


@endsection


@extends('master')

@section('content')

<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    <h2>Redigera {{ $tablet->title }}</h2>

    <form action="/tablets/{{ $tablet->id }}" method="post">
  <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="title">Titel</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $tablet->title }}" placeholder="{{ $tablet->title }}">
    </div>
    <div class="form-group">
      <label for="title">Märke</label>
      <input type="text" class="form-control" id="album" name="album" value="{{ $tablet->brand }}" placeholder="{{ $tablet->brand }}">
    </div>
    <div class="form-group">
      <label for="price">Pris</label>
      <input type="number" class="form-control" id="price" name="price" value="{{ $tablet->price }}" placeholder="{{ $tablet->price }}">
    </div>
    <div class="form-group">
      <label for="comment">Beskrivning:</label>
      <textarea class="form-control" rows="5" id="description" name="description" value="{{ $tablet->description }}" placeholder="{{ $tablet->description }}"></textarea>
    </div>
    <div class="form-group">
      <label for="image">Bild</label>
      <input type="text" class="form-control" id="image" name="image" value="{{ $tablet->image }}" placeholder="{{ $tablet->image }}">
    </div>
    <input type="submit" value="Spara product" class="btn btn-success">
  </form>
  </div>
  <div class="col-md-4">
  </div>
</div>


@endsection

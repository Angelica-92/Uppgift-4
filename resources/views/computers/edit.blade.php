
@extends('master')

@section('content')

<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    <h2>Redigera {{ $computer->title }}</h2>

  <form action="/computers/{{ $computer->id }}" method="post">
  <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="title">Titel</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $computer->title }}" placeholder="{{ $computer->title }}">
    </div>
    <div class="form-group">
      <label for="title">Märke</label>
      <input type="text" class="form-control" id="brand" name="brand" value="{{ $computer->brand }}" placeholder="{{ $computer->brand }}">
    </div>
    <div class="form-group">
      <label for="price">Pris</label>
      <input type="number" class="form-control" id="price" name="price" value="{{ $computer->price }}" placeholder="{{ $computer->price }}">
    </div>
    <div class="form-group">
      <label for="comment">Beskrivning:</label>
      <textarea class="form-control" rows="5" id="description" name="description" value="{{ $computer->description }}" placeholder="{{ $computer->description }}"></textarea>
    </div>
    <div class="form-group">
      <label for="image">Bild</label>
      <input type="text" class="form-control" id="image" name="image" value="{{ $computer->image }}" placeholder="{{ $computer->image }}">
    </div>
    <input type="submit" value="Spara dator" class="btn btn-success">
  </form>
  </div>
  <div class="col-md-4">
  </div>
</div>


@endsection

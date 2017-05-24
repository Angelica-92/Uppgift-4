
@extends('master')

@section('content')

<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
    <h2>Skapa en datorer</h2>
    <form action="/computers" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Titel</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Skriv titel här...">
      </div>
      <div class="form-group">
        <label for="title">Märke</label>
        <input type="text" class="form-control" id="brand" name="brand" placeholder="Skriv märke här...">
      </div>
      <div class="form-group">
        <label for="price">Pris</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Skriv pris här...">
      </div>
      <div class="form-group">
        <label for="comment">Beskrivning:</label>
        <textarea class="form-control" rows="5" id="description" name="description"></textarea>
      </div>
      <div class="form-group">
        <label for="image">Bild</label>
        <input type="text" class="form-control" id="image" name="image" placeholder="Skriv url här för att hämta bild...">
      </div>
      <br>
      <br>
      <input type="submit" value="Spara dator" class="btn btn-success" style="float:right;"><p></p>
    </form>
  </div>
  <div class="col-md-2">
  </div>
</div>

@endsection

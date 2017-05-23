
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
          <p class="title"> {{ $mobile->price }} </p>
          <p class="title">{{$mobile->brand}}</p>
          <p>{{$mobile->description}}</p>
        </div>

        <a href="/mobiles/{{ $mobile->id }}/edit" class="btn btn-primary btn-sm" style="float:right; color:white; margin-left:10;">Uppdatera</a>
          <form action="mobiles/{{ $mobile->id }}" method="post" style="float:right">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <input type="submit" value="Ta bort" class="btn btn-danger btn-sm" style="float:right">
          </form>
    </div>
  </div>
  <div class="col-md-2">

  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="space">
    </div>
  </div>
</div>
@endsection

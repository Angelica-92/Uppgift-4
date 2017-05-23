
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
          <p class="title"> {{ $tablet->price }} </p>
          <p class="title">{{$tablet->brand}}</p>
          <p>{{$tablet->description}}</p>
        </div>
      </a>
    </div>
    <a href="/tablets/{{ $tablet->id }}/edit" class="btn btn-primary btn-sm" style="float:right; color:white; margin-left:10;">Uppdatera</a>
      <form action="tablets/{{ $tablet->id }}" method="post" style="float:right">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <input type="submit" value="Ta bort" class="btn btn-danger btn-sm" style="float:right">
      </form>
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

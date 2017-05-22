
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
      </a>
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



@extends('master')

@section('content')

<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
    <h2>Mobiler</h2>
    @if (session('success'))
      <div class="alert alert-info" role="alert">{{ session('status') }}</div>
    @endif
    <br>
    <br>
     @foreach($mobiles as $mobile)
     <div class="media">
       <img src="{{ $mobile->image }}" alt="{{ $mobile->title }}" style="width:200px;height:170px;">
       <a class="noDecoration" href="mobiles/{{ $mobile->id }}"><p class="title"> {{ $mobile->title }} </p></a>
     </div>
     @endforeach
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

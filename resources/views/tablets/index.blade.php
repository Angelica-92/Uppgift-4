
@extends('master')

@section('content')

<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
    <h2>Surfplattor</h2>
    @if (session('success'))
      <div class="alert alert-info" role="alert">{{ session('status') }}</div>
    @endif
    <br>
    <br>
     @foreach($tablets as $tablet)
     <div class="media">
       <img src="{{ $tablet->image }}" alt="{{ $tablet->title }}" style="width:230px;height:170px;">
       <a class="noDecoration" href="tablets/{{ $tablet->id }}"><p class="title"> {{ $tablet->title }} </p></a>
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

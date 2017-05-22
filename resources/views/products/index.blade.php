
@extends('products.master')

@section('content')

<h1> HEJ</h1>
@foreach($mobiles as $mobile)
  <p> {{ $mobiles->id }} </p>
@endforeach
@endsection

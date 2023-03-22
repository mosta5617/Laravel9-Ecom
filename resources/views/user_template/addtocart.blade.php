@extends('user_template.layouts.template')

@section('page_title')
    Flayer | Add to Cart 
@endsection

@section('main-content')
<h2>Add to Cart Page</h2>

@if(session()->has('message'))
<div class="alert alert-success " role="alert">
  {{ session()->get('message') }}
</div>
@endif

@foreach ( $cart_items as $item )
    {{ $item->price }}
@endforeach


@endsection
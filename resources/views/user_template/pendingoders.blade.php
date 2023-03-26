@extends('user_template.layouts.user_profile_template')
@section('page_title')
    Flayer | Pending Oders
@endsection
@section('user-content')
@if(session()->has('message'))
<div class="alert alert-success " role="alert">
  {{ session()->get('message') }}
</div>
@endif

Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, in dignissimos! Commodi, totam esse. Eum ea nostrum eligendi, eos qui fuga sed cum tenetur voluptas soluta at error voluptates perferendis.

@endsection
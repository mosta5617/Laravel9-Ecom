@extends('user_template.layouts.user_profile_template')
@section('page_title')
    Flayer | User Profile
@endsection
@section('user-content')
 Welcome {{ Auth::user()->name }}
@endsection
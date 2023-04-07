@extends('user_template.layouts.template')

@section('page_title')
    Flayer | User Profile
@endsection

@section('main-content')

<h2> Welcome: {{ Auth::user()->name }} </h2>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="box-main">
                <ul>
                    <li><a href="{{ route('userprofile') }}">Dashboard</a></li>
                    <li><a href="{{ route('pendingoders') }}">Pending Oders</a></li>
                    <li><a href="{{ route('history') }}">History</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                
                            <button type="submit" class="">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="box-main">
                @yield('user-content')
            </div>
        </div>
    </div>
</div>


@endsection
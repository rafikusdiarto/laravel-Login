@extends('app')
@section('content')
    <p>Welcome <b>{{ Auth::user()?->name }} </b></p>
    <a class="btn btn-warning" href="{{route('password')}}">Change Password</a>
    <a class="btn btn-danger" href="{{route('logout')}}">Logout</a>
@auth
@endauth
@guest
    <a href="{{route('login')}}" class="btn btn-primary">Login</a>
    <a href="{{route('register')}}" class="btn btn-primary">Register</a>
@endguest
@endsection
@extends('app')
@section('content')
@auth
<p>Welcome <b>{{ Auth::user()->name ?? "User"}} </b></p>
<a class="btn btn-primary" href="{{route('password')}}">Change Password</a>
<a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
@endauth
@guest
    <a href="{{route('login')}}" class="btn btn-primary">Login</a>
    <a href="{{route('register')}}" class="btn btn-primary">Register</a>
@endguest
@endsection
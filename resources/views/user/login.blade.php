@extends('app')
@section('content')
<div class="container col-12 col-md-9 col-lg-7 mt-5 ">
    <div class="card ">
        <div class="card-body p-5">
            <div class="col">
                @if(session('success'))
                <p class="alert alert-success">{{session('success')}}</p>
                @endif
                @if($errors->any())
                @foreach($errors->all() as $err)
                <p class="alert alert-danger">{{$err}}</p>
                @endforeach
                @endif
                <form method="POST" action="{{route('login.action')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Username</label>
                      <input type="text" class="form-control" >
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>

        </div>
    </div>

</div>

@endsection
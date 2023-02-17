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
                <form method="POST" action="{{route('password.action')}}">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Old Password</label>
                      <input type="password" name="old_password" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">New Password</label>
                      <input type="password" name="new_password" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">New Password Confirmation</label>
                      <input type="password" name="new_password_confirmation" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Change</button>
                        <a href="{{route('home')}}" class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>

@endsection
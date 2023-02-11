@extends('app')
@section('content')
<div class="row">
    <div class="col mt-5">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                  <div class="card-body p-5">
                    <h4 class="text-uppercase text-center mb-5"><b>Create an account</b></h4>
                    @if($errors->any())
                    @foreach($errors->all() as $err)
                    <p class="alert alert-danger">{{$err}}</p>
                    @endforeach
                    @endif
                    <form method="POST" action="{{ route('register.action')}}">
                        @csrf
                      <div class="form-outline mb-4">
                        <input type="text" name="name" value="{{old('name')}}"  class="form-control form-control-lg" required/>
                        <label class="form-label" >Your Name</label>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" name="username" value="{{old('username')}}" class="form-control form-control-lg" required/>
                        <label class="form-label" >Username</label>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="password" name="password" class="form-control form-control-lg" required/>
                        <label class="form-label" >Password</label>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="password" name="password_confirmation" class="form-control form-control-lg" required/>
                        <label class="form-label" >Repeat your password</label>
                      </div>
    
      
                      <div class="d-flex justify-content-center">
                        <a type="button" href="{{ route('home')}}"
                        class="btn btn-primary btn-block btn-lg gradient-custom-4 text-white me-3">Back</a>
                        <button 
                          class="btn btn-success btn-block btn-lg gradient-custom-4 text-white">Register</button>
                      </div>
            
                    </form>
      
                  </div>
                </div>
              </div>
            </div>
          </div>
    
    </div>

</div>

@endsection
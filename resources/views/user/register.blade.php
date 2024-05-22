@extends('layouts.authentication.master')
@section('title', 'Sign-up-one')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
<div class="container-fluid p-0">
   <div class="row m-0">
      <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{asset('assets/images/login/2.jpg')}}" alt="looginpage"></div>
      <div class="col-xl-7 p-0">
         <div class="login-card">
            <div>
               <div><a class="logo" href="{{ route('index') }}"><img class="img-fluid for-light" src="{{asset('assets/images/logo/logo.png')}}" alt="looginpage"><img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt="looginpage"></a></div>
               <div class="login-main">
                  <form action="{{url("/register")}}" method="POST" class="theme-form">
                    @csrf
                     <h4>Create your account</h4>
                     <p>Enter your personal details to create account</p>
                     <div class="form-group">
                        <label class="col-form-label pt-0">Your Name</label>
                        <div class="row g-2">
                           <div class="col-6">
                              <input class="form-control" type="text" required="" placeholder="First name" name="fname">
                           </div>
                           <div class="col-6">
                              <input class="form-control" type="text" required="" placeholder="Last name" name="lname">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-form-label">Mobile Number</label>
                        <input class="form-control" type="num" required="" placeholder="Number" name="num">
                     </div>
                     <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <div class="form-input position-relative">
                          <input class="form-control" type="password" name="reg_pass" required="" placeholder="*********">
                          <div class="show-hide"><span class="show"></span></div>
                        </div>
                     </div>
                     <div class="form-group mb-0">
                        {{-- <div class="checkbox p-0">
                           <input id="checkbox1" type="checkbox">
                           <label class="text-muted" for="checkbox1">Agree with<a class="ms-2" href="#">Privacy Policy</a></label>
                        </div> --}}
                        <button class="btn btn-primary btn-block" type="submit">Create Account</button>
                     </div>
                     {{-- <h6 class="text-muted mt-4 or">Or signup with</h6>
                     <div class="social mt-4">
                        <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                     </div> --}}
                     <p class="mt-4 mb-0">Already have an account?<a class="ms-2" href="{{ route('loginnew') }}">Sign in</a></p>
                  </form>
                </div>
                @if (session()->has('message'))
                <br>
                  <div class="alert alert-warning">
                     {{ session()->get('message')}}
                  </div>
                  <script>
                     setTimeout(function() {
                        $('.alert').fadeOut('fast');
                     }, 3000);
                  </script>
               @elseif (session()->has('success'))
               <br>
                  <div class="alert alert-success">
                     {{ session()->get('success')}}
                  </div>
                  <script>
                     setTimeout(function() {
                        $('.alert').fadeOut('fast');
                     }, 3000);
                  </script>
               @endif  
            </div>
        </div>
    </div>
   </div>
</div>

@if(session()->has('message'))
<script>
    $(document).ready(function() {
        $("#alertbox").html("<div class='alert alert-success'>{{ session()->get('message') }}</div>");
        setTimeout(function() {
            $("#alertbox").html("<div id='alertbox'></div>");
        }, 3000);
    });
</script>
@endif
<div class="mt-3">
    <div id="rs"></div>
</div> 
@endsection

@section('script')
@endsection
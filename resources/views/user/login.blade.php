@extends('layouts.authentication.master')
@section('title', 'Login-bs-tt-validation')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{ asset('assets/images/login/2.jpg') }}"
                    alt="looginpage"></div>
            <div class="col-xl-7 p-0">
                <div class="login-card">
                    <div>

                        <div><a class="logo text-start" href="{{ route('index') }}"><img class="img-fluid for-light"
                                    src="{{ asset('assets/images/logo/logo.png') }}" alt="looginpage"><img
                                    class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}"
                                    alt="looginpage"></a></div>
                        <div class="login-main">
                            <form action="{{ url('/login') }}" method="POST" class="theme-form needs-validation"
                                novalidate="">
                                @csrf
                                <h4>Sign in to account</h4>
                                <p>Enter your email & password to login</p>
                                <div class="form-group">
                                    <label class="col-form-label">Mobile Number</label>
                                    <input class="form-control" type="number" required="" name="num"
                                        placeholder="Enter number">
                                    {{-- <div class="invalid-tooltip">Please enter proper email.</div> --}}
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="login_pass" required=""
                                            placeholder="*********">
                                        <div class="invalid-tooltip">Please enter password.</div>
                                        <div class="show-hide"><span class="show"></span></div>
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                      <div class="show-hide"><span class="show">                         </span></div>
                    </div>
                  </div> --}}
                                <div class="form-group mb-0">
                                    {{-- <div class="checkbox p-0">
                           <input id="checkbox1" type="checkbox">
                           <label class="text-muted" for="checkbox1">Remember password</label>
                        </div> --}}
                                    <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                                </div>
                                <p class="mt-4 mb-0">Don't have account?<a class="ms-2"
                                        href="{{ route('register') }}">Create Account</a></p>
                                <script>
                                    (function() {
                                        'use strict';
                                        window.addEventListener('load', function() {
                                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                            var forms = document.getElementsByClassName('needs-validation');
                                            // Loop over them and prevent submission
                                            var validation = Array.prototype.filter.call(forms, function(form) {
                                                form.addEventListener('submit', function(event) {
                                                    if (form.checkValidity() === false) {
                                                        event.preventDefault();
                                                        event.stopPropagation();
                                                    }
                                                    form.classList.add('was-validated');
                                                }, false);
                                            });
                                        }, false);
                                    })();
                                </script>

                            </form>
                        </div>
                        @if (session()->has('message'))
                            <br>
                            <div class="alert alert-danger">
                                {{ session()->get('message') }}
                            </div>
                            <script>
                                setTimeout(function() {
                                    $('.alert').fadeOut('slow');
                                }, 30000);
                            </script>
                        @elseif (session()->has('success'))
                            <br>
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                            <script>
                                setTimeout(function() {
                                    $('.alert').fadeOut('slow');
                                }, 3000);
                            </script>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection

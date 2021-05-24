@extends('layouts.auth')
@section('title')
    Login page
@stop
@section('log')

    <main class="page-content">


        <div class="page-inner" >
            <div id="main-wrapper">

                <div class="row">
                    <div class="col-md-3 center">

                        <div class="row">
                            <div class="col 12">
                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')
                            </div>
                        </div>

                        <div class="login-box" >



                            <a href="index.html" class="logo-name text-lg text-center">Sign In</a>
                            <p class="text-center m-t-md">Please login into your account.</p>

                            <form class="m-t-md" action="{{route('post.login')}}" method="post" >
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control" @error('password') is-invalid @enderror  placeholder="Enter Email" name="email" autocomplete="false" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" style="color: red" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <input type="password" class="form-control" @error('password') is-invalid @enderror placeholder="Enter Password" name="password" autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert" style="color: red" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember_me" id="remember_me">

                                        <label class="form-check-label" for="remember">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success btn-block">Login</button>
                                <a href="forgot.html" class="display-block text-center m-t-md text-sm">Forgot Password?</a>
                                <p class="text-center m-t-xs text-sm">Do not have an account?</p>
                                <a href="register.html" class="btn btn-default btn-block m-t-md">Create an account</a>
                            </form>
                            <p class="text-center m-t-xs text-sm">2021 &copy; Elhadj Attatfa.</p>
                        </div>
                    </div>
                </div><!-- Row -->
            </div><!-- Main Wrapper -->
        </div><!-- Page Inner -->
    </main><!-- Page Content -->

@stop

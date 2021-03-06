@extends('layouts.admin')

@section('board')
<main class="page-content">
    <div class="page-inner">
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-3 center">
                    <div class="login-box">
                        <a href="index.html" class="logo-name text-lg text-center">Modern</a>
                        <p class="text-center m-t-md">Please login into your account.</p>
                        <form class="m-t-md" action="index.html">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" required>
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

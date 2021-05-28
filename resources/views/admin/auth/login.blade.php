@extends('layouts.login')

@section('board')

    <div class="content-body">
        <section class="flexbox-container">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="col-md-4 col-10 box-shadow-2 p-0">
                    <div class="card border-grey border-lighten-3 m-0">
                        <div class="card-header border-0">
                            <div class="card-title text-center">
                                <div class="p-1">
                                    <img src="{{asset('assets/front/images/logo_Attatfa.png')}}" hight="100px" alt="LOGO"/>

                                </div>
                            </div>
                            <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                <span>Dashboard Login</span>
                            </h6>
                        </div>

                        <!--begin alert section-->
                    {{--                            <div class="row mr-2 ml-2">--}}
                    {{--                                <button type="text" class="btn btn-lg btn-block btn-outline-danger mb-2"--}}
                    {{--                                        id="type-error">   هناك خطا في بيانات الدحول--}}
                    {{--                                </button>--}}
                    {{--                            </div>--}}
                    <!-- end alert section-->
                        @include('admin.includes.alerts.success')
                        @include('admin.includes.alerts.errors')

                        <div class="card-content" dir="ltr">
                            <div class="card-body">
                                <form class="form-horizontal form-simple" action="{{route('admin.login')}}" method="post"
                                      novalidate>
                                    @csrf
                                    <fieldset class="form-group position-relative has-icon-right mb-1">
                                        <input type="text" name="email"
                                               class="form-control form-control-lg input-lg"
                                               value="" id="email" placeholder="Enter your email">
                                        <div class="form-control-position">
                                            <i class="ft-user"></i>
                                        </div>
                                        @error('email')
                                        <span class="text-danger"> {{$message}}</span>
                                        @enderror

                                    </fieldset>
                                    <fieldset class="form-group position-relative has-icon-right">
                                        <input type="password" name="password"
                                               class="form-control form-control-lg input-lg"
                                               id="user-password"
                                               placeholder="Enter your password">
                                        <div class="form-control-position">
                                            <i class="la la-key"></i>
                                        </div>
                                        @error('password')
                                        <span class="text-danger"> {{$message}}</span>
                                        @enderror
                                    </fieldset>
                                    <div class="form-group row" >
                                        <div class="col-4 offset-1  ">
                                            <fieldset>
                                                <input type="checkbox" name="remember_me" id="remember-me"
                                                       class="chk-remember">
                                                <label for="remember-me">Remember me</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-lg btn-block"><i
                                            class="ft-unlock"></i>
                                        Enter
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@stop

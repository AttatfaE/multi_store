@extends('layouts.admin')
@section('title')
    Edit Shipping
@stop

@section('board')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">{{__('admin/profile.Profile')}}</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="">{{__('admin/profile.profileEdit')}}</a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            @include('admin.includes.alerts.success')
                            @include('admin.includes.alerts.errors')
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">{{__('admin/profile.Profile')}}  <span style="color: blue"></span> </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" action="{{route('admin.profile.update')}}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <input type="hidden" name="id" value="">
                                            <div class="form-group row">
                                                <div class="col-md-4 col-lg-4">
                                                    <img src="" alt="" width="40%">
                                                </div>
                                            </div>



                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> {{__('admin/profile.profileEdit')}}  </h4>
                                                <input type="hidden" value="{{$admin->id}}" name="id">
                                                @error('id')
                                                <span class="text-danger"> {{$message}}</span>
                                                @enderror
                                                <div class="row ">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{__('admin/profile.name')}} </label>
                                                            <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                                   name="name" value="{{$admin->name}}" autofocus>

                                                            @error('name')
                                                            <span class="text-danger"> {{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{__('admin/profile.email')}} </label>
                                                            <input id="email" type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                                   name="email" value="{{$admin->email}}">
                                                            @error('email')
                                                            <span class="text-danger"> {{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row ">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{__('admin/profile.password')}} </label>
                                                            <input id="name" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                                   name="password" value="{{$admin->password}}" autofocus>

                                                            @error('password')
                                                            <span class="text-danger"> {{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{__('admin/profile.confirm password')}} </label>
                                                            <input id="name" type="password" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                                                   name="password_confirmation" value="" >

                                                            @error('password_confirmation')
                                                            <span class="text-danger"> {{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>


                                            <div class="form-actions">

                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> {{__('admin/profile.Save')}}
                                                </button>
                                            </div>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>
@stop

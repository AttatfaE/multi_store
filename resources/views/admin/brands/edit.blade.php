@extends('layouts.admin')

@section('board')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('admin/category.dashboard')}}</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="{{route('all.brands')}}">{{__('admin/brand.Brands')}} </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.create.brand')}}">{{__('admin/brand.Add Brand')}}</a>
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
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">
                                        {{__('admin/brand.Edit Brand')}}
                                    </h4>
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
                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" action="{{route('admin.update.brand', $brand->id)}}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$brand->id}}">
                                            <div class="">
                                                <img style="width:20%;display: block;margin:20px auto;" height="200" width="200"  src="/assets/images/{{$brand->photo}}" alt="{{$brand->name}} image">
                                            </div>
                                            <div class="form-group">
                                                <label>
                                                    {{__('admin/brand.Brand Image')}}
                                                </label>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file"
                                                           value=""
                                                           id="file"
                                                           name="photo">
                                                    @error('photo')
                                                    <span class="text-danger"> {{$message}}</span>
                                                    @enderror

                                                </label>
                                                <span class="text-danger"> </span>
                                            </div>

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i>
                                                    {{__('admin/brand.Brand Data')}}
                                                </h4>

                                                <div class="row ml-5">
                                                    <div class="col-md-1">
                                                        <div class="form-group ">
                                                            <label for="switcheryColor4"
                                                                   class="card-title"
                                                                   style="margin-bottom: 9px "> {{__('admin/brand.State')}}
                                                            </label>
                                                            <input type="checkbox"  value="1" name="is_active"
                                                                   id="switcheryColor4"
                                                                   class="switchery form-control" data-color="success"
                                                                   @if($brand->is_active == 1) checked @endif

                                                                  />


                                                            @error('is_active')
                                                            <span class="text-danger"> {{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group ">
                                                            <label for="projectinput1" class=""> {{__('admin/brand.Name')}}  </label>
                                                            <input id="name" type="text" class="form-control  {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                                   name="name" value="{{$brand->name}}">
                                                            @error('name')
                                                            <span class="text-danger"> {{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> {{__('admin/brand.Cancel')}}
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i>  {{__('admin/brand.Update')}}
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

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
                                <li class="breadcrumb-item"><a href="">{{__('admin/sidebar.Settings')}}</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="">{{__('admin/sidebar.Shipping')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="">{{$setting->value}}</a>
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
                                    <h4 class="card-title" id="basic-layout-form">{{__('admin/sidebar.Edit')}}  <span style="color: blue"></span> {{$setting->value}}</h4>
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
                                        <form class="form" action="{{route('admin.setting.shipping.store',$setting->id)}}" method="POST"
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
                                                <h4 class="form-section"><i class="ft-home"></i> {{$setting->value}} {{__('admin/sidebar.data')}}  </h4>
                                                <input type="hidden" value="{{$setting->id}}" name="id">
                                                @error('id')
                                                <span class="text-danger"> {{$message}}</span>
                                                @enderror
                                                <div class="row ">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">{{__('admin/sidebar.Shipping Name')}} </label>
                                                            <input type="text" value="{{$setting->value}}" id="name"
                                                                   class="form-control"

                                                                   name="value">
                                                            @error('value')
                                                            <span class="text-danger"> {{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6" >
                                                        <div class="form-group">
                                                            <label for="projectinput1"> {{__('admin/sidebar.Value')}} </label>
                                                            <input type="number" id="value"
                                                                   class="form-control"
                                                                   value="{{$setting->plain_value}}"
                                                                   name="plain_value"
                                                                   >
                                                            @error('plain_value')
                                                            <span class="text-danger"> {{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> {{__('admin/sidebar.Cancel')}}
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> {{__('admin/sidebar.Save')}}
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

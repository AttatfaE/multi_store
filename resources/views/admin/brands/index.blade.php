@extends('layouts.admin')

@section('board')
    <style>
        .card {
            box-shadow: 0 0 10px 0 rgba(100, 100, 100, 0.26);
        }

    </style>
    <div style="min-height: 680px" >
        <div class="app-content content">
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-md-6 col-12 mb-2">
                        <h3 class="content-header-title">
                            {{__('admin/brand.Brands')}}
                        </h3>
                        <div class="row breadcrumbs-top">
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('admin/category.dashboard')}}</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="{{route('all.brands')}}">{{__('admin/brand.Brands')}} </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{route('admin.create.brand')}}">{{__('admin/brand.Add Brand')}} </a>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="content-body">
                    @include('admin.includes.alerts.success')
                    @include('admin.includes.alerts.errors')
                    @if(\App\Models\Brand::count()==0)
                        <div class="row mt-5">
                            <div class="alert alert-success col-md-6 offset-3" role="alert">
                                <h3 class="white text-center">{{__('admin/brand.There is no brands in this page')}}</h3>
                            </div>

                        </div>
                    @else
                    <div class="card">
                        <div class="card-body card-dashboard">
                            <div class="heading-elements" style="float: left">
                                <h4 class="card-title" id="basic-layout-form">  {{__('admin/brand.Brands List')}} </h4>
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>


                            <div class="table-responsive">
                                <table class="table  table-bordered table-striped table-hover">
                                    <thead class="bg-info white">
                                    <tr >
                                        <th scope="col">#</th>
                                        <th scope="col">{{__('admin/brand.Name')}} </th>
                                        <th scope="col">Photo </th>
                                        <th scope="col">{{__('admin/brand.State')}} </th>
                                        <th></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($brands)

                                        @foreach($brands as $index => $brand)
                                            <input type="hidden" value="{{$brand->id}}">
                                            <tr>
                                                <td scope="row">{{($brands->currentpage()-1) * $brands->perpage() + $index + 1 }}</td>
                                                <td>{{$brand->name}}</td>
                                                <td><img src="/assets/images/{{$brand->photo}}" width="50" height="50" alt=""></td>
                                                <td><h6 style="font-weight: bold; color: @if($brand->is_active==1)#42ba96 @else red @endif">{{$brand->active()}}</h6></td>


                                                <td>
                                                    <div class="btn-group" role="group"
                                                         aria-label="Basic example">
                                                        <a href="{{route('admin.edit.brand',$brand->id)}}"
                                                           class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">{{__('admin/brand.Edit')}} </a>
                                                        <a href="{{route('admin.changeStatus.brand',$brand->id)}}"
                                                           class="btn btn-outline-info btn-min-width box-shadow-3 mr-1 mb-1">
                                                            @if($brand->is_active==0)  Activate @else {{__('admin/brand.Desactivate')}}  @endif</a>
                                                        <a href="{{route('admin.delete.brand',$brand->id)}}"
                                                           class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">{{__('admin/brand.Delete')}} </a>
                                                        <!--                                                        <button type="button"
                                                                                                                        value=""
                                                                                                                        onclick=""
                                                                                                                        class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1"
                                                                                                                        data-toggle="modal"
                                                                                                                        data-target="#rotateInUpRight">
                                                                                                                    حذف
                                                                                                                </button>-->

                                                    </div>
                                                </td>
                                            </tr>


                                        @endforeach

                                    @endisset
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                    @endif
                </div>

            </div>
            <div class="justify-content-center d-flex">

              {{ $brands->links('vendor.pagination.custom') }}
            </div>


        </div>
    </div>
@stop

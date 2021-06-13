@extends('layouts.admin')

@section('board')
    <style>
        .card {
            box-shadow: 0 0 10px 0 rgba(100, 100, 100, 0.26);
        }
        table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }
    </style>
    <div style="min-height: 680px" >
        <div class="app-content content">
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-md-6 col-12 mb-2">
                        <h3 class="content-header-title">
                            @if($type=='categories')
                            {{__('admin/category.Categories')}}
                             @else
                            {{__('admin/subCategory.Subcategories')}}
                            @endif
                        </h3>
                        <div class="row breadcrumbs-top">
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('admin/category.dashboard')}}</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="{{route('all.categories','categories')}}">{{__('admin/subCategory.Categories')}} </a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="{{route('all.categories','subcategories')}}">{{__('admin/subCategory.Subcategories')}} </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{route('admin.create.category','category')}}">{{__('admin/category.Add Category')}}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{route('admin.create.category','subcategory')}}">{{__('admin/subCategory.Add Subcategory')}}</a>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="content-body">
                    @include('admin.includes.alerts.success')
                    @include('admin.includes.alerts.errors')
                    @if(\App\Models\Category::count()==0)
                        <div class="row mt-5">
                            <div class="alert alert-success col-md-6 offset-3" role="alert">
                                <h3 class="white text-center">{{__('There is no categories in this page')}}</h3>
                            </div>

                        </div>
                    @else
                    <div class="card">
                        <div class="card-body card-dashboard">
                            <div class="heading-elements" style="float: left">
                                <h4 class="card-title" id="basic-layout-form"> {{__('admin/category.Categories List')}} </h4>
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>



                            <table class="table table-bordered table-striped">
                                <thead class="bg-info white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{__('admin/category.Name')}}</th>
                                    <th scope="col">{{__('admin/category.Photo')}}</th>
                                    <th scope="col">{{__('admin/category.slug')}}</th>
                                    <th scope="col">{{__('admin/category.State')}}</th>
                                    <th colspan="2"></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @isset($categories)

                                        @foreach($categories as $index => $category)
                                            <input type="hidden" value="{{$category->id}}">
                                            <tr>
                                                <th scope="row">{{($categories->currentpage()-1) * $categories->perpage() + $index + 1 }}</th>
                                                <td>{{$category->name}}</td>
                                                <td><img src="{{$category->photo}}" width="100" height="50" alt=""></td>
                                                <td>{{$category->slug}}</td>
                                                <td><h6 style="font-weight: bold; color: @if($category->is_active==1)#42ba96 @else red @endif">{{$category->active()}}</h6></td>


                                                <td>
                                                    <div class="btn-group" role="group"
                                                         aria-label="Basic example">
                                                        <a href="{{route('admin.edit.category',$category->id)}}"
                                                           class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">{{__('admin/category.Edit')}}</a>
                                                        <a href="{{route('admin.changeStatus.category',$category->id)}}"
                                                           class="btn btn-outline-info btn-min-width box-shadow-3 mr-1 mb-1">
                                                            @if($category->is_active==0)  {{__('admin/category.activate')}} @else {{__('admin/category.deactivate ')}} @endif</a>
                                                        <a href="{{route('admin.delete.category',$category->id)}}"
                                                           class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">{{__('admin/category.Delete')}}</a>
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
                    @endif
                </div>

            </div>
            <div class="justify-content-center d-flex">

              {{ $categories->links('vendor.pagination.custom') }}
            </div>


        </div>
    </div>
@stop

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
                                @if($category->parentId==null)
                                    <li class="breadcrumb-item"><a href="{{route('all.categories','categories')}}">{{__('admin/category.Categories')}}</a>
                                    </li>
                                @else
                                    <li class="breadcrumb-item"><a href="{{route('all.categories','subcategories')}}}}">{{__('admin/subCategory.Subcategories')}}</a>
                                    </li>
                                @endif

                                @if($category->parentId==null)
                                    <li class="breadcrumb-item"><a href="">{{__('admin/category.Edit Category')}}</a>
                                    </li>
                                @else
                                    <li class="breadcrumb-item"><a href="">{{__('admin/subCategory.Edit Subcategory')}}</a>
                                    </li>
                                @endif

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

                                        @if($category->parentId!=null){{__('admin/subCategory.Edit Subcategory')}}
                                        @else {{__('admin/category.Edit Category')}}@endif
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
                                        <form class="form" action="{{route('admin.update.category',$category->id)}}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf

                                            <input type="hidden" name="id" value="{{$category->id}}">

                                            <div class="form-group">
                                                <label>  {{__('admin/category.Category Image')}} </label>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file" value="{{__('admin/category.Select File')}}" id="file" name="photo">
                                                    @error('photo')
                                                    <span class="text-danger"> {{$message}}</span>
                                                    @enderror

                                                </label>
                                                <span class="text-danger"> </span>
                                            </div>

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i>
                                                    @if($category->parentId!=null){{__('admin/subCategory.Subcategory data')}}
                                                    @else {{__('admin/category.Category data')}}@endif
                                                      </h4>
                                                @if($category->parentId!=null)
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <select class="select2 select2-border form-control {{ $errors->has('parentId') ? ' is-invalid' : '' }}" required name="parentId" id="id_h5_single" data-border-color="purple">

                                                                    <option value="">SELECT CATEGORY</option>
                                                                    <optgroup >
                                                                        @foreach($categories as $mainCategory)
                                                                            <option value="{{$mainCategory->id}}" @if($category->parentId==$mainCategory->id) selected @endif>{{$mainCategory->name}}</option>
                                                                        @endforeach
                                                                    </optgroup>

                                                                </select>
                                                                @error('parentId')
                                                                <span class="text-danger"> {{$message}}</span>
                                                                @enderror
                                                            </div>

                                                        </div>


                                                    </div>
                                                @endif
                                                        <div class="row ">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">{{__('admin/category.Name')}}   </label>
                                                                    <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                                           name="name" value="{{$category->name}}" placeholder="">
                                                                    @error('name')
                                                                    <span class="text-danger"> {{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" >
                                                                <div class="form-group">
                                                                    <label for="projectinput1">{{__('admin/category.slug')}}    </label>
                                                                    <input id="slug" type="text" class="form-control {{ $errors->has('slug') ? ' is-invalid' : '' }}"
                                                                           name="slug" value="{{$category->slug}}" placeholder="">
                                                                    @error('slug')
                                                                    <span class="text-danger"> {{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group mt-1">
                                                                    <input type="checkbox"  value="1" name="is_active"
                                                                           id="switcheryColor4"
                                                                           class="switchery" data-color="success"
                                                                          @if($category->is_active == 1) checked @endif/>
                                                                    <label for="switcheryColor4"
                                                                           class="card-title ml-1">{{__('admin/category.State')}} </label>

                                                                    @error('is_active')
                                                                    <span class="text-danger"> {{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>


                                            </div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i>{{__('admin/category.Cancel')}}
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> {{__('admin/category.Update')}}
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

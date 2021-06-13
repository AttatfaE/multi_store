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
                                <li class="breadcrumb-item active"><a href="{{route('all.categories','subcategories')}}">{{__('admin/category.Categories')}} </a>
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
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">
                                        @if($type=='category')
                                            {{__('admin/category.Add New Category')}}
                                        @else
                                            {{__('admin/subCategory.Add New Subcategory')}}
                                        @endif
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
                                        <form class="form" action="{{route('admin.store.category')}}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group">
                                                <label> @if($type=='category') {{__('admin/category.Category Image')}}
                                                        @else {{__('admin/subCategory.Subcategory Image')}}@endif
                                                </label>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file"
                                                           value="{{__('admin/category.Select File')}}"
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
                                                    @if($type=='category'){{__('admin/category.Category data')}}
                                                    @else {{__('admin/subCategory.Subcategory data')}}@endif
                                                </h4>
                                               @if($type!='category')
                                                        <div class="row">

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <select class="select2 form-control {{ $errors->has('parentId') ? ' is-invalid' : '' }}" required
                                                                            name="parentId" id="main_category" data-border-color="purple"
                                                                            onchange="getval();">



                                                                            <option value="0" selected disabled>SELECT CATEGORY</option>
                                                                        @foreach($categories as $category)
                                                                            <optgroup >
                                                                                @if($category->parentId == null)
                                                                                    <option class="bold" value="{{$category->id}}">{{$category->name }}</option>
                                                                                        @foreach($categories as $subcategory)
                                                                                            @if($subcategory->parentId==$category->id)
                                                                                                <option value="{{$subcategory->id}}">{{$category->name }} >> {{$subcategory->name }}</option>

                                                                                            @foreach($categories as $subcategoryChild)
                                                                                                    @if($subcategoryChild->parentId==$subcategory->id)
                                                                                                    <option value="{{$subcategoryChild->id}}">{{$category->name }} >> {{$subcategory->name }} >> {{$subcategoryChild->name}}</option>
                                                                                                    @endif
                                                                                                        @endforeach
                                                                                                @endif
                                                                                            @endforeach
                                                                                @endif
                                                                             </optgroup>

                                                                        @endforeach
                                                                    </select>

                                                                    @error('parentId')
                                                                    <span class="text-danger"> {{$message}}</span>
                                                                    @enderror

                                                                </div>


                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group sub_category_select hidden">
                                                                    <select class="  form-control {{ $errors->has('parentId') ? ' is-invalid' : '' }}" required
                                                                            name="parentId" id="sub_category" data-border-color="purple">

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
                                                                           name="name" value="" placeholder="Name">
                                                                    @error('name')
                                                                    <span class="text-danger"> {{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" >
                                                                <div class="form-group">
                                                                    <label for="projectinput1">{{__('admin/category.slug')}}    </label>
                                                                    <input id="slug" type="text" class="form-control {{ $errors->has('slug') ? ' is-invalid' : '' }}"
                                                                           name="slug" value="" placeholder="slug">
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
                                                                           checked/>
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
                                                        onclick="history.back();"
                                                        id="a"  >
                                                    <i class="ft-x"></i>{{__('admin/category.Cancel')}}
                                                </button>
                                                <button  type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> {{__('admin/category.Save')}}
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
@push('scripts')
    <script>

        $(document).ready(function(){

            $("#main_category").on('change',function(){
                let id = $(this).val();
                console.log(id);
                $('.sub_category_select').removeClass('hidden');
               $('#sub_category').empty();
                $('#sub_category').append('<option value="0" selected disabled>    Processing.....</option>');


                /*  $.ajax({
                    type:'GET',
                    url: ,

                })*/
            });
        });


    </script>
@endpush

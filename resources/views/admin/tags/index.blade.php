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
                            {{__('admin/tag.Tags')}}
                        </h3>
                        <div class="row breadcrumbs-top">
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('admin/category.dashboard')}}</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="{{route('all.tags')}}">{{__('admin/tag.Tags')}} </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{route('admin.create.tag')}}">{{__('admin/tag.Add Tag')}} </a>
                                    </li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="content-body">
                    @include('admin.includes.alerts.success')
                    @include('admin.includes.alerts.errors')

                   @if(\App\Models\Tag::count()==0)
                       <div class="row mt-5">
                           <div class="alert alert-success col-md-6 offset-3" role="alert">
                               <h3 class="white text-center">{{__('admin/tag.There is no tags in this page')}}</h3>
                           </div>

                       </div>
                    @else
                    <div class="card">
                        <div class="card-body card-dashboard">
                            <div class="heading-elements" style="float: left">
                                <h4 class="card-title" id="basic-layout-form">  {{__('admin/tag.Tags List')}} </h4>
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
                                        <th scope="col">{{__('admin/tag.Name')}} </th>
                                        <th scope="col">{{__('admin/tag.slug')}} </th>
                                        <th></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($tags)

                                        @foreach($tags as $index => $tag)
                                            <input type="hidden" value="{{$tag->id}}">
                                            <tr>
                                                <td scope="row">{{($tags->currentpage()-1) * $tags->perpage() + $index + 1 }}</td>
                                                <td>{{$tag->name}}</td>
                                                <td>{{$tag->slug}}</td>



                                                <td>
                                                    <div class="btn-group" role="group"
                                                         aria-label="Basic example">
                                                        <a href="{{route('admin.edit.tag',$tag->id)}}"
                                                           class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">{{__('admin/tag.Edit')}} </a>
                                                        <a href="{{route('admin.delete.tag',$tag->id)}}"
                                                           class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">{{__('admin/tag.Delete')}} </a>
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

              {{ $tags->links('vendor.pagination.custom') }}
            </div>


        </div>
    </div>
@stop

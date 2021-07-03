@extends('layouts.admin')
@section('title')
    Edit Shipping
@stop

@section('board')
    <style>
       .page-breadcrumb li a {
            color: blue !important;
        }
    </style>
    <main class="page-content">
        <div class="page-inner">
            <div class="page-title">
                <h3>Free Shipping</h3>
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index.html">Settings</a></li>
                        <li><a href="index.html">Shipping</a></li>
                        <li class="active">Free Shipping</li>
                    </ol>
                </div>
            </div>
            <div id="main-wrapper">
                <div class="row">

                        <div class="panel panel-white " style="margin: 40px">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">Shipping Form</h4>
                            </div>
                            <div class="panel-body">
                                <form action="{{route('admin.setting.shipping.store',$setting->id)}}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label for="exampleInputEmail1">Shipping Name</label>
                                                <input type="text" class="form-control" id="" value="{{$setting->value}}" name="value">
                                                @error('value')
                                                <span class="text-danger"> {{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Value</label>
                                                <input type="integer" class="form-control" id="" value="{{$setting->plain_value}}" name="plain-value">
                                                @error('plain-value')
                                                <span class="text-danger"> {{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Check me out
                                        </label>

                                    </div>
                                    <hr>
                                    <button type="submit" class="btn btn-success">
                                        Submit &nbsp; <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    </button>
                                    <button type="button" class="btn btn-warning">
                                        Cancel &nbsp; <i class="fa fa-close" aria-hidden="true"></i>
                                    </button>
                                </form>

                            </div>

                    </div>
            </div><!-- Main Wrapper -->
        </div><!-- Page Inner -->
    </main><!-- Page Content -->


@stop

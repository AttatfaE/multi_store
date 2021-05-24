@extends('layouts.admin')
@section('title')
    Dashboard
@stop

@section('board')

<div class="page-inner">
    <div class="page-title">
        <h3>Dashboard</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        <div class="info-box-stats">
                            <p class="counter">107,200</p>
                            <span class="info-box-title">Total Sells</span>
                        </div>
                        <div class="info-box-icon">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="info-box-progress">
                            <div class="progress progress-xs progress-squared bs-n">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        <div class="info-box-stats">
                            <p class="counter">340,230</p>
                            <span class="info-box-title">Total Orders</span>
                        </div>
                        <div class="info-box-icon">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="info-box-progress">
                            <div class="progress progress-xs progress-squared bs-n">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        <div class="info-box-stats">
                            <p>$<span class="counter">653,000</span></p>
                            <span class="info-box-title">Products Number</span>
                        </div>
                        <div class="info-box-icon">
                            <i class=" icon-handbag"></i>
                        </div>
                        <div class="info-box-progress">
                            <div class="progress progress-xs progress-squared bs-n">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        <div class="info-box-stats">
                            <p class="counter">47,500</p>
                            <span class="info-box-title">Vendors Number</span>
                        </div>
                        <div class="info-box-icon">
                            <i class="icon-users"></i>
                        </div>
                        <div class="info-box-progress">
                            <div class="progress progress-xs progress-squared bs-n">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row -->
        <div class="row">
            <div class=" col-lg-5">
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h4 class="panel-title">Latest Evaluations</h4>

                        <div class="panel-control">
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Reload" class="panel-reload"><i class="icon-reload"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Vendor</th>
                                <th>Product</th>
                                <th>Evaluation</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Cotsco</td>
                                <td>Smart TV Sumsung 65"</td>
                                <td>
                                    5/5
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                        </div>
                                    </div>
                                </td>


                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Winners</td>
                                <td>Armani Si Parfume 50 ml</td>
                                <td>
                                    1/5
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        </div>
                                    </div>
                                </td>

                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h4 class="panel-title">Latest Orders</h4>

                        <div class="panel-control">
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Reload" class="panel-reload"><i class="icon-reload"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table  table-bordered  table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Order Number</th>
                                <th>Vendor</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Total Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>000001</td>
                                <td>Cotsco</td>
                                <td>250.99 $</td>
                                <td><span class="label label-primary">In Progress</span></td>
                                <td>250.99 $</td>

                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>000002</td>
                                <td>Winners</td>
                                <td>134.49 $</td>
                                <td><span class="label label-success">Finished</span></td>
                                <td>134.49 $</td>

                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h4 class="panel-title">Project Stats</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive project-stats">
                            <table class="table">
                                <thead >
                                <tr>
                                    <th>#</th>
                                    <th>Project</th>
                                    <th>Status</th>
                                    <th>Manager</th>
                                    <th>Progress</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">452</th>
                                    <td>Mailbox Template</td>
                                    <td><span class="label label-info">Pending</span></td>
                                    <td>David Green</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                Action <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">327</th>
                                    <td>Wordpress Theme</td>
                                    <td><span class="label label-primary">In Progress</span></td>
                                    <td>Sandra Smith</td>
                                    <td>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">226</th>
                                    <td>Modern Admin Template</td>
                                    <td><span class="label label-success">Finished</span></td>
                                    <td>Chritopher Palmer</td>
                                    <td>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">178</th>
                                    <td>eCommerce template</td>
                                    <td><span class="label label-danger">Canceled</span></td>
                                    <td>Amily Lee</td>
                                    <td>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">157</th>
                                    <td>Website PSD</td>
                                    <td><span class="label label-info">Testing</span></td>
                                    <td>Nick Doe</td>
                                    <td>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">157</th>
                                    <td>Fronted Theme</td>
                                    <td><span class="label label-warning">Waiting</span></td>
                                    <td>David Green</td>
                                    <td>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Main Wrapper -->

</div><!-- Page Inner -->
@stop

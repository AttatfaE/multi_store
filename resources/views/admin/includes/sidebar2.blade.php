
    <style>
        .droplink .sub-menu  {

        }

        .droplink .sub-menu li {
            padding-left: 10px;

            background-color: #10113594;
        }

        .droplink .sub-menu li a{
           text-align: left !important;
            color: #CCCCCC !important;
        }
    </style>


<div class="page-sidebar sidebar fixed-sidebar" style="width: 18%;  ">
    <div class="page-sidebar-inner slimscroll" >
        <div class="sidebar-header" style="background-color:#10113594 !important; ">
            <div class="sidebar-profile">
                <a href="javascript:void(0);" id="profile-menu-link">
                    <div class="sidebar-profile-image">
                        <img src="{{asset('assets/admin/images/profile-menu-image.png')}}" class="img-circle img-responsive" alt="">
                    </div>
                    <div class="sidebar-profile-details">
                        <span>David Green<br><small>Art Director</small></span>
                    </div>
                </a>
            </div>
        </div>
        <ul class="menu accordion-menu" style="width: 100% ">
            <li class="active"><a href="index.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>{{__('admin/sidebar.Dashboard')}}</p></a></li>
            <li><a href="profile.html" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>{{__('admin/sidebar.Profile')}}</p></a></li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-envelope"></span><p>{{__('admin/sidebar.Mailbox')}}</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="inbox.html">{{__('admin/sidebar.Inbox')}}</a></li>
                    <li><a href="inbox-alt.html">{{__('admin/sidebar.InboxAlt')}}</a></li>
                    <li><a href="message-view.html">{{__('admin/sidebar.ViewMessage')}}</a></li>
                    <li><a href="message-view-alt.html">{{__('admin/sidebar.ViewMessageAlt')}}</a></li>
                    <li><a href="compose.html">{{__('admin/sidebar.Compose')}}</a></li>
                    <li><a href="compose-alt.html">{{__('admin/sidebar.ComposeAlt')}}</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button">
                    <span class="menu-icon glyphicon glyphicon-briefcase"></span><p>{{__('admin/sidebar.UIKits')}}</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="ui-alerts.html">{{__('admin/sidebar.Alerts')}}</a></li>
                    <li><a href="ui-buttons.html">{{__('admin/sidebar.Buttons')}}</a></li>
                    <li><a href="ui-icons.html">{{__('admin/sidebar.Icons')}}</a></li>
                    <li><a href="ui-typography.html">{{__('admin/sidebar.Typography')}}</a></li>
                    <li><a href="ui-notifications.html">{{__('admin/sidebar.Notifications')}}</a></li>
                    <li><a href="ui-grid.html">{{__('admin/sidebar.Grids')}}</a></li>
                    <li><a href="ui-tabs-accordions.html">{{__('admin/sidebar.TablesAndAccordions')}}</a></li>
                    <li><a href="ui-modals.html">{{__('admin/sidebar.Modals')}}</a></li>
                    <li><a href="ui-panels.html">{{__('admin/sidebar.Panels')}}</a></li>
                    <li><a href="ui-progress.html">{{__('admin/sidebar.ProgressBars')}}</a></li>
                    <li><a href="ui-sliders.html">{{__('admin/sidebar.Sliders')}}</a></li>
                    <li><a href="ui-nestable.html">{{__('admin/sidebar.Nestable')}}</a></li>
                    <li><a href="ui-tree-view.html">{{__('admin/sidebar.TreeView')}}</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#"  class="waves-effect waves-button">
                    <span class="menu-icon glyphicon glyphicon-cog"></span><p>{{__('admin/sidebar.Settings')}}</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li class="droplink"><a href="#"><p>{{__('admin/sidebar.Shipping')}}</p><span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li><a href="{{route('admin.setting.shipping.editShipping','free')}}">{{__('admin/sidebar.FreeShipping')}}</a></li>
                            <li class="droplink"><a href="#"><p>{{__('admin/sidebar.')}}Local Shipping</p><span class="arrow"></span></a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('admin.setting.shipping.editShipping','quebec')}}">{{__('admin/sidebar.QuebecShipping')}}</a></li>
                                    <li><a href="{{route('admin.setting.shipping.editShipping','canada')}}">{{__('admin/sidebar.CanadaShipping')}}</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('admin.setting.shipping.editShipping','international')}}">{{__('admin/sidebar.InternationalShipping')}}</a></li>

                        </ul>
                    </li>
                    <li><a href="#">{{__('admin/sidebar.Subscription')}}</a></li>
                    <li><a href="#">{{__('admin/sidebar.Cancellation')}}</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button">
                    <span class="menu-icon glyphicon glyphicon-th"></span><p>{{__('admin/sidebar.Layouts')}}</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="layout-blank.html">{{__('admin/sidebar.BlankPage')}}</a></li>
                    <li><a href="layout-boxed.html">{{__('admin/sidebar.BoxedPage')}}</a></li>
                    <li><a href="layout-horizontal-menu.html">{{__('admin/sidebar.HorizontalMenu')}}</a></li>
                    <li><a href="layout-horizontal-menu-boxed.html">{{__('admin/sidebar.Boxed&HorizontalMenu')}}</a></li>
                    <li><a href="layout-horizontal-menu-minimal.html">{{__('admin/sidebar.HorizontalMenuMinimal')}}</a></li>
                    <li><a href="layout-fixed-sidebar.html">{{__('admin/sidebar.FixedSidebar')}}</a></li>
                    <li><a href="layout-static-header.html">{{__('admin/sidebar.StaticHeader')}}</a></li>
                    <li><a href="layout-collapsed-sidebar.html">{{__('admin/sidebar.CollapsedSidebar')}}</a></li>
                    <li><a href="layout-compact-menu.html">{{__('admin/sidebar.CompactMenu')}}</a></li>
                    <li><a href="layout-hover-menu.html">{{__('admin/sidebar.HoverMenu')}}</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button">
                    <span class="menu-icon glyphicon glyphicon-list"></span><p>{{__('admin/sidebar.Tables')}}</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="table-static.html">{{__('admin/sidebar.StaticTables')}}</a></li>
                    <li><a href="table-responsive.html">{{__('admin/sidebar.ResponsiveTables')}}</a></li>
                    <li><a href="table-data.html">{{__('admin/sidebar.DataTables')}}</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button">
                    <span class="menu-icon glyphicon glyphicon-edit"></span><p>{{__('admin/sidebar.Forms')}}</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="form-elements.html">{{__('admin/sidebar.FormElements')}}</a></li>
                    <li><a href="form-wizard.html">{{__('admin/sidebar.FormWizard')}}</a></li>
                    <li><a href="form-upload.html">{{__('admin/sidebar.FileUpload')}}</a></li>
                    <li><a href="form-image-crop.html">{{__('admin/sidebar.ImageCrop')}}</a></li>
                    <li><a href="form-image-zoom.html">{{__('admin/sidebar.ImageZoom')}}</a></li>
                    <li><a href="form-select2.html">{{__('admin/sidebar.Select2')}}</a></li>
                    <li><a href="form-x-editable.html">{{__('admin/sidebar.X-editable')}}</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button">
                    <span class="menu-icon glyphicon glyphicon-stats"></span><p>{{__('admin/sidebar.Charts')}}</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="charts-sparkline.html">{{__('admin/sidebar.Sparkline')}}</a></li>
                    <li><a href="charts-rickshaw.html">{{__('admin/sidebar.Rickshaw')}}</a></li>
                    <li><a href="charts-morris.html">{{__('admin/sidebar.Morris')}}</a></li>
                    <li><a href="charts-flotchart.html">{{__('admin/sidebar.Flotchart')}}</a></li>
                    <li><a href="charts-chartjs.html">{{__('admin/sidebar.Chart.js')}}</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button">
                    <span class="menu-icon glyphicon glyphicon-log-in"></span><p>{{__('admin/sidebar.Login')}}</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="login.html">{{__('admin/sidebar.LoginForm')}}</a></li>
                    <li><a href="login-alt.html">{{__('admin/sidebar.LoginAlt')}}</a></li>
                    <li><a href="register.html">{{__('admin/sidebar.RegisterForm')}}</a></li>
                    <li><a href="register-alt.html">{{__('admin/sidebar.RegisterAlt')}}</a></li>
                    <li><a href="forgot.html">{{__('admin/sidebar.ForgotPassword')}}</a></li>
                    <li><a href="lock-screen.html">{{__('admin/sidebar.LockScreen')}}</a></li>
                </ul>
            </li>
            <li class="droplink"><a href="#" class="waves-effect waves-button">
                    <span class="menu-icon glyphicon glyphicon-map-marker"></span><p>{{__('admin/sidebar.Maps')}}</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="maps-google.html">{{__('admin/sidebar.GoogleMaps')}}</a></li>
                    <li><a href="maps-vector.html">{{__('admin/sidebar.VectorMaps')}}</a></li>
                </ul>
            </li>

        </ul>
    </div><!-- Page Sidebar Inner -->
</div><!-- Page Sidebar -->

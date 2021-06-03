@if(Session::has('success'))
<!--    <div class="row mr-2 ml-2">
        <button type="text" class="btn btn-lg btn-block btn-outline-success mb-2"
{{--                id="type-error">{{Session::get('success')}}--}}
        </button>
    </div>-->
    <div class="row" >
        <div class="col-md-8 offset-2" id="success-alert">
            <div class="alert  alert-success alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">
                <span class="alert-icon"><i class="la la-thumbs-o-up"></i></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="text-center ">
                     <strong>Well done!</strong> {{Session::get('success')}}
                </div>

            </div>
        </div>

    </div>

@endif
@section('script')
    <script>
        $("#success-alert").fadeTo(3000, 1000).fadeOut(500, function(){
            $("#success-alert").fadeOut(1000);
        });
    </script>
@stop

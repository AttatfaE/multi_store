
@if(Session::has('error'))
    <div class="row " id="danger-alert-div">
        <div class="col-md-8 offset-2" >
            <div class="alert  alert-danger alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">
                <span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="text-center ">
                     <strong>Oh snap! </strong> {{Session::get('error')}}
                </div>

            </div>
        </div>

    </div>
@endif
@section('script')
    <script>
        $('#danger-alert-div').fadeTo(3000, 1000).fadeOut(500, function(){
            $('#danger-alert-div').fadeOut(1000);
        });
    </script>
@stop

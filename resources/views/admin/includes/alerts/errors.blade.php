<style>
    .btn-outline-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
        font-size: 18px;
    }
</style>
@if(Session::has('error'))
    <div class="row mr-2 ml-2" >
        <button type="text" class="btn btn-lg btn-block btn-outline-danger mb-2"

                id="type-error">{{Session::get('error')}}
        </button>
    </div>
@endif

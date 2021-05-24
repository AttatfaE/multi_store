@if(Session::has('success'))
    <style>
        .btn-outline-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
            font-size: 18px;
        }
    </style>
    <div class="row ">
        <button type="text" class="btn btn-lg btn-block btn-outline-success mb-2" role="alert"
                id="type-error">{{Session::get('success')}}
        </button>
    </div>
@endif

<?php
    const PAGINATION_COUNT = 10;

    function upload_image($folder, $image){
        $image->store('/',$folder);
        $filename = $image->hashName();
        $path = $folder . '/'. $filename;
        return $path;
    }

    function slice($path){
        $slice = Str::after($path, 'http://localhost:8000/');
        return $slice;
    }


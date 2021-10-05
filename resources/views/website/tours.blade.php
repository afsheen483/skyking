<?php
$page = 'gallery';

?>
@extends('layouts.header')
@section('site')
    

<div class="container">
    
        @foreach ($data as $data)
            
        @endforeach
        <div class="tour">
            <h1> {{ $data->three_d_model_name }} </h1>
            {{ $data->three_d_model_code }}
        </div>
        <br><br>
    
</div>
@endsection
{{-- @extends('layouts.footer1') --}}


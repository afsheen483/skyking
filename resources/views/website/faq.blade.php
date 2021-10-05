<?php
$page = 'contact';
?>
@extends('layouts.header')

@section('site')


<style>
    .card-body, .card-header{
        background-color: black !important;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="row mb-5">
                <div class="col-12 ">
                    <h2 class="site-section-heading text-center">Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion" id="accordionExample">
        @foreach ($datas as $data)
            
       
        <div class="card">
            <div class="card-header" id="heading{{ $data->id }}">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{ $data->id }}"
                            aria-expanded="true" aria-controls="collapse{{ $data->id }}">
                        {{ $data->question }}
                    </button>
                </h2>
            </div>

            <div id="collapse{{ $data->id }}" class="collapse" aria-labelledby="heading{{ $data->id }}" data-parent="#accordionExample">
                <div class="card-body">
                    {{ $data->answer }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection
{{-- @extends('layouts.footer1') --}}



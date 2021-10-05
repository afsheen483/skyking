<?php
$page = 'gallery';

?>
@extends('layouts.header')
@section('site')
    

    <style>
        .centered {
            position: absolute;
            top: 40%;
            left: 40%;
        }
    </style>


@if ($datas[0] == '')
<div class='container my-5'><h1>No data found</h1></div><br><br><br><br><br><br><br>
@else


    
    <div class="site-section" data-aos="fade">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="row mb-5">
                        <div class="col-12 ">
                            <h2 class="site-section-heading text-center">Videos Gallery</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($datas as $data)
            
      
            <div style="display:none;" id="video{{ $data->id }}">
                <video class="lg-video-object lg-html5" controls preload="none">
                    <source src="{{ url('/'.$data->media_file) }}" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
            </div>

            @endforeach

        <div class="container">
            <div id="html5-videos" class="row">
                <?php
                // $query = "SELECT * FROM `media` WHERE category_id = 3";
                // $result = mysqli_query($conn, $query);
                //while ($row = $result->fetch_assoc()){ ?>
                @foreach ($datas as $data)
                    <div class="col-md-4 m-2" data-poster="{{ url('/'.$data->thumbnail) }}"
                         data-sub-html="<h4>{{ $data->media_name }}</h4><p>{{ $data->media_desc }}</p>"
                         data-html="#video{{ $data->id }}">
                        <img style="width: 100%" src="{{ url('/'.$data->thumbnail) }}"/>
                        <img src="{{ asset('web/images/video-play.png') }}" class="centered" alt="">
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
    @endif

@endsection
{{-- @extends('layouts.footer1') --}}
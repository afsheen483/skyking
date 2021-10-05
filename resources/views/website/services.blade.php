<?php
$page = 'services';
?>
@extends('layouts.header')
@section('site')
    

    <div class="site-section" data-aos="fade">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="row mb-5">
                        <div class="col-12 ">
                            <h2 class="site-section-heading text-center">My Services</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5">
                    <div class="h-100 p-4 p-lg-5 site-block-feature-7">
                        <span class="icon flaticon-camera display-3 text-primary mb-4 d-block"></span>
                        <h3 class="text-white h4">Ground Photography</h3>
                        <p> Ground photograph is taken when a camera is held level to the ground.
                            When ground photograph is taken the axis of the camera is placed horizontally toward the object.</p>
                        <p> <a href="/single/1" class="btn btn-primary">See all photos</a> </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5">
                    <div class="h-100 p-4 p-lg-5 site-block-feature-7">
                        <i style="width: 70px; height: 70px; margin: 0 auto;" class="icon display-3 text-primary mb-4 d-block" data-feather="aperture"></i>
                        <h3 class="text-white h4">Videography</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum
                            debitis.</p>
                        <p> <a href="/wvideos" class="btn btn-primary">See all videos</a> </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5">
                    <div class="h-100 p-4 p-lg-5 site-block-feature-7">
                        <i style="width: 70px; height: 70px; margin: 0 auto;" class="icon display-3 text-primary mb-4 d-block" data-feather="disc"></i>
                        <h3 class="text-white h4">360 Virtual Tours</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum
                            debitis.</p>
                        <p> <a href="w_tours" class="btn btn-primary">See all tours</a> </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5">
                    <div class="h-100 p-4 p-lg-5 site-block-feature-7">
                        <i style="width: 70px; height: 70px; margin: 0 auto;" class="icon display-3 text-primary mb-4 d-block" data-feather="cloud"></i>
                        <h3 class="text-white h4">Aerial Photography</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum
                            debitis.</p>
                        <p> <a href="/single/4" class="btn btn-primary">See all photos</a> </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5">
                    <div class="h-100 p-4 p-lg-5 site-block-feature-7">
<!--                        <span class="icon flaticon-eiffel-tower display-3 text-primary mb-4 d-block"></span>-->
                        <i style="width: 70px; height: 70px; margin: 0 auto;" class="icon display-3 text-primary mb-4 d-block" data-feather="command"></i>
                        <h3 class="text-white h4">Construction Mapping</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum
                            debitis.</p>
                        <p> <a href="/single/6" class="btn btn-primary">See all photos</a> </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5">
                    <div class="h-100 p-4 p-lg-5 site-block-feature-7">
                        <i style="width: 70px; height: 70px; margin: 0 auto;" class="icon display-3 text-primary mb-4 d-block" data-feather="map"></i>
                        <h3 class="text-white h4">OrthoMosaics</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum
                            debitis.</p>
                        <p> <a href="/single/8" class="btn btn-primary">See all photos</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    {{-- @extends('layouts.footer1') --}}

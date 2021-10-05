@extends('layouts.header')
<?php
$page = 'home';
?>
@section('site')
    

    <div class="container-fluid" data-aos="fade" data-aos-delay="500">
        <div class="row">
            <div class="col-lg-4">
                <div class="image-wrap-2">
                    <div class="image-info">
                        <h2 class="mb-3">Ground photo</h2>
                        <a href="/single/1" class="btn btn-outline-white py-2 px-4">More Photos</a>
                    </div>
                    <img src="https://images.unsplash.com/photo-1554496398-1c4db5e7bed3?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="image-wrap-2">
                    <div class="image-info">
                        <h2 class="mb-3">360 Virtual Tours</h2>
                        <a href="w_tours" class="btn btn-outline-white py-2 px-4">Check Tours</a>
                    </div>
                    <img src="https://images.unsplash.com/photo-1553774276-c63389fba065?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=516&q=80" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="image-wrap-2">
                    <div class="image-info">
                        <h2 class="mb-3">Videos</h2>
                        <a href="wvideos" class="btn btn-outline-white py-2 px-4">More Videos</a>
                    </div>
                    <img src="https://images.unsplash.com/photo-1518930259200-3e5b29f42096?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=502&q=80" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="image-wrap-2">
                    <div class="image-info">
                        <h2 class="mb-3">Aerial Photos</h2>
                        <a href="/single/4" class="btn btn-outline-white py-2 px-4">More Photos</a>
                    </div>
                    <img src="https://images.unsplash.com/photo-1535478372499-9d1e5130bd92?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=502&q=80" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="image-wrap-2">
                    <div class="image-info">
                        <h2 class="mb-3">Services</h2>
                        <a href="/single/5" class="btn btn-outline-white py-2 px-4">More Photos</a>
                    </div>
                    <img src="https://images.unsplash.com/photo-1610886236389-8ca54ecafef9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="image-wrap-2">
                    <div class="image-info">
                        <h2 class="mb-3">Construction</h2>
                        <a href="/single/6" class="btn btn-outline-white py-2 px-4">More Photos</a>
                    </div>
                    <img src="https://images.unsplash.com/photo-1562118511-e0aa3d7b0373?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="image-wrap-2">
                    <div class="image-info">
                        <h2 class="mb-3">Promotion</h2>
                        <a href="/single/7" class="btn btn-outline-white py-2 px-4">More Photos</a>
                    </div>
                    <img src="https://images.unsplash.com/photo-1590813657651-02fad1cd0365?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="image-wrap-2">
                    <div class="image-info">
                        <h2 class="mb-3">OrthoMosaics</h2>
                        <a href="/single/8" class="btn btn-outline-white py-2 px-4">More Photos</a>
                    </div>
                    <img src="https://images.unsplash.com/photo-1565402149395-65551328334c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=488&q=80" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="image-wrap-2">
                    <div class="image-info">
                        <h2 class="mb-3">Architecture</h2>
                        <a href="/single/9" class="btn btn-outline-white py-2 px-4">More Photos</a>
                    </div>
                    <img src="https://images.unsplash.com/photo-1538378918848-29dbc0910082?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=508&q=80" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>

    </div>
    @endsection
{{-- @extends('layouts.footer1') --}}
{{-- 
@section('footer')
<p>

    Copyright &copy;
    <script>document.write(new Date().getFullYear());</script>
    - All rights reserved
</p>
@endsection --}}
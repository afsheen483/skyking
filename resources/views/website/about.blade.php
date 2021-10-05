<?php
$page = 'about';
?>
@extends('layouts.header')
@section('site')
    

    <div class="site-section" data-aos="fade">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="row mb-5">
                        <div class="col-12 ">
                            <h2 class="site-section-heading text-center">About</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-7">
                    <img src="{{ asset('web/images/img_2.jpg') }}" alt="Images" class="img-fluid">
                </div>
                <div class="col-md-4 ml-auto">
                    <h3 class="text-white">About Kevin</h3>
                    <p>Sky King Images has a fresh take on terrestrial and aerial photography and videography. We support those aspiring photographers by offering drone pilot training sessions in
                        New Mexico.</p><br>
                    <p>Kevin Lederer has been flying fixed wing RC aircraft on and off since 1984. A drone U elite pilot, he has been flying sUAS since 2012. He has always had a camera in his hand as a hobbyist and since 2015 as a professional.
                        Also, he has attended multiple training courses to include the DJI Photography Course. </p>
                    <br><p>
                        He provided photography and videography services for the likes of Top Golf, Book Publishing Companies, and Salon 94 production out of New York City. He has flown in multiple locations from California to Miami. He was privileged to provide aerial videography for one of TIME Magazine’s top 100 influential people of 2018, artist
                        Judy Chicago.
                    </p><br>
                    <h4>Kevin’s Pilot Training</h4>
                    <p>Kevin believes classroom and hands-on learning are the most accurate and accommodating ways to teach. When asked about his favorite part of flying, Kevin's answer is, "Instructing people to fly in a safe legal manner, while having fun." He enjoys watching how students grow in confidence and skill level.
                        "It is fantastic to watch a student’s face full of a smile after they accomplish a task and skill level above what they felt they could perform." Kevin looks forward to meeting new people wanting to learn the ins and outs of
                        flying UAS.</p>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row site-section">
                <div class="col-md-2 col-lg-2 col-xl-2"></div>
                <div class="col-md-8 col-lg-8 col-xl-8 text-center mb-5">
                    <img src="{{ asset('web/images/person_1.jpg') }}" alt="Image" class="img-fluid w-25 rounded-circle mb-4">
                    <h2 class="text-white font-weight-light mb-4">Kevin Lederer</h2>
                    <p class="mb-4">Professional Aerial Photographer and High definition Video for Real Estate, Gatherings, Events and Pr</p>
                    <p>
                        <a href="#" class="pl-0 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2"></div>
            </div>
        </div>
    </div>
    @endsection
{{-- @extends('layouts.footer1') --}}
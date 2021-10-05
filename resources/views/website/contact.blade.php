<?php
$page = 'contact';
?>
@extends('layouts.header')
@section('site')
    

<div class="site-section" data-aos="fade">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="row mb-5">
                    <div class="col-12 ">
                        <h2 class="site-section-heading text-center">Contact</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mb-5">
                <form action="#" method="post">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="text-white" for="fname">Full Name</label>
                            <input type="text" name="name" id="fname" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-white" for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-white" for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-white" for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="7" class="form-control"
                                      placeholder="Write your notes or questions here..." required></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" name="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 ml-auto">
                <div class="mb-3">
                    <p class="mb-0 font-weight-bold text-white">Phone</p>
                    <p class="mb-4"><a href="#">505-720-9356</a></p>
                    <p class="mb-0 font-weight-bold text-white">Email Address</p>
                    <p class="mb-0"><a href="mailto:info@skykingimages.us"><span class="__cf_email__">info@skykingimages.us</span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- @extends('layouts.footer1') --}}
<?php
// if (isset($_POST['submit'])){
//     $name = $_POST['name'];
//     $subject = $_POST['subject'];
//     $message = $_POST['message'];

//     $to = 'info@skykingimages.us';

//     $email = $_POST['email'];
//     $headers = "From: " .  $email .  "\r\n";
//     $headers .= "Reply-To: " .  $email .  "\r\n";
//     $headers .= "Return-Path: " .  $email .  "\r\n";


    // mail($to,$subject,$message,$headers);
//     echo "<script>
//     Swal.fire(
//         'Thank you!',
//         'We have received your message. We will contact you back soon!',
//         'success'
//     );
// </script>";
// }
?>
@php
    $data = 0;
@endphp
@if ($data == 1)
@php
    echo "<script>
        Swal.fire(
            'Thank you!',
            'We have received your message. We will contact you back soon!',
            'success'
        );
    </script>";
@endphp

@endif

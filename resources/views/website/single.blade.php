<?php
$page = 'gallery';
?>
@extends('layouts.header')

<?php
//check if there is not GET variable
// if (!isset($_GET['id'])) {
//     header('Location: view.php');
//     die();
// }

// $id = $_GET['id'];

// $res = mysqli_query($conn , "SELECT * FROM category WHERE category_id = $id LIMIT 1");
// $cat = $res->fetch_assoc();

// $query = "SELECT * FROM `media` WHERE category_id = $id";
// $result = mysqli_query($conn, $query);
// if ($result->num_rows < 1) {
//     echo "<div class='container my-5'><h1>No data found</h1></div><br><br><br><br><br><br><br>";
// } else {
    ?>
    @section('site')
    @if ($data1 == '' || $data1 == null)
    <div class='container my-5'><h1>No data found</h1></div><br><br><br><br><br><br><br>
    @else
    <div class="site-section" data-aos="fade">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="row mb-5">
                        <div class="col-12 ">
                            <h2 class="site-section-heading text-center">{{ $data[0]->category_name }} Gallery</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="lightgallery">
               
                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade"
                         data-src="{{ url('/'.$data1[0]->media_file) }}"
                         data-sub-html="<h4>{{ $data1[0]->media_name }}</h4><p>{{ $data1[0]->media_desc }}</p>">
                        <a href="#"><img
                                    src="{{ url('/'.$data1[0]->media_file) }}"
                                    alt="IMage" class="img-fluid"></a>
                    </div>
                
            </div>
        </div>
    </div>
    @endif
    @endsection

{{-- @extends('layouts.footer1') --}}

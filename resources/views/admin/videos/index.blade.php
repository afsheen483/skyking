@extends('layouts.master')

@section('title')
    Videos
@endsection

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <h1 class="h3 mb-2 text-gray-800">Videos</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ url('video_create',['id'=>0]) }}" class="btn btn-primary" style="float: right">+ Add Video</a>

                <h6 class="m-0 font-weight-bold text-primary">Videos data</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="mytable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Video</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                     @foreach ($data as $data)
                         
                   
                            <tr>
                                <td><img height="60" width="80" src="{{ url('/'.$data->thumbnail) }}" alt="thumbnail"></td>
                                <td>{{ $data->media_name }}</td>
                                <td>{{ $data->media_desc}}</td>

                                <td width="25%">
                                    <a href="{{ url('video_create',['id'=>$data->id]) }}" class="btn btn-warning">Edit</a>
                        
                                    <a href="{{ url('video_delete',['id'=>$data->id]) }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('delete').submit()" class="btn btn-danger">Delete</a>
                                                  <form id="delete" action="{{ url('video_delete',['id'=>$data->id]) }}" method="POST" class="d-none">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    @endsection


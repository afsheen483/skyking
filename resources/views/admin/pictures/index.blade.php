@extends('layouts.master')
@section('title')
    Pictures
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Images</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ url('picture_create',['id'=>0]) }}" class="btn btn-primary" style="float: right">+ Add Picture</a>
            <h6 class="m-0 font-weight-bold text-primary">Images data</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="mytable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                        @foreach ($data as $data)
                        <tr>
                            <td>
                                <img src="{{ url('/'.$data->media_file) }}" alt="image" height="50" width="80">
                            </td>
                            <td>{{ $data->media_name }}</td>
                            <td>{{ $data->media_desc}}</td>
                            <td>{{ $data->category_name }}</td>
                            <td width="25%">
                                <a href="{{ url('picture_create',['id'=>$data->id]) }}" class="btn btn-warning">Edit</a>
                        
                                <a href="{{ url('picture_delete',['id'=>$data->id]) }}"
                                onclick="event.preventDefault();
                                              document.getElementById('delete').submit()" class="btn btn-danger">Delete</a>
                                              <form id="delete" action="{{ url('picture_delete',['id'=>$data->id]) }}" method="POST" class="d-none">
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
@endsection
<script>

 </script>

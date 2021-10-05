@extends('layouts.master')

@section('title')
    Tours
@endsection

@section('content')

   <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">3D Tours</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">3D Tours data</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="mytable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach ($data as $data)
                                    
                                
                            <tr>
                                <td>{{ $data->model_name }}</td>
                                <td><a href="{{ $data->code }}">Code</a></td>
                                <td width="25%">
                                    <a href="{{ url('tour_create',['id'=>$data->id]) }}" class="btn btn-warning">Edit</a>
                        
                                    <a href="{{ url('tour_delete',['id'=>$data->id]) }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('delete').submit()" class="btn btn-danger">Delete</a>
                                                  <form id="delete" action="{{ url('tour_delete',['id'=>$data->id]) }}" method="POST" class="d-none">
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


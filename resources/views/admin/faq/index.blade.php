@extends('layouts.master')


@section('title')
    FAQ
@endsection

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">FAQ</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">FAQs data</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                       @foreach ($data as $data)
                            <tr>
                                <td>{{ $data->question }}</td>
                                <td>{{ $data->answer}}</td>
                                <td width="25%">
                                   
                                    <a href="{{ url('faq_create',['id'=>$data->id]) }}" class="btn btn-warning">Edit</a>
                        
                                    <form id="delete" action="{{ url('faq_delete',['id'=>$data->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" style="margin-left:20%;margin-top:-22%">Delete</button>
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
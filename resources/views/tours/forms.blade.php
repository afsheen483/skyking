@extends('layouts.master')


@section('title')
    Add Tour
@endsection
@section('content')

<div class="container">
   @if (request()->id > 0)
   <h2>Edit Tour</h2> 
   @else
   <h2>Add Tour</h2>
   @endif
    <br>
    @if (request()->id > 0)
    <form class="add" enctype="multipart/form-data" method="post" action="{{ url('tour_update',['id'=>$data->id]) }}">
        @csrf
        @method('PUT')
    @else
    <form class="add" enctype="multipart/form-data" method="post" action="{{ url('tour_insert') }}">
        @csrf
    @endif
        <div class="row">
            <div class="form-group col-6">
                <label for="name">Name*</label>
                <input type="text" class="form-control" maxlength="500" name="name" id="name"
                       placeholder="Enter the little info the 3D model." required value="{{ is_null($data->three_d_model_name) ? '' : $data->three_d_model_name }}">
            </div>

            <div class="col-6 form-group">
                <label for="textForDesc">
                    Embedded code
                </label>
                <textarea placeholder="Enter a embedded code copied from the Kuula. Copy the code of 'Embed HTML'
                                        OR 'Embed JS'."
                          class="form-control" required name="code" id="textForDesc" rows="4"
                          maxlength="1000">{{ is_null($data->three_d_model_code) ? '' : $data->three_d_model_code}}</textarea>
            </div>
        </div>
        <br>
        <input type="submit" name="submit" class="btn btn-primary">
    </form>
</div>
    
@endsection


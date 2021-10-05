@extends('layouts.master')

@section('title')
    Add Pictures
@endsection

@section('content')
<div class="container">
    <h2>Add Image</h2>
    <br>
    @if (request()->id >0)
    <form action="{{ url('picture_update',['id'=>$data->id]) }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PUT')
    @else
    <form action="{{ url('picture_insert') }}" enctype="multipart/form-data" method="post">
        @csrf
    @endif
   
        <div class="row">
            <div class="form-group col-6">
                <label for="name">Name*</label>
                <input type="text" class="form-control" maxlength="500" name="name" id="name"
                       placeholder="Enter the main header for image" required value="{{ is_null($data->media_name)?'':$data->media_name }}">
            </div>

            <div class="col-6 form-group">
                <label for="textForDesc">
                    Description
                </label>
                <textarea placeholder="Enter a little description about the image to show it on the website."
                          class="form-control" required name="desc" id="textForDesc" rows="2" maxlength="1000">{{ is_null($data->media_desc) ? '' : $data->media_desc }}</textarea>
            </div>
            <div class="form-group col-6">
                <label for="n_states">Select the catefory you would like to list under? </label>
                <select data-placeholder="Select Category..." required class="chosen-select form-control"
                        name="category" id="category">
                        <option vacategorylue="">Select Category</option>
                        @foreach ($category_array as $array)
                            @if ($data->category_id == $array->id)
                                 <option value="{{ $array->id }}" selected>{{ $array->category_name }}</option>
                            @else
                                <option value="{{ $array->id }}">{{ $array->category_name }}</option>
                            @endif
                        @endforeach
                </select>
            </div>
            <div class="form-group col-6">
                @if (request()->id > 0)
                <label for="exampleFormControlFile1">Update Image. Do not select any image if you do not want to change.</label>
                <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1" accept="image/*">
                @else
                <label for="exampleFormControlFile1">Add image</label>
                <input name="image" required type="file" class="form-control-file" id="exampleFormControlFile1" accept="image/*">
                @endif
               
            </div>
        </div>
        <br>
        <input type="submit" name="submit" class="btn btn-primary">
    </form>
</div>
@endsection


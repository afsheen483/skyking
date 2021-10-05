@extends('layouts.master')

@section('title')
    Add Video
@endsection

@section('content')
    

<div class="container">
    <h2>Add Video</h2>
    <br>
   @if (request()->id > 0)
   <form class="add" enctype="multipart/form-data" method="post" action="{{ url('video_update',['id'=>$data->id]) }}">
    @csrf
    @method('PUT')
   @else
   <form class="add" enctype="multipart/form-data" method="post" action="{{ url('video_insert') }}">
    @csrf
   @endif
        <div class="row">
            <div class="form-group col-6">
                <label for="name">Name*</label>
                <input type="text" class="form-control" maxlength="500" name="name" id="name"
                       placeholder="Enter the main header for video" required value="{{ is_null($data->media_name)?'':$data->media_name }}">
            </div>

            <div class="col-6 form-group">
                <label for="textForDesc">
                    Description
                </label>
                <textarea placeholder="Enter a little description about the video to show it on the website."
                          class="form-control" required name="desc" id="textForDesc" rows="2"
                          maxlength="1000">{{ is_null($data->media_desc) ? '' : $data->media_desc }}</textarea>
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
            <div class="col-6 form-group">
                @if (request()->id > 0)
                <label for="exampleFormControlFile1">Update Video. Do not select any video if you do not want to change.</label>
                <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1" accept="video/mp4,video/x-m4v,video/*">
                @else
                <label for="exampleFormControlFile1">Add Video</label>
                <input name="video" required type="file" class="form-control-file" id="exampleFormControlFile1"
                       accept="video/mp4,video/x-m4v,video/*">
                @endif
                
            </div>

            @if (request()->id == 0)
            <div class="col-6 form-group">
                <label for="exampleFormControlFile2">Add Video Thumbnail</label>
                <input name="thumbnail" required type="file" class="form-control-file" id="exampleFormControlFile2"
                       accept="image/*">
            </div>
            @endif
           
        </div>
        <br>
        <input type="submit" name="submit" class="btn btn-primary">
    </form>
</div>
<br><br><br><br><br>
@endsection


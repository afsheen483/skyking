@extends('layouts.master')

@section('title')
    FAQ
@endsection


@section('content')

<div class="container">
   @if (request()->id > 0)
    <h2>Edit FAQ for your website</h2>
   @else
   <h2>Add FAQ for your website</h2>
   @endif
    <br>
   @if (request()->id > 0)
   <form class="add" enctype="multipart/form-data" method="post" action="{{ url('faq_update',['id'=>$data->id]) }}">
    @csrf
    @method('PUT')
   @else
   <form class="add" enctype="multipart/form-data" method="post" action="{{ url('faq_insert') }}">
    @csrf
   @endif
        <div class="row">
            <div class="form-group col-12">
                <label for="name">Question</label>
                <textarea  class="form-control" maxlength="2000" name="question"
                           placeholder="Enter the question of FAQs" required>{{ is_null($data->question) ? '' : $data->question }}</textarea>
            </div>

            <div class="col-12 form-group">
                <label for="textForDesc">
                    Answer
                </label>
                <textarea placeholder="Enter the answer of FAQs"
                          class="form-control" required name="answer" rows="4">{{ is_null($data->answer) ? '' : $data->answer }}</textarea>
            </div>
        </div>
        <br>
        <input type="submit" name="submit" class="btn btn-primary">
    </form>
</div>
    
@endsection


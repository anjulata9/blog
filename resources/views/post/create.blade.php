@extends('layouts.app')

@section('content')

<!-- {{ Form::open(array('url' => 'post/store',"enctype"=>"multipart/form-data")) }} -->
<!-- {{ Form::open(['route' => 'post.store']) }} -->
<!-- {{ Form::open(['action' => 'PostsController@store']) }} -->
<form class="form-horizontal" role="form" method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data" file=true>
 
                        {{ csrf_field() }}
	<div class="form-group">
	   {{ Form::label('post_text', 'Enter Post',['class' => 'form-control','style'=>'border:0px;'])}}
	   {{ Form::textarea('post_text',null,['size' => '30x5','class' => 'form-control','placeholder'=>'Write what is in your mind.'])}}	   
    </div>
    <div class="form-group">
    	<img src="" id="profile-img-tag" width="200px" />
    </div>

    <div class="form-group">
   		{{Form::file('post_image',[ "name"=>"file","id"=>"profile-img"])}}
   		{{Form::submit(' Post ',['class'=>'btn btn-success btn-sm pull-right'])}}
    </div>
    
</form>
<!-- {{ Form::close() }} -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });
</script>

@endsection
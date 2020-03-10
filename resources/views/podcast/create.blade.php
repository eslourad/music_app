@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                New Podcast
            </div>
            <div class="card-body">
                @if(session()->has('message.level'))
                    <div class="alert alert-{{ session('message.level') }}"> 
                    {!! session('message.content') !!}
                    </div>
                @endif
                <form method="POST" action="{{ route('podcast/store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control @if ($errors->has('title')) is-invalid @endif" id="title" placeholder="enter title" value="{{ old('title') }}">
                    @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                    @endif           
                </div>
                <div class="form-group">
                    <label for="host">Host</label>
                    <input type="text" name="host" class="form-control @if ($errors->has('host')) is-invalid @endif" id="host" placeholder="enter host" value="{{ old('host') }}">
                    @if ($errors->has('host'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('host') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="thumbnail">Thumbnail</label>
                    <div class="">
                    <input type="file" name="thumbnail" class=" @if ($errors->has('thumbnail')) is-invalid @endif"" id="thumbnail" accept=".jpg,.jpeg,.png,.svg" value="{{ old('thumbnail') }}">
                    </div>
                    @if ($errors->has('thumbnail'))
                    <span class="invalid-feedback" role="alert" style="display:block;">
                        <strong>{{ $errors->first('thumbnail') }}</strong>
                    </span>
                    @endif
                    <span class="invalid-feedback" id="imgError" role="alert" style="display:none;">
                    <strong>Format is not allowed</strong>
                    </span>
                </div>
                <div class="form-group">
                    <label for="podcast_file">Podcast File</label>
                    <div>
                    <input type="file" name="file" class=" @if ($errors->has('file')) is-invalid @endif" id="podcast_file" accept=".mp3" value="{{ old('file') }}">
                    </div>
                    @if ($errors->has('file'))
                    <span class="invalid-feedback" role="alert" style="display:block;">
                        <strong>{{ $errors->first('file') }}</strong>
                    </span>
                    @endif
                    <span class="invalid-feedback" id="musicError" role="alert" style="display:none;">
                    <strong>Format is not allowed</strong>
                    </span>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control @if ($errors->has('description')) is-invalid @endif" name="description" id="description" rows="10">{{old('description')}}</textarea>
                    @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
</style>
<script>
    // image upload restriction
  var file = document.getElementById('thumbnail');
  var error = document.getElementById('imgError');
  
  file.onchange = function(e) {
    var ext = this.value.match(/\.([^\.]+)$/)[1];
    switch (ext) {
      case 'JPG':
      case 'JPEG':
      case 'SVG':
      case 'PNG':
      case 'jpg':
      case 'jpeg':
      case 'svg':
      case 'png':
        error.style.display = "none"
        break;
      default:
        error.style.display = "block"
        this.value = '';
    }
  };

  // music upload restriction
  var file2 = document.getElementById('podcast_file');
  var error2 = document.getElementById('musicError');

  file2.onchange = function(e) {
    var ext = this.value.match(/\.([^\.]+)$/)[1];
    switch (ext) {
      case 'MP3':
      case 'mp3':
        error2.style.display = "none"
        break;
      default:
        error2.style.display = "block"
        this.value = '';
    }
  };
</script>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
    <div class="col-12">
    <div class="card">
      <div class="card-header">
        New Music
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('music') }}" enctype="multipart/form-data">
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
            <label for="artist">Artist</label>
            <input type="text" name="artist" class="form-control @if ($errors->has('artist')) is-invalid @endif" id="artist" placeholder="enter artist" value="{{ old('artist') }}">
            @if ($errors->has('artist'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('artist') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group">
            <label for="album">Album Name</label>
            <input type="text" name="album" class="form-control @if ($errors->has('album')) is-invalid @endif" id="album" placeholder="enter album name" value="{{ old('album') }}">
            @if ($errors->has('album'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('album') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group">
            <label for="album_image">Album Image</label>
            <div class="">
              <input type="file" name="album_image" class=" @if ($errors->has('album_image')) is-invalid @endif"" id="album_image" accept=".jpg,.jpeg,.png,.svg" value="{{ old('album_image') }}">
            </div>
            @if ($errors->has('album_image'))
              <span class="invalid-feedback" role="alert" style="display:block;">
                  <strong>{{ $errors->first('album_image') }}</strong>
              </span>
            @endif
            <span class="invalid-feedback" id="imgError" role="alert" style="display:none;">
              <strong>Format is not allowed</strong>
            </span>
          </div>
          <div class="form-group">
            <label for="music_file">Music File</label>
            <div>
              <input type="file" name="file" class=" @if ($errors->has('file')) is-invalid @endif" id="music_file" accept=".mp3" value="{{ old('file') }}">
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
            <label for="lyrics">Lyrics</label>
            <textarea class="form-control @if ($errors->has('lyrics')) is-invalid @endif" name="lyrics" id="lyrics" rows="10">{{old('lyrics')}}</textarea>
            @if ($errors->has('lyrics'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('lyrics') }}</strong>
              </span>
            @endif
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    </div>
  </div>
</div>
<style>
  .has-error {
    border: 1px solid red !important;
  }
  .hint {
    font-size: 0.8em;
    color: #9E9E9E;
  }
</style>
<script>
  // image upload restriction
  var file = document.getElementById('album_image');
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
  var file2 = document.getElementById('music_file');
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

@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
    <div class="col-12">
    <div class="card">
      <div class="card-header">
        Edit Music
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('musicedit') }}" enctype="multipart/form-data">
          @csrf
          <input type="text" name="id" value="{{ old('id', $music->id) }}" hidden/>
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control @if ($errors->has('title')) is-invalid @endif" id="title" placeholder="enter title" value="{{ old('title', $music->title) }}">
            @if ($errors->has('title'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('title') }}</strong>
              </span>
            @endif           
          </div>
          <div class="form-group">
            <label for="artist">Artist</label>
            <input type="text" name="artist" class="form-control @if ($errors->has('artist')) is-invalid @endif" id="artist" placeholder="enter artist" value="{{ old('artist', $music->artist) }}">
            @if ($errors->has('artist'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('artist') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group">
            <label for="album">Album Name</label>
            <input type="text" name="album" class="form-control @if ($errors->has('album')) is-invalid @endif" id="album" placeholder="enter album name" value="{{ old('album', $music->album_name) }}">
            @if ($errors->has('album'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('album') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group">
            <label for="album_image">Album Image</label>
            <div class="">
              <div id="showyimage">
                <img src="{{URL::asset('/image/cover/' . $music->album_image)}}" alt="album" hiegh="100" width="100" />
                <button type="button" class="ml-4 btn btnEdit" onClick="showAlbum()">CHANGE</button>
              </div>
              <input type="file" name="album_image" class="mt-2 @if ($errors->has('album_image')) is-invalid @endif"" id="album_image" accept=".jpg,.jpeg,.png,.svg" disabled>
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
              <div id="showymusic">
                <audio controls style="width:200px" controlsList="nodownload">
                  <source src="{{URL::asset('/mp3/' . $music->file)}}" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>
                <button type="button" class="ml-4 btn btnEdit negaTop" onClick="showMusic()">CHANGE</button>
              </div>
              <input type="file" name="file" class=" @if ($errors->has('file')) is-invalid @endif" id="music_file" accept=".mp3"  disabled>
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
            <label for="lyrics">Lyrics<span class="hint"> (use &lt;br&gt; to line break)</span></label>
            <textarea class="form-control @if ($errors->has('lyrics')) is-invalid @endif" name="lyrics" id="lyrics" rows="10">{{ old('lyrics', $music->lyrics) }}</textarea>
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
  .invi {
    display: none;
  }
  .btnEdit {
		background-color: #FFB300;
		color: white;
	}
  .negaTop {
    margin-top: -50px;
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

  function  showAlbum() {
    var toHide = document.getElementById('showyimage');
    var toShow = document.getElementById('album_image');
    toHide.style.display  = "none"
    toShow.removeAttribute('disabled')
    toShow.click()
    
  }

  function  showMusic() {
    var toHide = document.getElementById('showymusic');
    var toShow = document.getElementById('music_file');
    toHide.style.display  = "none"
    toShow.removeAttribute('disabled')
    toShow.click()
    
  }
</script>
@endsection

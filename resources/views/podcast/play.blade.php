@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <audio controls autoplay style="width:100%" controlsList="nodownload">
          <source src="{{URL::asset('/mp3/podcast/' . $podcast->file)}}" type="audio/mpeg">
          Your browser does not support the audio element.
        </audio>
        <a href="{{ route('podcast/edit', ['id' => $podcast->id ] ) }}" class=" mt-2 btn btn-warning mb-3"><i class="fas fa-edit"></i> &nbsp;&nbsp; E D I T &nbsp;&nbsp; P L A Y L I S T </a>
      <div class="card w-100 mt-5">
        
        <div class="row">
          <div class="col-3">
            <img class="cover-img" src="{{URL::asset('/image/podcast/' . $podcast->thumbnail)}}" alt="album_image" />
          </div>
          <div class="col-9 pt-3 pr-5">
            
          
            <div>
              <h2 class="text-left">
                  {{ $podcast->title }}
              </h2>
            </div>
            <div>
							<span class="text-muted">Host:</span>
							<span>{{ $podcast->host }}</span>
						</div>
            <div class="mt-4">
							<span class="text-muted">Description:</span>
              <p>{{$podcast->description}} </p>
						</div>
            
          </div>
        </div>
      </div>
    </div>
</div>
<style>
  .cover-img {
    width: 100%;
		max-height: 300px;
		max-width:300px;
    }
</style>
<script>

</script>
@endsection

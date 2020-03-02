@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-6">
			<div class="d-flex align-items-end"  style="height:100%;">
				<div>
					<div class="col-12 mx-auto text-center">
						<img class="cover-img" src="{{URL::asset('/image/cover/' . $music->album_image)}}" alt="album_image" />
					</div>
					<div class="col-12 mb-3  mx-auto text-center">
						<div>
							<h2 class="song-title mt-3">
								{{ $music->title }}
							</h2>
						</div>
						<div>
							<span class="text-label">by:</span>
							<span>{{ $music->artist }}</span>
						</div>
						<div class="mb-2">
							<span class="text-label">album:</span>
							<span>{{ $music->album_name }}</span>
						</div>
						<div class="">
							<a class="btn btn-primary" href="#" role="button">ADD TO PLAYLIST</a>
							<a class="btn btnEdit ml-3" href="{{ route('music/edit', ['id' => $music->id ]) }}" role="button">EDIT MUSIC</a>
						</div>
					</div>
					<div class="col-12">
						<audio controls autoplay style="width:100%" controlsList="nodownload">
							<source src="{{URL::asset('/mp3/' . $music->file)}}" type="audio/mpeg">
							Your browser does not support the audio element.
						</audio>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-sm-6 lyrics-side" id="style-1">
			<div class="text-center mt-4">
				<h4 class="text-label">LYRICS</h4>
			</div>
			<div class="text-center">
				{!! $music->lyrics !!}
			</div>
		</div>
	</div>
</div>
<style>
	.btnEdit {
		background-color: #FFB300;
		color: white;
	}
	.lyrics-side {
		height: 80vh;
		overflow-y: scroll;
	}
    .cover-img {
        width: 100%;
    }
	.text-button {
        border-radius: 50%;
        width: 35px;
        height: 35px;
		background-color: #A5D6A7;
    }
	.text-button:hover {
        cursor: pointer;
        -moz-transform: translate(0px, -2px);
        -ms-transform: translate(0px, -2px);
        -o-transform: translate(0px, -2px);
        -webkit-transform: translate(0px, -2px);
        transform: translate(0px, -2px)
    }
	.text-label {
        color: #9e9e9e;
    }
	#style-1::-webkit-scrollbar-track
	{
		-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
		border-radius: 10px;
		background-color: #F5F5F5;
	}

	#style-1::-webkit-scrollbar
	{
		width: 12px;
		background-color: #F5F5F5;
	}

	#style-1::-webkit-scrollbar-thumb
	{
		border-radius: 10px;
		-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
		background-color: #555;
	}

</style>
@endsection

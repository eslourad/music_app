@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-6 text-center">
			<div class="d-flex align-items-end"  style="height:100%;">
				<div style="margin:auto">
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
							<a class="btn btn-success" href="#" role="button" onclick="showModal({{ $music->id }}, '{{ $music->title }}')">ADD TO PLAYLIST</a>
						</div>
                        <div class="mt-4">
							@if(Auth::user()->is_admin == 1)
							<a class="btn btnEdit ml-3" href="{{ route('music/edit', ['id' => $music->id ]) }}" role="button">EDIT MUSIC</a>
                            <a class="btn btn-danger ml-3" href="#" id="btnDeleteMusic" role="button">DELETE MUSIC</a>
							@endif
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
				<pre>{{ $music->lyrics }}</pre>
			</div>
		</div>
	</div>

    <div class="modal fade bd-example-modal-sm" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                @if($playlist->isEmpty())
					<div class="modal-header bg-danger text-white">
                        <h5 class="modal-title">No Playlist</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-white">&times;</span>
                        </button>
                    </div>
					<div class="modal-body pt-4 pb-4">
						<h5 class="text-danger">You did not created a playlist yet</h5>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<a href="{{ route('playlists')}}">
							<button type="submit" class="btn btn-primary">Go To Playlist</button>
						</a>
					</div> 
                @else
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title">Choose a playlist</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-white">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @foreach($playlist as $item)
                            <div class="playlist-tile" onclick="addToPlaylist({{ $item->id }}, '{{ $item->name }}');">
                                <i class="fas fa-plus"></i> &nbsp;&nbsp;&nbsp; {{ $item->name }}
                            </div>
                        @endforeach

                    </div>
                @endif
            </div>
        </div>
    </div>

	<div class="modal fade bd-example-modal-sm" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">S U C C E S S</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><span style="font-weight: 700" id="spanMusicName"></span> is added to <span style="font-weight: 700" id="spanPlaylistName"></span> playlist successfully.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-sm" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title">E R R O R</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><span style="font-weight: 700" id="spanMusicName2"></span> already exist in <span style="font-weight: 700" id="spanPlaylistName2"></span> playlist.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-sm" id="confimationModal" tabindex="-1" role="dialog" aria-labelledby="confimationModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title">C O N F I R M A T I O N</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to permanently delete <span style="font-weight: 700" id="spanMusicNameOnDelete">{{ $music->title }}</span>?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                  <button type="button" class="btn btn-danger btnConfirmDelete">CONFIRM</button>
                </div>
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
		max-height: 300px;
		max-width:300px;
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

	.playlist-tile {
        margin-bottom: 10px;
        cursor: pointer;
        padding: 5px;
        padding-left: 10px;
        font-weight: 700;
    }
    .playlist-tile:hover {
        background-color: #29B6F6;
        color:white;
    }

</style>
<script>
	var musicID;
	var musicName;
	
	function showModal(id, title) {
		musicID = id
        musicName = title
        $('#exampleModalCenter').modal('show')
	}

	function addToPlaylist(playlistId, name) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/addmusicplaylists') }}",
            method: 'post',
            data: {
                music_id: musicID,
                playlist_id: playlistId
            },
            success: function(result){
                $('#exampleModalCenter').modal('hide')
                if(result == 'success') {
                    $("#spanMusicName").text(musicName)
                    $("#spanPlaylistName").text(name)
                    $('#successModal').modal('show')
                } else {
                    $("#spanMusicName2").text(musicName)
                    $("#spanPlaylistName2").text(name)
                    $('#errorModal').modal('show')
                }
                
            }
        });
    }

    $('#btnDeleteMusic').click(function(){
        $('#confimationModal').modal('show')
    });

    $('.btnConfirmDelete').click(function(){
        var id = {{ $music->id }}
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/deletemusic') }}",
            method: 'post',
            data: {
            id: id,
            },
            success: function(result){
                var playlistUrl = "{{ url('/') }}"
                window.location.href = playlistUrl;
                $('#confimationModal').modal('hide')
            }
        });
        
    });

    

    
</script>
@endsection

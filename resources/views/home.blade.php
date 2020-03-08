@extends('layouts.app')

@section('content')
<div class="container">
    <!-- @if ($user === 1) -->
    <!-- <div class="row mb-3">
        <div class="col-12 text-right">
            <a href="{{ route('music/add') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ADD MUSIC</a>
        </div>
    </div> -->
    <!-- @endif  -->
    
    <form action="search" method="get" id="form">
    @csrf
        <div class="row mb-3">
            
                <div class="col-4">
                    <select name="category" class="form-control form-control-lg" id="searchCategory">
                        <option value="title" @if ($category == 'title') selected @endif>SEARCH BY TITLE</option>
                        <option value="artist" @if ($category == 'artist') selected @endif>SEARCH BY ARTIST</option>
                        <option value="album" @if ($category == 'album') selected @endif>SEARCH BY ALBUM NAME</option>
                    </select>
                </div>
                <div class="col-8">
                    <input name="keyword" class="form-control form-control-lg" type="text" placeholder="enter keyword" id="txtSearch" value="{{ $keyword }}">
                </div>
        </div>
    </form>
    <div class="row ">
        @if ($musics->count() > 0)
            @foreach ($musics as $payload)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 cover-container">
                    <div>
                        <div class="">
                            <img class="cover-img image" src="{{URL::asset('/image/cover/' . $payload->album_image)}}" alt="album_image" />
                            <div class="middle">
                                <a class="links pt-2" href="{{ route('musics', ['id' => $payload->id ] ) }}">
                                    <button type="button" class="btn btnlinks btn-primary">Play Music</button>
                                </a>
                                <button type="button" class="btn btnlinks btn-success" onclick="showModal({{ $payload->id }}, '{{$payload->title }}')">Add to Playlist</button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h1 class="song-title mt-3">{{ $payload->title }}</h1>
                    </div>
                    <div>
                        <span class="text-label">by:</span>
                        <span>{{ $payload->artist }}</span>
                    </div>
                    <div>
                        <span class="text-label">album:</span>
                        <span>{{ $payload->album_name }}</span>
                    </div>
                </div>
            @endforeach
        @else
            @if ($isSearching)
                <div class="col-12 full d-flex justify-content-center">
                    <p class="noMusic align-self-center">No result found</p>
                </div>
            @else
                <div class="col-12 full d-flex justify-content-center">
                    <p class="noMusic align-self-center">No music to play.</p>
                </div>
            @endif
        @endif
    </div>
    </div>
        {{ $musics->links() }}
    </div>
    <!-- create modal -->
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
</div>
<style>
    .full {
        height: 60vh !important;
    }
    .noMusic {
        font-size: 2em;
        color: #BDBDBD;
    }
    .pagination {
        justify-content: center;
    }
    .cover-img {
        width: 100%;
        max-height: 255px;
    }
    .song-title {
        font-size: 1.5em;
    }
    .text-label {
        color: #9e9e9e;
    }
    .text-white {
        color: white;
    }
    .cover-container {
        position: relative;
    }

    .image {
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
    }

    .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }

    .cover-container:hover .image {
        opacity: 0.3;
    }

    .cover-container:hover .middle {
        opacity: 1;
    }

    .text-button {
        border-radius: 50%;
        width: 40px;
        height: 40px;
    }
    .text-button:hover {
        cursor: pointer;
        -moz-transform: translate(0px, -2px);
        -ms-transform: translate(0px, -2px);
        -o-transform: translate(0px, -2px);
        -webkit-transform: translate(0px, -2px);
        transform: translate(0px, -2px)
    }
    .play {
        background-color: #4FC3F7;
    }
    .add {
        margin-left: 25px;
        background-color: #A5D6A7;
    }
    .btnlinks {
        width: 140px;
        margin-bottom: 10px;
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
    function showModal(id, name) {
        musicID = id
        musicName = name
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
    
    document.getElementById('txtSearch').onkeyup = function(e) {
        if (e.keyCode === 13) {
            //var txtSearch = document.getElementById('searchCategory').value;
            document.getElementById('form').submit();
            
        }
        return true;
    }
</script>
@endsection

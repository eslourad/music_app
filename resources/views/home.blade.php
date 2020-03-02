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
                                <a class="links pt-2" href="{{ route('playlists', ['id' => Auth::user()->id] ) }}">
                                    <button type="button" class="btn btnlinks btn-success">Add to Playlist</button>
                                </a>
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
                    <p class="noMusic align-self-center">No music play, start adding music.</p>
                </div>
            @endif
        @endif
    </div>
    <div class="col-12 text-xs-center">
    {{ $musics->links() }}
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
</style>
<script>
    
    document.getElementById('txtSearch').onkeyup = function(e) {
        if (e.keyCode === 13) {
            //var txtSearch = document.getElementById('searchCategory').value;
            document.getElementById('form').submit();
            
        }
        return true;
    }
</script>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <form action="searchpodcast" method="get" id="form">
    @csrf
        <div class="row mb-3">
            
                <div class="col-4">
                    <select name="category" class="form-control form-control-lg" id="searchCategory">
                        <option value="title" @if ($category == 'title') selected @endif>SEARCH BY TITLE</option>
                        <option value="host" @if ($category == 'host') selected @endif>SEARCH BY HOST</option>
                    </select>
                </div>
                <div class="col-8">
                    <input name="keyword" class="form-control form-control-lg" type="text" placeholder="enter keyword" id="txtSearch" value="{{ $keyword }}">
                </div>
        </div>
    </form>
    <div class="row">
        @if($podcast->isEmpty())
        @if ($isSearching)
                <div class="flex-item text-center w-100">
                    <p class="no-playlist-hint">No result found</p>
                </div>
            @else
                <div class="flex-item text-center w-100">
                    <p class="no-playlist-hint">Podcast will be available soon</p>
                </div>
            @endif
            
        @else
            @foreach ($podcast as $pcast)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 cover-container">
                    <div class="card card-custom">
                        <a href="{{ route('pc', ['id' => $pcast->id ] ) }}">
                        <img class="cover-img image"  src="{{URL::asset('/image/podcast/' . $pcast->thumbnail)}}" alt="thumbnail" />
                        </a>
                        <div class="card-body">
                            <a href="{{ route('pc', ['id' => $pcast->id ] ) }}" class="btn btn-success mb-3"><i class="fas fa-play"></i> &nbsp;P L A Y </a>
                            <h5 class="card-title"><strong>{{ $pcast->title }}</strong></h5>
                            <p> <span class="text-muted">host:</span> <strong>{{ $pcast->host }}</strong></p>
                            <p class="card-text dsShown text-muted" id="ds{{$pcast->id}}">{{ $pcast->description }}</p>
                            <p class="card-text text-muted invi" id="dh{{$pcast->id}}">{{ $pcast->description }}</p>
                            <a href="#" class="card-link seemores" id="sm{{$pcast->id}}">See More</a>
                            <a href="#" class="card-link seeless invi" id="sl{{$pcast->id}}">See Less</a>
                        </div>
                    </div>
                </div>
                
            @endforeach
            </div>
                    {{ $podcast->links() }}
                </div>
            
        @endif
    </div>
</div>
<style>
    .no-playlist-hint {
        margin-top: 50px;
        font-size: 42px;
        color: #78909C;
    }
    .cover-img {
        width: 100%;
        height: 205px;
        max-height: 205px;
    }
    .cover-container:hover .image {
        opacity: 0.3;
        cursor: pointer;
        
    }
    .cover-container {
        cursor: pointer
        padding: 20px;
    }
    .invi {
        display: none;
    }
    .seeless {
        margin-left: 0px !important;
    }
</style>
<script>
    $('.dsShown').each(function(i, obj) {
        if($(this).text().length > 150) {
            var x = jQuery.trim($(this).text()).substring(0, 150)
            .split(" ").slice(0, -1).join(" ") + "...";
            $(this).text(x)
            
        } else {
            var id = $(this).attr('id').substring(2)
            $('#sm' + id).hide()
        }
        
    });

    $('.seemores').click(function(){
        var id = $(this).attr('id').substring(2)
        console.log(id)
        $('#ds' + id).hide()
        $('#dh' + id).show()
        $('#sm' + id).hide()
        $('#sl' + id).show()
    })

    $('.seeless').click(function(){
        var id = $(this).attr('id').substring(2)
        console.log(id)
        $('#ds' + id).show()
        $('#dh' + id).hide()
        $('#sm' + id).show()
        $('#sl' + id).hide()
    })

</script>
@endsection

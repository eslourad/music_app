@extends('layouts.app')

@section('content')
  <div class="container">
  <!-- create modal -->
    <div class="modal fade bd-example-modal-sm" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <form method="POST" action="{{ route('addplaylists') }}">
          @csrf
            <div class="modal-body">
                <input type="hidden" name="user" value="{{$user}}"/>
                <div class="form-group">
                  <label for="exampleInputEmail1">Playlist Name</label>
                  <input type="text" name="name" id="textfield" class="form-control" placeholder="Enter playlist name">
                  <span id="errorDiv" class="text-danger error-msg">Playlist name is required</span>
                </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success" onClick="return empty()">Create</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    @if($playlist->isEmpty())
    <div class="flex-container">
      <div class="row"> 
          <div class="flex-item">
            <p class="no-playlist-hint">It looks like you don't have a playlist yet</p>
            <button type="button" class="btn btn-primary btn-lg create-btn" onclick="showCreateModal()">Create Playlist</button>
            </div>
      </div>

      
    </div>
    @else
      <div class="row">

        <div class="col-12 col-md-4">
          <div class="card playlist-card mb-4">
            <div class="card-body">
              <h5 class="card-title">{{ Auth::user()->first_name }}'s Playlist </h5>
              <ul class="playlist-list">
                @foreach($playlist as $item)
                    <a href="{{ url('playlist/play', ['id' => $item->id ]) }}" style="text-decoration : none">
                        <li class="playlist-item @if($playlistID == $item->id) selected @endif")"><i class="fas fa-play"></i> &nbsp;&nbsp;&nbsp; <span id="pid{{$item->id}}" class="@if($playlistID == $item->id)  selectedPlaylist @endif">{{$item->name}}</span></li>
                    </a>
                @endforeach
              </ul>
              <div class="row ">
                <button type="button" class="btn btn-success create-more" onclick="showCreateModal()"><i class="fas fa-plus"></i> Create Playlist</button>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-12 text-left mb-2">
                  <button  type="button" id="btnRenamePlaylist" class="btn btn-warning w-100 text-left"><i class="fas fa-edit" style="border-right: 1px solid black; padding-right: 10px"></i>&nbsp;&nbsp; Rename Playlist</button>
                  
              </div>
              <div class="col-12 text-left mb-1">
                <button type="button" id="btnDeletePlaylist" class="btn btn-danger w-100 text-left"><i class="fas fa-trash" style="border-right: 1px solid white; padding-right: 15px"></i>&nbsp;&nbsp; Delete Playlist</button>
              </div>
          </div>
        </div>

        <div class="modal fade bd-example-modal-sm" id="renameModal" tabindex="-1" role="dialog" aria-labelledby="renameModal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning text-black">
                    <h5 class="modal-title">R E N A M E</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-black">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="user" value="{{$user}}"/>
                    <div class="form-group">
                      <label for="exampleInputEmail1">New Playlist Name</label>
                      <input type="text" name="name" id="txtRenamePlaylist" class="form-control" placeholder="Enter playlist name">
                      <span id="errorDiv" class="text-danger error-msg">Playlist name is required</span>
                    </div>
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" id="btnConfirmRenamePlaylist" class="btn btn-warning">Save</button>
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade bd-example-modal-sm" id="deletePlaylistModal" tabindex="-1" role="dialog" aria-labelledby="deletePlaylistModal" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
              <div class="modal-content">
                  <div class="modal-header bg-danger text-white">
                      <h5 class="modal-title">C O N F I R M A T I O N</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true" class="text-white">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p>Are you sure you want to permanently delete <span style="font-weight: 700" id="spanPlaylistNameDelete"></span> playlist?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                    <button type="button" class="btn btn-danger btnConfirmDeletePlaylist">CONFIRM</button>
                  </div>
              </div>
          </div>
        </div>
        
        <div class="col-12 col-md-8">
            
            @if($musics->isEmpty())
                <div class="row text-center">
                    <div class="col-12">
                        <p class="no-playlist-hint">This playlist is empty</p>
                    </div>
                </div>
            @else
                <div class="card music-cards-tile ">
                    <div class="row music-card">
                    <div class="col-2 ">
                    <img id="first_image" class="cover-img" width="100%" height="100%" src="{{URL::asset('/image/cover/' .  $first->album_image)}}" alt="album_image" />
                    </div>
                    <div class="col-10 ">
                        <p class="music-title" id="first_title">{{ $first->title }}</p>
                        <div class="music-detail"><span class="text-muted">by:</span> <span id="first_artist">{{ $first->artist }} </span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-muted">album:</span> <span id="first_album">{{ $first->album_name }}</span></div>
                        <audio onended="nextMusic()" id="first_music" controls autoplay style="width:100%; height: 30px; margin-top: 15px;" controlsList="nodownload">
                        <source src="{{URL::asset('/mp3/' . $first->file)}}" type="audio/mpeg">
                        Your browser does not support the audio element.
                        </audio>
                    </div>
                    </div>
                </div>

                
                <div class="card list-card">
                    @foreach($musics as $index => $music)
                        <div id="tile{{$index}}" class="d-flex justify-content-between item-card @if($music->mid == $first->id) selected-music @endif" onclick="playThis(this, '{{$index}}', '{{$music->title}}', '{{$music->file}}', '{{$music->artist}}', '{{$music->album_name}}', '{{$music->album_image}}', '{{$music->mpid}}')">
                            <div>
                              <p class="music-title">{{$music->title}}</p>
                              <div class="music-detail"><span class="text-muted-music">by:</span> {{$music->artist}}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-muted-music">album:</span> {{$music->album_name}}</div>
                            </div>
                            <div>
                              <button type="button" class="btn btn-labeled btn-warning btnMoveUp" id="pos{{$music->position}}" name="id{{$music->mpid}}">
                                <i class="fas fa-caret-up"></i>
                              </button>
                              <button type="button" class="btn btn-labeled btn-warning btnMoveDown" id="pox{{$music->position}}" name="ix{{$music->mpid}}">
                                <i class="fas fa-caret-down"></i>
                              </button>
                              <button type="button" class="btn btn-labeled btn-danger btnDelete" id="tid{{$music->mpid}}" name="mn{{$music->title}}" @if($music->mid == $first->id) disabled="true" @endif>
                                <i class="fas fa-trash"></i>
                              </button>
                            </div>
                            
                        </div>
                        @endforeach
                </div>
                
            @endif

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
                    <p>Are you sure you want to remove <span style="font-weight: 700" id="spanMusicName"></span> in <span style="font-weight: 700" id="spanPlaylistName"></span> playlist?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                  <button type="button" class="btn btn-danger btnConfirmDelete">CONFIRM</button>
                </div>
            </div>
        </div>
      </div>
    @endif
  </div>
<style>
  html, body {
      height: 100%;
  }
  body {
      margin: 0;
  }
  .no-playlist-hint {
    font-size: 42px;
    color: #78909C;
  }
  .create-btn {
    font-size: 36px;
  }
  .flex-container {
      height: calc(100vh - 105px);
      padding: 0;
      margin: 0;
      display: -webkit-box;
      display: -moz-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      align-items: center;
      justify-content: center;
  }
  .row {
    width: auto;
  }
  .flex-item {
      padding: 5px;
      margin: 10px;
      color: white;
      font-weight: bold;
      font-size: 2em;
      text-align: center;
  }
  .error-msg {
    display: none;
    margin-top:3px;
  }
  .card-title {
    margin-bottom: 0px;
    font-weight: 700;
    color: #303449;
  }
  .playlist-list {
    margin-top: 10px;
    padding-left: 0;
  }
  .playlist-item {
    cursor: pointer;
    list-style-type: none;
    padding: 10px;
    background-color: #303449;
    margin-bottom: 12px;
    color: white;
    border-radius: 5px;
    box-shadow: 0px 0px 0px grey;
    -webkit-transition:  box-shadow .1s ease-out;
    box-shadow: .8px .9px 3px grey;
  }
  .playlist-item:hover{ 
     box-shadow: 1px 8px 20px grey;
    -webkit-transition:  box-shadow .1s ease-in;
  }
  .selected {
    background-color: #3F51B5;
  }

  .music-cards-tile{
    padding: 20px;
  }
  .music-card {
  }
  .img-panel {
    display: inline-block;
  }
  .detail-panel {
    display: inline-block;
    width: 80%;
    margin-left: 10px;
  }
  .cover-img {
      max-height: 101px;
  }
  .music-title {
    font-weight: 700;
    font-size: 22px;
    margin-bottom: -10px;
  }
  .music-detail {
    margin-top: 10px;
    font-size: 10px;
  }

  .list-card {
    padding: 20px;
    margin-top: 30px;
    border: none;
  }
  .item-card {
    color: white;
    margin-bottom: 10px;
    background-color: #303449;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0px 0px 0px grey;
    -webkit-transition:  box-shadow .1s ease-out;
    box-shadow: .8px .9px 3px grey;
    cursor: pointer
  }
  .item-card:hover { 
     box-shadow: 1px 8px 20px grey;
    -webkit-transition:  box-shadow .1s ease-in;
  }
  .selected-music {
    background-color: #3F51B5;
  }
  .text-muted-music {
    color: #CFD8DC;
  }

  .create-more {
    font-weight:700; 
    margin-left: auto;
    margin-right: 15px;
  }
</style>
<script>

  var playingMusicIndex = 0
  var max = parseInt('{{$musics->count()}}') - 1
  var mpidToDelete;
  var tileToDeleteId;

  function empty() {
    if(document.getElementById("textfield").value == ""){
      document.getElementById("errorDiv").style.display="block";
      return false;
    }
  }

  function showCreateModal() {
    $('#exampleModalCenter').modal('show')
  }

  function playThis(elem, index, title, file, artist, album, img, mpid) {
    if(!(elem.classList.contains('selected-music'))) {
        playingMusicIndex = index
      //console.log(id + '' + title + ' ' + file + ' ' + artist + ' ' + album + ' ' + img)

      var id = elem.id;
      $('.item-card').removeClass('selected-music')
      $('#' + id).addClass('selected-music')
      var url = '{{URL::asset('/image/cover/')}}'
      $('#first_image').attr('src', url +  '/' + img)
      $('#first_title').text(title);
      $('#first_artist').text(artist);
      $('#first_album').text(album);

      $('.btnDelete').removeAttr('disabled');
      $('#tid' + mpid).prop('disabled', 'true');
      var src = '{{URL::asset('/mp3/')}}' + '/' + file
      var newAudio =  $('#first_music').attr('src', src)
      //newAudio.play();
    }
  }

  function nextMusic() {
    var nextIndex = parseInt(playingMusicIndex) + 1
    
    if(nextIndex > max) {
      console.log('max')
        $('#tile0').click()
    } else {
      console.log('min')
        $('#tile' + nextIndex).click()
    }
  }

  $(".item-card button").click(function(e) {
    e.stopPropagation();
  });

  $(".btnMoveUp").click(function(e) {
    if($(this).parent().parent().prev().attr("id")){
      var thisTileId = $(this).parent().parent().attr("id")
      var upperTileId = $(this).parent().parent().prev().attr("id")

      var posId = $(this).attr('id')
      var currentPos = posId.substring(3)
      var mpName = $(this).attr('name')
      var mpId = mpName.substring(2)

      var toPosId = $('#' + upperTileId).find('button.btnMoveUp').attr('id')
      var toPos = toPosId.substring(3)
      var toMpName = $('#' + upperTileId).find('button.btnMoveUp').attr('name')
      var toMpId = toMpName.substring(2)

      $('#' + thisTileId).after($('#' + upperTileId));
      $( 'div#' + thisTileId ).prop( 'id', 'temp' );
      $( 'div#' + upperTileId ).prop( 'id', thisTileId );
      $( 'div#' + 'temp' ).prop( 'id', upperTileId );


      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
      });
      jQuery.ajax({
          url: "{{ url('/swap') }}",
          method: 'post',
          data: {
              id: mpId,
              position: currentPos,
              toId: toMpId,
              toPosition: toPos,
          },
          success: function(result){
              //console.log(result) 
          }
      });
    }
  });

  $(".btnMoveDown").click(function(e) {
    if($(this).parent().parent().next().attr("id")){
      var thisTileId = $(this).parent().parent().attr("id")
      var upperTileId = $(this).parent().parent().next().attr("id")

      var posId = $(this).attr('id')
      var currentPos = posId.substring(3)
      var mpName = $(this).attr('name')
      var mpId = mpName.substring(2)

      var toPosId = $('#' + upperTileId).find('button.btnMoveDown').attr('id')
      var toPos = toPosId.substring(3)
      var toMpName = $('#' + upperTileId).find('button.btnMoveDown').attr('name')
      var toMpId = toMpName.substring(2)

      $('#' + thisTileId).before($('#' + upperTileId));
      $( 'div#' + thisTileId ).prop( 'id', 'temp' );
      $( 'div#' + upperTileId ).prop( 'id', thisTileId );
      $( 'div#' + 'temp' ).prop( 'id', upperTileId );

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
      });
      jQuery.ajax({
          url: "{{ url('/swap') }}",
          method: 'post',
          data: {
              id: mpId,
              position: currentPos,
              toId: toMpId,
              toPosition: toPos,
          },
          success: function(result){
              //console.log(result) 
          }
      });
    }
  });

  $('.btnDelete').click(function(){
    mpidToDelete = $(this).attr('id').substring(3)
    mpName= $(this).attr('name').substring(2)
    $('#spanMusicName').text(mpName)
    var playlistName = $('.selectedPlaylist').text()
    $('#spanPlaylistName').text(playlistName)
    tileToDeleteId = $(this).parent().parent().attr('id');
    $('#confimationModal').modal('show')
  });


  $('.btnConfirmDelete').click(function(){
    $('#' + tileToDeleteId).remove()
    var i = 0
    $('.item-card').each(function(){
      console.log($(this).attr('id'))
        $(this).attr('id', 'tile' + i)
        i++
        max = i
    });
    max = max - 1
    $('#confimationModal').modal('hide')
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    jQuery.ajax({
        url: "{{ url('/deletemusictoplaylist') }}",
        method: 'post',
        data: {
            id: mpidToDelete,
        },
        success: function(result){
            //console.log(result) 
        }
    });
  });

  $('#btnRenamePlaylist').click(function(){
    var playlistName = $('.selectedPlaylist').text()
    $('#txtRenamePlaylist').val(playlistName)
    $('#renameModal').modal('show')
  });

  $('#btnConfirmRenamePlaylist').click(function(){
    var newName = $('#txtRenamePlaylist').val()
    $('.selectedPlaylist').text(newName)
    var id = $('.selectedPlaylist').attr('id').substring(3)
    $('#renameModal').modal('hide')
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    jQuery.ajax({
        url: "{{ url('/renameplaylist') }}",
        method: 'post',
        data: {
          id: id,
          new_name: newName,
        },
        success: function(result){
            //console.log(result) 
        }
    });
  });

  $('#btnDeletePlaylist').click(function(){
    var playlistName = $('.selectedPlaylist').text()
    $('#spanPlaylistNameDelete').text(playlistName)
    $('#deletePlaylistModal').modal('show')
  });
  
  $('.btnConfirmDeletePlaylist').click(function(){
    var id = $('.selectedPlaylist').attr('id').substring(3)
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    jQuery.ajax({
        url: "{{ url('/deleteplaylist') }}",
        method: 'post',
        data: {
          id: id,
        },
        success: function(result){
          var playlistUrl = "{{ url('/playlists') }}"
          window.location.href = playlistUrl;
          $('#deletePlaylistModal').modal('hide')
        }
    });
  });
  
  
</script>
@endsection

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
                    <li class="playlist-item"><i class="fas fa-play"></i> &nbsp;&nbsp;&nbsp; {{$item->name}}</li>
                  </a>
                @endforeach
              </ul>
              <div class="row ">
                <button type="button" class="btn btn-success create-more" onclick="showCreateModal()"><i class="fas fa-plus"></i> Create Playlist</button>
              </div>
              
            </div>
          </div>
        </div>
        
        <div class="col-12 col-md-8 text-center">
        <p class="no-playlist-hint text-muted">Choose a playlist to play</p>
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
  function empty() {
    if(document.getElementById("textfield").value == ""){
      document.getElementById("errorDiv").style.display="block";
      return false;
    }
  }

  function showCreateModal() {
    $('#exampleModalCenter').modal('show')
  }
</script>
@endsection

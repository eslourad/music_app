@extends('layouts.app')

@section('content')
  <div class="container">
      @if($playlist->isEmpty())
      <div class="flex-container">
    <div class="row"> 
        <div class="flex-item">
          <p class="no-playlist-hint">It looks like you don't have a playlist yet</p>
          <button type="button" class="btn btn-primary btn-lg create-btn" data-toggle="modal" data-target="#exampleModalCenter">Create Playlist</button>
          </div>
    </div>

    <!-- create modal -->
    <div class="modal fade bd-example-modal-sm" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <form method="POST" action="{{ route('playlists') }}">
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
              <button type="submit" class="btn btn-primary" onClick="return empty()">Create</button>
            </div>
          </form>
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
    color: white;
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
</style>
<script>
  function empty() {
    if(document.getElementById("textfield").value == ""){
      document.getElementById("errorDiv").style.display="block";
      return false;
    }
  }
  
</script>
@endsection

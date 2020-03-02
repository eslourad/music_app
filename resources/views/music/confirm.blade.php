@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
    
    <div class="col-12 col-md-6 mx-auto text-center">
      <div class="card text-success">
      <div class="card-header bg-success text-white">
          SUCCESS
        </div>
        <div class="card-body">
          <img src="{{URL::asset('/image/success.png')}}" height="160" width="160" alt="success" class="landing-img">
          <h3 class="card-title my-4">{{ $music->title }} was successfully added to music list</h3>
          <h5><a href="{{ route('musics', ['id' => $music->id ] ) }}" class="mb-3">View</a></h5>
          <h5><a href="{{ url('music/add') }}" class="">Add More</a></h5>
        </div>
      </div>
    </div>
  </div>
</div>
<style>

</style>
<script>
  
</script>
@endsection

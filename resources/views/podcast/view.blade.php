@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if($podcast->isEmpty())
            <div class="flex-item text-center w-100">
                <p class="no-playlist-hint">Podcast will be available soon</p>
            </div>
        @else
            <p>naa na podcast</p>
        @endif
    </div>
</div>
<style>
    .no-playlist-hint {
        margin-top: 50px;
        font-size: 42px;
        color: #78909C;
    }
</style>
<script>

</script>
@endsection

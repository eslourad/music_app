@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
        <div class="card-header bg-primary text-white">
            Change Password
        </div>
        <div class="card-body">
            @if(session()->has('message.level'))
                <div class="alert alert-{{ session('message.level') }}"> 
                {!! session('message.content') !!}
                </div>
            @endif
            <form method="POST" action="{{ route('changepassword') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="old_password">Old Password</label>
                <input type="password" name="old_password" class="form-control @if ($errors->has('old_password')) is-invalid @endif" id="old_password" placeholder="enter first name" value="{{ old('old_password', $user->old_password) }}" required>
                @if ($errors->has('old_password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('old_password') }}</strong>
                </span>
                @endif           
            </div>
            
            <div class="form-group">
                <label for="new_password">New Password</label>
                <input type="password" name="new_password" class="form-control @if ($errors->has('new_password')) is-invalid @endif" id="new_password" placeholder="enter first name" value="{{ old('new_password', $user->new_password) }}" required>
                @if ($errors->has('new_password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('new_password') }}</strong>
                </span>
                @endif           
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control @if ($errors->has('confirm_password')) is-invalid @endif" id="confirm_password" placeholder="enter first name" value="{{ old('confirm_password', $user->confirm_password) }}" required>
                @if ($errors->has('confirm_password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('confirm_password') }}</strong>
                </span>
                @endif           
            </div>

            
            
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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

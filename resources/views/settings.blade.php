@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
        <div class="card-header bg-primary text-white">
            Profile
        </div>
        <div class="card-body">
            @if(session()->has('message.level'))
                <div class="alert alert-{{ session('message.level') }}"> 
                {!! session('message.content') !!}
                </div>
            @endif
            <form method="POST" action="{{ route('userupdate') }}" enctype="multipart/form-data">
            @csrf
            <input type="text" name="id" value="{{ old('id', $user->id) }}" hidden/>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" class="form-control @if ($errors->has('first_name')) is-invalid @endif" id="first_name" placeholder="enter first name" value="{{ old('first_name', $user->first_name) }}" required>
                @if ($errors->has('first_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('first_name') }}</strong>
                </span>
                @endif           
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" class="form-control @if ($errors->has('last_name')) is-invalid @endif" id="last_name" placeholder="enter first name" value="{{ old('last_name', $user->last_name) }}" required>
                @if ($errors->has('last_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('last_name') }}</strong>
                </span>
                @endif           
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select type="text" name="gender" class="form-control @if ($errors->has('gender')) is-invalid @endif" id="gender" placeholder="enter first name" value="{{ old('gender', $user->gender) }}">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                @if ($errors->has('gender'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('gender') }}</strong>
                </span>
                @endif           
            </div>

            <div class="form-group">
                <label for="birth_date">Birth Date</label>
                <input onkeydown="return false" id="birth_date" type="text" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date', $user->birth_date) }}" required autocomplete="birth_date">
                @if ($errors->has('birth_date'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('birth_date') }}</strong>
                </span>
                @endif           
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control @if ($errors->has('email')) is-invalid @endif" id="email" placeholder="enter first name" value="{{ old('email', $user->email) }}" required>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
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
    $('#birth_date').datepicker({
        uiLibrary: 'bootstrap4'
    });
    $(document).ready(function(){
    $("#first_name").keydown(function(event){
        var inputValue = event.which;
        // allow letters and whitespaces only.
        if (event.keyCode == 8 || event.keyCode == 46
        || event.keyCode == 37 || event.keyCode == 39) || event.keyCode == 9 {
            return true;
        }
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) { 
            event.preventDefault(); 
        }
    });
    $("#last_name").keydown(function(event){
        var inputValue = event.which;
        // allow letters and whitespaces only.
        if (event.keyCode == 8 || event.keyCode == 46
        || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 3) {
            return true;
        }
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) { 
            event.preventDefault(); 
        }
    });
});
</script>
@endsection

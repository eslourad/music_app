@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="jumbotron w-100 bg-white">
            <div class="container">
                <h1 class="display-4">Welcome {{$user->first_name}}!</h1>
                <p class="lead">In order to enjoy our music please support us by subscribing.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="jumbotron w-100 bg-white">
            <div class="container">
                <h3>How to subscribe?</h3>
                <br />
                <ol>
                    <li>Download <strong>PayMaya</strong> app to your mobile device</li>
                    <br />
                    <li>Register and add <strong>₱100</strong> balance to your account</li>
                    <br />
                    <li>Open the app and tap <strong>Scan to Pay</strong></li>
                    <br />
                    <li>Scan this QR code </li>
                    <img height="400" class="cover-img" src="{{URL::asset('/image/qr_code.jpeg')}}" alt="qr_code" />
                    <li>Enter <strong>₱100</strong><small class="text-muted"> (this will be deducted to your account)</small> on the <strong>amount</strong> field</li>
                    <br />
                    <li>
                        Enter your <strong>email</strong> that you used to register here on TheNewJ website as <strong>optional message</strong>
                        <br />
                        <small class="text-muted"> (Please make sure to input the exact email as we will use this to confirm the subscription of your account)</small>
                    </li>
                    <br />
                    <li>Tap continue and wait for at least <strong>1 working day</strong> for us to confirm your account</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="jumbotron w-100 bg-white">
            <div class="container">
                <p class="lead">If you got questions or inquiries please email us at <strong style="font-weight: 700 !important">admin@thenewj.com</strong></p>
            </div>
        </div>
    </div>
</div>
<style>

</style>
<script>

</script>
@endsection

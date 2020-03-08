@extends('layouts.app')

@section('content')
<div class="container">
<form action="searchuser" method="get" id="form">
            @csrf
                <div class="row mb-3">
                    
                        <div class="col-4">
                            <select name="category" class="form-control form-control-lg" id="searchCategory">
                                <option value="first_name" @if ($category == 'first_name') selected @endif>SEARCH BY FIRST NAME</option>
                                <option value="last_name" @if ($category == 'last_name') selected @endif>SEARCH BY LAST NAME</option>
                                <option value="email" @if ($category == 'email') selected @endif>SEARCH BY EMAIL</option>
                            </select>
                        </div>
                        <div class="col-8">
                            <input name="keyword" class="form-control form-control-lg" type="text" placeholder="enter keyword" id="txtSearch" value="{{ $keyword }}">
                        </div>
                </div>
            </form>
    <div class="row">
        <div class="col-12">
        <div class="card w-100">
            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Birth Date</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td id="name{{$user->id}}">{{ $user->first_name }} {{ $user->last_name }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->birth_date }}</td>
                        <td>{{ $user->email }}</td>
                        <td id="role{{$user->id}}">
                            @if($user->is_admin)
                                <span class="text-primary">Admin</span>
                            @else
                                <span class="text-secondary">Member</span>
                            @endif
                        </td>
                        <td id="stat{{$user->id}}">
                            @if($user->is_premium)
                                <span class="text-success">Premium</span>
                            @else
                                <span class="text-danger">Pending</span>
                            @endif
                        </td>
                        <td>
                            <button  type="button" id="uid{{$user->id}}"  class="btn btn-primary btnPremium" data-toggle="tooltip" data-placement="bottom" title="Promote to Premium" @if($user->is_premium) disabled @endif><i class="fas fa-check-circle" ></i></button>
                            <button  type="button" id="aid{{$user->id}}" class="btn btn-success btnAdmin" data-toggle="tooltip" data-placement="bottom" title="Promote as Admin" @if($user->is_admin) disabled @endif><i class="fas fa-arrow-circle-up pa-2" ></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
            <div class="col-12 text-xs-center">
            {{ $users->links() }}
            </div>
        </div>
        </div>
        
    </div>

    <div class="modal fade bd-example-modal-sm" id="confirmPremium" tabindex="-1" role="dialog" aria-labelledby="confirmPremium" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">C O N F I R M A T I O N</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to promote <strong id="spanName"></strong> to premium status?</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                <button type="button" class="btn btn-primary btnConfirmPremium">CONFIRM</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-sm" id="confirmAdmin" tabindex="-1" role="dialog" aria-labelledby="confirmAdmin" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">C O N F I R M A T I O N</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to promote <strong id="spanName2"></strong> to admin role?</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                <button type="button" class="btn btn-success btnConfirmAdmin">CONFIRM</button>
                </div>
            </div>
        </div>
    </div>
    
</div>
<style>

</style>
<script>
    var promotingId;

    document.getElementById('txtSearch').onkeyup = function(e) {
        if (e.keyCode === 13) {
            //var txtSearch = document.getElementById('searchCategory').value;
            document.getElementById('form').submit();
            
        }
        return true;
    }

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    $('.btnPremium').click(function(){
        promotingId = $(this).attr('id').substring(3)
        $('#spanName').text($('#name' + promotingId).text())
        $('#confirmPremium').modal('show')
    });

    $('.btnConfirmPremium').click(function(){
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/promotepremium') }}",
            method: 'post',
            data: {
                id: promotingId,
            },
            success: function(result){
                $('#stat' + promotingId).html('<span class="text-success">Premium</span>')
                $('#confirmPremium').modal('hide')
                $('#uid' + promotingId).prop('disabled', 'true')
            }
        });
    });

    $('.btnAdmin').click(function(){
        promotingId = $(this).attr('id').substring(3)
        $('#spanName2').text($('#name' + promotingId).text())
        $('#confirmAdmin').modal('show')
    });

    $('.btnConfirmAdmin').click(function(){
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        jQuery.ajax({
            url: "{{ url('/promoteadmin') }}",
            method: 'post',
            data: {
                id: promotingId,
            },
            success: function(result){
                $('#role' + promotingId).html('<span class="text-primary">Admin</span>')
                $('#confirmAdmin').modal('hide')
                $('#aid' + promotingId).prop('disabled', 'true')
            }
        });
    });
    
    
</script>
@endsection

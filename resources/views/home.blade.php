@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update') }}">
                        @csrf
                    Hello {{ $user->username }}.
                    <div class="row mt-3">
                                @if ($user->status == 0)
                                <div class="col-md-4">
                                <button type="submit" class="btn btn-primary" value="Register" name="register">
                                        Register Seller
                                </button>
                                </div>
                                @elseif($user->status == 1)
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="mb-0 text-center">Status:</div>
                                    <p class="text-secondary text-center"> Waiting</p>
                                </div>
                                @elseif($user->status == 2)
                                <div class="col-md-4">You are already a seller!</div>
                                <div class="col-md-4">
                                    <div class="mb-0 text-center">Status:</div>
                                    <p class="text-success text-center"> Successfully </p>
                                </div>
                                @elseif($user->status == 3)
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary" value="Register" name="register">
                                        Re-Register
                                    </button>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-0 text-center">Status:</div>
                                    <p class="text-danger text-center"> Rejected </p>
                                </div>
                                @endif
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

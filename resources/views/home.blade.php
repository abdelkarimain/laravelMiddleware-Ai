@extends('layouts.app')

@section('content')

<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">
        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
</div>

</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in succesfully bbbbbb!') }}
                    </div>
                    <div class="card-body">
                        <a href="{{url('admin/routes')}}">Admin</a>
                    </div>

            </div>
        </div>
    </div>
</div>

@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    User page logged in! Keep going!
                    <a href="{{ route('admin') }}"><button type="button" class="btn btn-warning">Admin</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

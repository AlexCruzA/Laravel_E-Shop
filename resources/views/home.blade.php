@extends('layouts.app')
@section('content')

<style type="text/css">
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">You are logged in!</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                          95%
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <script>
        setTimeout(function(){location.href="{{ route('users.index') }}"} , 2000);
    </script>
</div>
@endsection


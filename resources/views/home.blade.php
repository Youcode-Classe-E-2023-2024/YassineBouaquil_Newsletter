@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card futuristic-card">
                    <div class="card-header futuristic-header">{{ __('Dashboard') }}</div>

                    <div class="card-body futuristic-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                        <br>
                        <a href="{{ route('posts.index') }}" class="futuristic-button">OUR NEWSLETTER</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

<!-- In your Blade view -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Modifier <strong>{{ $user->name }}</strong></div>

                    <div class="card-body">
                        <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" value="{{ $user->name }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" value="{{ $user->email }}" class="form-control">
                            </div>

                            <!-- Add more fields as needed -->

                            <button type="submit" class="btn btn-primary">Update</button>

                        </form>
                    </div>
                    <div class="card-body">

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

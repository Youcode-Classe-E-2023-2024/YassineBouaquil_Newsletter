@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Liste Des Utilisateurs') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('admin.users.edit', $user->id) }}"><button class="btn btn-primary">Editer</button></a>
                                    <a href=""><button class="btn btn-danger">Edit Role</button></a>
                                    <a href=""><button class="btn btn-primary">Supprimer</button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                    <a href="{{ route('generate-pdf') }}" class="btn btn-primary btn-lg mt-2  justify-content-center ">
                        Download users/roles DATA.PDF
                    </a>
                    <a href="{{ route('posts.index') }}" class="btn btn-danger btn-lg mt-2  justify-content-center">liste des post</a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

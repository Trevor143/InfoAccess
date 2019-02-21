@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Users List to Approve</div>

                    <div class="card-body">

                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif

                        <table class="table">
                            <tr>
                                <th>User name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th></th>
                            </tr>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    @if($user->isAdmin ==0)
                                        <td>Administrator</td>
                                    @elseif($user->isAdmin == 1)
                                        <td>TIPO</td>
                                    @else
                                        <td>SME</td>
                                    @endif

                                    @if($user->approved_at == NULL)
                                    <td><a href="{{ route('admin.approval.show', $user->id) }}"
                                           class="btn btn-primary btn-sm">Approve</a></td>
                                    @else
                                    <td><a href="{{route('admin.approval.deactivate', $user->id)}}"
                                           class="btn btn-danger btn-sm">Deactivate</a></td>
                                        @endif
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No users found.</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

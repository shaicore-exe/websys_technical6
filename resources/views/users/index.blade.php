@extends('layouts.app')

@section('content')
    <div class="page-heading">
        <div>
            <p class="eyebrow">USER DIRECTORY</p>
            <h1>User Accounts <span>♡</span></h1>
        </div>
    </div>

    <div class="table-card card">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td class="name-cell">{{ $user->username }}</td>
                        <td>{{ $user->full_name }}</td>
                        <td>
                            <span class="role-pill">{{ $user->role }}</span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

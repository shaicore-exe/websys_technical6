
@extends('layouts.app')

@section('content')
    <div class="page-heading">
        <div>
            <p class="eyebrow">CUSTOMER DIRECTORY</p>
            <h1>Customer Accounts <span>♡</span></h1>
        </div>
        <a class="button" href="{{ route('home') }}">Back to Home</a>
    </div>

    <div class="table-card card">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td class="name-cell">{{ $customer->full_name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

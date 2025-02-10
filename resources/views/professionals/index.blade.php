@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Professional List</h2>
    <a href="{{ route('professionals.create') }}" class="btn btn-success mb-3">Add New Professional</a>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Display Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($professionals as $professional)
        <tr>
            <td>{{ $professional->first_name }} {{ $professional->last_name }}</td>
            <td>{{ $professional->display_name }}</td>
            <td>
                <a href="{{ route('professionals.edit', $professional->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('professionals.destroy', $professional->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

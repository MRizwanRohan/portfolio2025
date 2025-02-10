@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Experience List</h2>
    <a href="{{ route('experiences.create') }}" class="btn btn-success mb-3">Add Experience</a>
    <table class="table">
        <thead>
        <tr>
            <th>Company</th>
            <th>Position</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($experiences as $experience)
        <tr>
            <td>{{ $experience->company }}</td>
            <td>{{ $experience->position }}</td>
            <td>
                <a href="{{ route('experiences.edit', $experience->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('experiences.destroy', $experience->id) }}" method="POST" style="display:inline;">
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

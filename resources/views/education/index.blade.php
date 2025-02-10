@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Education List</h2>
    <a href="{{ route('education.create') }}" class="btn btn-success mb-3">Add Education</a>
    <table class="table">
        <thead>
        <tr>
            <th>Institution</th>
            <th>Degree</th>
            <th>Field of Study</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($education as $edu)
        <tr>
            <td>{{ $edu->institution }}</td>
            <td>{{ $edu->degree }}</td>
            <td>{{ $edu->field_of_study }}</td>
            <td>
                <a href="{{ route('education.edit', $edu->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('education.destroy', $edu->id) }}" method="POST" style="display:inline;">
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

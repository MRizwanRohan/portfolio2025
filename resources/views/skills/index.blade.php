@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Skill List</h2>
    <a href="{{ route('skills.create') }}" class="btn btn-success mb-3">Add Skill</a>
    <table class="table">
        <thead>
        <tr>
            <th>Skill Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($skills as $skill)
        <tr>
            <td>{{ $skill->name }}</td>
            <td>
                <a href="{{ route('skills.edit', $skill->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" style="display:inline;">
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

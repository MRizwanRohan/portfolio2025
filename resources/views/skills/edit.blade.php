@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Skill</h2>
    <form action="{{ route('skills.update', $skill->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Skill Name</label>
            <input type="text" name="name" class="form-control" value="{{ $skill->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

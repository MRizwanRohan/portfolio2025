@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Experience</h2>
    <form action="{{ route('experiences.update', $experience->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Company</label>
            <input type="text" name="company" class="form-control" value="{{ $experience->company }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Position</label>
            <input type="text" name="position" class="form-control" value="{{ $experience->position }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control">{{ $experience->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

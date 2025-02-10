@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Education</h2>
    <form action="{{ route('education.update', $education->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Institution</label>
            <input type="text" name="institution" class="form-control" value="{{ $education->institution }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Degree</label>
            <input type="text" name="degree" class="form-control" value="{{ $education->degree }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Field of Study</label>
            <input type="text" name="field_of_study" class="form-control" value="{{ $education->field_of_study }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

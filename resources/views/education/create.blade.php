@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Education</h2>
    <form action="{{ route('education.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Institution</label>
            <input type="text" name="institution" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Degree</label>
            <input type="text" name="degree" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Field of Study</label>
            <input type="text" name="field_of_study" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection

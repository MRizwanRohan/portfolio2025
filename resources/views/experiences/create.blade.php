@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Experience</h2>
    <form action="{{ route('experiences.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Company</label>
            <input type="text" name="company" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Position</label>
            <input type="text" name="position" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection

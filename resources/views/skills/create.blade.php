@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Skill</h2>
    <form action="{{ route('skills.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Skill Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Professional</h2>
    <form action="{{ route('professionals.update', $professional->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control" value="{{ $professional->first_name }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control" value="{{ $professional->last_name }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Display Name</label>
            <input type="text" name="display_name" class="form-control" value="{{ $professional->display_name }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Bio</label>
            <textarea name="bio" class="form-control">{{ $professional->bio }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

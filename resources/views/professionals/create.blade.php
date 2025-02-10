@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Professional</h2>
    <form action="{{ route('professionals.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Display Name</label>
            <input type="text" name="display_name" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Bio</label>
            <textarea name="bio" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection

@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Student Details</h2>
        <div>
            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">ID</div>
                <div class="col-md-9">{{ $student->id }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Name</div>
                <div class="col-md-9">{{ $student->name }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Email</div>
                <div class="col-md-9">{{ $student->email }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Age</div>
                <div class="col-md-9">{{ $student->age }}</div>
            </div>
            <div class="row">
                <div class="col-md-3 font-weight-bold">Created At</div>
                <div class="col-md-9">{{ $student->created_at }}</div>
            </div>
        </div>
    </div>
</div>
@endsection
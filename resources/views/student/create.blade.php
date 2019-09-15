@section('title', 'Create Student')
@extends('layouts.app')

@section('content')

<div class="card border-success">
    <div class="card-header border-success bg-green-normal d-flex align-items-center justify-content-between">
        Create Student
        <a href="{{ route('student.index') }}" class="btn btn-outline-primary">Back</a>
    </div>

    <div class="card-body">
        <form action="{{ route('student.store') }}" method="POST">
            @include('student.form')
            <div class="form-group mb-0 row">
                <div class="col-md-10 offset-1">
                    <button type="submit" class="btn btn-success">
                        Create
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
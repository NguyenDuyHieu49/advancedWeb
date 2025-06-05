@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Thêm đăng ký</h1>
        <form action="{{ route('enrollments.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="student_id">Sinh viên:</label>
                <select name="student_id" id="student_id" class="form-control">
                    @foreach ($students as $student)
                        <option value="{{ $student->id }}">{{ $student->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="course_id">Khóa học:</label>
                <select name="course_id" id="course_id" class="form-control">
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="enrollment_date">Ngày đăng ký:</label>
                <input type="date" name="enrollment_date" id="enrollment_date" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Thêm</button>
        </form>
    </div>
@endsection
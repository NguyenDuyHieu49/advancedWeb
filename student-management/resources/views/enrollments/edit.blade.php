@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sửa đăng ký</h1>
        <form action="{{ route('enrollments.update', $enrollment) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="student_id">Sinh viên:</label>
                <select name="student_id" id="student_id" class="form-control">
                    @foreach ($students as $student)
                        <option value="{{ $student->id }}" {{ $enrollment->student_id == $student->id ? 'selected' : '' }}>
                            {{ $student->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="course_id">Khóa học:</label>
                <select name="course_id" id="course_id" class="form-control">
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}" {{ $enrollment->course_id == $course->id ? 'selected' : '' }}>
                            {{ $course->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="enrollment_date">Ngày đăng ký:</label>
                <input type="date" name="enrollment_date" id="enrollment_date" class="form-control" value="{{ $enrollment->enrollment_date }}">
            </div>
            <button type="submit" class="btn btn-success">Cập nhật</button>
        </form>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Danh sách đăng ký</h1>
        <a href="{{ route('enrollments.create') }}" class="btn btn-primary">Thêm đăng ký</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Sinh viên</th>
                    <th>Khóa học</th>
                    <th>Ngày đăng ký</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($enrollments as $enrollment)
                    <tr>
                        <td>{{ $enrollment->id }}</td>
                        <td>{{ $enrollment->student->name }}</td>
                        <td>{{ $enrollment->course->name }}</td>
                        <td>{{ $enrollment->enrollment_date }}</td>
                        <td>
                            <a href="{{ route('enrollments.edit', $enrollment) }}" class="btn btn-warning">Sửa</a>
                            <form action="{{ route('enrollments.destroy', $enrollment) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
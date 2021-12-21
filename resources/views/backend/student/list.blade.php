{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Tác giả</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h1>Danh sách tác giả</h1>--}}
{{--<a href="{{ route("authors.showFormCreate") }}">Thêm tác giả</a>--}}
{{--<table border="1px">--}}
{{--    @foreach($authors as $author)--}}
{{--        <tr>--}}
{{--            <td>{{ $author->id }}</td>--}}
{{--            <td>{{ $author->name }}</td>--}}
{{--            <td>{{ $author->country }}</td>--}}

{{--            <td><a href="{{route("authors.show",$author->id)}}">Detail</a></td>--}}
{{--            <td><a href="{{route("authors.destroy",$author->id)}}">Delete</a></td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--</table>--}}
{{--</body>--}}
{{--</html>--}}

@extends("backend.layout.master")
@section("title","Student Management")
@section("title-content","Student Management")
@section("content")
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Student List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Grade</th>
                        <th colspan="2" style="text-align:center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->grade }}</td>

                            <td><a href="{{route("students.show",$student->id)}}">Detail</a></td>
                            <td><a href="{{route("students.destroy",$student->id)}}">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

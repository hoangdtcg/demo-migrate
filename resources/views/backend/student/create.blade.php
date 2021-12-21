{{--<form action="" method="post">--}}
{{--    @csrf--}}
{{--    <input type="text" name="name" placeholder="Tên tác giả">--}}
{{--    <input type="text" name="country" placeholder="Quê quán">--}}
{{--    <button type="submit">Tạo mới</button>--}}
{{--</form>--}}

@extends("backend.layout.master")
@section("title-content","ADD NEW STUDENT");
@section("content")
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">CREATE</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('students.store')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">NAME</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nguyen Van A">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">GRADE</label>
                    <input type="text" name="grade" class="form-control" id="exampleInputPassword1" placeholder="Tên lớp">
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
                <a href="{{ route('students.index')}}" type="button" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection

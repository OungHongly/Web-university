<form class="row g-3" action="/course/{{$cou->course_id}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class="col-md-6">

        <label for="course_id" class="form-label">Course ID</label>
        <input type="text" class="form-control" id="course_id" name="course_id" value="{{$cou->course_id}}">
        @error('course_id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="course_name" class="form-label">Course Name</label>
        <input type="text" class="form-control" id="course_name" name="course_name" value="{{$cou->course_name}}">
        @error('course_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>


    <div class="text-center">
        <button type="submit" class="btn btn-primary">Edit Course</button>
    </div>
</form>

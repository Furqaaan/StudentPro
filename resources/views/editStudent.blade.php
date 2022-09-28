@include("header",["title" => $title])

<div class="edit-student-container">
    <form action="{{route('updateStudent',["id"=>$student->id])}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="student-name" class="form-label">Student Name</label>
            <input type="text" class="form-control" id="student-name" placeholder="Enter student name" name="name" value="{{$student->name}}">
            @error('name')
		    	<div class="alert alert-danger">{{ $message }}</div>
		    @enderror
        </div>
        <div class="mb-3">
            <label for="student-age" class="form-label">Student Age</label>
            <input type="number" class="form-control" id="student-age" placeholder="Enter student age" name="age" min="1" max="100" value="{{$student->age}}">
            @error('age')
		    	<div class="alert alert-danger">{{ $message }}</div>
		    @enderror
        </div>
        <div class="mb-3">
            <label for="student-gender-m" class="form-label">Student Gender</label>
            <div class="mb-3">
                <input class="form-check-input" type="radio" name="gender" id="student-gender-m" value="M"  @if($student->gender == "M") checked @endif>
                <label class="form-check-label" for="student-gender-m">
                    Male
                </label>
                <input class="form-check-input" type="radio" name="gender" value="F" id="student-gender-f" @if($student->gender == "F") checked @endif>
                <label class="form-check-label" for="student-gender-f">
                    Female
                </label>
            </div>
            @error('gender')
		    	<div class="alert alert-danger">{{ $message }}</div>
		    @enderror
        </div>
        <div class="mb-3">
            <label for="student-teacher" class="form-label">Reporting Teacher</label>
            <select class="form-select" id="student-teacher" name="teacher">
                @foreach($teachers as $teacher)
                    <option value="{{$teacher->id}}" @if($teacher->id == $student->teacher_id) selected @endif>{{$teacher->name}}</option>
                @endforeach
            </select>
            @error('teacher')
		    	<div class="alert alert-danger">{{ $message }}</div>
		    @enderror
        </div>
        <button type="submit" class="btn btn-success">UPDATE STUDENT</button>
        <a href="{{route('viewStudents')}}">
            <button type="button" class="btn btn-secondary">BACK</button>
        </a>
    </form>
</div>

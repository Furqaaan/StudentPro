@include("header",["title" => $title])

<div class="add-marks-container">
    <form action="{{route('storeMarks')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="student-name" class="form-label">Student Name</label>
            <select class="form-select" id="student-name" name="student">
                <option value=" ">Select Student</option>
                @foreach($students as $student)
                    <option value="{{$student->id}}">{{$student->name}}</option>
                @endforeach
            </select>
            @error('student')
		    	<div class="alert alert-danger">{{ $message }}</div>
		    @enderror
        </div>
        <div class="mb-3">
             <label for="student-term" class="form-label">Student Term</label>
            <select class="form-select" id="student-term" name="term">
                <option value="one">One</option>
                <option value="two">Two</option>
            </select>
            @error('term')
		    	<div class="alert alert-danger">{{ $message }}</div>
		    @enderror
        </div>
        <div class="mb-3">
            <label for="mark-maths" class="form-label">Maths Mark</label>
            <input type="number" class="form-control" id="maths-mark" placeholder="Enter Maths mark" name="maths" min="0" max="100">
            @error('maths')
		    	<div class="alert alert-danger">{{ $message }}</div>
		    @enderror
        </div>
        <div class="mb-3">
            <label for="mark-science" class="form-label">Science Mark</label>
            <input type="number" class="form-control" id="science-mark" placeholder="Enter science mark" name="science" min="0" max="100">
            @error('science')
		    	<div class="alert alert-danger">{{ $message }}</div>
		    @enderror
        </div>
        <div class="mb-3">
            <label for="mark-history" class="form-label">History Mark</label>
            <input type="number" class="form-control" id="history-mark" placeholder="Enter history mark" name="history" min="0" max="100">
            @error('history')
		    	<div class="alert alert-danger">{{ $message }}</div>
		    @enderror
        </div>
        <button type="submit" class="btn btn-success">ADD MARKS</button>
        <a href="{{route('viewMarks')}}">
            <button type="button" class="btn btn-secondary">BACK</button>
        </a>
    </form>
</div>

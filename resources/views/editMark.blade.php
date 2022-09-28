@include("header",["title" => $title])

<div class="edit-mark-container">
    <form action="{{route('updateMark',["id"=>$mark->id])}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="student-name" class="form-label">Student Name</label>
            <select class="form-select" id="student-name" name="student">
                @foreach($students as $student)
                    <option value="{{$student->id}}" @if($mark->student_id == $student->id) selected @endif>{{$student->name}}</option>
                @endforeach
            </select>
            @error('student')
		    	<div class="alert alert-danger">{{ $message }}</div>
		    @enderror
        </div>
        <div class="mb-3">
             <label for="student-term" class="form-label">Student Term</label>
            <select class="form-select" id="student-term" name="term">
                <option value="one"  @if($mark->term == "one") selected @endif>One</option>
                <option value="two"  @if($mark->term == "two") selected @endif>Two</option>
            </select>
            @error('term')
		    	<div class="alert alert-danger">{{ $message }}</div>
		    @enderror
        </div>
        <div class="mb-3">
            <label for="mark-maths" class="form-label">Maths Mark</label>
            <input type="number" class="form-control" id="maths-mark" placeholder="Enter Maths mark" name="maths" min="0" max="100" value="{{$mark->maths}}">
            @error('maths')
		    	<div class="alert alert-danger">{{ $message }}</div>
		    @enderror
        </div>
        <div class="mb-3">
            <label for="mark-science" class="form-label">Science Mark</label>
            <input type="number" class="form-control" id="science-mark" placeholder="Enter science mark" name="science" min="0" max="100" value="{{$mark->science}}">
            @error('science')
		    	<div class="alert alert-danger">{{ $message }}</div>
		    @enderror
        </div>
        <div class="mb-3">
            <label for="mark-history" class="form-label">History Mark</label>
            <input type="number" class="form-control" id="history-mark" placeholder="Enter history mark" name="history" min="0" max="100" value="{{$mark->history}}">
            @error('history')
		    	<div class="alert alert-danger">{{ $message }}</div>
		    @enderror
        </div>
        <button type="submit" class="btn btn-success">UPDATE MARK</button>
        <a href="{{route('viewMarks')}}">
            <button type="button" class="btn btn-secondary">BACK</button>
        </a>
    </form>
</div>

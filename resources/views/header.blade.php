<!DOCTYPE html>
<html>
<head>
	<title>StudentPro | {{$title}}</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="{{url('/styles.css')}}"/>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
    <div class="nav-link-container">
        <a href="{{route('viewStudents')}}">
            <button type="button" class="btn btn-primary">View Students</button>
        </a>
        <a href="{{route('addStudent')}}">
            <button type="button" class="btn btn-primary">Add Student</button>
        </a>
        <a href="{{route('addMarks')}}">
            <button type="button" class="btn btn-primary">Add Marks</button>
        </a>
        <a href="{{route('viewMarks')}}">
            <button type="button" class="btn btn-primary">View Marks</button>
        </a>
    </div>

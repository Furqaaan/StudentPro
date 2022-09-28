@include("header",["title" => $title])

<div class="student-list-container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Reporting Teacher</th>
                <th scope="col" class="center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr class="{{'student-'.$student->id}}">
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->gender}}</td>
                    <td>{{$student->teacher->name}}</td>
                    <td class="center">
                        <a href="{{route('editStudent',["id"=>$student->id])}}">
                            <button type="button" data-student="{{$student->id}}" class="btn btn-secondary">EDIT</button>
                        </a>
                        <button type="button" data-student="{{$student->id}}" class="btn btn-danger deleteStudent">DELETE</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $(".deleteStudent").on("click",function() {
            let student = $(this).data("student");
            $.ajax({
                url: "{{route('deleteStudent')}}",
                type: "POST",
                data: {
                    student_id: student
                },
                success: function(data) {
                    $(".student-"+student).remove();
                }
            })
        });
    });
</script>

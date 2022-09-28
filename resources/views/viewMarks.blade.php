@include("header",["title" => $title])

<div class="mark-list-container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Math</th>
                <th scope="col">Science</th>
                <th scope="col">History</th>
                <th scope="col">Term</th>
                <th scope="col">Total Marks</th>
                <th scope="col">Created On</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($marks as $mark)
                <tr class="{{'mark-'.$mark->id}}">
                    <td>{{$mark->id}}</td>
                    <td>{{$mark->student->name}}</td>
                    <td>{{$mark->maths}}</td>
                    <td>{{$mark->science}}</td>
                    <td>{{$mark->history}}</td>
                    <td>{{ucwords($mark->term)}}</td>
                    <td>{{$mark->totalMarks}}</td>
                    <td>{{Carbon\Carbon::parse($mark->created_at)->format("M d, Y h:i A")}}</td>
                    <td>
                        <a href="{{route('editMark',["id"=>$mark->id])}}">
                            <button type="button" data-mark="{{$mark->id}}" class="btn btn-secondary">EDIT</button>
                        </a>
                        <button type="button" data-mark="{{$mark->id}}" class="btn btn-danger deleteMark">DELETE</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $(".deleteMark").on("click",function() {
            let mark = $(this).data("mark");
            $.ajax({
                url: "{{route('deleteMark')}}",
                type: "POST",
                data: {
                    mark_id: mark
                },
                success: function(data) {
                    $(".mark-"+mark).remove();
                }
            })
        });
    });
</script>

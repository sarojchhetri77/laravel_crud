<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>student</title>
</head>
<body>
    <div class="container">
        <table class="table text-center">
            <thead>
                <tr>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$student->name }}</td>
                    <td>{{$student->class}}</td>
                    <td>{{$student->phone}}</td>
                    <td>{{$student->gender}}</td>
                    <td>
                        <a href="{{route('student.show',$student->id)}}" class="btn btn-primary">view</a>
                        <a href="{{route('student.edit',$student->id)}}" class="btn btn-success">edit</a>
                        <form method="POST" action="{{route('student.destroy',$student->id)}}" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure')">delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
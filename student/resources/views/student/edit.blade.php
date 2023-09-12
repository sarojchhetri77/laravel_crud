<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Edit student</title>
</head>
<body>
    <div class="container">
        <div class="text-center py-3 mt-3 text-secondary">
            <h2>Edit Student Details</h2>

        </div>
        <div class="container w-50 mt-3 bg-light shadow">
            <form action="{{route('student.update',$student->id)}}" method="POST">
                @method('put');
                @csrf
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Student Name:</label>
                    <input type="text" name="name" value="{{$student->name}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Phone</label>
                    <input type="text" name="phone" value="{{$student->phone}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Class</label>
                    <input type="text" name="class" value="{{$student->class}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Gender</label>
                    <select name="gender" id="">
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                </div>
                <div class="text-center py-3">
                    <button type="submit" class="btn btn-secondary">Edit</button>

                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
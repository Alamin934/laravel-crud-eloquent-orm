<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Curd</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        {{-- <div class="alert alert-success">{{$msg}}</div> --}}
                        <h3>Add New Student</h3>
                        <form method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">City</label>
                                <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}">
                                @error('city')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Marks</label>
                                <input type="text" class="form-control @error('marks') is-invalid @enderror" name="marks" value="{{ old('marks') }}">
                                @error('marks')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>City</th>
                                    <th>Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->city }}</td>
                                        <td>{{ $student->marks }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
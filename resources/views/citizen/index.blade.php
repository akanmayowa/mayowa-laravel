<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Snapnet Index Page</title>
</head>
<body>
<div class="container-fluid">


    <div class="row mb-5 mt-5">
        <div class="col-12">
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('citizen.create') }}"> Create Citizen</a>
            </div>
        </div>
    </div>



    <div class="col-md-6 mb-5 mt-5">
        <form action="">
            <div class="form-group">
                <input type="text" name="q" class="form-control mb-2"/>
                <input type="submit" class="btn btn-primary" value="Search"/>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col-12">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Citizen ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Phone</th>
                    <th scope="col">State</th>
                    <th scope="col">LGA</th>
                    <th scope="col">Wards</th>
                    <th scope="col">Registration Date</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach ($citizens as $citizen)
                    <th>{{ $citizen->id }}</th>
                    <td> <a href="{{ route('citizen.show',$citizen->id) }}"> {{ $citizen->full_name }} </a>    </td>
                    <td>{{ $citizen->gender }}</td>
                    <td>{{ $citizen->phone }} </td>
                    <th>{{ $citizen->state->name }}</th>
                    <td>{{ $citizen->lga->name }}</td>
                    <td>{{ $citizen->ward->name }}</td>
                    <td>{{ $citizen->created_at }}</td>
                <tr>
                @endforeach
                </tbody>
            </table>
                {!! $citizens->links() !!}
        </div>
    </div>


</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

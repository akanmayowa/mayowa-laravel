<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>create Citizen</title>
</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 mt-10">
            <div class="pull-left mb-2">
                <h5>Register Citizen</h5>
            </div>
            <div class="pull-right mt-5 mb-5">
                <a class="btn btn-sm btn-primary" href="{{ route('citizen.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('citizen.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Full Name:</strong>
                    <input type="text" name="name" class="form-control" >
                    @error('full_name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gender:</strong>
                    <select type="text" name="gender" class="form-control" >
                        <option disabled selected>Select A Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>State:</strong>
                    <select type="text" name="state_id" class="form-control" >
                        <option disabled selected>Select A State</option>
                        @foreach($state as $state)
                            <option value="{{$state->id}}"> {{ $state->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>LGa:</strong>
                    <select type="text" name="lga_id" class="form-control" >
                        <option disabled selected>Select A Lga</option>
                        @foreach($lga as $lga)
                            <option value="{{$lga->id}}"> {{ $lga->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ward :</strong>
                    <select type="number" name="ward_id" class="form-control" >
                        <option disabled selected>Select A Ward</option>
                        @foreach($ward as $ward)
                        <option value="{{ $ward->id }}">{{ $ward->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>



            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phones:</strong>
                    <input type="text" name="phone" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-success ml-10 mt-2">Submit</button>
        </div>
    </form>
</div>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<html lang="en">

<head>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<style>

    .container{

        margin-top: 10%;

    }

</style>

<body>

<div class="container">

    @if ($errors->any())

        <div class="alert alert-danger">

            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    @if (Session::has('success'))

        <div class="alert alert-success">

            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

            <p>{{ Session::get('success') }}</p>

        </div>

    @endif

    <div class="card">

        <div class="card-body">
<!--
            <h5 class="card-title">Laravel Import Export to Excel , CSV Example</h5>

            <a href="{{ url('downloadData/xlsx') }}"><button class="btn btn-dark">Download Excel xlsx</button></a>

            <a href="{{ url('downloadData/xls') }}"><button class="btn btn-success">Download Excel xls</button></a>

            <a href="{{ url('downloadData/csv') }}"><button class="btn btn-info">Download CSV</button></a>

-->
            <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ url('students.import-excel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">

                @csrf


                <input type="file" name="import_file" class="form-control" />

                <button class="btn btn-primary">Import File</button>

            </form>


        </div>

    </div>

</div>
<table class="table table-bordered">
    <tr>
        <th>name</th>
        <th>address</th>
        <th>phone</th>
    </tr>
@foreach ($contacts as $contact)
<tr>
    <td>{{$contact->name}}</td>
    <td>{{$contact->address}}</td>
    <td>{{$contact->phone}}</td>

</tr>
    
@endforeach
</table>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/ 4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>


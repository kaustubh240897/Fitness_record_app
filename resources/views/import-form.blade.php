@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Calender data</title>
</head>
<body>

<div class='container' style="padding-top:5rem;">
   <div class='row'>
     <div class='col-md-6 offset-md-3'>
       <form method="POST" action="{{ route('import') }}" enctype="multipart/form-data">
       @csrf
       <div class="form-group">
          <label for="file"> Choose File </label>
          <input type="file" name="file" class='form-control' />
       </div>
        <input type="submit" class="btn btn-primary" value="Submit" />
       </form>
     </div>
   </div>
</div>
    
</body>
</html>

@endsection
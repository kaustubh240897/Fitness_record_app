@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
@if (session('successMsg'))
  <div class='alert alert-success pt-5' roles='alert'>
    {{ session('successMsg') }}
  </div>
@elseif(session('warningMsg'))
  <div class='alert alert-warning pt-5' roles='alert'>
    {{ session('warningMsg') }}
  </div>
@endif
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
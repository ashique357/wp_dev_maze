<?php
use Illuminate\Support\Facades\Input;
?>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <title>Home</title>

    <!-- Style Sheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">

    <!-- Scripts -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
  					<h3>Add New Category</h3>

	  			 <form class="" action="{{route('add.category')}}" method="get">
             @if ($message = Session::get('success'))
							<div class="alert alert-success alert-block">
								<button type="button" class="close" data-dismiss="alert">×</button>
							        <strong>{{ $message }}</strong>
							</div>
						@endif


		  				<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
							<label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{old('name')}}">

							<span class="text-danger">{{ $errors->first('name') }}</span>
						</div>


						<div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
							<label for="category">Category</label>
              <select class="form-control" name="parent_id">
                 <option value="">--Select category</option>
                 @foreach($allCategories as $key=>$value)
                     @if (Input::old('parent_id') == $key)
                     <option value="{{ $key }}" selected>{{ $value }}</option>
                     @else
                    <option value="{{ $key }}">{{ $value }}</option>
                    @endif
                  @endforeach
                </select>
							<span class="text-danger">{{ $errors->first('parent_id') }}</span>
						</div>

						<div class="form-group">
							<button class="btn btn-success">Add New</button>
						</div>

           </form>

  				</div>
        </div>
      </div>

    </body>

</html>

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
          <div class="col-md-6 mx-4">
            <h1>Select Main menu List</h1>
            @csrf
            <div class="main-menu-selector">
              <form class="category" action="/category" method="get">
                <label for="no_of_menus">Number Of Menus</label>
                <select name="number_of_menus" value="">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
              </select>
              <br><br>
              <div class="form-group">
  							<button class="btn btn-submit">Submit</button>
  						</div>
              </form>

            </div>
              <div class="category-menu">
                <form class="" action="/category/{{$getValue}}" method="get">
                  @if ($getValue)
                    @for ($i=0; $i <$getValue ; $i++)
                        <input type="text" name="menu[]" value="@if (isset($getValue->menu[$i])) {{ $getValue->menu[$i] }} @endif">
                        <br>
                    @endfor
                 @endif
                 <div class="form-group">
                  <button class="btn btn-submit">Submit</button>
                </div>
                </form>
                <a href="/category-view">Add Subcategories to existing categories</a>
              </div>
          </div>
        </div>
      </div>

    </body>

</html>

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
    <link rel="stylesheet" href="css/custom.css">

    <!-- Scripts -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-4">

            <div class="breadcrumb-menu">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Library</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
              </nav>
              <hr class="auto-fixed">
            </div>

            <div class="blog-content">
              <h1 class="archive-title">Best WordPress Tutorials</h1>
              <p>WPBeginner WordPress tutorials allow you to extend the power of WordPress.
                Our step by step WordPress tutorials are easy to understand and follows the WordPress best practices.
                Don't waste your time buying books that cover just the basics.
                These WordPress tutorials contain real-life examples, tips,
                and hacks that allows you to learn WordPress faster.</p>
            </div>
            <hr class="auto-fixed">

            <article class="blog-article">
              <header class="blog-header">
                <h1>How to Fix Custom Fields Not Showing in WordPress</h1>
              </header>
              <div class="post-info">
                <span class="blog-post">Posted by</span> <time class="time-date">15<sup class="superscript">th</sup>April,2018</time>
                <a href="#">Editorial Staff</a>
              </div>

              <div class="blog-media">
                <div class="media">
                  <img class="align-self-start mr-3" src="http://cdn.wpbeginner.com/wp-content/uploads/2018/05/fixcustomfields-180x180.png" alt="Generic placeholder image">
                  <div class="media-body">
                    <h5 class="mt-0">Top-aligned media</h5>
                    <p>Cras sit amet nibh libero, in gravida nulla.
                      Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at,
                      tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                      Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
              <hr class="auto-fixed">
            </article>
          </div>
        </div>
      </div>

    </body>

</html>

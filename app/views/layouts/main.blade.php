<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    {{ HTML::style('css/foundation.css') }}
    {{ HTML::script('js/vendor/modernizr.js') }}
  </head>
  <body>
    
    <!-- Header and Nav -->
    <div class="contain-to-grid">
      <nav class="top-bar" data-topbar>
        <ul class="title-area">
          <li class="name">
            <h1><a href="#">ODOT</a></h1>
          </li>
        </ul>
      </nav>
    </div>

    @if (Session::has('message'))
      <div class="alert-box success">
          <div class="row">
            <div class="small-12 columns">
              {{{ Session::get('message') }}}
            </div>
          </div>
      </div>
    @endif

    <div class="row">
      <div class="small-12 columns">
        @yield('content')
      </div>
    </div>
    
    <!-- Footer -->

    <footer class="row">
      <div class="small-12 columns">
        <hr />
        <div class="row">
          <div class="small-6 columns">
            <p>Team Treehouse</p>
          </div>
        </div>
      </div>
    </footer>
    

    {{ HTML::script('js/vendor/jquery.js') }}
    {{ HTML::script('js/foundation.min.js') }}
    {{ HTML::script('js/app.js') }}
    <script>
      $(document).foundation();
    </script>
  </body>
</html>

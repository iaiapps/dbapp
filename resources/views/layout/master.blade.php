<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Database</title>
    <link rel="stylesheet" href="{{url('dbapps')}}/assets/spectre/spectre.min.css" />
    <link rel="stylesheet" href="{{url('dbapps')}}/assets/lineawesome/css/line-awesome.min.css" />
    <link rel="stylesheet" href="{{url('dbapps')}}/css/app.css" />
  </head>
  <body>
    <div id="sidebar" class="sidebar bg-primary">
      <h3 class="text-center text-light text-bold judul">DATABASE APP</h3>
      <h3 class="text-center text-light text-bold judulalt">DB</h3>
     @include('layout.partials.avatar')
     @include('layout.partials.menu')
    </div>
    
    <div id="page" class="page">
        @include('layout.partials.navbar')
        @include('layout.partials.userpanel')
     

      <div class="leftright">
        @yield('content')
      </div>
    </div>

    <script src="{{url('dbapps')}}/js/app.js"></script>
  </body>
</html>

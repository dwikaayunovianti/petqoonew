<!DOCTYPE html>
<html>
  <head>

    {{--Every child page should inject page title through section name title--}}
    @include('partials.MainPartials._head')
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    @yield('OuterInclude')
    <style type="text/css">

h5 {
    font-family: 'Montserrat';font-size: 14px;
}
h4 {
    font-family: 'Montserrat';font-size: 17px;
}
a {
    font-family: 'Montserrat';font-size: 14px;
}
.item {
    height: 100% !important;
    width:  100% !important;
}

.h4,h5{
    color : white;
}
      #ContentOfBody{
        bottom: 0;
        left: 0;
        position: relative;
        right: 0;
        top: 0;
        min-height: 100vh;
      }
      #ContentOfooter{
        bottom: 0;
        left: 0;
        position: relative;
        right: 0;
        top: 5em;
          /* min-height: 100vh; */

        
    }
  
    .navbar-nav li a:hover {
          color: #1abc9c !important;
          background: transparent !important;
      }

    body{
      background: url("picture/111.jpg") fixed center;
      
    }
    </style>
  </head>

  <body>
     @include('partials.MainPartials._navigation')
      <div id="ContentOfBody" class="container-fluid">
         @yield('ContentOfBody')
     <div id="ContentOfooter">
     <footer class="footer">
      <div class="container" >
          <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6" style="color:white">
              <h4 style="text-align: center">Rumah Sakit Hewan</h4>
              <h4 style="text-align: center">IPB University</h4>
              <h5 style="text-align: center">Jl. Agatis Kampus, Babakan, Kec. Dramaga</h5>
              <h5 style="text-align: center">Bogor, Jawa Barat 16680</h5>
            </div>
            <div class="col-sm-3"></div>
          </div>
          <hr>
          
          <div class="row text-center" style="color:white"> © 2019. Developed by <a style="color:white" style="text-decoration: none" href="#">Day Company</a></div>
      </div>
    </footer>
     </div>
  </body>
 
</html>
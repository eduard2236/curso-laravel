<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('titulo', 'biblioteca')</title>
    <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
        <!-- Select2 -->
        <link rel="stylesheet" href="{{asset("assets/$theme/plugins/select2/css/select2.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <!-- CDN de tollstips -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        @yield("styles")
        <!-- CSS personalizado -->
        <link rel="stylesheet" href="{{asset("Assets/css/custom.css")}}">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Inicio Header -->
        @include("theme/$theme/header")
        <!-- Fin Header -->
        <!-- Inicio Aside -->
        @include("theme/$theme/aside")
        <!-- Fin Aside -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">

            </section>
            <section class="content">
                <div class="container-fluid">
                    @yield('contenido')
                </div>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-lg-12">
                        @csrf
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Binvenidos </h3>
                                <div class="card-tools card-success">
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                <!--Carousel Wrapper-->
                <a class="d-flex justify-content-center">Ultimos Ejemplares Agregados</a>
<div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
   
    <div class="carousel-inner text-dark" role="listbox">
      <div class="carousel-item active">
        <div class="d-flex justify-content-center ">
          <img class="d-block w-25" src="{{asset("Assets/lte/dist/img/juego de tronos 3.png")}}" alt="Ultimos Ejemplares Agregados">
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="text-light h3-responsive"></h3>
        
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="d-flex justify-content-center">
          <img class="d-block w-25" src="{{asset("Assets/lte/dist/img/Z8fi7R9E8uuWjR3TizZF.jpg")}}" alt="Ultimos Ejemplares Agregados">
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="text-dark h3-responsive "></h3>
         
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="d-flex justify-content-center">
          <img class="d-block w-25" src="{{asset("Assets/lte/dist/img/fePkAp5PARAamhQnut1A.jpg")}}" alt="Ultimos Ejemplares Agregados">
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="bg-dark h3-responsive"></h3>
         
        </div>
      </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="text-dark carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
      <span class="text-dark fas fa-arrow-alt-circle-left" aria-hidden="true"></span>
      <span class=" sr-only ">Previous</span>
    </a>
    <a class=" carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
      <span class="text-dark fas fa-arrow-alt-circle-right " aria-hidden="true"></span>
      <span class=" sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->
               
            </section>
        </div>
        <!--Inicio Footer -->
        @include("theme/$theme/footer")
        <!-- Fin Footer -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
             <!--Inico de ventana modal para login con mas de un rol -->
             @if(session()->get("roles") && count(session()->get("roles")) > 1)
                @csrf
                <div class=" modal fade" id="modal-seleccionar-rol" data-rol-set="{{empty(session()->get("rol_id")) ? 'NO' : 'SI'}}" tabindex="-1" data-backdrop="static" data-keyboard="false">
                    <div class=" modal-dialog">
                        <div class=" modal-content">
                            <div class=" modal-header">
                                <h4 class="modal-title">Roles de Usuario</h4>
                            </div>
                            <div class=" modal-body">
                                <p>Cuentas con mas de un Rol en la plataforma, a continuacion seleccione con cual de ellos desea trabajar</p>
                                @foreach (session()->get("roles") as $key =>$rol)
                                    <li>
                                        <a href="#" class="asignar-rol" data-rolid="{{$rol['id']}}" data-rolnombre="{{$rol["nombre"]}}">
                                            {{$rol["nombre"]}}
                                        </a>
                                    </li>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
    <!-- Select 2 -->
    <script src="{{asset("Assets/$theme/plugins/select2/js/select2.full.min.js")}}"></script>
       
        <!-- AdminLTE for demo purposes -->
        @yield("scriptsPlugins")
        <script src=" https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
        <script src="{{asset("Assets/js/jquery-validation/jquery.validate.min.js")}}"></script>
        <script src="{{asset("Assets/js/localization/messages_es.min.js")}}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js "></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="{{asset("Assets/js/scripts.js")}}"></script>
        <script src="{{asset("Assets/js/funciones.js")}}"></script>
        <script src="{{asset("Assets/js/app.js")}}"></script>
        <script>
           $(function () {
            //Initialize Select2 Elements
             $('.select2').select2()

            //Initialize Select2 Elements
             $('.select2bs4').select2({
            theme: 'bootstrap4'
             })
            })
        </script>
        

        @yield("scripts")
    </body>
</html>
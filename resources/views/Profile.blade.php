


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>{{$The_Seven_Husbands_of_Evelyn_Hugo}}</title> 
        
        <!-- Link Bootstrap della Head -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">


     <!-- Inizio Header -->

     <div class="container">
      <header>

      <!-- Inzio Navbar -->
          <nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
           <div class="container-fluid">
             <a class="navbar-brand" href="/">Home</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                   <ul class="navbar-nav mx-auto mb-2 ">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">I sette Mariti di Evelyn Hugo</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/Personaggi">Personaggi</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/About Author">About Author</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Impostazioni
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/Profile">Profilo</a></li>
                    <!--<li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>-->
                </ul>
                </li>
                    </ul>
            </div>
        </div>
        </nav>
          <!-- Fine Navbar -->
      </header>
     </div>



      <!-- Fine Header -->
        

     <!-- Inizio Main -->


        <main>

        <!-- Primo Container -->


        <div class="container mx-auto d-flex justify-content-center align-item-center">  

        <div class="col-4">

          <h1 class="text-center py-5 text-success">Page Profile</h1>

        </div>
    
       </div>

       <!-- Secondo Container -->

       <div class="row px-5"><div class="container mx-auto d-flex justify-content-around align-item-center px-5">  

    <div class="col-2 overflow-hidden rounded-circle">
        <img src="{{$user['ProfileImg']}}" alt="" class="img-fluid">
    </div>

    <div class="col-7">

    <p>{{$user['userName']}}</p>
    <p class="text-muted">{{$user['email']}}</p>
    <p>Età: {{$user['age']}}</p>



    </div> 





</div>
       

    </div>





        </main>
      
      <!-- Fine Main -->

















    <!-- Link Bootstrap del Body -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>


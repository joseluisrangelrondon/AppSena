@extends('layouts.main')

@section('content')
    
    <h1 id="tit" class="tittle text-BLUE text-center mt-5">BIENVENIDOS ALMACEN DE COMUNICACIONES</h1>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container mt-lg-4">
    <footer id="foot" class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>
            <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Company, Inc</span>
        </div>
        <h3>Jose Luis Rangel</h3>
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#twitter" />
                    </svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#instagram" />
                    </svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#facebook" />
                    </svg></a></li>
        </ul>
    </footer>
</div>
@endsection

<style>
   
   body {
   background-image: url(/img/logoCom.jpg);
   background-position: center;
   background-size: 90rem;
   }

   #tit{
    color:yellow
   }

   #foot{
    color:white

   }
   
</style>

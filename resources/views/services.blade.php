@extends('template')

@section('content')

<!-- INICIO SERVICIOS -->
<section class="servicios" id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="headerText text-center">
                        <h2>Servicios</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit, nostrum nihil sed velit officia sequi quis ex minus aspernatur!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Inicio Componente Servicios -->
                <div class="col-sm-4">
                    <div class="servBox">
                        <div class="imgBx">
                            <img src="./img/servicio-1.webp" alt="servicio1" class="img-fluid">
                        </div>
                        <div class="content">
                            <h3>Servicio-1<br><span>Descripción corta</span></h3>
                        </div>
                    </div>
                </div>
                <!-- FIN Componente Servicios -->
                <div class="col-sm-4">
                    <div class="servBox">
                        <div class="imgBx">
                            <img src="./img/servicio-2.webp" alt="servicio2" class="img-fluid">
                        </div>
                        <div class="content">
                            <h3>Servicio-2<br><span>Descripción corta</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="servBox">
                        <div class="imgBx">
                            <img src="./img/servicio-3.webp" alt="servicio3" class="img-fluid">
                        </div>
                        <div class="content">
                            <h3>Servicio-3<br><span>Descripción corta</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FIN SERVICIOS -->

@endsection('content')
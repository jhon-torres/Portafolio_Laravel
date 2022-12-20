@extends('template')

@section('content')

 <!-- INICIO EXPERIENCIA -->
 <section class="experiencia" id="experience">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="headerText text-center">
                        <h2>Experiencia</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit aspernatur!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- INICIO Componente experiencia -->
                <div class="col-sm-4">
                    <div class="expBox">
                        <div class="imgBx">
                            <img src="./img/exp-1.webp" alt="experiencia1" class="img-fluid">
                        </div>
                        <div class="content">
                            <h3>Empresa-1<br><span>Año <br>Descripción de la experiencia Lorem ipsum dolor, sit amet consectetur adipisicing elit!</span></h3>
                        </div>
                    </div>
                </div>
                <!-- FIN Componente experiencia -->
                <div class="col-sm-4">
                    <div class="expBox">
                        <div class="imgBx">
                            <img src="./img/exp-2.webp" alt="experiencia2" class="img-fluid">
                        </div>
                        <div class="content">
                            <h3>Empresa-2<br><span>Año <br>Descripción de la experiencia Lorem ipsum dolor, sit amet consectetur adipisicing elit!</span></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="expBox">
                        <div class="imgBx">
                            <img src="./img/exp-3.webp" alt="experiencia3" class="img-fluid">
                        </div>
                        <div class="content">
                            <h3>Empresa-3<br><span>Año <br>Descripción de la experiencia Lorem ipsum dolor, sit amet consectetur adipisicing elit!</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FIN EXPERIENCIA -->

@endsection('content')
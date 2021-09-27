@extends('layouts.master')
@section('title', 'Programas resueltos')
@section('sobre-mi')

<div class="contenedor">
        <h3>Sobre mi</h3>
    <div class="contenedor-sobremi">
        <div class="contentimg">
            <img src="img/computadoras.png" alt="" class="img-prueba">
        </div>
        <div class="content-texto">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit quos illum perspiciatis. Laborum magnam tempore quas. Molestiae consectetur, beatae voluptatibus alias. Itaque repellendus molestiae temporibus nesciunt possimus fuga harum. Non!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos laboriosam dicta voluptatum optio? Ducimus modi aliquid, cumque illo ut quasi repudiandae quo sapiente velit optio fuga quia itaque libero excepturi!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi laboriosam id et possimus, unde quis enim illo placeat dignissimos eius cumque, libero aut fugiat nulla quisquam ab sequi nam, nesciunt.</p>
            <a href="">VER MIS TRABAJOS</a>
        </div>
    </div>
</div>
@endsection

@section('servicios')
<div class="contenedor">
    <h3>Servicios</h3>
        <div class="contenedor-servicios">
            <div class="servicio violeta">
                <h4>Diseño web</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio aperiam inventore necessitatibus veritatis, blanditiis voluptas facilis aliquam, nobis dolores alias modi maxime itaque voluptatum. Quo tempora voluptatum atque voluptas enim.</p>
                <img class="icono" src="img/iconos/monitor.png" alt="">
                <img class="ondas" src="img/iconos/waves.png" alt="">
            </div>
        <div class="servicio celeste">
            <h4>Diseño web</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio aperiam inventore necessitatibus veritatis, blanditiis voluptas facilis aliquam, nobis dolores alias modi maxime itaque voluptatum. Quo tempora voluptatum atque voluptas enim.</p>
            <img class="icono" src="img/iconos/monitor.png" alt="">
            <img class="ondas" src="img/iconos/waves.png" alt="">
        </div>
        <div class="servicio violeta">
                <h4>Diseño web</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio aperiam inventore necessitatibus veritatis, blanditiis voluptas facilis aliquam, nobis dolores alias modi maxime itaque voluptatum. Quo tempora voluptatum atque voluptas enim.</p>
                <img class="icono" src="img/iconos/monitor.png" alt="">
                <img class="ondas" src="img/iconos/waves.png" alt="">
        </div>
    </div>
</div>
@endsection

@section('publicaciones')
<div class="contenedor">
<h3>publicaciones</h3>
    <div class="contenedor-publicaciones">
        <!-- Card -->
<div class="card">
        <!-- Card image -->
        <img class="card-img-top" src="img/publicaciones/logo-C.png" alt="Card image cap">
        <!-- Card content -->
        <div class="card-body">
            <!-- Title -->
            <h4 class="card-title">C++</h4>
            <!-- Text -->
            <p class="card-text">Es esta seccion encontraras programas resueltos en el lenguaje de progrmación C++,
                estos archivos son descargables y totalmente gratis, esperamos que te sean de utilidad.
            </p>
            <!-- Button -->
            <a href="#" class="btn btn-primary">Ver mis trabajos</a>
        </div>
    </div>
        <!-- Card -->
    <div class="card">
        <!-- Card image -->
        <img class="card-img-top" src="img/publicaciones/logo-java.jpg" alt="Card image cap">
            <!-- Card content -->
            <div class="card-body">
                <!-- Title -->
                <h4 class="card-title">Java</h4>
                <!-- Text -->
                <p class="card-text">En esta sección encontraras programas realizados en el lenguaje de porgramación Java, estos archivos
                son descargables y totalmente gratis, esperamos que te sean de utiliadad.</p>
                <!-- Button -->
                <a href="#" class="btn btn-primary">Ver mis trabajos</a>
            </div>
    </div>

	</div>
</div>
@endsection

@section('porque-trabajar')
<div class="contenedor">
        <h3>¿Por que trabajar conmigo?</h3>
        <div class="contenedor-trabajar">
            <div class="item">
                <ul>
                    <li><img src="img/iconos/velocidad.png" alt=""></li>
                    <li>Velocidad</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus quae, a mollitia molestiae accusamus consequatur asperiores tempore blanditiis possimus necessitatibus laboriosam odit earum quas eaque eum, sequi repellendus esse natus.</li>
                </ul>
            </div>
            <div class="item">
                <ul>
                    <li><img src="img/iconos/velocidad.png" alt=""></li>
                    <li>Velocidad</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus quae, a mollitia molestiae accusamus consequatur asperiores tempore blanditiis possimus necessitatibus laboriosam odit earum quas eaque eum, sequi repellendus esse natus.</li>
                </ul>
            </div>
            <div class="item">
                <ul>
                    <li><img src="img/iconos/velocidad.png" alt=""></li>
                    <li>Velocidad</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus quae, a mollitia molestiae accusamus consequatur asperiores tempore blanditiis possimus necessitatibus laboriosam odit earum quas eaque eum, sequi repellendus esse natus.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('que-esperas')
    <div class="contenedor">
        <h3>¿Que esperas para tener tu página wed?</h3>
        <a href="">CHARLEMOS</a>
    </div>
@endsection

@section('contact')
    <div class="content">
        <h2>CONTANT US</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem accusantium dolore, in minima consectetur repellendus dolores accusamus saepe itaque laboriosam! Ea distinctio corporis commodi dolores sapiente reprehenderit ducimus possimus pariatur?</p>
    </div>
    <div class="container">
        <div class="contactIndo">
            <div class="box">
                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                <div class="text">
                    <h4>Address</h4>
                    <p>FREEPROGRAMS,<br>Aprender es ser aprendido</p><br><p>9612365046</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fas fa-phone-volume"></i></div>
                <div class="text">
                    <h4>phone</h4>
                    <p>9612365046</p>
                </div>
            </div>
            <div class="box">
            <div class="icon"><i class="fas fa-envelope"></i></div>
                <div class="text">
                    <h4>Email</h4>
                    <p>darinelcigarroa97@gmail.com</p>
                </div>
            </div>
            <div class="contactForm">
                <form action="">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="" id="" placeholder="nombre">
                        <span>Full name</span>
                    </div>
                    <div class="inputBox">
                        <input type="email" name="" id="" required="required" placeholder="email">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                        <span>Type your Message..</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" id="">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

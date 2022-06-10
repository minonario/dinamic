@extends('layouts.master')

@section('title', 'Dinamic - Un Producto, Muchas Soluciones')

@push('plugin-styles')
@endpush

@section('content')

<section id="contact" class="contact">

<div class="container" style="margin-top: 50px;">
  <div class="row">
    <div class="col-12 col-md-5">
      <img src="img/puntox2.png" style="width: 100%;">
    </div>



    <div class="qr col-12 col-md-5">
      <h4 style="margin-bottom: 25px; font-weight: bold; text-align: center; color: #2880ff;">Equipo de alta gama tecnológica</h4>
      <ul class="lista">
        <li>Lectores para tarjeta con chip o banda magnética.</li>
        <li>Procesador ARM® Cortex® Procesador seguro.</li>
        <li>Sistema operativo Android V7.1</li>
        <li>Pantalla multitáctil.</li>
        <li>Impresora térmica.</li>
        <li>Interfaces de comunicación Dual SIM 2G/3G/4G y WiFi.</li>
        <li>Batería recargable 7.2V, 2600mAh.</li>
      </ul>


      <a href="/adquiere"><button class="btn btn-primary" style="position: relative; left: 60%; padding-top: 15px; padding-bottom: 15px;">¡Adquiere tu punto!</button></a>



    </div>
    <br>

    <div class="qr col-12 col-md-2 align-self-end">
      <h4 style="text-align: center; font-weight: bold; color: #2880ff;">Manual</h4>
      <img src="img/qr.png">
    </div>





  </div>
</div>


</section>

<section class="contact">

    <img src="img/b11.jpg" style="width: 100%;" class="iw">
    <img src="img/pw1.jpg" style="width: 100%;" class="im">
</section>

<section class="contact" style="margin-bottom: 0px;">
  <div class="container">
    <div class="row">
      <div class="qr col-12 col-md-6">
        <h4 style="margin-bottom: 25px; font-weight: bold; text-align: center; color: #2880ff;">Beneficios del Apollo</h4>
        <ul class="lista">
          <li>Es de tu propiedad.</li>
          <li>El Apollo acepta las tarjetas de crédito y débito más importantes con tecnología de Chip y banda magnética.</li>
          <li>Transacciones seguras y protegidas.</li>
          <li>El dinero va directo a tu cuenta.</li>
          <li>Soporte especializado, diagnóstico y mantenimiento de forma remota.</li>
        </ul>
  
      </div>
      <div class="col-12 col-md-6">
        <img src="img/tarjetas.jpg" style="width: 100%;">
      </div>
    </div>
  </div>
</section>

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6">
            <h4>Acerca de Dinamic:</h4>
            <p style="  text-align: justify;
            text-justify: inter-word;">
              Somos una empresa venezolana, especializada en soluciones tecnológicas en medios de pagos.
              Brindamos a nuestros clientes las soluciones que garantizan la efectividad en sus operaciones
              financieras.
            </p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Email</h4>
          <p oncopy="return false">
            Contacto@dinamic.tech
          </p>
          <h4>Teléfonos:</h4>
          <p>0212-761-86-19
            <br>
            0212-761-71-77
          <br>
          0212-761-50-19</p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="/index.html">Inicio</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="/producto">Productos</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="/aliados">Aliados</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="/tutoriales">Tutoriales</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="descargas/manualapollo.pdf" target="_blank">Descargables</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="/faq">FAQ</a></li>
          </ul>
          <div class="social-links mt-3">
            <a href="https://www.facebook.com/dinamic.techve" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/dinamic.tech/" class="instagram"><i class="bx bxl-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

@stop

@push('custom-scripts')
@endpush
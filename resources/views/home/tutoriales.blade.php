@extends('layouts.master')

@section('title', 'Dinamic - Un Producto, Muchas Soluciones')

@push('plugin-styles')
@endpush

@section('content')

<section id="contact" class="contact" style="margin-top: 50px; margin-bottom: 25px;">

    <div class="row"></div>

    <div class="col-12" style="margin-bottom: 25px;">
    <img src="img/tutorial.jpg" style="width: 100%;" class="img-fluid">
    <!----
    <img src="img/cuentam.jpg" style="width: 100%;" class="im">
    -->
    </div>


    <div class="row justify-content-around" style="margin-left: 20px; margin-right: 20px;">

        <div class="videocard">
            <img src="img/video.jpg" style="width: 100%;" class="img-fluid">
            <div class="cardbody">
            <h3>Tutorial ejemplo</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fringilla nisi sed ligula commodo, in sollicitudin justo aliquam. Cras mattis euismod lectus, a ultrices augue convallis at.</p>
            <a style="color: rgb(48, 48, 48);">VER VÍDEO &gt;</a>
             </div>
            
        </div>

    <div class="videocard">
        <img src="img/video.jpg" style="width: 100%;" class="img-fluid">
        <div class="cardbody">
        <h3>Tutorial ejemplo</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fringilla nisi sed ligula commodo, in sollicitudin justo aliquam. Cras mattis euismod lectus, a ultrices augue convallis at.</p>
        <a style="color: rgb(48, 48, 48);">VER VÍDEO &gt;</a>
         </div>
        
    </div>
    
    <div class="videocard">
        <img src="img/video.jpg" style="width: 100%;" class="img-fluid">
        <div class="cardbody">
        <h3>Tutorial ejemplo</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fringilla nisi sed ligula commodo, in sollicitudin justo aliquam. Cras mattis euismod lectus, a ultrices augue convallis at.</p>
        <a style="color: rgb(48, 48, 48);">VER VÍDEO &gt;</a>
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
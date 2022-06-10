@extends('layouts.master')

@section('title', 'Dinamic - Un Producto, Muchas Soluciones')

@push('plugin-styles')
@endpush

@section('content')

        <!-- Alpha.ly Version 0.1 | Development Version -->
    <div class="container">
    <div class="col-xs-12">
            <div class="text-center" style="padding-top: 30px; padding-bottom: 30px;">
                <img src="assets/img/horizontal.png" class="img-fluid" alt="" style="width: 40%">
                <h2 style="color: #ffffff; padding-top: 10px; font-weight: 800;">Nuestros Enlaces</h2>
            </div>
    </div>
    </div>


    <div class="container">
            <div class="text-center col-12 col-md-12">
                <div style="padding-bottom: 30px;">
                    <a href="/descargas/manualapollo.pdf" target="_blank" type="button" class="botoncito" style="padding-top:10px; padding-bottom:10px; font-weight: 800;">Descargar Manual Apollo</a>
                </div>
                <div style="padding-bottom: 30px;">
                    <button onclick="location.href" type="button" class="botoncito" style="padding-top:10px; padding-bottom:10px; font-weight: 800;">Soporte en Línea</button>
                </div>
                <div style="padding-bottom: 30px;">
                    <button onclick="location.href='https://wa.link/4qgnsp'" type="button" class="botoncito" style="padding-top:10px; padding-bottom:10px; font-weight: 800;">Whatsapp</button>
                </div>
                <div style="padding-bottom: 30px;">
                    <button onclick="location.href='https://dinamic.tech'" target="_blank" type="button" class="botoncito" style="padding-top:10px; padding-bottom:10px; font-weight: 800;">Pagina Web</button>
                </div>
                
                <div style="padding-bottom: 30px;">
                    <button onclick="location.href='https://dinamic.tech/requisitos'" target="_blank" type="button" class="botoncito" style="padding-top:10px; padding-bottom:10px; font-weight: 800;">Requisitos</button>
                </div>
                
                
            </div>
    </div>
    

        <div class="text-center">
            <h5 style="color: #ffffff; font-weight: 400;">Encuentranos en nuestras RRSS</h5>
        </div>


    <div class="d-flex justify-content-center">
        <a href="https://www.instagram.com/dinamic.tech/" class="iconitos"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="iconitos"><i class="bx bxl-linkedin"></i></a>
    </div>

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
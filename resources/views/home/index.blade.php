@extends('layouts.master')

@section('title', 'Dinamic - Un Producto, Muchas Soluciones')

@push('plugin-styles')
@endpush

@section('content')


<main>

<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval= "6000">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="first-slide animated zoomInUp" src="">
      <section id="hero">
        <div class="row">
          <div class="col-md-12 col-md-offset-12 text-center">

          </div>
        </div>
        <div class="container">
          <div data-aos="zoom-out">
            <div class="row justify-content-between">
              <div class="centrado">
                <div class="col-md-12 col-md-offset-12 text-center">

                </div>
              </div>
              <div class="col-lg-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                <div data-aos="zoom-out">

                </div>
              </div>
            </div>
          </div>
      </section>
    </div>

    <div class="carousel-item">
      <img class="second-slide animated zoomInDown" src="" alt="">
      <section id="herodos">
        <div class="row">
          <div class="btnwb">
            <a href="http://www.venezolano.com" target="_blank"><img src="{{ asset('/img/bvc2.png') }}"></a>
            <h2 style="position: absolute; bottom: 15%; left: 70%; color: #FFF; font-weight: bold; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.144); background-color: #1489a7; padding: 15px 20px; border-radius: 8px; font-size: 15px;">Muy Pronto Nuevos Aliados</h2>
          </div>
          <div class="col-md-12 col-md-offset-12 text-center">
          </div>
        </div>
      </section>
    </div>


    <div class="carousel-item">
      <section id="herocuatro">
        <div class="row">
          <div class="col-12 text-center">
            <div class="btnwb">
              <p class="textop">¿Quieres adquirir tu punto de venta y no tienes cuenta en el BVC?</p>
              <p class="textopdos" style="">¡Nosotros te ayudamos!</p>
              <a href="http://pclat.com/dinamic/adquiere" class="textoptres btn btn-primary" style="color: #FFF; position: relative; top: 150%; margin: 0 auto; font-size: 3vh; font-weight: bold;">Haz clic aquí</a>
            </div>
          </div>
        </div>
      </section>
    </div>

    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

    </div>
    
  </div>

<!-- End Hero -->

<section id="contact" class="contact" style="background-image: url(img/s4.png); background-position: center; background-repeat: no-repeat; background-size: cover; height: 750px;">
  <div class="container">
    <div class="section-title" data-aos="fade-up" style="justify-content: center; text-align: center;">
      <p>Especificaciones técnicas</p>
    </div>
    <div class="row text-center justify-content-center">
      <div class="social-linkss" style="position: absolute;">
        <a  data-bs-toggle="tooltip" data-bs-placement="left" title="Conexión Wifi" style="position: absolute; margin: auto; top: 85%; bottom: 0%; right: 15%; left: 0%;"><img src="{{ asset('/img/i1.png') }}"></a>
        <br>
        <a  data-bs-toggle="tooltip" data-bs-placement="left" title="Pantalla Multitáctil" style="position: absolute; margin: auto; top: 250%; bottom: 0%; right: 25%; left: 0;"><img src="{{ asset('/img/i2.png') }}"></a>
        <br>
        <a  data-bs-toggle="tooltip" data-bs-placement="left" title="Automatiza y administra recursos empresariales" style="position: absolute; margin: auto; top: 400%; bottom: 0%; right: 20%; left: 0;"><img src="{{ asset('/img/i3.png') }}"></a>
        <br>
        <a  data-bs-toggle="tooltip" data-bs-placement="top" title="Sistema Android" style="position: absolute; margin: auto; top: 500%; bottom: 0%; right: 0%; left: 0;"><img src="{{ asset('/img/i7.png') }}"></a>
        <br>
        <a  data-bs-toggle="tooltip" data-bs-placement="right" title="Actualización del sistema on line" style="position: absolute; margin: auto; top: 85%; bottom: 0%; right: 0%; left: 15%;"><img src="{{ asset('/img/i4.png') }}"></a>
        <br>
        <a  data-bs-toggle="tooltip" data-bs-placement="right" title="Doble SIM" style="position: absolute; margin: auto; top: 250%; bottom: 0%; right: 0%; left: 25%;"><img src="{{ asset('/img/i5.png') }}"></a>
        <br>
        <a  data-bs-toggle="tooltip" data-bs-placement="right" title="Generador de comprobante impreso" style="position: absolute; margin: auto; top: 400%; bottom: 0%; right: 0%; left: 20%;"><img src="{{ asset('/img/i6.png') }}"></a>
      </div>
    </div>
  </div>
</section>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact" style="margin-top: -15vh;">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <p>Contáctanos</p>
    </div>

    <div class="row">
      <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
        <form id="mainform" action="/contact-us" method="post" role="form" class="php-email-form" style="background-color: #f8f8f8; padding: 20px 20px 20px 20px; border-radius: 8px;">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Nombre y Apellido" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Numero de teléfono" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="email" id="email" placeholder="Correo Electrónico" required>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" if="message" rows="5" placeholder="Mensaje" required></textarea>
          </div>

          <div class="row">
            <div class="col-md-6 form-group">
              <div class="g-recaptcha" data-sitekey="6LcZE0sgAAAAAB_JWPG8oR2IAHwAKVQrJArEsfgP"></div>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0 align-self-center">
              <div class="loading">Enviando...</div>
              <div class="error-message"></div>
              <div class="sent-message">¡Tu mensaje ha sido enviado con éxito!</div>

              <div class="text-center">
                <div class="spinner-border oculto" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
                <button type="submit" style="border-radius: 5px;">Enviar</button>
              </div>
            </div>
          </div>
          <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        </form>

      </div>
    

    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100"  style="background-color: #f8f8f8; padding: 20px 20px 20px 20px; border-radius: 8px; height: fit-content;">
      <div class="info">
        <div class="address">
          <a href="https://goo.gl/maps/wJQGcFL1t3wNg7E48" target="_blank">
            <i class="bi bi-geo-alt"></i>
          </a>
          <h4>Ubicación:</h4>
          <p>Caracas, Venezuela</p>
        </div>

        <div class="email">
          <i class="bi bi-envelope"></i>
          <h4>Email:</h4>
          <p oncopy="return false">Contacto@dinamic.tech</p>
        </div>

        <div class="phone">
          <i class="bi bi-phone"></i>
          <h4>Llamadas:</h4>
          <p>
            0212-761-86-19 | 0212-761-71-77
            <br>
            0212-761-50-19 |</p>
        </div>

        <div class="phone">
          <a href="https://wa.link/4qgnsp" target="_blank">
            <i class="bx bxl-whatsapp"></i>
          </a>
          <h4>Solo Whatsapp</h4>
          <p>+1 (786) 867.6213</p>
        </div>
        
      </div>
    </div>
    
  </div>
  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

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
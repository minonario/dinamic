@extends('layouts.master')

@section('title', 'Dinamic - Un Producto, Muchas Soluciones')

@push('plugin-styles')
@endpush

@section('content')

<section id="contact" class="contact" style="margin-top: 50px;">

    <img src="img/p1.jpg" style="width: 100%;" class="iw">
    <img src="img/p1.jpg" style="width: 100%;" class="im">
</section>

<section id="contact" class="contact" style="margin-top: -50px;">
  <div class="container">
    <div class="row">

      <div class="col-12 col-md-8">
        <img src="img/f1.jpg" style="width: 100%;" class="iw">
        <img src="img/bm15.jpg" style="width: 100%;" class="im">
      </div>

      <div class="col-12 col-md-4 align-self-center">
        <h2 style="text-align: center; font-weight: bold; color: #2880ff;" class="tlfspc">Preguntas Frecuentes</h2>
      </div>
      
    </div>
  </div>
</section>

<div class="col-12">
 <section id="faq" class="faq" style="margin-top: -50px;">
      <div class="container">
        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
             <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed" aria-expanded="false">1. ¿Cuál es el requisito principal para adquirir un punto de venta?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list" style="">
                <p>
                  Contar con una cuenta jurídica o firma personal registrada con nuestro banco aliado.
                </p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate">
             <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">2. ¿Puedo adquirir un punto de venta como persona natural?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  NO, solo persona natural con firma personal registrada y persona jurídica.
                </p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">3. ¿Hacen envíos a nivel nacional?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Sí, realizamos envíos a cualquier parte del país mediante las siguientes agencias de encomienda: EALCA, ZOOM y MRW.
                </p>
              </div>
            </li>
          </ul>

            <button class="pls btn btn-primary" type="button" id="desaparece" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" onclick="style.display = 'none'">Ver mas...</button>


            <div class="collapse" id="collapseExample" style="margin-top: 25px;">
            <ul>
                <li data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">
               <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">4. ¿Cuáles son las formas de pago para adquirir el punto?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Puede cancelar en moneda nacional a través de nuestros bancos aliados o en divisas.
                  </p>
                </div>
              </li>
  
              <li data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">
                <a data-bs-toggle="collapse" data-bs-target="#faq-list-7" class="collapsed">5. ¿Con cuáles operadoras trabajan los puntos de venta?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Nuestros puntos pueden trabajar bajo la operadora de tu preferencia, bien sea Digitel, Movistar o Movilnet.

                  </p>
                </div>
              </li>
  
              <li data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">
               <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed">6. ¿En qué tiempo me entregan el punto de venta?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Una vez sea concretado el proceso de la solicitud y pago, el equipo será entregado en las siguientes 48 a 72 horas. 

                  </p>
                </div>
              </li>
  
              <li data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">
               <a data-bs-toggle="collapse" data-bs-target="#faq-list-9" class="collapsed">7. ¿Cuáles son los métodos de pago que acepta el punto de venta?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-9" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Acepta tarjeta crédito o débito, ya sean de
                    chip o banda magnética nacionales e internacionales, VISA, MASTERCARD, MAESTRO y
                    ALIMENTACION.
                  </p>
                </div>
              </li>
  
              <li data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">
                <a data-bs-toggle="collapse" data-bs-target="#faq-list-10" class="collapsed">8. ¿Cuáles son los recaudos y requisitos?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-10" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Debe seleccionar del menú principal en el apartado adquiere tu punto.
                  </p>
                </div>
              </li>
  
              <li data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">
               <a data-bs-toggle="collapse" data-bs-target="#faq-list-11" class="collapsed">9. ¿Qué es el código de afiliación?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-11" class="collapse" data-bs-parent=".faq-list">
                  <p oncopy="return false">
                    Es un código único de ocho (8) dígitos que asigna el banco a los comercios para realizar transacciones en puntos de venta de manera segura.
                  </p>
                </div>
              </li>
            </ul>




            </div>



          </div></div></section>
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
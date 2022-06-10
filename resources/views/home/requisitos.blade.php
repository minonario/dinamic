@extends('layouts.master')

@section('title', 'Dinamic - Un Producto, Muchas Soluciones')

@push('plugin-styles')
@endpush

@section('content')

<section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title aos-init aos-animate" data-aos="fade-up">
          <p>Conoce los Requisitos</p>
        </div>

        <div class="faq-list">
          <ul>

                                <li data-aos="fade-up" class="aos-init aos-animate">
                                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1" aria-expanded="true">Cuenta en el Banco Venezolano de Crédito<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                  <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list" style="">
                                    <p>
                                      Debes tener una cuenta bancaria en el Banco Venezolano de Crédito (Persona Natural con libre ejercicio, de la profesión, Firma personal o persona jurídica), si no la posees haz clic acá para ver sus requisitos de apertura. En caso de poseer cuenta en el banco, ve al siguiente paso.
                                    </p>
                                  </div>
                                </li>


       
                                <li data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                                  <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed" aria-expanded="false">Enviar correo de contacto<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                  <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list" style="">
                                    <p oncopy="return false">
                                      Envíanos un correo electrónico a contacto@Dinamic.tech indicándonos tu nombre, apellido, número telefónico 

(fijo y celular) y número de cédula, para que nuestro equipo de ventas te contacte y te envíe toda la información.
                                    </p>
                                  </div>
                                </li>


            <li data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
             <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed" aria-expanded="false">Llenar documentos y enviar comprobante<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list" style="">
                <p oncopy="return false">
                  Una vez llenados todos los documentos, debes enviarlos junto con el comprobante de pago del equipo, al 

correo contacto@Dinamic.tech (Recuerde por favor que todas las planillas y documentos,  deben ser llenados con 

letra legible y firmados, estos deben estar escaneados en optimas condiciones). 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed" aria-expanded="false">Recibe tu Punto<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list" style="">
                <p>
                  Luego de revisados y aprobados los recaudos por el Banco, coordinaremos con usted el envío del equipo a través de una empresa Courier.
                </p>
              </div>
            </li>

            
          </ul>

          <p>Gracias por preferirnos. Somos Dinamic, Un Producto, Muchas Soluciones.</p>


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
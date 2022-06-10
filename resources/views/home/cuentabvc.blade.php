@extends('layouts.master')

@section('title', 'Dinamic - Un Producto, Muchas Soluciones')

@push('plugin-styles')
@endpush

@section('content')


<main>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact" style="margin-top: 25px; margin-bottom: 25px;">
    <img src="img/cbvc.jpg" style="width: 100%;" class="iw">
    <img src="img/cbvcm.jpg" style="width: 100%;" class="im">
</section>

<div class="container" style="margin-bottom: 50px;">

  <div class="col-12">
      <h2 style="font-weight: bold; margin-bottom: 25px; color: #2880ff">Para la empresa</h2>
      <ul class="listdos">
          <li>Documento Constitutivo y sus reformas, debidamente registrado.</li>
          <li>Documento donde se reflejen los Administradores o la Junta directiva actual, registrado.</li>
          <li>Publicación de los documentos anteriores.</li>
          <li>Rif vigente.</li>
          <li>Última declaración de Impuesto Sobre la Renta.</li>
          <li>Referencia Bancaria (no mayor a 30 días). <a href="descargas/DeclaraciondenoposeercuentasenInstitucionBancaria.pdf" target="_blank">(Si no posee enviar formato adjunto)</a></li>
          <li>Recibo de un servicio público o privado que refleje dirección de la empresa (no mayor de 90 días) sustituye al Contrato de Arrendamiento.</li>
          <li>Cédula de los accionistas, representantes legales y autorizados a firmar en la cuenta.</li>
      </ul>
  </div>

  <div class="col-12">
      <h2 style="font-weight: bold; margin-bottom: 25px; margin-top: 50px; color: #2880ff;">Para los Firmantes</h2>
      <ul class="listdos">
          <li>Cédula de identidad</li>
          <li>Rif vigente</li>
          <li>Referencia Bancaria (no mayor a 30 días). <a href="descargas/DeclaraciondenoposeercuentasenInstitucionBancaria.pdf" target="_blank">(Si no posees descarga el formulario)</a></li>
          <li>Constancia de trabajo, no mayor a 30 días o Certificación de ingresos.</li>
          <li>Última declaración de Impuesto Sobre la Renta o Declaración Jurada de No Contribuyente <a href="descargas/Declaracion-de-no contribuyente.pdf" target="_blank">(formato adjunto)</a>.</li>
      </ul>
  </div>

  <div class="col-12" style="margin-top: 50px;">
      <p style="text-align: center; font-size: 14px;">Envíanos los documentos a contacto@dinamic.tech</p>
  </div>
</div>

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
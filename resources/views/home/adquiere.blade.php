@extends('layouts.master')

@section('title', 'Dinamic - Un Producto, Muchas Soluciones')

@push('plugin-styles')
@endpush

@section('content')

<main>
  <section id="contact" class="contact" style="margin-top: 50px; margin-bottom: 25px;">
      <div class="row">
        <div class="col-12" style="margin-bottom: 25px;">
        <img src="img/b12.jpg" style="width: 100%;" class="iw">
        <img src="img/cuentam.jpg" style="width: 100%;" class="im">
        </div>

        <div class="col-12" style="margin-bottom: 25px;">
        <img src="img/b3.jpg" style="width: 100%;" class="iw">
        <img src="img/aliados.jpg" style="width: 100%;" class="im">

        <div class="btnwb">
        <a href="/cuentabvc"><button class="btn btn-primary" style="position: absolute; left: 80%; bottom: 5%; padding-top: 15px; font-weight: bold ;padding-bottom: 15px; font-size: 15px ;max-width: 180px;">Si no tienes cuenta, haz clic aquí</button></a>
        <a href="" data-toggle="modal" data-dismiss="modal" data-target="#exampleModal"><img src="img/bvc2.png" style="position: absolute; left: 5%; max-width: 250px; bottom: 50%;"></a>
        </div>

        <div class="btnm">
            <a href="/cuentabvc"><button class="btn btn-primary" style="position: absolute; left: 50%; bottom: 5%; padding-top: 15px; padding-bottom: 15px; max-width: 180px;">Si no tienes cuenta, haz clic aquí</button></a>
            <a href="" data-toggle="modal" data-dismiss="modal" data-target="#exampleModal"><img src="img/bvc2.png" style="position: absolute; left: 5%; max-width: 200px; bottom: 5%; padding: 0px 25px; padding-bottom: 20px;"></a>
        </div>

      </div>
      </div>
  </section>

  <div class="modal" id="exampleModal" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form id="formular" action="/generatepdf" method="POST">
        <div class="formulariodinamic text-center">
            <!-- Circles which indicates the steps of the form: -->
            <div class="row">
              <div style="text-align:center; margin-bottom: 10px;">
                <span class="step">1</span>
                <span class="step">2</span>
                <span class="step">3</span>
                <span class="step">4</span>
                <span class="step">5</span>
              </div>
            </div>
            <div class="tab">
              <div class="cuerpo row d-flex justify-content-between">
                      <h2>Datos del representante legal</h2>
                      <div class="col-12 col-md-12 inform">
                        <select id="legal" name="legal" class="forminput validate-field">
                            <option hidden value="">Seleccione</option>
                            <option value="juridica">Persona Jurídica</option>
                            <option value="personal">Firma personal registrada</option>
                        </select>
                      </div>
                      <div class="col-12 col-md-6 inform">
                        <input type="text" name="primer_nombre" id="primer_nombre" placeholder="Primer Nombre" class="forminput validate-field valid-name" maxlength="20">
                      </div>
                      <div class="col-12 col-md-5 inform">
                        <input type="text" name="primer_apellido" id="primer_apellido" placeholder="Primer Apellido" class="forminput validate-field valid-name" maxlength="20">
                      </div>
                      <div class="col-12 col-md-6">
                        <input type="text" name="segundo_nombre" id="segundo_nombre" placeholder="Segundo Nombre" class="forminput validate-field valid-name" maxlength="20">
                      </div>
                      <div class="col-12 col-md-5">
                        <input type="text" name="segundo_apellido" id="segundo_apellido" placeholder="Segundo Apellido" class="forminput validate-field valid-name" maxlength="20">
                      </div>
                      <div class="col-12 col-md-3">
                        <select name="nacionalidad" id="nacionalidad"  class="forminput validate-field">
                            <option value="" hidden selected>Nacionalidad</option>
                            <option value="Venezolano">Venezolano</option>
                            <option value="Extranjero">Extranjero</option>
                        </select>
                      </div>
                      <div class="col-12 col-md-4">
                        <input type="text" name="identificacion" id="identificacion" placeholder="N° identificación / cédula" maxlength="12" class="forminput validate-field valid-phone">
                      </div>
                      <div class="col-12 col-md-4">
                        <input type="text" name="email" id="email" placeholder="E-mail" maxlength="30" class="forminput validate-field valid-mail">
                      </div>
                      <div class="col-12 col-md-3">
                        <select name="prefijo_movil" id="prefijo_movil" class="forminput validate-field">
                            <option value="" hidden selected>Prefijo Movil</option>
                            <option value="0414">0414</option>
                            <option value="0424">0424</option>
                            <option value="0426">0426</option>
                            <option value="0416">0416</option>
                            <option value="0412">0412</option>
                        </select>
                      </div>
                      <div class="col-12 col-md-4">
                        <input type="text" name="numero_celular" id="numero_celular" placeholder="N° teléfono" maxlength="12" class="forminput validate-field valid-phone">
                      </div>
                      <div class="col-12 col-md-4">
                        <input type="text" name="numero_local" id="numero_local" placeholder="N° teléfono local" maxlength="12" class="forminput validate-field valid-phone">
                      </div>
              </div>
            </div>


            <div class="tab">
                <div class="cuerpo row d-flex justify-content-between">
                <h2>Datos de la empresa</h2>
                <div class="col-5 col-md-5">
                  <input type="text"  name="razon_social" id="razon_social" placeholder="Razón social" class="forminput validate-field" maxlength="30" required >
                </div>
                <div class="col-2 col-md-2">
                  <select  name="tipo_rif" id="tipo_rif" class="forminput validate-field" required>
                      <option value="" hidden selected>RIF</option>
                      <option value="juridico">Jurídico</option>
                      <option value="firma_personal">Firma personal registrada</option>
                  </select>
                </div>
                <div class="col-1 col-md-1" style="padding: 0 0 14px 0">
                  <select id="tipo" name="tipo" class="forminput validate-field" required>
                    <option value="" hidden selected></option>
                    <option value="V-">V</option>
                    <option value="E-">E</option>
                    <option value="J-">J</option>
                  </select>
                </div>
                <div class="col-4 col-md-4">
                  <input type="text" name="rif" id="rif" placeholder="RIF" class="forminput validate-field valid-phone" maxlength="14" required>
                </div>  
                <div class="col-12 col-md-5">
                  <select name="actividad_economica" id="actividad_economica" class="forminput validate-field" required>
                      <option value="" hidden selected>Actividad Económica</option>
                      <option value="Agencia de Viajes">Agencia de Viajes</option>
                      <option value="Alcaldías">Alcaldías</option>
                      <option value="Alimentos">Alimentos</option>
                      <option value="Educación">Educación</option>
                      <option value="Entidad Recaudadora">Entidad Recaudadora</option>
                      <option value="Entretenimiento">Entretenimiento</option>
                      <option value="Franquicias">Franquicias</option>
                      <option value="Gobernaciones">Gobernaciones</option>
                      <option value="Hospitales y Clínicas">Hospitales y Clínicas</option>
                      <option value="Hotelería">Hotelería</option>
                      <option value="Inmobiliaría">Inmobiliaría</option>
                      <option value="Manejo de Redes Sociales">Manejo de Redes Sociales</option>
                      <option value="Medios de Comunicación">Medios de Comunicación</option>
                      <option value="Restaurantes">Restaurantes</option>
                      <option value="Salones de Belleza">Salones de Belleza</option>
                      <option value="Servicios de Seguridad">Servicios de Seguridad</option>
                      <option value="Servicios Fúnebres">Servicios Fúnebres</option>
                      <option value="Servicios Profesionales">Servicios Profesionales</option>
                      <option value="Séguros">Séguros</option>
                      <option value="Tecnología">Tecnología</option>
                      <option value="Tiendas por Departamentos">Tiendas por Departamentos</option>
                      <option value="Tintorerías">Tintorerías</option>
                      <option value="Transporte">Transporte</option>
                      <option value="Ventas al por Detal">Ventas al por Detal</option>
                      <option value="Otros">Otros</option>
                  </select>
                </div>
                <div class="col-12 col-md-2">
                  <input type="text" name="tiempo_actividad" id="tiempo_actividad"  placeholder="Años" maxlength="10" class="forminput validate-field">
                </div>
                <div class="col-12 col-md-5">
                  <input type="email" name="email_empresa" id="email_empresa"  placeholder="E-mail de la empresa" maxlength="30" class="forminput validate-field valid-email">
                </div>
            </div>
          </div>

          <div class="tab">
            <div class="cuerpo row d-flex justify-content-between">
              <h2>Datos del domicilio fiscal</h2>
              <div class="col-12 col-md-6">
                <input type="text" name="calle" id="calle"  placeholder="Avenida y/o calle" class="forminput validate-field" maxlength="24" required>
              </div>
              <div class="col-12 col-md-6">
                <input type="text" name="casa" id="casa" placeholder="Casa, edificio, oficina o local" class="forminput validate-field" maxlength="24" required>
              </div>
              <div class="col-12 col-md-6">
                <input type="text" name="piso" id="piso" placeholder="Torre, piso, apartamento" class="forminput validate-field" maxlength="24" required>
              </div>
              <div class="col-12 col-md-6">
                <input type="text" name="urbanizacion" id="urbanizacion" placeholder="Urbanización o local" class="forminput validate-field" maxlength="24" required>
              </div>
              <div class="col-12 col-md-12">
                <input type="text" name="punto_referencia" id="punto_referencia" placeholder="Punto de referencia" class="forminput validate-field" maxlength="100" required>
              </div>
              <div class="col-12 col-md-6">
                <input type="text" name="parroquia" id="parroquia" placeholder="Parroquía" class="forminput validate-field" maxlength="24" required>
              </div>
              <div class="col-12 col-md-6">
                <input type="text" name="municipio" id="municipio" placeholder="Municipio" class="forminput validate-field" maxlength="24" required>
              </div>
              <div class="col-12 col-md-5">
                <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" class="forminput validate-field"  maxlength="24" required>
              </div>
              <div class="col-12 col-md-4">
                <select name="estado" id="estado" class="forminput validate-field">
                  <option value="" hidden selected>Estado</option>
                  <option value="Amazonas">Amazonas</option>
                  <option value="Anzoátegui">Anzoátegui</option>
                  <option value="Apure">Apure</option>
                  <option value="Aragua">Aragua</option>
                  <option value="Barinas">Barinas</option>
                  <option value="Bolívar">Bolívar</option>
                  <option value="Carabobo">Carabobo</option>
                  <option value="Cojedes">Cojedes</option>
                  <option value="Delta Amacuro">Delta Amacuro</option>
                  <option value="Distrito Capita">Distrito Capital</option>
                  <option value="Falcón">Falcón</option>
                  <option value="Guárico">Guárico</option>
                  <option value="Lara">Lara</option>
                  <option value="Mérida">Mérida</option>
                  <option value="Miranda">Miranda</option>
                  <option value="Monagas">Monagas</option>
                  <option value="Nueva Esparta">Nueva Esparta</option>
                  <option value="Portuguesa">Portuguesa</option>
                  <option value="Sucre">Sucre</option>
                  <option value="Táchira">Táchira</option>
                  <option value="Trujillo">Trujillo</option>
                  <option value="Vargas">Vargas</option>
                  <option value="Yaracuy">Yaracuy</option>
                  <option value="Zulia">Zulia</option>
                </select>
              </div>
              <div class="col-12 col-md-3">
                <input type="text" name="zona_postal" id="zona_postal" placeholder="Zona postal" maxlength="6" class="forminput validate-field" required>
              </div>
          </div>
        </div>

        <div class="tab">
          <div class="cuerpo row d-flex justify-content-between">
            <h2>Datos del registro mercantil</h2>
            <div class="col-12 col-md-12">
              <input type="text" name="registro_ciudad" id="registro_ciudad" placeholder="Domiciliada en la ciudad de" class="forminput validate-field" maxlength="30" required>
            </div>
            <div class="col-12 col-md-12">
              <input type="text" name="registro_inscrita" id="registro_inscrita"  placeholder="Inscrita en" class="forminput validate-field" maxlength="30" required>
            </div>
            <div class="col-12 col-md-3">
              <input type="text" name="registro_dia" id="registro_dia"  placeholder="El Día" class="forminput validate-field valid-phone" maxlength="2" required>
            </div>
            <div class="col-12 col-md-4">
              <input type="text" name="registro_mes" id="registro_mes" placeholder="del Mes" class="forminput validate-field valid-phone" maxlength="2" required>
            </div>
            <div class="col-12 col-md-3">
              <input type="text" name="registro_year" id="registro_year"  placeholder="del Año" class="forminput validate-field valid-phone" maxlength="4" required>
            </div>
            <div class="col-12 col-md-5">
              <input type="text" name="registro_nro" id="registro_nro" placeholder="Bajo en Nro" class="forminput validate-field" maxlength="7" required>
            </div>
            <div class="col-12 col-md-6">
              <input type="text" name="registro_tono" id="registro_tono" placeholder="Tomo" class="forminput validate-field" maxlength="7" required>
            </div>
          </div>
        </div>

        <div class="tab">
          <div class="cuerpo row d-flex justify-content-between">
            <h2>Modalidad de pago</h2>
            <div class="col-12 col-md-6">
            <p style="margin-bottom: 15px;">Pago por cuotas + seguro del equipo</p>

            <div>
            <select name="pago_cuotas" id="pago_cuotas"  class="forminput validate-field" required>
              <option value="" hidden selected>Seleccione</option>
              <option value="si">Si</option>
              <option value="no">No</option>
            </select>
            </div>
            </div>
            <div class="col-12 col-md-6">
                <p style="margin-bottom: 15px;">Cuantos puntos desea adquirir</p>
                <div>
                <select name="puntos" id="puntos" class="forminput validate-field" required>
                  <option value="" hidden selected>Seleccione</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
                </div>
            </div>
            <div class="col-12 col-md-12">
              <input type="text" name="codigo_cliente" id="codigo_cliente" placeholder="N° código de cuenta cliente afiliada" id="numerodos" class="forminput validate-field valid-phone" maxlength="20" required >
            </div>
            <div class="col-12 col-md-12">
              <div class="text-center">
                  <div class="aceptar checkbox_sel">
                    <p><input type="checkbox" class="validate-field valid-checkbox forminput" name="cbox2" id="cbox2" value="si" style="margin-right: 5px;">Declaro que la información que he proporcionado es verdadero, correcta y 
                      puede ser verificada y acepto el Contrato de interconexión, 
                      soporte técnico y atención de usuario, Contrato de mantenimiento 
                      y garantía del punto de venta.
                    </p>
                  </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 text-center text-align-center justify-content-center" style="margin-bottom: 25px;">
          <button type="button" class="btn btn-secondary" id="prevBtn" onclick="nextPrev(-1)">Volver</button>
          <button type="button" id="nextBtn" class="btn btn-primary" onclick="nextPrev(1)">Siguiente</button>
        </div>

        </div>
    </form>
  </div>

  <div class="modal" id="listo" tabindex="-1" role="dialog" aria-labelledby="listoLabel" aria-hidden="true">
      <div class="form-registerr">
        <div class="alert alert-success" role="alert">
        <h4><b>¡Gracias!</b></h4>
        <p>Sus datos han sido registrados, próximamente le estaremos contactando.</p>
        <a href="/" class="btn closemsg" style="text-decoration: none;position: absolute;right: 0;bottom: 0px;">X</a>
        </div>
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
            <li><i class="bx bx-chevron-right"></i> <a href="/index">Inicio</a></li>
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
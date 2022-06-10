<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;

class HomeController extends Controller {

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    return view('home.index');
  }
  
  public function contactus(Request $request){
    
    $data = array('fullname'=> $request->input('fullname'),
                  'phone' => $request->input('phone'),
                  'email' => $request->input('email'),
                  'message' => $request->input('message'));
    
    Mail::send('emails.contact', ['data' => $data], function ($m) use ($data) {
      $m->from('pruebas@deseisaocho.com', 'Dinamic WEB');

      $m->to(config('mail.to_dinamic'), 'Dinamic')->subject('Formulario Contacto - Dinamic');
      if (!empty(config('mail.cc_dinamic')) ){
        $m->cc(config('mail.cc_dinamic')); //'cbc@corpomobil.com');
      }
    });
    
    return view('home.index');
  }

  public function adquiere() {
    return view('home.adquiere');
  }

  public function aliados() {
    return view('home.aliados');
  }

  public function tutoriales() {
    return view('home.tutoriales');
  }

  public function enlaces() {
    return view('home.enlaces');
  }

  public function requisitos() {
    return view('home.requisitos');
  }

  public function producto() {
    return view('home.producto');
  }
  
  public function cuentabvc() {
    return view('home.cuentabvc');
  }

  public function faq() {
    return view('home.faq');
  }

  public function generatepdf(Request $request) {
    /*
     * 
     * Solicitud cobro automatico
     * 
     * 
     */
    $pdf = new FPDI();
    // add a page 
    $pdf->AddPage();
    $pdf->setSourceFile(base_path() . '/public/planillas/contratodecobroautomatico3.pdf');

    $tplIdx = $pdf->importPage(1);

    // use the imported page as the template 
    $pdf->useTemplate($tplIdx, 0, 0);

    // now write some text above the imported page 
    $pdf->SetFont('Arial');
    $pdf->SetFontSize(10);
    $pdf->SetTextColor(0, 0, 0);

    // FECHA
    $pdf->SetXY(34, 63);
    $pdf->Write(0, iconv('utf-8', 'cp1252', "")); //MAX 10
    
    $pdf->SetXY(52, 78);
    if ($request->input('tipo_rif') === 'firma_personal') {
      $fullname = $request->input('primer_nombre') . ' ' . $request->input('segundo_nombre') . ' ' . $request->input('primer_apellido') . ' ' . $request->input('segundo_apellido');
      $pdf->Write(0, iconv('utf-8', 'cp1252', $fullname));
    } else {
      // RAZON SOCIAL
      $fullname = $request->input('razon_social');
      $pdf->Write(0, iconv('utf-8', 'cp1252', $fullname));
    }
    $pdf->SetXY(106, 83.5);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('identificacion')));

    //indentificación nro 2 - NO APLICA
    //$pdf->SetXY(156, 83.5); 
    //$pdf->Write(0, iconv('utf-8', 'cp1252', "identifica 2")); 
    //$pdf->SetXY(116, 88.5); 
    // PUESTO - carácter de...
    //$pdf->Write(0, iconv('utf-8', 'cp1252', "")); //MAX 11
    //$pdf->SetXY(156, 88.5); 
    // IDENTIDAD DOS - y....  CARGO
    //$pdf->Write(0, iconv('utf-8', 'cp1252', "")); //MAX 10
    //if ($request->input('tipo_rif') === 'juridica') {
      // SOCIEDAD - RIF - REGISTER -- INSCRITA
      $pdf->SetXY(44, 93.5);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $fullname)); //MAX 24
    //}
    //DOMICILIADA EN LA CIUDAD
    $pdf->SetXY(22, 98.5);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('registro_ciudad'))); //MAX 18
    //INSCRITA REGISTER
    $pdf->SetXY(100, 98.5);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('registro_inscrita'))); //MAX 30
    //DAY REGISTER
    $pdf->SetXY(187, 98.5);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('registro_dia'))); //MAX 3
    //MONTH REGISTER
    $pdf->SetXY(26, 103);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('registro_mes'))); //MAX 7
    //YEAR REGISTER
    $pdf->SetXY(51, 103);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('registro_year'))); //MAX 4
    //BAJO EL NRO
    $pdf->SetXY(85, 103);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('registro_nro'))); //MAX 6
    //TOMO
    $pdf->SetXY(114, 103);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('registro_tono'))); //MAX 6
    // INFORMACION FISCAL - RIF
    $pdf->SetXY(41, 108);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('rif'))); //MAX 23

    // RIF o IDENTIFICACION
    $pdf->SetXY(37, 138.5);
    if ($request->input('tipo_rif') === 'firma_personal') {
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('identificacion'))); //MAX 10
    } else {
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('rif'))); //MAX 10
    }
    // ACCOUNT NUMBER - EMPTY
    $pdf->SetXY(82, 138.5);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('codigo_cliente'))); //MAX 10
    // TITULAR DE LA CUENTA DE BANCO
    $pdf->SetXY(142, 138.5);
    if ($request->input('tipo_rif') === 'firma_personal') {
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('primer_nombre') . ' ' . $request->input('primer_apellido'))); //MAX 100
    } else {
      $pdf->Write(0, iconv('utf-8', 'cp1252', $fullname)); //MAX 100
    }
    $pdf->SetXY(60, 152.5);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('email'))); //MAX 39
    $pdf->SetXY(68, 160.5);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('prefijo_movil') . '-' . $request->input('numero_celular'))); //MAX 39
    $pdf->SetXY(84, 168);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('numero_local'))); //MAX 39

    // FULL NAME CREATE
    $fullname = $fullname; //$request->input('primer_nombre').' '.$request->input('primer apellido');
    $pdf->SetXY(49, 199);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $fullname)); //MAX 59

    $pdf->AddPage();
    $tplIdx = $pdf->importPage(2);
    $pdf->useTemplate($tplIdx, 0, 0);
    $pdf->SetFontSize(10);

    // FULL NAME CREATE
    $pdf->SetXY(21, 52);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $fullname)); //MAX 36
    $pdf->SetXY(30, 67.4);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('identificacion'))); //MAX 11

    $path1 = 'contratodecobroautomatico-' . $request->input('identificacion') . '.pdf';
    $pdf->Output($path1, 'F');

    /*
     * 
     * 
     * Planilla Contrato por cuotas
     *
     * 
     * 
     * 
     * 
     */
    $pdf = new FPDI();
    // add a page 
    $pdf->AddPage();
    $pdf->setSourceFile(base_path() . '/public/planillas/contratodecuotas3.pdf');
    $tplIdx = $pdf->importPage(1);
    // use the imported page as the template 
    $pdf->useTemplate($tplIdx, 0, 0);
    // now write some text above the imported page 
    $pdf->SetFont('Arial');
    $pdf->SetFontSize(10);
    $pdf->SetTextColor(0, 0, 0);
    // RIF
    $pdf->SetXY(32, 56.5);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('rif'))); //MAX 13
    // NRO CUENTA - ACCOUNT NUMBER
    $pdf->SetXY(79, 56.5);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('codigo_cliente'))); //MAX 21
    // NOMBRE RAZON SOCIAL - Nombre completo
    $pdf->SetXY(136, 56.5);
    if ($request->input('tipo_rif') === 'firma_personal') {
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('primer_nombre').' '.$request->input('primer_apellido'))); //MAX 33 
    } else {
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('razon_social') )); //MAX 33 
    }

    $path2 = 'cobrasdecuota-' . $fullname . '.pdf';
    $pdf->Output($path2, 'F');
    /*
     * 
     * 
     * PLANILLA VENEZOLANO DE CREDITO 
     * 
     * 
     * 
     *
     */
    $pdf = new FPDI();
    // add a page 
    $pdf->AddPage();
    $pdf->setSourceFile(base_path() . '/public/planillas/planilladeafiliacion.pdf');
    $tplIdx = $pdf->importPage(1);
    // use the imported page as the template 
    $pdf->useTemplate($tplIdx, 0, 0);
    // now write some text above the imported page 
    $pdf->SetFont('Arial');
    $pdf->SetFontSize(10);
    $pdf->SetTextColor(0, 0, 0);
    
    $pdf->SetXY(103.5, 64);
    $pdf->Write(0, iconv('utf-8', 'cp1252', 'x'));
    
    $pdf->SetXY(108.5, 63.5);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('puntos')));
        
    if ($request->input('legal') === 'personal') {
      // PRIMER APELLIDO
      $pdf->SetXY(34, 95.5);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('primer_apellido')));
      // SEGUNDO APELLIDO
      $pdf->SetXY(134, 95.5);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('segundo_apellido')));
      // PRIMER NOMBRE
      $pdf->SetXY(34, 103.5);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('primer_nombre')));
      // SEGUNDO NOMBRE
      $pdf->SetXY(134, 103.5);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('segundo_nombre')));
      // NRO IDENTIFICACION
      $pdf->SetXY(50, 110.5);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('identificacion')));
      // NACIONALIDAD
      $pdf->SetXY(134, 110.5);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('nacionalidad')));
      // RAZON SOCIAL
      $pdf->SetXY(54, 118.5);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('razon_social')));
      // RIF
      $pdf->SetXY(161, 118.5);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('rif')));
      
      // CEDULA EN PERSONAL - VENEZOLANO DE CREDITO
      // 
      if ($request->input('nacionalidad') == "Extranjero") {
        $pdf->SetXY(22.5, 111);
        $pdf->Write(0, iconv('utf-8', 'cp1252', 'x'));
      } else {
        $pdf->SetXY(15.5, 111);
        $pdf->Write(0, iconv('utf-8', 'cp1252', 'x'));
      }
      
      // ACTIVIDAD ECONOMICA
      $pdf->SetXY(43, 125.5);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('actividad_economica')));
      // TIEMPO ACTIVIDAD ECONOMICA
      $pdf->SetXY(161, 126.5);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('tiempo_actividad')));
      // TELEFONO LOCAL
      $pdf->SetXY(25, 133.5);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('numero_local')));
      // PREFIJO CELULAR
      $pdf->SetXY(64, 134);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('prefijo_movil')));
      // NUMERO CELULAR
      $pdf->SetXY(74, 134);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('numero_celular')));
      // EMAIL
      $pdf->SetXY(114, 134);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('email')));
    } else {
      // JURIDCA
      // RAZON SOCIAL
      $pdf->SetXY(38, 168);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('razon_social')));
      //RIF
      $pdf->SetXY(164, 168);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('rif')));
      // ACTIVIDAD ECONOMICA
      $pdf->SetXY(43, 175.5);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('actividad_economica')));
      // TIEMPO EN LA ACTIVIDAD ECONOMICA
      $pdf->SetXY(155, 176.5);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('tiempo_actividad')));
      // REPRESENTANTE LEGAL
      $pdf->SetXY(44, 182.5);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('primer_nombre') . ' ' . $request->input('primer_apellido')));
      // TIPO
      if ($request->input('tipo') == 'V-'){
        $pdf->SetXY(157, 184);
        $pdf->Write(0, iconv('utf-8', 'cp1252', 'x'));
      }else{
        $pdf->SetXY(165, 184);
        $pdf->Write(0, iconv('utf-8', 'cp1252', 'x'));
      }
      // IDENTIFICACION
      $pdf->SetXY(170, 184);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('identificacion')));
      
      // TELEFONO FIJO
      $pdf->SetXY(27, 192);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('numero_local')));
      // TELEFONO CELULAR
      $pdf->SetXY(66, 192);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('prefijo_movil') . '-' . $request->input('numero_celular')));
      // EMAIL
      $pdf->SetXY(118, 192);
      $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('email_empresa')));
    }

    /*
     * 
     * Address
     * 
     * 
     * 
     * 
     * 
     */
    
    //AVENIDA-CALLE
    $pdf->SetXY(36, 213);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('calle')));
    //CASA-EDIFICIO-OFICINA
    $pdf->SetXY(143, 213);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('casa')));
    //TORRE-PISO-APART
    $pdf->SetXY(40, 220.5);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('piso')));
    //URBANIZACION
    $pdf->SetXY(136, 220.5);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('urbanizacion')));
    //PTO REFERENCIA
    $pdf->SetXY(40, 227.5);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('punto_referencia')));
    //PARROQUIA
    $pdf->SetXY(28, 235);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('parroquia')));
    //MUNICIPIO
    $pdf->SetXY(123, 235);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('municipio')));
    //CIUDAD
    $pdf->SetXY(28, 243);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('ciudad')));
    //ESTADO
    $pdf->SetXY(125, 243);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('estado')));
    //POSTAL CODE
    $pdf->SetXY(180, 243);
    $pdf->Write(0, iconv('utf-8', 'cp1252', $request->input('zona_postal')));

    $pdf->AddPage();
    $tplIdx = $pdf->importPage(2);
    $pdf->useTemplate($tplIdx, 0, 0);
    
    

    $pathToFile = 'planilladeafiliacion-' . $request->input('identificacion') . '.pdf';
    $pdf->Output($pathToFile, 'F');

    $data = array('path' => $pathToFile, 'path1' => $path1, 'path2' => $path2);

    Mail::send('emails.welcome', ['data' => $data], function ($m) use ($data) {
      $m->from('pruebas@deseisaocho.com', 'Dinamic WEB');

      $m->to(config('mail.to_dinamic'), 'Dinamic')->subject('Formulario Registro - Dinamic');
      if (!empty(config('mail.cc_dinamic')) ){
        $m->cc(config('mail.cc_dinamic')); //'cbc@corpomobil.com');
      }
      $m->attach($data['path1']);
      $m->attach($data['path2']);
      $m->attach($data['path']);
    });

    return view('home.generatepdf');
  }

}

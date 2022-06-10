var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Acepto y solicito";
  } else {
    document.getElementById("nextBtn").innerHTML = "Siguiente";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
      $('#exampleModal').modal().hide();
      $('#listo').modal().show();
        $(document).ready(function(){
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
              }
          });
          
          var form = $("#formular");
          var url = form.attr('action');
          $.ajax({
              type: "POST",
              url: url,
              data: form.serialize(),
              success: function(data) {
                  console.log("Form Submited Successfully");
                  $('#listo').modal().show();
              },
              error: function(data) {
                  console.log("some Error");
              }
          });
        });
    
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  //y = x[currentTab].getElementsByTagName("input");
  y = x[currentTab].getElementsByClassName("forminput");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    //console.log(validate($("#"+y[i].id)));
    //console.log($("#"+y[i].id));
    valid = validate($("#"+y[i].id));

    if (!valid) break;
    
//    if (y[i].value == "") {
//      //console.info("id="+y[i].id+" class="+y[i].className);
//      //console.log($("#"+y[i].id));
//      
//
//      // add an "invalid" class to the field:
//      y[i].className += " invalid";
//      // and set the current valid status to false:
//      valid = false;
//    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}

function validate( field ){
    var value = field.val();
    var to_label = field.parent();
    var error = false;
    var error_message = '';
    
    //console.log('field.checked='+field.length + 'is checkbox:'+ field.hasClass('valid-checkbox'));

    if (field.hasClass('invalid')) field.removeClass('invalid');
    to_label.find('span').remove();

    if ( field.hasClass('validate-field') && value == '' ) {
        error = true;
        if (!field.hasClass('invalid')) field.addClass('invalid');
        error_message = 'Campo requerido';  
    } else if ( field.hasClass('valid-checkbox') && field[0].checked === false ) {
        error = true;
        if (!field.hasClass('invalid')) field.addClass('invalid');
        error_message = 'Debes aceptar términos y condiciones';
    } else if ( field.hasClass('valid-name') && valid_name(value) == false ) {
        error = true;
        if (!field.hasClass('invalid')) field.addClass('invalid');
        error_message = 'Campo debe constar solo de caracteres';
    } else if ( field.hasClass('valid-mail') && valid_email(value) == false ) {
        error = true;
        if (!field.hasClass('invalid')) field.addClass('invalid');
        error_message = 'Por favor, introduce una dirección de correo electrónico válida.';
    } else if ( field.hasClass('valid-phone') && valid_phone(value) == false ) {
        error = true;
        if (!field.hasClass('invalid')) field.addClass('invalid');
        error_message = 'Campo debe ser solo de dígitos';
    };

    if (error) {
        field.after('<span class="error-message">'+ error_message +'</span>');
    }
    
    return !error;

};

(function() {
  "use strict";
  
  $(document).ready(function () {
    $(document).on('keyup', '.validate-field', function () {
      validate($(this));
    });
    $(document).on('change', 'select.validate-field', function () {
      validate($(this));
    });
    $(document).on('click','.closemsg', function(){
      $('#listo').modal().destroy();
      location.reload();
    });
    
  });

  
  })()
  
function valid_name(value){
    var valid = /^([a-zA-Z_\.\-\+])+$/;
    return valid.test(value);
};

function valid_email(value){
    var valid = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return valid.test(value);
};

function valid_phone(value){
    var valid = /^[0-9-+]+$/;
    return valid.test(value);
};
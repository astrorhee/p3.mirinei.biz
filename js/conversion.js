function as_to_AU() {
  $("#2").val(1./Math.tan($("#13").val()*2.*Math.PI/(360.*60.*60.)));
  conversion(2);
}


function conversion(id) {

  id2 = '#' + id

  if ( isNaN($(id2).val()) || !$(id2).val() || $(id2).val() <= 0 || $.inArray(' ', $(id2).val()) != -1 || !isFinite($(id2).val()) ) {
    console.log($(id2).val(), isNaN($(id2).val()));
    alert ("positive number only!");
    return;
  }

  var ratio = [ 1., 1609.344, 149597870660., 9460730472000000., 149597870660./Math.tan(2.*Math.PI/(360.*60.*60.)),
                1738000., 6378136., 695508260., 1e+13, 9.460730472e+20, 2.8382191416e+22, 9.460730472e+23, 2.*1.32450226608e+26 ];


  for (i=0; i<ratio.length; i++) {
    if (i==id) {
      input_in_meters = $(id2).val() * ratio[i];
    }
  }

  for (i=0; i<ratio.length; i++) {
    output = eval(input_in_meters/ratio[i]);
    if (output < 1) {
      output = output.toPrecision(6)  
    }     
    i2 = '#'+i
    $(i2).val(output);
  }

  $("#13").val((Math.atan(1./$("#2").val())*360.*60.*60./(2.*Math.PI)).toPrecision(15));

}
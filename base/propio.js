function cedulas()
{
  var len = $("#cedula").val().length;
  var dato = $("#cedula").val();
  if (event.keyCode != 8 || event.keyCode != 46) {
    if (len == 3 || len == 11) {
      $("#cedula").val(dato+"-");
  }
  }
}
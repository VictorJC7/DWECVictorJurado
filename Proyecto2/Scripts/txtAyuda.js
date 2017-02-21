$(document).ready(function(){
function mostrarAyuda(e) {
  e.preventDefault();
  var dondeVaAyuda = $('.enseñaAyuda');
  $.getJSON('ayuda.json', function (data) {
    $('.ensenaAyuda').html(
      "Nombre: " + data.Nombre.text + "<br>" +
      "Telefono: " + data.Telefono.numero + "<br>" +
      "Email: " + data.Email.email + "<br>" +
      "Captcha: " + data.Captcha.captcha + "<br>" +
      "Mensaje: " + data.Texto.areaText + "<br>")
    });
}
});

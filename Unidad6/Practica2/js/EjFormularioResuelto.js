onload = function(){
var formulario = document.getElementById('formulario');
var divError = document.getElementById('errores');
document.forms['formulario'].addEventListener('submit', enviar);
function enviar() {

  if (formulario.foro.checked==true) {
    formulario.action="foros.html"
  }
  if (formulario.eventos.checked==true) {
    formulario.action="eventos.html"
  }
}

formulario.onsubmit = function(){
    var err = document.getElementsByClassName('errores')[0];
    var errList ="";
    var ret = true;

    //validamos el nombre
    var nom = document.getElementsByName('nombre')[0].value;
    var porId=document.getElementById("nombre").value;
    console.log(nom);
    if (nom == null || nom.length == 0 || !(/^\S+$/.test(nom))){

         errList += "El nombre es erróneo <br/>"+porId;
         ret = false;
    }

    //validamos apellidos:
    var apellidos = document.getElementsByName('apellidos')[0].value;
    console.log(apellidos);
    if (apellidos == null || apellidos.length == 0 || !(/^\S+[\s?\S+]*$/.test(apellidos))){
      ret = false;
      errList += "Hay un error en los apellidos <br/>"+apellidos;
    }

    //validamos el radiobutton
    var genero = formulario.sexo.value;
    console.log(genero);
    if (genero != "H" && genero != "M"){
      ret = false;
      errList += "Es necesario que indique si es hombre o mujer <br/>"+genero;
    }

    //validamos la fecha
    var fecha = (document.getElementsByName('fecha')[0].value).split('-');
    var ano=fecha[0];
    var mes=fecha[1];// de 0 a 11
    var dia=fecha[2];// 1 a 31
    console.log(dia + " " + mes + " " + " " + ano);
    var nf= new Date(ano,(mes - 1),dia);
    console.log(nf);

    var hoy = new Date();
    //resto los años de las dos fechas
   	var edad = hoy.getFullYear()- ano - 1; //-1 porque no se si ha cumplido años ya este año
   	//si resto los meses y me da mayor que 0, ha cumplido años
   	if (hoy.getMonth() + 1 - mes > 0){
      	edad++;
    }
   	//si resto los dias y me da menor que 0 entonces no ha cumplido años.
    //si da mayor o igual si ha cumplido
   	if (hoy.getUTCDate() - dia >= 0){
      	edad++;
    }
    console.log("Edad " + edad);
    if ( isNaN(nf) || dia < 1 || dia > 31 || mes < 1 || mes > 12 || ano < 0 || ano >= hoy.getFullYear()){
      errList += "La fecha es errónea <br/>"
      ret = false;
    }else if (edad < 18){
      errList += "Debe ser mayor de edad para inscribirse <br/>"
      ret = false;
    }

    //validamos el teléfono
    var tel = document.getElementsByName('telefono')[0].value;
    if (isNaN(tel) || !(/^\d{9,10}$/.test(tel))){
      errList += "El teléfono es erróneo <br/>"+tel;
      ret = false;
    }

    //validamos la selección
    var prov = document.getElementsByName("provincia")[0].selectedIndex;
    if (prov == null || prov == 0){
        errList += "Escoja una provincia <br/>"+prov;
        ret = false;
    }

    //Email
    var email = document.getElementsByName("email")[0].value;
    console.log(email);
    if ( !/^\w+@\w+\.\w+$/.test(email) ){
      errList += "El email es incorrecto <br/>"+email;
      ret = false;
    }
    // if ( ! (/^\w+([\.\-\+]?\w+)*@\w+([\.\-]?\w+)*(\.\w{2,4})+$/.test(email)) ){
    //   errList += "El email es incorrecto <br/>";
    //   ret = false;
    // }
    var emailRepe = document.getElementById("emailRepe").value;
    if(email != emailRepe){
      errList += "El email repetido debe coincidir con el primer email que introdujo <br/>"+emailRepe;
      ret = false;
    }

    if (ret){
      errList = "Tu petición se ha enviado correctamente";
      err.style.color="blue";
    }else{
      err.style.color="red";
    }

    divError.innerHTML = errList;
    return ret;
}
}

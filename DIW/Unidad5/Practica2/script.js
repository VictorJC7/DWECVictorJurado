
  function visualiza(elId) {
    //selecciona los div dentro de contenido
    var losDiv = document.getElementById("contenido").getElementsByTagName("div");
    //oculta los div seleccionados
    for(var i = 0; i < losDiv.length; i++){
      losDiv[i].style.display = "none";
    }
    //muestra el div indicado
    document.getElementById(elId).style.display = "block";
    // cancela el evento normal del enlace (equivale a e.preventDefault());
    return false;
  }

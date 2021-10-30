function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

// ############### Formulario Matricula ######################
var contEtapa = 1;
document.getElementById("botao-matricula").addEventListener("click", function() {
  checarFormularioMatricula();
});
function checarFormularioMatricula(){
  if(contEtapa == 1){
    // checar se etapa 1 esta corretamente preenchida
    var nome = document.querySelector("input#nome").value;
    var email = document.querySelector("input#email").value;
    var telefone = document.querySelector("input#telefone").value;

    $.ajax({
      url: `Maticula/ChecarEmail?email=${email}`, 
      success: function(resultado){
          $(".res").html(resultado);
      },
      error: function(){
          $(".res").html("Deu Bosta");
      }
    });

  }
  else if(contEtapa == 2){
    // checar se etapa 2 esta corretamente preenchida
  }
  else if(contEtapa == 3){
    // checar se etapa 3 esta corretamente preenchida
  }
}
function alterarFormularioMatricula(){

}
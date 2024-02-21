//Função para scrollar para seção
function goToSection(section){

    document.querySelector("#" + section).scrollIntoView({
        behavior: "smooth"
    });
}

//Mascara para somente letras
function letters_js(valor, input){

    valor = valor.toString();
    valor = valor.replace(/\d/g,"");

    document.getElementById(input.id).value = valor;

}
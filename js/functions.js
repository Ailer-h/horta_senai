//Função para scrollar para seção
function goToSection(section){

    document.querySelector("#" + section).scrollIntoView({
        behavior: "smooth"
    });
}

//Mascara para somente numeros
function nums_js(valor, input){

    valor = valor.toString();
    valor = valor.replace(/\D/g,"");

    document.getElementById(input.id).value = valor;

}
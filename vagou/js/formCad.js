//Pegando valores do btn pf e pj e adicionando event listener
var pf = window.document.getElementById('pf');
pf.addEventListener('click', clicarFisi);
var pj = window.document.getElementById('pj');
pj.addEventListener('click', clicarJuri);

//Pegando id dos formulários
var formFisica = window.document.getElementById('formFisica');
var formJuridica = window.document.getElementById('formJuridica');

//Ocultando ambos os formulários
formFisica.style.display = "none";
formJuridica.style.display = "none";

//Função para mostrar o form da pessoa física
function clicarFisi(){
    formFisica.style.display = "block";
    formFisica.style = "margin-top:10px";
    formJuridica.style.display = "none";
}

//Função para mostrar o form da pessoa jurídica
function clicarJuri(){
    formFisica.style.display = "none";
    formJuridica.style = "margin-top:10px";
    formJuridica.style.display = "block";
}
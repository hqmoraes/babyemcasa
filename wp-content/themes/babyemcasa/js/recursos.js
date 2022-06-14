document.querySelector('.textoLogo').innerHTML = '<span class="logoP1">em</span><span class="logoP2"> Casa</span>'
document.addEventListener("DOMContentLoaded", function(){
try {
    let ctpost = document.querySelector('.container_post').offsetHeight
    document.querySelector('.ads.verticalAdsInterno').style.height = ctpost + 'px'
} catch (error) {
    
}
});

try {
    document.getElementById('wpd-bubble-add-message').innerText = "Adoramos comentários. Deixe o seu!"
} catch (error) {
    
}

let fecharMenu = document.querySelector('.outrosSites')
let criarBotao = document.createElement('button');
criarBotao.classList.add('botaoFechar');
criarBotao.setAttribute('onclick','menuOutrosSites()')
fecharMenu.prepend(criarBotao);


let logoFooter = document.querySelector('.logoFooter')
let logoMontado = document.querySelector('.logoMontado')

logoFooter.appendChild(logoMontado.cloneNode(true))


function menuOutrosSites(){
    fazer = document.querySelector('.outrosSites').classList.contains('esconder')
    if(!!fazer){
        document.querySelector('.outrosSites').classList.remove('esconder');
        document.querySelector('.outrosSites').classList.add('exibir');
    }
    else{
        document.querySelector('.outrosSites').classList.remove('exibir');
        document.querySelector('.outrosSites').classList.add('esconder');
    }
}
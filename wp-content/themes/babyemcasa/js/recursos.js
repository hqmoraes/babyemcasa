document.querySelector('.textoLogo').innerHTML = '<span class="logoP1">em</span><span class="logoP2"> Casa</span>'
document.addEventListener("DOMContentLoaded", function(){
try {
    let ctpost = document.querySelector('.container_post').offsetHeight
    document.querySelector('.ads.verticalAdsInterno').style.height = ctpost + 'px'
} catch (error) {
    
}

try {
    document.querySelector('figure.is-type-video iframe').style.width='90vw'
} catch (error) {
    
}

});

let fecharMenu = document.querySelector('.outrosSites')
let criarBotao = document.createElement('button');
criarBotao.classList.add('botaoFechar');
criarBotao.setAttribute('onclick','menuOutrosSites()')
fecharMenu.prepend(criarBotao);


let logoFooter = document.querySelector('.logoFooter')
let logoMontado = document.querySelector('.logoMontado')

logoFooter.appendChild(logoMontado.cloneNode(true))

document.querySelector('.logoMontado a .textoLogo .logoP2').style.width = "3.8rem"

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


document.querySelector('.conteudo_post').childNodes.forEach(filho =>{
    if (filho.localName != undefined){
        if(filho.localName == 'ul'){
            filho.childNodes.forEach(li=>{
                li.setAttribute('class','col-12 col-md-5')
            })
        }
        else if(filho.localName == 'figure' && !filho.classList.contains('is-type-video')){
            filho.style = `
                float: right;
                margin-right: 1rem;
                max-width: 50vw;
            `
        }
    }
})
document.querySelector('.conteudo_post').lastElementChild.style = `
        clear: both;
    `


document.querySelectorAll('.conteudo_post figure img').forEach(img =>{
    img.style = `
        width: 100%;
        height: auto;
    `
})


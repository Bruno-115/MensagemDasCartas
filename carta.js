
function rodarCarta () {
    const cartaFrente = document.getElementById('carta-frente');
    const cartaAtras = document.getElementById('carta-atras');
    cartaFrente.classList.add('invisible')
    cartaAtras.classList.add('visible')
    cartaAtras.classList.remove('invisible')
}

function cartaFrente () {
    const cartaFrente = document.getElementById('carta-frente');
    const cartaAtras = document.getElementById('carta-atras');
    cartaFrente.classList.add('visible')
    cartaFrente.classList.remove('invisible')
    cartaAtras.classList.add('invisible')
    cartaAtras.classList.remove('visible')
}


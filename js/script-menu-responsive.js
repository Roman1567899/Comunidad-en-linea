const responsive = document.querySelector('#menuresponsive');

responsive.addEventListener("click", ()=>
{
    let cambio = document.getElementById('mostrarmenu');
    cambio.classList.toggle('nomostrado');
    console.log("Algo cambio!");
    // let cambio = document.getElementById('mostrarmenu');
    // cambio.classList.remove("nomostrado");
    // console.log("Algo cambio!")
})
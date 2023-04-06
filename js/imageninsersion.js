const formulario = document.querySelector('#formularioimagen');

alert("Algo");

function limpiarFormulario ()
{
    document.querySelector('#formularioimagen').reset();
}

formulario.addEventListener("submit" ,(e) => 
{
    e.preventDefault();
    const nuevoFormulario = new FormData(formulario);

    fetch('insertarlibro.php', {
        method: "POST",
        body: nuevoFormulario,
    })
        .then(resp => resp.text())
        .then (data => 
            {
                console.log(data);
                if(data == "1")
                {
                    // location.replace('php/menu.php');
                    alert("Si se pudo registrar");
                    limpiarFormulario();
                }
                else
                {
                    alert("No se pudo registrar");
                    limpiarFormulario();
                }
            })
})
const formularioBuscador = document.querySelector("#formularioBuscador");
const contenedorBuscador= document.querySelector("#contenedor-buscador");
const tablamuestraphp = document.querySelector("#tablamuestraphp");

function limpiarFormulario ()
{
    document.querySelector('#formularioBuscador').reset();
}



formularioBuscador.addEventListener("submit", async (e)=>
{
    e.preventDefault();
    const formulario = await fetch('CRUD/buscar.php',{
        method: 'POST',
        body : new FormData(formularioBuscador)
    })
    const response = await formulario.json();
    const image = response['imagenlibro'];
    console.log(image);

    contenedorBuscador.innerHTML = `
                    <table >
                        <thead>
                            <tr>
                                <th>TÍtulo</th>
                                <th>Autor</th>
                                <th>editorial</th>
                                <th>Descripción</th>
                                <th>Imágen</th>
                            </tr>
                        </thead>
                            <tr>
                                <td>${response['titulolibro']}</td>
                                <td>${response['autorlibro']}</td>
                                <td>${response['editoriallibro']}</td>
                                <td>${response['descripcionlibro']}</td>
                                <td><img class='imagenes-muestra-tabla' src="../../../imagenes/${image}" alt="${image}"></td>
                            </tr>
                    </table>`;
    tablamuestraphp.classList.toggle("tabla-oculta");
})


// formularioBuscador.addEventListener("click", (e)=>
// {
//     e.preventDefault();
//     contenedorBuscador.innerHTML = `
//                     <table>
//                         <thead>
//                             <tr>
//                                 <th>TÍtulo</th>
//                                 <th>Autor</th>
//                                 <th>editorial</th>
//                                 <th>Descripción</th>
//                                 <th>Imágen</th>
//                             </tr>
//                         </thead>
//                             <tr>
//                                 <td></td>
//                                 <td></td>
//                                 <td></td>
//                                 <td></td>
//                                 <td></td>
//                             </tr>
//                     </table>`;
// })



// formularioBuscador.addEventListener("submit" ,(e) => 
// {
//     e.preventDefault();
//     const nuevoFormulario = new FormData(formularioBuscador);

//     fetch('CRUD/buscar.php', {
//         method: "POST",
//         body: nuevoFormulario,
//     })
//         .then(resp => resp.text())
//         .then (data => 
//             {
//                 console.log(data);
//                 if(data == "1")
//                 {

//                     contenedorBuscador.innerHTML = `
//                     <table>
//                         <thead>
//                             <tr>
//                                 <th>TÍtulo</th>
//                                 <th>Autor</th>
//                                 <th>editorial</th>
//                                 <th>Descripción</th>
//                                 <th>Imágen</th>
//                             </tr>
//                         </thead>
//                             <tr>
//                                 <td>${data['titulolibro']}</td>
//                                 <td>${data['autorlibro']}</td>
//                                 <td>${data['editoriallibro']}</td>
//                                 <td>${data['descripcionlibro']}</td>
//                                 <td><img src="../../../imagenes/${data['imagenlibro']}" alt="${data['imagenlibro']}"></td>
//                             </tr>
//                     </table>`;
//                     limpiarFormulario();
                    
//                 }
//                 else
//                 {
//                     alert("No se encontraron resultados");
//                     limpiarFormulario();
//                 }
//             })
// })
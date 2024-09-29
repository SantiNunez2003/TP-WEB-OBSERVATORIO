export function registrarUsuario(){
    document.getElementById('formulario').addEventListener('submit', async  function(event) {
        
        event.preventDefault();  
        
        //Obtenemos los valores de los distintos inputs
    const nombre_usuario = document.getElementById("nombre").value;
    const email = document.getElementById("email").value;
    const telefono = document.getElementById("telefono").value;

    //Guardamos los valores en un objeto
    const usuario_data = {
        nombre: nombre_usuario,
        email: email,
        telefono: telefono,
    }

    console.log(usuario_data)

    /*simulacion de formulario completo*/
    setTimeout(() => {
        window.location.href = "./Evento-elegido-enviado.html";
    }, 1000);

    /*Funcion para mandar datos al servidor*/
    /*Al igual que para los JSONS utilizamos el mismo codigo, unicamente especificando en el fetche el tipo de metodo, el contenido y el cuerpo(datos). 
    Si todo es correcto se enviaria un mensaje sino otro mensaje*/

    try {
        const res = await fetch('/servidor',{method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify(usuario_data)});
        if(!res.ok){
            throw new Error('Error en el Servidor');
        }else{
            console.log('Se enviaron los Datos')
        }
    } catch (error) {
        console.error('Hubo un problema con la solicitud:', error);
    }
    });
}
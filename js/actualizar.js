const $nombre = document.querySelector("#nombre"),
    $descripcion = document.querySelector("#descripcion"),
    $precio = document.querySelector("#precio"),
    $btnEditar = document.querySelector("#btnEditar");

// Una global para establecerla al rellenar el formulario y leerla al enviarlo
let idProducto;

const rellenarFormulario = async () => {

    // https://parzibyte.me/blog/2020/08/14/extraer-parametros-url-javascript/
    const urlSearchParams = new URLSearchParams(window.location.search);
    idProducto = urlSearchParams.get("id"); // <-- Actualizar el ID global
    // Obtener el producto desde PHP
    const respuestaRaw = await fetch(`../acciones/consultar.php?id=${idProducto}`);
    const producto = await respuestaRaw.json();

    if( producto == false){
        window.location.href = "http://crud.vhost/vistas/listar.php";
    }

    // Rellenar formulario
    $nombre.value = producto.nombre;
    $descripcion.value = producto.descripcion;
    $precio.value = producto.precio;
};

// Al incluir este script, llamar a la función inmediatamente
rellenarFormulario();
// Al incluir este script, llamar a la función inmediatamente
rellenarFormulario();

$btnEditar.onclick = async () => {
    // Se comporta igual que cuando guardamos uno nuevo
    const nombre = $nombre.value,
        descripcion = $descripcion.value,
        precio = parseFloat($precio.value);
    // Pequeña validación, aunque debería hacerse del lado del servidor igualmente, aquí es pura estética
    if (!nombre) {
        return Swal.fire({
            icon: "error",
            text: "Escribe el nombre",
            timer: 700, // <- Ocultar dentro de 0.7 segundos
        });
    }
    if (!descripcion) {
        return Swal.fire({
            icon: "error",
            text: "Escribe la descripción",
            timer: 700, // <- Ocultar dentro de 0.7 segundos
        });
    }

    if (!precio) {
        return Swal.fire({
            icon: "error",
            text: "Escribe el precio",
            timer: 700, // <- Ocultar dentro de 0.7 segundos
        });
    }
    // Lo que vamos a enviar a PHP. También incluimos el ID
    const cargaUtil = {
        id: parseInt(idProducto),
        nombre: nombre,
        descripcion: descripcion,
        precio: parseFloat( precio),
    };
    // Codificamos...
    const cargaUtilCodificada = JSON.stringify(cargaUtil);

    console.log(cargaUtilCodificada);

    // Enviamos
    try {
        const respuestaRaw = await fetch("../acciones/actualizar.php", {
            method: "POST",
            body: cargaUtilCodificada,
        });
        // El servidor nos responderá con JSON
        const respuesta = await respuestaRaw.json();
        if (respuesta) {
            // Y si llegamos hasta aquí, todo ha ido bien
            // Esperamos a que la alerta se muestre
            await Swal.fire({
                icon: "success",
                text: "Producto actualizado",
                timer: 700, // <- Ocultar dentro de 0.7 segundos
            });
            // Redireccionamos a todos los productos
            window.location.href = "http://crud.vhost/vistas/listar.php";
        } else {
            Swal.fire({
                icon: "error",
                text: "El servidor no envió una respuesta exitosa",
            });
        }
    } catch (e) {
        // En caso de que haya un error
        Swal.fire({
            icon: "error",
            title: "Error de servidor",
            text: "Inténtalo de nuevo. El error es: " + e,
        });
    }
};
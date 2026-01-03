import { Dropdown } from "bootstrap";
import { Toast, validarFormulario } from "../funciones";

const formCotizador = document.getElementById('formCotizador');
const btnEnviar = document.getElementById('btnEnviar');
const spanLoader = document.getElementById('spanLoader');

spanLoader.style.display = 'none';
btnEnviar.disabled = false;

const enviar = async (e) => {
    e.preventDefault()
    spanLoader.style.display = '';
    btnEnviar.disabled = true;
    if (!grecaptcha.getResponse()) {
        Toast.fire({
            icon: 'warning',
            title: 'Debe verificar el captcha'
        })
        spanLoader.style.display = 'none';
        btnEnviar.disabled = false;
        return
    }

    if (!validarFormulario(formCotizador, ['observations'])) {
        Toast.fire({
            icon: "warning",
            title: "Debe llenar todos los campos",
        })
        spanLoader.style.display = 'none';
        btnEnviar.disabled = false;
        return
    }
    try {
        const url = `/API/cotizador/enviar`
        const headers = new Headers();
        const body = new FormData(formCotizador);
        headers.append('X-Requested-With', 'fetch');
        const config = {
            method: 'POST',
            body,
            headers,
        }

        const respuesta = await fetch(url, config);
        const data = await respuesta.json();
        console.log(data);
        const { codigo, mensaje, detalle } = data;

        let icon = "info";
        switch (codigo) {
            case 1:
                icon = "success"
                console.log(data);
                formCotizador.reset()
                grecaptcha.reset();
                break;
            case 2:
                icon = "warning"
                console.log(data);
                grecaptcha.reset();
                break;
            case 0:

                icon = "error"
                console.log(detalle);
                grecaptcha.reset();
                break;

        }

        Toast.fire({
            icon,
            title: mensaje,
        })
    } catch (error) {
        console.log(error);
    }
    spanLoader.style.display = 'none';
    btnEnviar.disabled = false;
}

window.verificar = (dato) => {
    Toast.fire({
        icon: 'success',
        title: 'Captcha verificado'
    })

}



window.expirado = () => {
    Toast.fire({
        icon: 'warning',
        title: 'Captcha expirado'
    })

}

window.error = () => {
    Toast.fire({
        icon: 'error',
        title: 'Ocurrió un error en la verificación de captcha'
    })
}

formCotizador.addEventListener('submit', enviar)

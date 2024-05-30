<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- Incluir CSS o scripts aquí GODE561231HG9 --}}
    <link rel="stylesheet" href="../css/style.facturacion.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <header class="Clienter">
        <div class="Frame2M">
            <div class="LogoM">Logo</div>
        </div>
        <div class="Group3M">
            <div class="Rectangle4M"></div>
            <ul class="navbarM">
                <li class="nav-itemM"><a href="{{ route('datos-fiscales') }}" class="DatosFiscales">Datos Fiscales</a>
                </li>
                <li class="nav-itemM"><a href="{{ route('facturacion') }}" class="Facturacion">Facturación</a></li>
                <li class="nav-itemM"><a href="{{ route('pdf-xml') }}" class="PdfXml">PDF/ XML</a></li>
                <li class="nav-itemM"><a href="{{ route('salir') }}" class="Salir">Salir</a></li>
            </ul>
        </div>
    </header>

    <div>
        <form id="datos-fiscales-form" class="form-main">
            <div class="form-group">
                <label class="RazNSociales" for="razonSocial">Razón Sociales:</label>
                <input type="text" id="NOMBRE" name="NOMBRE" class="input-field">
            </div>
            <div class="form-group">
                <label class="Rfc" for="rfc">RFC:</label>
                <input type="text" id="RFC" name="RFC" class="input-field">
            </div>
            <div class="form-group">
                <label class="PaS" for="pais">País:</label>
                <input type="text" id="PAIS" name="PAIS" class="input-field">
            </div>
            <div class="form-group">
                <label class="Cp" for="cp">CP:</label>
                <input type="text" id="CP" name="CP" class="input-field">
            </div>
            <div class="form-group">
                <label class="Municipio" for="municipio">Municipio:</label>
                <input type="text" id="POBLA" name="POBLA" class="input-field">
            </div>
            <div class="form-group">
                <label class="Ciudad" for="ciudad">Ciudad:</label>
                <input type="text" id="CIUDAD" name="CIUDAD" class="input-field">
            </div>
            <div class="form-group">
                <label class="Estado" for="estado">Estado:</label>
                <input type="text" id="ESTADO" name="ESTADO" class="input-field">
            </div>
            <div class="form-group">
                <label class="Colonia" for="colonia">Colonia:</label>
                <input type="text" id="COLONIA" name="COLONIA" class="input-field">
            </div>
            <div class="form-group">
                <label class="Calle" for="calle">Calle:</label>
                <input type="text" id="CALLE" name="CALLE" class="input-field">
            </div>
            <div class="form-group">
                <label class="NMeroExterior" for="numExterior">Número exterior:</label>
                <input type="text" id="numeroexterior" name="numeroexterior" class="input-field">
            </div>
            <div class="form-group">
                <label class="NMeroInterior" for="numInterior">Número interior:</label>
                <input type="text" id="numerointerior" name="numerointerior" class="input-field">
            </div>
            <div class="form-group">
                <label class="UsoCfdi" for="usoCfdi">Uso CFDI:</label>
                <input type="text" id="UsoCFDI" name="UsoCFDI" class="input-field">
            </div>
            <div class="form-group">
                <label class="RGimenFiscal" for="regimenFiscal">Régimen fiscal:</label>
                <input type="text" id="Regimen" name="Regimen" class="input-field">
            </div>
            <div class="form-group">
                <label class="Email" for="email">Email:</label>
                <input type="email" id="CORREO" name="CORREO" class="input-field">
            </div>
            <div class="form-group">
                <button type="submit" class="Guardar">Guardar</button>
            </div>
        </form>
    </div>

    <footer>

    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Obtenemos el RFC del localStorage
            let rfc = localStorage.getItem('RFC');
            if (rfc) {
                // Realizamos una petición para obtener los datos del cliente
                fetch(`/client/${rfc}`)
                    .then(response => response.json())
                    .then(data => {
                        // Rellenamos los campos del formulario con los datos obtenidos
                        for (const key in data) {
                            if (data.hasOwnProperty(key)) {
                                const element = data[key];
                                if (element !== null) {
                                    const inputField = document.getElementById(key);
                                    if (inputField) {
                                        if (typeof element === 'object') {
                                            // Si el valor es un objeto, convertirlo a una cadena de texto
                                            inputField.value = JSON.stringify(element);
                                        } else {
                                            inputField.value = element;
                                        }
                                    }
                                }
                            }
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }
        });

        document.getElementById('datos-fiscales-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(this);
            const data = {};
            formData.forEach((value, key) => data[key] = value);

            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            if (!csrfToken) {
                console.error('CSRF token not found');
                return;
            }

            fetch('/update', {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        alert('Error: ' + data.error);
                    } else {
                        alert('Datos fiscales actualizados correctamente');
                    }
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- Incluir CSS o scripts aquí --}}
    <link rel="stylesheet" href="{{ asset('css/style.facturacion.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <header class="Clienten">
        <div class="Frame2Mn">
            <div class="LogoMn">Logo</div>
        </div>
    </header>

    <div>
        <form class="form-mainn" id="client-form">
            <div class="form-group">
                <label class="RazNSociales" for="razonSocial">Razón Sociales</label>
                <input type="text" id="razonSocial" name="NOMBRE" class="input-fieldn">
            </div>
            <div class="form-group">
                <label class="Rfc" for="rfc">RFC:</label>
                <input type="text" id="rfc" name="RFC" class="input-fieldn">
            </div>
            <div class="form-group">
                <label class="PaS" for="pais">País</label>
                <input type="text" id="pais" name="PAIS" class="input-fieldn">
            </div>
            <div class="form-group">
                <label class="Cp" for="cp">CP:</label>
                <input type="text" id="cp" name="CP" class="input-fieldn">
            </div>
            <div class="form-group">
                <label class="Municipio" for="municipio">Municipio</label>
                <input type="text" id="municipio" name="POBLA" class="input-fieldn">
            </div>
            <div class="form-group">
                <label class="Ciudad" for="ciudad">Ciudad</label>
                <input type="text" id="ciudad" name="CIUDAD" class="input-fieldn">
            </div>
            <div class="form-group">
                <label class="Estado" for="estado">Estado</label>
                <input type="text" id="estado" name="ESTADO" class="input-fieldn">
            </div>
            <div class="form-group">
                <label class="Colonia" for="colonia">Colonia</label>
                <input type="text" id="colonia" name="COLONIA" class="input-fieldn">
            </div>
            <div class="form-group">
                <label class="Calle" for="calle">Calle</label>
                <input type="text" id="calle" name="CALLE" class="input-fieldn">
            </div>
            <div class="form-group">
                <label class="NMeroExterior" for="numExterior">Número exterior</label>
                <input type="text" id="numExterior" name="numeroexterior" class="input-fieldn">
            </div>
            <div class="form-group">
                <label class="NMeroInterior" for="numInterior">Número interior</label>
                <input type="text" id="numInterior" name="numerointerior" class="input-fieldn">
            </div>
            <div class="form-group">
                <label class="UsoCfdi" for="usoCfdi">Uso CFDI</label>
                <input type="text" id="usoCfdi" name="UsoCFDI" class="input-fieldn">
            </div>
            <div class="form-group">
                <label class="RGimenFiscal" for="regimenFiscal">Régimen fiscal:</label>
                <input type="text" id="regimenFiscal" name="Regimen" class="input-fieldn">
            </div>
            <div class="form-group">
                <label class="Email" for="email">Email:</label>
                <input type="email" id="email" name="CORREO" class="input-fieldn">
                <span id="email-error" style="color: red; display: none;">Correo electrónico no válido</span>
            </div>
            <div class="form-group">
                <button type="submit" class="Guardarn">Guardar</button>
            </div>
        </form>
    </div>

    <footer>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('client-form');

            // Recuperar el RFC de localStorage y colocarlo en el campo de RFC
            const storedRFC = localStorage.getItem('RFC');
            if (storedRFC) {
                const rfcInput = document.getElementById('rfc');
                rfcInput.value = storedRFC;
                rfcInput.disabled = true; // Desactivar el campo de RFC
            }

            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Evita el envío del formulario por defecto
                console.log('Formulario enviado');

                // Validar campos vacíos y correo electrónico
                const emailInput = document.getElementById('email');
                const emailError = document.getElementById('email-error');
                const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

                const requiredFields = document.querySelectorAll('.input-fieldn');
                let allFieldsValid = true;

                requiredFields.forEach(field => {
                    if (!field.value) {
                        field.style.borderColor = 'red';
                        allFieldsValid = false;
                    } else {
                        field.style.borderColor = '';
                    }
                });

                if (!emailPattern.test(emailInput.value)) {
                    emailError.style.display = 'inline';
                    allFieldsValid = false;
                } else {
                    emailError.style.display = 'none';
                }

                if (!allFieldsValid) {
                    alert('Por favor, complete todos los campos correctamente.');
                    return;
                }

                console.log('Todos los campos son válidos');

                const formData = new FormData(form);
                const data = {};
                formData.forEach((value, key) => {
                    data[key] = value;
                });

                // Agregar RFC al objeto data
                data['RFC'] = storedRFC;
                data['POBLA'] = localStorage.getItem('POBLA') || '';
                data['CIUDAD'] = localStorage.getItem('CIUDAD') || '';
                data['ESTADO'] = localStorage.getItem('ESTADO') || '';

                console.log('Datos del formulario:', data);

                fetch('{{ url('/client/save') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                        },
                        body: JSON.stringify(data)
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Respuesta del servidor:', data);
                        if (data.error) {
                            alert(data.error);
                        } else {
                            alert('Datos guardados exitosamente');
                            localStorage.setItem('RFC', document.getElementById('rfc').value);
                            window.location.href = '{{ url('/Home/menu') }}';
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Hubo un error al guardar los datos. Inténtalo de nuevo.');
                    });
            });

            // Agregar evento para detectar cambios en el campo de CP
            document.getElementById('cp').addEventListener('change', function() {
                const CP = this.value;

                fetch(`/postal-codes/${CP}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data) {
                            document.getElementById('municipio').value = data.municipio ||
                                'Municipio no encontrado';
                            document.getElementById('ciudad').value = data.ciudad ||
                                'Ciudad no encontrada';
                            document.getElementById('estado').value = data.estado ||
                                'Estado no encontrado';

                            // Guardar municipio, ciudad y estado en localStorage
                            localStorage.setItem('POBLA', data.municipio || 'Municipio no encontrado');
                            localStorage.setItem('CIUDAD', data.ciudad || 'Ciudad no encontrada');
                            localStorage.setItem('ESTADO', data.estado || 'Estado no encontrado');

                            document.getElementById('municipio').disabled = true;
                            document.getElementById('ciudad').disabled = true;
                            document.getElementById('estado').disabled = true;
                        } else {
                            alert('No se encontraron datos para el CP ingresado.');
                            document.getElementById('municipio').value = 'Municipio no encontrado';
                            document.getElementById('ciudad').value = 'Ciudad no encontrada';
                            document.getElementById('estado').value = 'Estado no encontrado';
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        document.getElementById('municipio').value = 'Municipio no encontrado';
                        document.getElementById('ciudad').value = 'Ciudad no encontrada';
                        document.getElementById('estado').value = 'Estado no encontrado';
                    });
            });
        });
    </script>
</body>

</html>

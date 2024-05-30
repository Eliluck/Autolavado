<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturación</title>
    <link rel="stylesheet" href="{{ asset('css/style.facturacion.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <header></header>
    <div class="Inicio">
        <div class="Frame2">
            <div class="Logo">Logo</div>
        </div>
        <form id="rfc-form" class="form-container">
            <label for="rfc" class="IngresaTuRfc">Ingresa tu RFC:</label>
            <input type="text" id="rfc" name="RFC" class="Rectangle18">
            <label for="sucursal" class="IngresaTusucursal">Ingresa tu sucursal:</label>
            <select id="sucursal" name="Sucursal" class="Rectangle182"></select>
            <div class="Rectangle17">
                <button type="button" id="submit-btn" class="Entrar">Entrar</button>
            </div>
        </form>
    </div>
    <footer></footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('rfc-form');
            const submitBtn = document.getElementById('submit-btn');
            const sucursalSelect = document.getElementById('sucursal');

            // Obtener las sucursales al cargar la página
            fetch('{{ url('/sucursales') }}')
                .then(response => response.json())
                .then(data => {
                    data.forEach(sucursal => {
                        const option = document.createElement('option');
                        option.value = sucursal;
                        option.textContent = sucursal;
                        sucursalSelect.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                });

            submitBtn.addEventListener('click', function() {
                const rfc = document.getElementById('rfc').value.toUpperCase();
                const sucursal = sucursalSelect.value;

                fetch('{{ url('/validador') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                        },
                        body: JSON.stringify({
                            RFC: rfc
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.error) {
                            alert(data.error);
                        } else {
                            if (data.valid) {
                                // RFC válido, verificar en la base de datos
                                fetch('{{ url('/check-rfc') }}', {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'X-CSRF-TOKEN': document.querySelector(
                                                'meta[name="csrf-token"]').getAttribute(
                                                'content')
                                        },
                                        body: JSON.stringify({
                                            RFC: rfc
                                        })
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.exists) {
                                            // RFC válido y existe en la base de datos
                                            localStorage.setItem('RFC',
                                                rfc); // Almacenar el RFC en localStorage
                                            localStorage.setItem('Sucursal',
                                                sucursal); // Almacenar la sucursal en localStorage
                                            window.location.href = '{{ url('/Home/menu') }}';
                                        } else {
                                            // RFC válido pero no existe en la base de datos
                                            localStorage.setItem('RFC',
                                                rfc); // Almacenar el RFC en localStorage
                                            localStorage.setItem('Sucursal',
                                                sucursal); // Almacenar la sucursal en localStorage
                                            window.location.href =
                                                '{{ url('Home/registro/nuevo') }}';
                                        }
                                    })
                                    .catch(error => {
                                        console.error('Error:', error);
                                    });
                            } else {
                                // RFC no válido
                                alert('RFC no válido');
                            }
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });
    </script>
</body>

</html>

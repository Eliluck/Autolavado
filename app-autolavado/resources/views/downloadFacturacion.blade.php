<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- Incluir CSS o scripts aquí --}}
    <link rel="stylesheet" href="../css/style.facturacion.css">
</head>

<body>
    <header class="Cliented">
        <div class="Frame2d">
            <div class="Logod">Logo</div>
        </div>
        <div class="Group3d">
            <div class="Rectangle4d"></div>
            <ul class="navbard">
                <li class="nav-itemd"><a href="{{ route('datos-fiscales') }}" class="DatosFiscales">Datos Fiscales</a>
                </li>
                <li class="nav-itemd"><a href="{{ route('facturacion') }}" class="Facturacion">Facturación</a></li>
                <li class="nav-itemd"><a href="{{ route('pdf-xml') }}" class="PdfXml">PDF/ XML</a></li>
                <li class="nav-itemd"><a href="{{ route('salir') }}" class="Salir">Salir</a></li>
            </ul>
        </div>
    </header>
    <div class="main">
        <div class="buscad">
            <div class="Iniciod">Inicio:</div>
            <input type="date" id="inicio" class="date-input">
            <div class="Find">Fin:</div>
            <input type="date" id="fin" class="date-input">
            <button id="buscar" class="Buscard">Buscar</button>
            <button id="quitarFiltros" class="Buscard">Quitar</button>
        </div>
    </div>

    <div class="Group8">
        <table id="facturasTable">
            <thead>
                <tr>
                    <th class="Nombre">Nombre</th>
                    <th class="Fecha">Fecha</th>
                    <th>Descargar</th>
                </tr>
            </thead>
            <tbody id="facturasContainer">
            </tbody>
        </table>
    </div>

    <footer></footer>

    {{-- Incluir JavaScript aquí --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buscarButton = document.getElementById('buscar');
            const quitarFiltrosButton = document.getElementById('quitarFiltros');
            const facturasContainer = document.getElementById('facturasContainer');

            async function fetchFacturas(inicio = null, fin = null) {
                const rfc = localStorage.getItem('RFC'); // Obtener el RFC de localStorage

                if (!rfc) {
                    alert('Por favor, asegúrese de que el RFC esté almacenado en localStorage.');
                    return;
                }

                const body = {
                    rfc: rfc
                };
                if (inicio) body.inicio = inicio;
                if (fin) body.fin = fin;

                try {
                    const response = await fetch('{{ url('/ventas/documentos') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Incluye el token CSRF
                        },
                        body: JSON.stringify(body)
                    });

                    const result = await response.json();

                    if (response.ok) {
                        console.log(result); // Opcional: para depuración
                        // Llenar la tabla con los datos recibidos
                        facturasContainer.innerHTML = ''; // Limpiar contenido previo
                        result.ventas.forEach(venta => {
                            const row = document.createElement('tr');
                            row.innerHTML = `
                                <td class="Nombre">${venta.venta}</td>
                                <td class="Fecha">${venta.f_emision}</td>
                                <td><a href="data:application/xml;base64,${venta.LogCFDI}" download="factura_${venta.UUID}.xml" class="Descargard">Descargar</a></td>
                            `;
                            facturasContainer.appendChild(row);
                        });
                    } else {
                        alert('Error al recuperar las facturas: ' + (result.message || result.error_code));
                        console.log(result); // Opcional: para depuración
                    }
                } catch (error) {
                    console.error('Error:', error);
                    alert('Error en la solicitud de recuperación de facturas.');
                }
            }

            buscarButton.addEventListener('click', function() {
                const inicio = document.getElementById('inicio').value;
                const fin = document.getElementById('fin').value;
                if (!inicio || !fin) {
                    alert('Por favor, complete las fechas.');
                    return;
                }
                fetchFacturas(inicio, fin);
            });

            quitarFiltrosButton.addEventListener('click', function() {
                document.getElementById('inicio').value = '';
                document.getElementById('fin').value = '';
                fetchFacturas();
            });
        });
    </script>
</body>

</html>

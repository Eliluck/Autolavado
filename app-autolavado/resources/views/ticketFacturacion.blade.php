{{-- layout.blade.php --}}
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

    <body>


        <header class="Clientet">
            <div class="Frame2t">
                <div class="Logot">Logo</div>
            </div>
            <div class="Group3t">
                <div class="Rectangle4t"></div>
                <ul class="navbart">
                    <li class="nav-itemt"><a href="{{ route('datos-fiscales') }}" class="DatosFiscales">Datos
                            Fiscales</a>
                    </li>
                    <li class="nav-itemt"><a href="{{ route('facturacion') }}" class="Facturacion">Facturación</a></li>
                    <li class="nav-itemt"><a href="{{ route('pdf-xml') }}" class="PdfXml">PDF/ XML</a></li>
                    <li class="nav-itemt"><a href="{{ route('salir') }}" class="Salir">Salir</a></li>
                </ul>
            </div>
        </header>


        <div class="Iniciot">
            <form id="ticketForm" class="form-containert">
                <label for="Ticket" class="IngresaTuTikect">Ingresa tu Ticket:</label>
                <input type="text" id="ticket" name="ticket" class="Rectangle18">
                <div class="Rectangle17t">
                    <button type="submit" class="Ingresar">Ingresar</button>
                </div>
            </form>
        </div>
    </body>

</html>


<footer>

</footer>

{{-- Incluir JavaScript aquí --}}
<script>
    document.getElementById('ticketForm').addEventListener('submit', async function(event) {
        event.preventDefault();

        const ticket = document.getElementById('ticket').value;
        const rfc = localStorage.getItem('RFC'); // Obtener el RFC de localStorage

        if (!ticket || !rfc) {
            alert(
                'Por favor, ingrese un ticket y asegúrese de que el RFC esté almacenado en localStorage.'
            );
            return;
        }

        try {
            const response = await fetch('{{ url('/facturar-ticket') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Incluye el token CSRF
                },
                body: JSON.stringify({
                    ticket: ticket,
                    RFC: rfc
                })
            });

            const result = await response.json();

            if (response.ok) {
                alert('Ticket facturado correctamente');
                console.log(result); // Opcional: para depuración
            } else {
                alert('Error al facturar el ticket: ' + (result.message || result.error_code));
                console.log(result); // Opcional: para depuración
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Error en la solicitud de facturación.');
        }
    });
</script>
</body>

</html>

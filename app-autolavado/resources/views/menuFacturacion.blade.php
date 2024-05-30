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

    <header class="Cliente">
        <div class="Frame2M">
            <div class="LogoM">Logo</div>
        </div>
        <div class="Group3">
            <div class="Rectangle4"></div>
            <ul class="navbar">
                <li class="nav-item"><a href="{{ route('datos-fiscales') }}" class="DatosFiscales">Datos Fiscales</a>
                </li>
                <li class="nav-item"><a href="{{ route('facturacion') }}" class="Facturacion">Facturación</a></li>
                <li class="nav-item"><a href="{{ route('pdf-xml') }}" class="PdfXml">PDF/ XML</a></li>
                <li class="nav-item"><a href="{{ route('salir') }}" class="Salir">Salir</a></li>
            </ul>
        </div>
    </header>

    <main>

    </main>


    <footer>

    </footer>

</body>

</html>

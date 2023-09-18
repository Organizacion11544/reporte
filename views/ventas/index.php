<title>Busqueda de Ventas por Fecha</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #333;
            background-color: #ffc107;
            padding: 10px;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .btn-buscar {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
        }

        .btn-buscar:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Busqueda de Ventas por Fecha</h1>
            <form id="formularioVenta">
                <div class="mb-3">
                    <label for="venta_fecha_inicio">Fecha de Inicio</label>
                    <input type="datetime-local" name="venta_fecha_inicio" id="venta_fecha_inicio" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="venta_fecha_fin">Fecha de Fin</label>
                    <input type="datetime-local" name="venta_fecha_fin" id="venta_fecha_fin" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="button" id="btnBuscar" class="btn-buscar">Buscar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="build/js/ventas/index.js"></script>
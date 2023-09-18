<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #4CAF50;
        color: #fff;
        text-align: center;
        padding: 20px;
    }

    h1 {
        font-size: 28px;
        color: #333;
        text-align: center;
        margin-top: 20px;
    }

    .container {
        max-width: 900px;
        margin: 0 auto;
        padding: 20px;
    }

    table.styled-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        border: 2px solid #3498db;
        border-radius: 6px;
        overflow: hidden;
    }

    th, td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #3498db;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px;
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    p {
        font-size: 18px;
        margin-top: 0;
    }
</style>
<br>
<br>
<br>
<br>
<br>

<div class="sales-description">
        <h2>Productos Vendidos entre las Fechas:</h2>
        <p>Los productos vendidos entre las fechas descritas son los siguientes:</p>
    </div>

<table class="styled-table">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Cantidad</th>
            <th>Producto</th>
            <th>Cliente</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ventas as $venta) : ?>
            <tr>
                <td><?= $venta->fecha ?></td>
                <td><?= $venta->cantidad ?></td>
                <td><?= $venta->producto ?></td>
                <td><?= $venta->cliente ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
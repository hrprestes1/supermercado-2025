<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Produtos</title>   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">     
        <style>
           body {
                background-color: #f8f9fa;
                color: #333;
                font-family: 'Arial', sans-serif;
            }

            h1 {
                text-align: center;
                margin-top: 20px;
                font-weight: bold;
                color: #007bff;
            }

            .container {
                background: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                margin-top: 50px;
            }

            label {
                font-weight: 600;
            }

            input[type="text"], input[type="number"] {
                border-radius: 5px;
                border: 1px solid #ced4da;
                padding: 8px;
                width: 100%;
            }

            input[type="submit"] {
                width: 100%;
                padding: 10px;
                border-radius: 5px;
                background: #007bff;
                color: white;
                font-size: 16px;
                font-weight: bold;
                border: none;
                transition: background 0.3s;
            }

            input[type="submit"]:hover {
                background: #0056b3;
            }

            td a {
                display: inline-block;
                padding: 6px 12px;
                border-radius: 5px;
                text-decoration: none;
                font-weight: bold;
                transition: 0.3s;
            }

            td a[href*="alterar"] {
                background-color: #ffc107;
                color: #333;
            }

            td a[href*="alterar"]:hover {
                background-color: #e0a800;
            }

            td a[href*="editar"] {
                background-color: #28a745;
                color: #fff;
            }

            td a[href*="editar"]:hover {
                background-color: #218838;
            }

        </style>
    </head>
    <body>
        <div class="container">
           <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                @yield('conteudo')
            </div>
            <div class="col-sm-2"></div>
           </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
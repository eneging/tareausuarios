<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background: rgb(27, 26, 26);
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }

        main {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            width: 60vw;
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            margin: 3rem;
            background: white;
        }

        h1 {
            text-align: start;
        }

        h3 {
            text-align: start;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid rgb(139, 14, 14);
            padding: 8px;
            text-align: left;
        }

        th {
            color: white;
            background-color: #a51111;
        }
    </style>
    <title>Document</title>
</head>

<body>

    <main>
   
        <div class="container bg-white  w-[50vw]">
          
            <h1 class="text-2xl font-bold mb-4">Bienvenido Admin</h1>
            <h3 class="mb-4">Revisa datos de todos los Usuarios</h3>
            <div>
                <table class="w-full border-collapse border-t border-r border-l border-gray-300 bg-white">
                    <thead>
                        <tr>
                            <th class="bg-red-700 text-white py-2 px-4">id</th>
                            <th class="bg-red-700 text-white py-2 px-4">Nombre</th>
                            <th class="bg-red-700 text-white py-2 px-4">Apellido</th>
                            <th class="bg-red-700 text-white py-2 px-4">Teléfono</th>
                            <th class="bg-red-700 text-white py-2 px-4">Correo Electrónico</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $item)
                        <tr>
                            <td class="border py-2 px-4">{{$item->id}}</td>
                            <td class="border py-2 px-4">{{$item->nombre}}</td>
                            <td class="border py-2 px-4">{{$item->apellidos}}</td>
                            <td class="border py-2 px-4">{{$item->telefono}}</td>
                            <td class="border py-2 px-4">{{$item->email}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <a class="bg-blue-500 text-white text-center p-[1rem]" href="/">Formulario</a>
            </div>
        </div>
    </main>

</body>

</html>

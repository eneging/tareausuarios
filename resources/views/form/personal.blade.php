<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Personal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #292828;
            margin: 0;
            padding: 0;
        }

        main {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .form-container {
            width: 40vw;
            padding: 1.5rem;
            background-color: #1b335d;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-top: 1.5rem;
            font-size: 1.5rem;
            font-weight: 600;
            color: #ffffff;
        }

        form {
            margin-top: 1.5rem;
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 0.5rem;
            font-size: 0.875rem;
            color: #cbd5e0;
        }

        input {
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #cbd5e0;
            border-radius: 4px;
            outline: none;
        }

        button {
            padding: 0.75rem;
            background-color: #2d3748;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #1a202c;
        }

        a {
            margin-top: 1rem;
            color: #cbd5e0;
            text-decoration: underline;
            cursor: pointer;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>

    <main>
        <div class="form-container">
            <h1>Nuevo usuario</h1>
            <a class="text-end" href="/dashboard">Ver a la lista</a>
            <form action="api/crear" method="post">
                <label for="nombre">Nombres *</label>
                <input type="text" name="nombre" required>

                <label for="apellidos">Apellidos *</label>
                <input type="text" name="apellidos" required>

                <label for="direccion">Dirección *</label>
                <input type="text" name="direccion" required>

                <label for="telefono">Teléfono *</label>
                <input type="text" name="telefono" required>

                <label for="email">Email *</label>
                <input type="text" name="email" required>

                <button type="submit">Enviar</button>
            </form>

        </div>
    </main>

</body>
</html>

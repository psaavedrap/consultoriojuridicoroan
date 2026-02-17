<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudio Jurídico Roan</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Raleway:wght@300;400&display=swap" rel="stylesheet">
    <style>
        :root {
            --dorado: #c5a059;
            --oscuro: #0a0a0a;
            --gris-suave: #f4f4f4;
        }

        body {
            margin: 0;
            font-family: 'Raleway', sans-serif;
            background-color: var(--oscuro);
            color: white;
            scroll-behavior: smooth;
        }

        /* Hero Section */
        header {
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&q=80&w=1920') center/cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            border-bottom: 3px solid var(--dorado);
        }

        .logo {
            font-family: 'Cinzel', serif;
            font-size: 2.5rem;
            color: var(--dorado);
            margin-bottom: 10px;
        }

        h1 { font-family: 'Cinzel', serif; font-size: 1.2rem; letter-spacing: 3px; }

        .btn-contacto {
            margin-top: 20px;
            padding: 12px 30px;
            border: 2px solid var(--dorado);
            color: var(--dorado);
            text-decoration: none;
            transition: 0.3s;
            font-weight: bold;
        }

        .btn-contacto:hover { background: var(--dorado); color: black; }

        /* Secciones */
        section { padding: 80px 10%; text-align: center; }
        
        .grid-servicios {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .card {
            background: #151515;
            padding: 30px;
            border: 1px solid #333;
            transition: transform 0.3s;
        }

        .card:hover { border-color: var(--dorado); transform: translateY(-10px); }

        .card h3 { color: var(--dorado); font-family: 'Cinzel', serif; }

        /* Formulario */
        form {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input, textarea {
            padding: 15px;
            background: #222;
            border: 1px solid #444;
            color: white;
        }

        footer {
            padding: 40px;
            background: #050505;
            border-top: 1px solid var(--dorado);
            text-align: center;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo">ROAN</div>
        <h1>ESTUDIO JURÍDICO ROAN</h1>
        <p style="font-style: italic; color: #ccc;">"Litigio con Firmeza, Asesoría con Humanidad"</p>
        <a href="#contacto" class="btn-contacto">CONSULTAR AHORA</a>
    </header>

    <section id="nosotros">
        <h2 style="color: var(--dorado); font-family: 'Cinzel';">Sobre Nosotros</h2>
        <p>Liderado por la Abogada María Lidieth Roque Ancajima, nuestro estudio se especializa en brindar soluciones legales estratégicas con un enfoque humano y ético.</p>
    </section>

    <section id="servicios" style="background-color: #0f0f0f;">
        <h2 style="color: var(--dorado); font-family: 'Cinzel';">Nuestras Especialidades</h2>
        <div class="grid-servicios">
            <div class="card"><h3>Derecho Civil</h3><p>Contratos, Propiedades y Sucesiones.</p></div>
            <div class="card"><h3>Derecho de Familia</h3><p>Divorcios, Alimentos y Tenencia.</p></div>
            <div class="card"><h3>Derecho Penal</h3><p>Defensa técnica y asesoría especializada.</p></div>
        </div>
    </section>

    <section id="contacto">
        <h2 style="color: var(--dorado); font-family: 'Cinzel';">Contacto</h2>
        <form>
            <input type="text" placeholder="Nombre Completo" required>
            <input type="email" placeholder="Correo Electrónico" required>
            <textarea rows="5" placeholder="Cuéntenos su caso..."></textarea>
            <button type="submit" class="btn-contacto" style="background: none; cursor: pointer;">ENVIAR MENSAJE</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Estudio Jurídico Roan - Todos los derechos reservados.</p>
        <p>Sullana, Piura, Perú | Tel: 995248477</p>
    </footer>

</body>
</html>
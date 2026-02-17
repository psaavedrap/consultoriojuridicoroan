<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudio Jurídico Roan</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header">
    <div class="nav-container">
        <div class="logo">
            <img src="img/logo.png" alt="Estudio Jurídico Roan">
        </div>
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#perfil">Nosotros</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </div>
</header>

<section id="inicio" class="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>Litigio con Firmeza</h1>
        <p>Asesoría con Humanidad</p>
        <a href="#servicios" class="btn">Conozca Nuestros Servicios</a>
    </div>
</section>

<section id="perfil" class="perfil">
    <div class="perfil-card">
        <img src="img/abogada.png" alt="Abogada María Lizbeth Roque Ancajima">
        <div>
            <h2>María Lizbeth Roque Ancajima</h2>
            <p><strong>Abogada – Conciliadora</strong></p>
            <p>ICAP 05437</p>
            <p>
                El Estudio Jurídico Roan ofrece asesoría legal especializada,
                brindando soluciones firmes con un enfoque humano.
            </p>
        </div>
    </div>
</section>

<!-- ===== NUEVA SECCIÓN DE SERVICIOS ===== -->
<section id="servicios" class="servicios">
    <h2>Nuestros Servicios</h2>
    <div class="servicios-grid">
        <div class="servicio-card">
            <div class="servicio-icono">⚖️</div>
            <h3>Derecho Civil</h3>
            <p>Contratos, sucesiones, obligaciones y responsabilidad civil. Asesoría integral para personas y empresas.</p>
        </div>
        <div class="servicio-card">
            <div class="servicio-icono">🏛️</div>
            <h3>Derecho de Familia</h3>
            <p>Divorcios, tenencia, alimentos, filiación y violencia familiar. Acompañamiento con sensibilidad y firmeza.</p>
        </div>
        <div class="servicio-card">
            <div class="servicio-icono">💼</div>
            <h3>Derecho Laboral</h3>
            <p>Despidos, contratos de trabajo, negociaciones colectivas y defensa del trabajador o empleador.</p>
        </div>
        <div class="servicio-card">
            <div class="servicio-icono">🔒</div>
            <h3>Derecho Penal</h3>
            <p>Defensa penal estratégica, asesoría a víctimas, delitos económicos y penitenciario.</p>
        </div>
        <div class="servicio-card">
            <div class="servicio-icono">📊</div>
            <h3>Conciliación Extrajudicial</h3>
            <p>Soluciones rápidas y efectivas mediante el diálogo, evitando procesos judiciales largos.</p>
        </div>
        <div class="servicio-card">
            <div class="servicio-icono">📝</div>
            <h3>Asesoría Preventiva</h3>
            <p>Elaboración de contratos, testamentos, actas y documentos legales a medida.</p>
        </div>
    </div>
</section>

<section id="contacto" class="contacto">
    <h2>Contacto</h2>
    <div class="contacto-grid">
        <div class="contacto-info">
            <p>📞 <strong>Teléfono:</strong> 995248477</p>
            <p>📍 <strong>Ubicación:</strong> Lima, Perú</p>
            <p>✉️ <strong>Email:</strong> contacto@roanlegal.pe</p>
        </div>
        <form action="#" method="post">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="email" name="email" placeholder="Correo" required>
            <textarea name="mensaje" placeholder="Mensaje" required></textarea>
            <button type="submit">Enviar Mensaje</button>
        </form>
    </div>
</section>

<footer class="footer">
    <p>© 2026 Estudio Jurídico Roan — Todos los derechos reservados</p>
</footer>

</body>
</html>
<!doctype html>
<html lang="en">
    <head>
        <title>HAVS | Medicina Estética y Regenerativa</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <style>
          body {
            margin: 0;
            background-color: #f8f9fa;
          }

          .navbar {
            background-color: #000;
            padding: 25px 0;
            color: white;
            border-bottom: 1px solid #222;
          }

          .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
          }

          .logo {
            display: flex;
            align-items: center;
            gap: 12px;
          }

          .logo h1 {
            font-size: 1.5rem;
            margin: 0;
            color: white;
            letter-spacing: 1px;
            white-space: nowrap;
          }

          .logo span {
            color: #666;
            font-weight: 300;
          }

          .nav-links {
            display: flex;
            list-style: none;
            gap: 25px;
            margin: 0;
            padding: 0;
            align-items: center;
          }

          .nav-links a {
            color: #aaa;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 500;
            white-space: nowrap;
            transition: all 0.3s ease;
          }

          .nav-links a:hover {
            color: white;
          }

          .dropdown {
            position: relative;
            display: inline-block;
          }

          .dropbtn {
            cursor: pointer;
          }

          .dropdown-content {
            display: none;
            position: absolute;
            background-color: #111;
            min-width: 200px;
            box-shadow: 0px 10px 20px rgba(0,0,0,0.8);
            z-index: 100;
            list-style: none;
            padding: 10px 0;
            border-radius: 8px;
            border: 1px solid #333;
            top: 100%;
            left: 0;
            margin-top: 0;
          }

          .dropdown-content::before {
            content: "";
            position: absolute;
            top: -10px;
            left: 20px;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 10px solid #111;
          }

          .dropdown::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            height: 20px;
            display: none;
          }

          .dropdown-content li a {
            color: #ccc !important;
            padding: 12px 20px;
            display: block;
            font-size: 1rem;
            border: none;
          }

          .dropdown-content li a:hover {
            background-color: #222;
            color: white !important;
            padding-left: 25px;
          }

          .dropdown:hover .dropdown-content {
            display: block;
          }

          .dropdown:hover .dropbtn {
            color: white;
          }

          .dropdown:hover::after {
            display: block;
          }
        </style>
      </head>

<header class="navbar">
    <div class="nav-container">
        <div class="logo">
            <a href="index.php" style="text-decoration: none; display: flex; align-items: center; gap: 12px; color: inherit;">
                <h1>HAVS | Medicina Estética y Regenerativa</h1>
            </a>
        </div>
        <nav>
            <ul class="nav-links">
                <li class="dropdown">
                    <a href="ropa.php" class="dropbtn">Tratamientos ▼</a>
                    <ul class="dropdown-content">
                        <li><a href="camisetas.php">Camisetas</a></li>
                        <li><a href="sudaderas.php">Sudaderas</a></li>
                        <li><a href="jerseys.php">Jerseys</a></li>
                        <li><a href="abrigos.php">Abrigos</a></li>
                        <li><a href="pantalones.php">Pantalones</a></li>
                        <li><a href="polos.php">Polos</a></li>
                    </ul>
                </li>
                <li><a href="reservar.php">Reservar citas</a></li>
                <li><a href="conocenos.php">Sobre nosotros</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="cerrar.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </div>
</header>

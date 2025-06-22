<?php
include '../includes/header.php';
include '../includes/menu.php';
?>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #d3d3d3;
      color: #111;
    }

    header {
      background-color: #000;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      flex-wrap: wrap;
    }

    .logo {
      font-weight: bold;
      font-size: 1.5rem;
    }

    nav a {
      margin: 0 1rem;
      color: white;
      text-decoration: none;
      font-weight: bold;
    }

    nav a:hover {
      text-decoration: underline;
    }

    .search {
      display: flex;
      align-items: center;
    }

    .search input {
      padding: 0.5rem;
      border: none;
      border-radius: 20px 0 0 20px;
    }

    .search button {
      padding: 0.5rem 1rem;
      background: #ccc;
      border: none;
      border-radius: 0 20px 20px 0;
      cursor: pointer;
    }

    .hero {
      text-align: center;
      padding: 2rem;
    }

    .hero h1 {
      color: #b20000;
      margin-bottom: 1rem;
    }

    .hero p {
      margin-bottom: 1rem;
    }

    .hero ul {
      list-style: disc;
      padding-left: 1.5rem;
      text-align: left;
      max-width: 600px;
      margin: 0 auto 1rem;
    }

    .hero img {
      width: 90%;
      max-width: 700px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    }

    .cards {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 2rem;
      padding: 2rem;
    }

    .card {
      background: #4e0000;
      color: #fff;
      border-radius: 20px;
      width: 200px;
      text-align: center;
      padding: 1rem;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    .card:nth-child(even) {
      background: #00274d;
    }

    .card img {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 0.5rem;
    }
  </style>
</head>
<body>

  <section class="hero">
    <h1>BEM-VINDO À VELOZCAR — SEU NOVO CARRO ESTÁ AQUI!</h1>
    <p>Encontre os melhores veículos novos e seminovos com garantia, procedência e preços imbatíveis.</p>
    <ul>
      <li>Mais de 500 veículos em estoque</li>
      <li>Ofertas imperdíveis toda semana</li>
      <li>Compra segura, 100% online ou presencial</li>
    </ul>
    
    <img src="carros.jpg" alt="Carros em destaque">
  </section>

  <section class="cards">
    <div class="card">
      <img src="carro1.jpg" alt="Carro 1">
      <p>Ford Ka 2020 - Completo</p>
    </div>
    <div class="card">
      <img src="carro2.jpg" alt="Carro 2">
      <p>Chevrolet Onix 2022 - Econômico</p>
    </div>
    <div class="card">
      <img src="carro3.jpg" alt="Carro 3">
      <p>Fiat Argo 2021 - Ótimo custo-benefício</p>
    </div>
  </section>

</body>
</html>



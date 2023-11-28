<?php
require_once('cookies.php');

// Defina $usuarioLogado com um valor padrão (pode ser true ou false dependendo da sua lógica)
$usuarioLogado = false;

// Defina $usuarioAtual com um valor padrão ou vazio para evitar o aviso "Undefined variable"
$usuarioAtual = isset($usuarioAtual) ? $usuarioAtual : '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["definirCookie"])) {
        SetarCookieRecebido();
        header("Location: index.php");
    } elseif (isset($_POST["excluirCookie"])) {
        DeletarCookieAtual();
        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="cookies.css" />
    <title></title>
  </head>
  <body>
    <nav>
      <div class="nav__logo"><a href="#"></a></div>
      <ul class="nav__links">
        <li class="link">Home</li>
        <li class="link">Blog</li>
        <li class="link">Offers</li>
        <li class="link">Services</li>
        <li class="link">Contacts</li>
      </ul>
    </nav>
    <header>
      <div class="section__container">
        <div class="header__content">
          <h1>Viagem</h1>
          <p>
           
          </p>
          
        </div>
      </div>
    </header>

    <main class="conteudo">
        <!-- Seção de cookies e outros conteúdos existentes -->

        <!-- Formulário para definir ou excluir o cookie -->
        <div class="sseccao-de-cookies" id="sseccao-de-cookies">
            <div class="aviso-de-cookie">
                <!-- ... (conteúdo do aviso de cookies) ... -->

                <form method="post" action="index.php">
                    <label for="usuario">Usuário:</label>
                    <input type="text" id="usuario" name="usuario" value="<?= $usuarioAtual ?>">
                    <?php if ($usuarioLogado) : ?>
                        <button class="btn-buttons" type="submit" name="definirCookie">Editar Cookie</button>
                    <?php else : ?>
                        <br>
                        <button class="btn-buttons" type="submit" name="definirCookie">Definir Cookie</button>
                    <?php endif; ?>
                </form>

                <form method="post" action="index.php">
                    <?php if ($usuarioLogado) : ?>
                        <button class="btn-buttons" type="submit" name="excluirCookie">Excluir</button>
                    <?php endif; ?>
                </form>

                <a class="btn-aceitar" href="javascript:void(0)" onclick="aceiteicookies()">Aceitar</a>

            </div>
        </div>

        <!-- Restante do conteúdo da página -->

     <section class="journey__container">
      <div class="section__container">
        <h2 class="section__title">Comece a sua jornada</h2>
        <p class="section__subtitle"></p>
        <div class="journey__grid">
          <div class="country__card">
            <img src="assets/country-1.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Santorini, Greece</span>
            </div>
          </div>
          <div class="country__card">
            <img src="assets/country-2.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Vernazza, Italy</span>
            </div>
          </div>
          <div class="country__card">
            <img src="assets/country-3.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>San Francisco</span>
            </div>
          </div>
          <div class="country__card">
            <img src="assets/country-4.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>navagio, Greece</span>
            </div>
          </div>
          <div class="country__card">
            <img src="assets/country-5.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Ao Nang, Thailand</span>
            </div>
          </div>
          <div class="country__card">
            <img src="assets/country-6.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Phi Phi Island, Thailand</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="banner__container">
      <div class="section__container">
        <div class="banner__content">
          <h2></h2>
          <p>
          </p>
        </div>
      </div>
    </section>

    <section class="display__container">
      <div class="section__container">
        <h2 class="section__title"></h2>
        <p class="section__subtitle">
        
        </p>
        <div class="display__grid">
          <div class="display__card grid-1">
            <img src="assets/grid-1.jpg" alt="grid" />
          </div>
          <div class="display__card">
            <i class="ri-earth-line"></i>
            <h4>Viagens apaixonadas</h4>
            <p>Alimente a sua paixão pela aventura e descubra novos horizontes</p>
          </div>
          <div class="display__card">
            <img src="assets/grid-2.jpg" alt="grid" />
          </div>
          <div class="display__card">
            <img src="assets/grid-3.jpg" alt="grid" />
          </div>
          <div class="display__card">
            <i class="ri-road-map-line"></i>
            <h4>Lugares Maravilhosos</h4>
            <p>Descubra os lugares mais bonitos do mundo</p>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="section__container">
        <h4>Travel.co</h4>
        <div class="social__icons">
          <span><i class="ri-facebook-fill"></i></span>
          <span><i class="ri-twitter-fill"></i></span>
          <span><i class="ri-instagram-line"></i></span>
          <span><i class="ri-linkedin-fill"></i></span>
        </div>
        <p>
        Viajar torna-nos modestos. Vê-se o lugar minúsculo que se ocupa no
          no mundo.
        </p>
      </div>
    </footer>
  </body>
</html>
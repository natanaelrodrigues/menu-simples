<!doctype html>
<html lang="pt-br">
  <head>
    <title>Portal Modelo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/ionic-menu.css">
  </head>
  <body>
      <nav> 
        <ul class="menu">
          <li><a href="#">Admin</a></li>
          <li><a href="#">Cadastro</a></li>
          <li><a href="#">Consulta</a></li>
          <li><a href="#">Sobre</a></li>
          <li class="submenu"><a href="#">O que fazemos?</a>
              <ul class="item-menu">
                      <li><a href="#">Web Design</a></li>
                      <li><a href="#">SEO</a></li>
                      <li class="submenu"><a href="#">Design<i class="fas fa-angle-double-down ico"></i></a>
                        <ul>
                          <li><a href="#" class="item-menu">Portifolio</a></li>
                          <li><a href="#" class="item-menu">Projetos</a></li>
                        </ul>
                      </li>
              </ul>
          </li>
		      <li><a href="#">Links</a></li>
		      <li><a href="#">Contato</a></li>
          <li><a href="#">assine</a></li>
          <li><a href="#">Assinaturas</a></li>
        </ul>
      </nav>
        <div class="app-menu">
          <div class='menu-curto'>
          <div class="icone home" onClick="menuClick(1)"><i class="fas fa-home"></i></div>
          <div class="icone bookmark"  onClick="menuClick(2)"><i class="fas fa-bookmark"></i></div>
          <div class="icone blog"  onClick="menuClick(3)"><i class="fab fa-medium-m"></i></div>
          <div class="icone music"  onClick="menuClick(4)"><i class="fas fa-music"></i></div>
          <div class="icone email"  onClick="menuClick(5)"><i class="fas fa-envelope"></i></div>
          <div class="spacer"></div>
          <div class="icone power"><i class="fas fa-power-off"></i></div>
        
        </div>

        <div class="menu-aberto" id="menu-aberto">

          <div class="home" id="sub-1" onMouseLeave="menuFechar()">
            <a>Opção um aqui</a>
            <a>Opção dois aqui</a>
            <a>Opção três aqui</a>
            <a>Opção quatro aqui</a>
          </div>

          <div class="bookmark" id="sub-2" onMouseLeave="menuFechar()">
            <a>Opção um aqui</a>
            <a>Opção dois aqui</a>
            <a>Opção três aqui</a>
            <a>Opção quatro aqui</a>
          </div>

          <div class="blog" id="sub-3"  onMouseLeave="menuFechar()">
            <a>Opção um aqui</a>
            <a>Opção dois aqui</a>
            <a>Opção três aqui</a>
            <a>Opção quatro aqui</a>
          </div>

          <div class="music" id="sub-4" onMouseLeave="menuFechar()"> 
            <a>Opção um aqui</a>
            <a>Opção dois aqui</a>
            <a>Opção três aqui</a>
            <a>Opção quatro aqui</a>
          </div>

          <div class="email" id="sub-5"  onMouseLeave="menuFechar()">
            <a>Opção um aqui</a>
            <a>Opção dois aqui</a>
            <a>Opção três aqui</a>
            <a>Opção quatro aqui</a>
          </div>

        </div>

        <div class='area-menu'></div>
      </div>

     
      
     <div class="container">
     ...     
     </div> 
     <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"</script>
     <script src="assets/js/all.min.js" ></script>
  </body>
  <script src="assets/js/ionic.js"></script>
</html>
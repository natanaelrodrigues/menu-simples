<?php require 'head.php' ?>
      
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

      
<?php require 'body.php' ?>
      
<?php require 'footer.php' ?>
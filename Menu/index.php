<!DOCTYPE html>
<html>
<head>  
<title>Page Title</title>
  <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap" rel="stylesheet"> 
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="index.css">
  <script type="es6" src="index.js"></script>

</head>

<body  style="background-color:rgb(0, 0, 0);">
  <div class="header">
      <!-- <div class="header-background"><img src="background.png"></div> -->
      <div style="float:center"><img class="logo" src="logo.png"></div>

      <div class="mini-banner">
        <div style="color:white; font-size:1.5rem;"><h2>Instagram Logo</h2></div>
        <div style="color:white; font-size:1.5rem;"><h2>Facebook Logo</h2></div>
        <div style="color:white; font-size:1.5rem;"><h2>Twitter Logo</h2></div>
        <div style="color:white; font-size:1.5rem;"><h2>WhatsApp Logo</h2></div>
      </div>
  </div>

  <section>
    <div class="container">
      <div class="accordion">
        <div class="accordion-item" id="sanduiches">
          <a class="accordion-link" href="#sanduiches">
            <div class="flex">
              <h2>Sanduiches</h2>
              <ul class="comment">Veja os Sanduiches da casa!</ul>
            </div>
            <i class="icon ion-md-arrow-forward"></i>
            <i class="icon ion-md-arrow-down"></i>
          </a>

          <div class="answer">
            <table>
              <tr>
                <td class="nome">Teste Teste Teste Teste Teste</td>
                <td class="descricao">Descricao Descricao Descricao Descricao Descricao Descricao</td>
                <td class="preco">$0,00</td>
              </tr>
             
              <tbody>
                <?php
                $servername ="localhost";
                $username ="root";
                $password ="";
                $database ="Menu";

                $connection = new mysqli($servername, $username, $password, $database);

                //mysql_set_charset("utf8mb4_unicode_ci");

                if($connection->connect_error){
                    die("Connection failled " . $connection->connect_error);
                }

                $sql = "SELECT * FROM sanduiches";
                $result = $connection->query($sql);

                if(!$result){
                    die("Invalid querey: " . $connection->connect_error);
                }

                while($row = $result->fetch_assoc()){

                    echo "<tr>
                        <td class='nome'>". $row["nome"] ."</td>
                        <td class='descricao'>". $row["descricao"] ."</td>
                        <td class='preco'>R$". $row["preco"] ."</td>
                    </tr>";
                }
                ?>
              </tbody>
            </table>
          
          </div>
          <hr>
      </div>

        <div class="accordion-item" id="bebidas">
          <a class="accordion-link" href="#bebidas">
            <div class="flex">
              <h2>Bebidas</h2>
              <ul class="comment">Bebidas de todo tipo!</ul>
            </div>
            <i class="icon ion-md-arrow-forward"></i>
            <i class="icon ion-md-arrow-down"></i>
          </a>
          <div class="answer">
            <table>
              <tr>
                <td class="nome">Teste Teste Teste Teste Teste</td>
                <td class="descricao">é É Descrição Descricao Descricao Descricao Descricao Descricao</td>
                <td class="preco">$0,00</td>
              </tr>
             
              <tbody>
                <?php
                $servername ="localhost";
                $username ="root";
                $password ="";
                $database ="Menu";

                $connection = new mysqli($servername, $username, $password, $database);

                if($connection->connect_error){
                    die("Connection failled " . $connection->connect_error);
                }

                $sql = "SELECT * FROM bebidas";
                $result = $connection->query($sql);

                if(!$result){
                    die("Invalid querey: " . $connection->connect_error);
                }

                while($row = $result->fetch_assoc()){

                    echo "<tr>
                        <td class='nome'>". $row["nome"] ."</td>
                        <td class='descricao'>". $row["descricao"]."</td>
                        <td class='preco'>R$". $row["preco"] ."</td>
                    </tr>";
                }
                ?>
              </tbody>
            </table>
          
          </div>
          <hr>
      </div>
        <div class="accordion-item" id="alcolicos">
          <a class="accordion-link" href="#alcolicos">
            <div class="flex">
              <h2>Alcoólicos</h2>
              <ul class="comment">Aprecie com moderação</ul>
            </div>
            <i class="icon ion-md-arrow-forward"></i>
            <i class="icon ion-md-arrow-down"></i>
          </a>
          <div class="answer">
            <table>
              <tr>
                <td class="nome">Isso</td>
                <td class="descricao">Descricao</td>
                <td class="preco">$0,00</td>
              </tr>

              <tr>
                <td class="nome">Ta No</td>
                <td class="descricao">. . . . . . . . . . . . . . . . . .</td>
                <td class="preco">$0,00</td>
              </tr>

              <tr>
                <td class="nome">HTML</td>
                <td class="descricao"></td>
                <td class="preco">$0,00</td>
              </tr>
            </table>
          </div>
          <hr>
      </div>
        <div class="accordion-item" id="sobremesa">
          <a class="accordion-link" href="#sobremesa">
            <div>
              <h2>Sobremesas</h2>
              <ul>
                <li>#Figma</li>
                <li>#Sketch</li>
                <li>#Adobe</li>
                <li>#Invision</li>
                <li>#Protopie</li>
              </ul>
            </div>
            <i class="icon ion-md-arrow-forward"></i>
            <i class="icon ion-md-arrow-down"></i>
          </a>
          <div class="answer">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
          </div>
          <hr>
      </div>
     </div>
    </div>
  </section>

</body>
</html> 
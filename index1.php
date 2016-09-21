<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="lib/css/estilos.css" rel="stylesheet" type="text/css"/>
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />    
  </head>
  <body>
    <header>
        <div class="container">
           <div class="col-md-2">
                <img id="logotipo" src="views/img/logo.png" alt="logo">            
           </div>
           <div class="col-md-4">
               <h1>WELOCAR</h1>
            <span id="frase">Aluguel de veículos veículos online com segurança</span>   
           </div>


        </div>    
         <div id="menu">

            <div class="container container-fluid">         

                    <input type="checkbox" id="control-nav" />
                    <label for="control-nav" class="control-nav"></label>
                    <label for="control-nav" class="control-nav-close"></label>

                    <nav class="float-l" id="menu">

                        <ul id="float-l" class="list-auto float-l">

                            <li>
                                <a href="/" title="">Inicio</a>
                            </li>
                            <li>
                                <a href="historia.php" title="">Reservas</a>
                            </li>
                            <li>
                                <a href="galeria.php" title="">Contato</a>
                            </li>

                        </ul>

                    </nav>

                <div id="login" class="pull-right">

                    <form class="form-inline">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail3">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="exampleInputPassword3">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                        </div>                

                        <button type="submit" class="btn btn-default">Sign in</button>

                    </form>

                </div>

            </div>

        </div> 
    </header>

    <section id="carros">
      <div class="highlights">
        <input type="radio" id="radio-img1" name="highlights" checked="checked" />
        <div class="highlights-item">
          <img src="assets/images/chaves.jpg" />
          <p>Olha o Chaves sorrindo</p>
          <label class="highlights-button" for="modal_chaves">Ver fotos do Chaves</label>
        </div>
        
        <input type="radio" id="radio-img2" name="highlights" />
        <div class="highlights-item">
          <img src="assets/images/chaves-2.jpg" />
          <p>Pensando na Paty</p>
          <label class="highlights-button" for="modal_chaves2">Ver fotos da Paty</label>
        </div>
        
        <input type="radio" id="radio-img3" name="highlights" />
        <div class="highlights-item">
          <img src="assets/images/chaves-3.jpg" />
          <p>Quero tanto esse sanduiche iche iche</p>
          <label class="highlights-button" for="modal_chaves3">Ver fotos do sanduiche</label>
        </div>

        <div class="highlights-buttons">
          <label for="radio-img1">Image 1</label>
          <label for="radio-img2">Image 2</label>
          <label for="radio-img3">Image 3</label>
        </div>
      </div>

      <input type="checkbox" id="modal_chaves" />
      <div class="modal">
        <div class="modal-content">
          <h4>Foto Grande do Chaves</h4>
          <img src="assets/images/chaves-fotos-raras-4.jpg" />
        </div>
        <label class="modal-close" for="modal_chaves"></label>
      </div>

      <input type="checkbox" id="modal_chaves2" />
      <div class="modal">
        <div class="modal-content">
          <h4>Foto Grande da Paty</h4>
          <img src="assets/images/paty_do_chaves_rep2.jpg" />
          <img src="assets/images/paty_do_chaves_rep3.png" />
          <img src="assets/images/13paty.jpg" />
        </div>
        <label class="modal-close" for="modal_carros2"></label>
      </div>
    </section>

    <input type="checkbox" id="modal_carros3" />
    <div class="modal">
      <div class="modal-content">
        <h4>Foto Grande do shanduiche</h4>
        <img src="assets/images/chaves-sand.jpg" />
        <p>Que bonita a sua roupa, que roupinha mucho louca, nela é tudo remendado, não vale nenhum centavo, mas agrada a quem olhar. Eu sou o famoso Chaves,todos dizem que minha roupa é remendada. Faço tremer as bases com as minhas peraltices preparadas. Dizem a todo instante, que ele é mais espaçoso que um trem! Que ela é azul...crinante, e que tão chata como ela não há ninguém!</p>
        <img src="assets/images/chaves-sand2.jpg" />
        <p>Se você é jovem ainda, jovem ainda, jovem ainda, amanhã velho será, velho será, velho será. A menos que o coração, que o coração suspeite da juventude, que nunca morrerá! Existem jovens de oitenta e tantos anos e também velhos de apenas vinte e seis. Porque velhice não significa nada, e a juventude volta sempre outra vez! E você é tão jovem quanto sente; Pode apostar: é jovem pra valer. E velho é quem tem sempre a dureza e também é quem deixa de aprender. Não diga não à vida que te espera para festejar a alegria de viver dar à vencer a luz do seu caminho, e você vai com isso entender.</p>
      </div>
      <label class="modal-close" for="modal_carros3"></label>
    </div>
    
    
    
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <script src="lib/jquery/jquery.min.js" type="text/javascript"></script>
  </body>
</html>

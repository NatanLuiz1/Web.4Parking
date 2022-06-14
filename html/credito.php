<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="..//js/mostrar.js"></script>
  <script src="..//js/comprovante.js"></script>
  <link rel="stylesheet" href="../css/credito.css">
  <title>Credito</title>
</head>

<body>
  <!--Esse html será apresentado na tela de pagamento-->
  <div id="envie">
    <div id="msg"> Olá, está quase tudo pronto para sua viagem. Adicione um cartão de crédito para prosseguir.</div>
    <br><br>
    <form id="telaCredito" action="https://www.google.com/maps/dir/-8.1343273,-34.939636/Estapar+Estacionam
        entos+-+Pra%C3%A7a+Min.+Salgado+Filho,+S%2FN+-+Imbiribeira,+Recife+-+P
        E,+51210-010/@-8.1268876,-34.9437767,14z/data=!4m9!4m8!1m1!4e1!1m5!1m
        1!1s0x7ab1e374f701c11:0x53d59ff01b959f8!2m2!1d-34.9167451!2d-8.1310167">
      <span id="addCartao" wm-folder>Adicionar cartão</span> <br>
      <ul>

        <div id="numeroCartao">Número do Cartão: &nbsp;
          <input wm-folder id="numeroCar" name="numeroCar" type="text" placeholder="Insira o número"
            required></div>
          <div id="nomeCartao">Nome do Cartão: &nbsp;
            <input wm-folder id="nomeCar" name="nomeCar" type="text" placeholder="Insira o nome"
              required>
          </div>
          <div id="dataCar">Data do Cartão: &nbsp;
            <input wm-folder id="data" name="data" type="text" placeholder="xx/xx" required>
          </div>
          <div id="CVV">CVV: &nbsp;
            <input wm-folder id="cvv" name="cvv" type="text" placeholder="Insira o cvv" required>
          </div>
          <!--Aqui o codigo manda para o mapa e chama a função comprovanteDebito-->

          <button type="text" id="SeguirBt" onclick="comprovanteCredito()">Pagar</button>
        </ul>
    </form>
  </div>
  

  <!--Aqui o codigo manda para o mapa e chama a função comprovanteDebito-->
  <form action="https://www.google.com/maps/dir/-8.1343273,-34.939636/Estapar+Estacionam
entos+-+Pra%C3%A7a+Min.+Salgado+Filho,+S%2FN+-+Imbiribeira,+Recife+-+P
E,+51210-010/@-8.1268876,-34.9437767,14z/data=!4m9!4m8!1m1!4e1!1m5!1m
1!1s0x7ab1e374f701c11:0x53d59ff01b959f8!2m2!1d-34.9167451!2d-8.1310167">
  </form>

  <a href="pagamento.html"><button id="btnVoltar">Voltar</button></a>
</body>

</html>
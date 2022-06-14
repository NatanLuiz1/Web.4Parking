<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="/css/pix.css"> -->
    <link rel="stylesheet" href="../css/pagamento.css">
    <title>4Parkink - Pagamento</title>
</head>

<body>
    <!--Esse html fica responsável de mostrar todos os métodos de pagamento disponivéis na plataforma-->
    <div id="titulo"> Estamos quase lá para sua corrida, escolha sua forma de pagamento.</div>

    <div id="buttons">
        <button type="button" id="pix">Pix</button>
        <div id="telaPix"></div>

        <script>
            
            $(document).ready(function () {
                $("#pix").click(function () {

                    $(function () {
                        $("#telaPix").load("pix.html");
                    });
                })
            });
        </script>




        <button type="button" id="credito">Credito</button>
        <div id="telaCredito"></div>
        <script>

            $(document).ready(function () {
                $("#credito").click(function () {

                    $(function () {
                        $("#telaCredito").load("credito.html");
                    });
                })
            });
        </script>

    </div>
    <p><img src="../img/lemon-style-azul-gg.png" id="lemonG">
        <img src="../img/lemon-style-azul-gg.png" id="lemonG1">
        <img src="../img/lemon-style-azul-pp.png" id="lemonpp">
    <p><img src="../img/lemon-style-azul-pp.png" id="lemonpp1"></p>


</body>

</html>
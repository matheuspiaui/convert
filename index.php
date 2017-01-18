<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="js/libJs.js"></script>
        
    </head>
    
    <body>
        <!--Cabeçalho-->
        <header>
            <!--Logo-->
            <div class="logo"></div>
            
            <!--Social-->
            <div class="social"></div>
            
            <!--Outras Plataformas-->
            <div class="mobile"></div>
        
        </header>
            
        <!--Seção-->
        <section>
            <h1>Para as principais moedas do mundo.</h1>
            <form action="index.php" method="post" name="moeda">
                <!--Bitcoin-->
                <div id="bitcoin">
                    <h2>Bitcoin</h2>
                    <input type="text" name="bit" id="bit" />
                </div>
                
                <!--Botão-->
                <div id="botao">
                    <input type="submit" value="Converter"/>
                </div>
                
                <!--Real-->
                <div id="real">
                    <h2>Real</h2>
                    <input type="text" name="real" id="re" />
                     
                </div>
                
            </form>
        </section>
        
        <!--Rodapé-->
        <footer></footer>
        
    </body>
    <?php include("view.php");?>
</html>
<!-- Esercizio
Implementare un sito protetto con email e password
Il sito deve contenere almeno una pagina di login e
una homepage con la scritta "Ciao <email>!" nel caso
in cui l'utente sia loggato.
L'email e la password devono essere memorizzati in
un database MySQL.
Suggerimento: memorizzate la password con la funzione password_hash() del PHP-->




<html>
    <head>
        <title>Login</title>
    </head>    
    <body>
    <!--mostro a msg de erro no browser-->
    <?php
    if (isset($message)) {
        echo '<label class= "text-danger">'. $message.'</label>';
    }
    ?>

    <!--crio o form e em action coloco o nome do arquivo php o qual irei mandar os dados deste file-->
    <form action="conexao.php" method="POST" />
    User: <input type="text" name="email" />    
    Password: <input type="password" name="senha" />
    <!--crio um button que ira enviar oa dados-->
    <input type="submit" name= "login" value="Enter" />
    </form>
</body>
    </body>
</html>
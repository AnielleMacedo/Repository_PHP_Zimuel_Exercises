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
        <form action="dbs.php" method="POST">
                <input type="text" name="email" />
                <input type="password" name="password" />
                <input type="submit" name="Invio" />
        </form>
    </body>
</html>
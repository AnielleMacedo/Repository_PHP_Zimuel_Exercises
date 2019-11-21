<?php

    ini_set('mysql.connect_timeout()', 300);
    ini_set('default_socket_timeout()', 300);
 
 ?>

 <!DOCTYPE html>
 <html>
 <head>
    
 </head>
 <body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image"/>
        <br/><br>
        <input type="submit" name="sumit" value="Upload"/>
    </form>


    <?php 

        //codigo pra salvar imagem no database usando msqli (upload)

        if (isset($_POST['sumit'])) {
            if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
            {
                echo "Per favore selezionare un'imaginne!";
            }
            else
            {
                $image= addslashes($_FILES['image']['tmp_name']);
                $name= addslashes($_FILES['image']['name']);
                $image= file_get_contents($image);
                $image= base64_encode($image);
                //$data= '2019-10-18';
                $titolo= 'Giovane muore attacato da uno squalo in Nordeste del Brasile';
                $testo = 'Il giovane che è stato attaccato da uno squalo sulla spiaggia Piedade a Recife, è morto presso l Ospedale di Restauro (HR), Derby, nella zona centrale di Pernambuco. José Ernesto Ferreira da Silva ha subito un intervento chirurgico ma non ha potuto resistere alle sue ferite. Otto chirurghi sottoposti a chirurgia per l amputazione della gamba sinistra e la rivascolarizzazione genitale. È arrivato privo di sensi con una ferita estremamente estesa e molto grave. Dopo l intervento chirurgico, ha avuto uno shock ipovolemico [grande perdita di sangue che colpisce il pompaggio di sangue attraverso il cuore] e non ha resistito , ha detto il medico di turno.La morte è avvenuta alle 4:05. Il corpo di José Ernesto fu inviato all Istituto di medicina legale (IML), dove subì una necroscopia. In questo caso, dovrebbe arrivare a 65 o il numero ufficiale di attacchi e a 25 il numero di decessi nell elenco del Comitato di monitoraggio degli incidenti dello squalo di Stato (Cemit), che ha registrato casi dal 1992 a Pernambuco.';
                //saveimage($titolo, $testo, $name, $image);
            }
        }

        displayimage();

        function saveimage($titolo, $testo, $name, $image)
        {
            $con= mysqli_connect("localhost", "root", "");
            mysqli_select_db($con,"portal");
           // mysqli_select_db("portal", $con);
            $query= " INSERT INTO articolo (titolo, testo, name, image) VALUES ('$titolo', '$testo', '$name', '$image')";
            $result=mysqli_query($con, $query);
            if ($result) {
                echo "<br/>image uploaded!";
            }
            else
            {
                echo "<br/>image non uploaded!";
            }
        } 
        
        //codigo pra mostrar imagens do database em pagina html
        function displayimage()
        {
            $con= mysqli_connect("localhost", "root", "");
            mysqli_select_db($con,"portal");
           // mysqli_select_db("portal", $con);
            $query= "SELECT * FROM articolo WHERE id= 3";
            $result=mysqli_query($con, $query);
            while ($row = mysqli_fetch_array($result))
            {
                echo '<img height="500" width="900" src="data:image;base64, '.$row[5].' "> ';
            }
            mysqli_close($con);
            
        }
        

     ?>
 </body>
 </html>

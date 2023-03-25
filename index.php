<!-- This is php is a programing language -->
<html>
    <head>
        <title>Examples with PHP</title>
    </head>
    <body>
        <h1>New Examples with php statements</h1>
        <h3>First example using statements: </h3>
    
        <!-- If you want to use php you will have to use these tags -->
        <?php
            // echo is a methond to print on Screen
            // variables  are declared this way $nameVar = content;
            // We are goint to do an example.
            $nombre = "AndreyGx";
            $edad  = 23;
            $apellido = "Gomez";

            echo 'Hi, '.$nombre.' '.$apellido.' your age is: '.$edad;
        ?>
        <br>
        <h3>Second example notes with php</h3>
        <!-- Create the form to get data -->
        <form action="ejemplo.php">
            <label for="name">Name: </label>
            <input type="text" placeholder="name" name="name"><br><br>

            <label for="id">Id: </label>
            <input type="text" placeholder="id" name="id"><br><br>
    
            <label for="note-1">Note 1: </label>
            <input type="text" placeholder="note-1" name="note-1"><br><br>

            <label for="note-2">Note 2: </label>
            <input type="text" placeholder="note-2" name="note-2"><br><br>

            <label for="note-3">Note 3: </label>
            <input type="text" placeholder="note-3" name="note-3"><br><br>

            <input type="submit" value="SEND">
        </form>
       
        <br>
        
        <h3>Third example table with php</h3>
        <p>Ingrese el numero por el cual quiere multiplicar</p>
        <form action="ejemplo2.php">
            <label for="Numero">Numero</label>
            <input type="text" placeholder="Numero" name="numero"><br><br>
            <p>Hasta cuanto quieres multiplicar por ejemplo(5*n) n es el numero a multplicar </p>
            <label for="Multiplicador">Multiplicador</label>
            <input type="text" placeholder="Multiplicador" name="multiplicador"><br><br>

            <input type="submit" value="enviar">

        </form>
     
    </body>
    <br>
    <br>
    <br>
    <footer>Andrey the best xd</footer>
</html>
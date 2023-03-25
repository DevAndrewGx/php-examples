<table border="2px">
    <tr>
        <th>Numero</th>
        <th>X</th>
        <th>Multiplicador</th>
        <th>=</th>
        <th>Resultado</th>
    </tr>
    <?php
        $numero = $_REQUEST['numero'];
        $multiplicador = $_REQUEST['multiplicador'];
        $i = 1;

        while($i<= $multiplicador) {
            echo '<tr><td>'.$numero.'</td><td>'.'X'.'</td><td>'.$i.'</td><td>'.'='.'</td><td>'.($numero*$i).'</tr></td>';
            $i++;
        }
    ?>
</table>
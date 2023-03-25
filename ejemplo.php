   <table border="2px">
       <tr>
           <th>Name</th>
           <th>Id</th>
           <th>Note 1</th>
           <th>Note 2</th>
           <th>Note 3</th>
           <th>Resultado</th>
           <th>Estado</th>
       </tr>

  
   <?php
    // With request we called the field in form
        $name = $_REQUEST['name'];
        $id = $_REQUEST['id'];
        $note1 = intval($_REQUEST['note-1']);
        $note2 = intval($_REQUEST['note-2']);
        $note3 = intval($_REQUEST['note-3']);
        $definitivad = round(($note1+$note2+$note3)/3);
        $estado = '';
        
        if($definitivad>=3) {
            $estado = 'Aprobado';
        }else {
            $estado = 'Reprobado';
        }

        echo '<tr><td>'.$name.'</td><td>'.$id.'</td><td>'.$note1.'</td><td>'.$note2.'</td><td>'.$note3.'</td><td>'.$definitivad.'</td><td>'.$estado.'</td></tr>';
        
    ?>
 </table>
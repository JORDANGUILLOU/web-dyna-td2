<table border='1'>
    <tbody>
      <?php for($i=0;$i<$nbLignes;$i++){?>
        <tr>
        <?php for($j=0;$j<$nbColonnes;$j++){?>
            <td><?="$i - $j"?></td>
        <?php }?>
        </tr>
      <?php }?>
    </tbody>
</table>
<?php
include "include/footer.php";
 ?>
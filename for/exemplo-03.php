<?php
//22 FOR

echo "<select>";

for ($i=date("Y"); $i > date("Y")-100; $i--) { 
 
 //   echo $i."<br />";

    echo '<option value="'.$i.'">'.$i.'</option>';

}

echo "</select>";

?>
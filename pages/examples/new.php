<?php

$connection = mysqli_connect("localhost:3306", "bhaibhai_user", "0))~76xmYQ@W", "bhaibhai_stock");




$idd= $_POST['datapost'];
$result = mysqli_query($connection,"select * from bank where bname='$idd'");
while($row=mysqli_fetch_assoc($result)){
    ?>
    <option value="<?php echo $row['number'];?>"> <?php echo $row['number'];?></option>
    <?php
}
?>


?>
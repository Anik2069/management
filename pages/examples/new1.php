<?php

$connection = mysqli_connect("localhost:3306", "bhaibhai_user", "0))~76xmYQ@W", "bhaibhai_stock");




$idd= $_POST['datapost'];
$result = mysqli_query($connection,"select * from pd where gp='$idd'");
while($row=mysqli_fetch_assoc($result)){
    ?>
    <option value="<?php echo $row['name'];?>"> <?php echo $row['name'];?></option>
    <?php
}
?>


?>
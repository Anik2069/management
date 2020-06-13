  <?php
  include_once "connection.php";
      session_start();
      if(isset($_POST['submit'])){
          include_once "connection.php";
          $email=$_POST['email'];
          $password=$_POST['password'];

          $sql = "SELECT email,password FROM user where email='$email' and password='$password'";
          $result = mysqli_query($connection, $sql) or die("error");

          if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                  $_SESSION['user']=$row['email'];
                  $_SESSION['password']=$row['password'];
                
                ?> <script type="text/javascript">
window.location.href = '../../index.php';
</script>
                <?php
              }
          } 
          else {
               ?> <script type="text/javascript">
window.location.href = 'login.php';
</script>
                <?php
          }
      }else{
          echo "";
      }


      ?>

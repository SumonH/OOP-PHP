<?php
include "functions2.php";

 ?>

 <form class="" action="" method="post">
   <table>
     <tr>
       <td>Enter the first nubmber :</td>
       <td><input type="number" name="num1"></td>
     </tr>
     <tr>
       <td>Enter the second nubmber :</td>
       <td><input type="number" name="num2"></td>
     </tr>
     <tr>
       <td></td>
       <td><input type="submit" name="calculation" value="calculate"></td>
     </tr>
   </table>

 </form>

 <?php
 if (isset($_POST['calculation'])) {
   $numOne=$_POST['num1'];
   $numTwo=$_POST['num2'];
   if (empty($numOne) or empty($numTwo)) {
    echo "<span style='color: red'>Field must not be empty</span>";
  }else {
    echo "First number = ".$numOne. " Second number = ".$numTwo."<br>";
      $cal = new calculation;
      $cal->add($numOne,$numTwo);
      $cal->sub($numOne,$numTwo);
      $cal->mul($numOne,$numTwo);
      $cal->div($numOne,$numTwo);
  }


 }

  ?>

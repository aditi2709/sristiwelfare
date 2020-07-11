<?php
/*
Template Name: Student record
*/
  get_header();

   ?>

<form method="post">
  <label for="fname">Name:</label><br>
  <input type="text" id="name" name="name" ><br>
  <label for="address">Address:</label><br>
  <input type="text" id="address" name="address"><br>
  <label for="gurdian_name">Gurdian Name:</label><br>
  <input type="text" id="gurdian_name" name="gurdian_name"><br>
  <label for="relation">Relation with Gurdian:</label><br>
  <input type="text" id="relation" name="relation" ><br>
  <label for="number">Contact Number:</label><br>
  <input type="text" id="number" name="number" ><br>
  <label for="alternate_contact_number ">Alternate Number:</label><br>
  <input type="text" id="alternate_contact_number " name="alternate_contact_number " ><br>
  <label for="status">Status:</label><br>
  <input type="text" id="status" name="status" ><br>

  <input type="submit" value="Submit" name="submit">
</form>

<?php

if (isset($_POST['submit']))
{

    $name = $_POST['name'];
    $address = $_POST['address'];
    $gurdian = $_POST['gurdian_name'];
    $relation = $_POST['relation'];
    $number = $_POST['number'];
    $alternatenumber = $_POST['alternate_contact_number'];
    $status = $_POST['status'];

        global $wpdb;

        $sql = $wpdb->insert("wp_students",array('name' => $name,'address' => $address,'gurdian_name' => $gurdian,'relation_with_gurdian'=> $relation,'contact_number' => $number,'alternate_contact_number ' => $alternatenumber,'present_status' => $status));

        if($sql==true){
          echo"<script>alert('data inserted')</script>";
        }
        else{
          echo"<script>alert('data inserted failed')</script>";
        }

}

?>


<?php
get_footer();
?>

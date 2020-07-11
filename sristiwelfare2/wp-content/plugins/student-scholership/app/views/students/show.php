<h2><?php echo $object->__name; ?></h2>
<div class ="student-card" >
  <p>
    <span style="font-weight:bold; color:#1a1a1a;"> ID : </span> <span style="font-size:14px; color:#666666;"><?php echo $object->id; ?></span>
  </p>
  <!-- <p>
    <span style="font-weight:bold; color:#1a1a1a;"> Address : </span> <span style="font-size:14px; color:#666666;"><?php echo $object->address; ?></span>
  </p> -->
  <p>
    <span style="font-weight:bold; color:#1a1a1a;"> Gurdian Name :</span> <span style="font-size:14px; color:#666666;"> <?php echo $object->gurdian_name; ?> </span>
  </p>
  <p>
    <span style="font-weight:bold; color:#1a1a1a;"> Relation With Gurdian :</span> <span style="font-size:14px; color:#666666;"> <?php echo $object->relation_with_gurdian; ?> </span>
  </p>
  <!-- <p>
    <span style="font-weight:bold; color:#1a1a1a;"> Contact Number :</span> <span style="font-size:14px; color:#666666;"> <?php echo $object->contact_number; ?> </span>
  </p>
  <p>
    <span style="font-weight:bold; color:#1a1a1a;"> Alternative Number :</span> <span style="font-size:14px; color:#666666;"> <?php echo $object->alternate_contact_number; ?> </span>
  </p> -->

  <p>
    <span style="font-weight:bold; color:#1a1a1a;"> Status :</span> <span style="font-size:14px; color:#666666;"> <?php echo $object->present_status; ?> </span>
  </p>
  <p>
    <span style="font-weight:bold; color:#1a1a1a;"> Curreent academic :</span> <span style="font-size:14px; color:#666666;">  </span>
  </p> 
</div>

<br/><br/>

<p>
    <?php echo $this->html->link('&#8592; Bact To All Students', array('controller' => 'students')); ?>
</p>

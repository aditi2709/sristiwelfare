<?php

class Student extends MvcModel {

    var $display_field = 'name';

    var $has_many = array(
    'Academic' => array(
      'foreign_key' => 'student_id'
    ),
    'InspectionResult' => array(
      'foreign_key' => 'student_id'
    )
  );

    var $table = '{prefix}students';
    var $includes = array('Academic','InspectionResult');


}

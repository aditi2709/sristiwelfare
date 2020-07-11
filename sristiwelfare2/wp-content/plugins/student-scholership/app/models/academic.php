<?php

class Academic extends MvcModel {

    var $display_field = 'name';
    var $has_one = array(
      'Scholership' => array(
        'foreign_key' => 'academic_id'
      )
    );
    // var $includes = array('Scholership');


}

<?php

class Scholership extends MvcModel {

    var $display_field = 'name';
    var $has_many = array(
    'ScholershipPayment' => array(
      'foreign_key' => 'scholership_id'
    )
  );
  
}

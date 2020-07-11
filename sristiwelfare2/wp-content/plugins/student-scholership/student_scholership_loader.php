<?php

class StudentScholershipLoader extends MvcPluginLoader {

    var $db_version = '1.0';
    var $tables = array();

    function activate() {

      // This call needs to be made to activate this app within WP MVC

      $this->activate_app(__FILE__);

      // Perform any databases modifications related to plugin activation here, if necessary

      require_once ABSPATH.'wp-admin/includes/upgrade.php';

      add_option('student_scholership_db_version', $this->db_version);

      // Use dbDelta() to create the tables for the app here
      // $sql = '';
      // dbDelta($sql);
      $this->create_tables();
    }

  function deactivate() {

    // This call needs to be made to deactivate this app within WP MVC

    $this->deactivate_app(__FILE__);
    $this->delete_tables();
    // Perform any databases modifications related to plugin deactivation here, if necessary

  }

  private function create_tables(){
    global $wpdb;

    // this needs to occur at this level, and not in the
    // constructor/init since we are switching blogs for multisite
    $this->tables = array(
      'students' => $wpdb->prefix.'students',
      'inspection_results' => $wpdb->prefix.'inspection_results',
      'academics' => $wpdb->prefix.'academics',
      'scholerships' => $wpdb->prefix.'scholerships',
      'scholership_payments'=>$wpdb->prefix.'scholership_payments'
    );
    $sql = '
      CREATE TABLE '.$this->tables['students'].' (
        id int(10) NOT NULL auto_increment,
        name varchar(100) default NULL,
        address text,
        gurdian_name varchar(100),
        relation_with_gurdian varchar(100),
        contact_number bigint(10) NOT NULL,
        alternate_contact_number bigint(10) NOT NULL,
        present_status varchar(100),
        PRIMARY KEY (id)
      )';
    dbDelta($sql);

    $sql = '
      CREATE TABLE '.$this->tables['inspection_results'].' (
        id int(10) NOT NULL auto_increment,
        status varchar(100) NOT NULL ,
        date_of_activity date default NULL,
        note text,
        inspected_by varchar(100),
        student_id int(10) default NULL,
        PRIMARY KEY (id),
        KEY student_id (student_id)
      )';
    dbDelta($sql);

    $sql ='
      CREATE TABLE '.$this->tables['academics'].' (
        id int(10) NOT NULL auto_increment,
        standard varchar(100) NOT NULL,
        department varchar(100),
        institution_name varchar(100),
        year_of_admission varchar(4),
        year_of_passing varchar(4) ,
        student_id int(10) default NULL,
        PRIMARY KEY (id),
        KEY student_id (student_id)
      )';
    dbDelta($sql);

    $sql ='
      CREATE TABLE '.$this->tables['scholerships'].' (
        id int(10) NOT NULL auto_increment,
        approved_amount varchar(100) ,
        date_of_approval date default NULL,
        approved_by varchar(100),
        academic_id int(10) default NULL,
        PRIMARY KEY (id),
        KEY academic_id (academic_id)
      )';
    dbDelta($sql);

    $sql ='
      CREATE TABLE '.$this->tables['scholership_payments'].' (
        id int(10) NOT NULL auto_increment,
        payment_mode varchar(100) ,
        payment_mode_id int(10),
        payment_approval_date date,
        payment_approved_by varchar(10),
        payment_disbursment_date date,
        payment_disbursed_by varchar(100),
        payment_disbursed_to varchar(100),
        scholership_id int(10) default NULL,
        PRIMARY KEY (id),
        KEY scholership_id (scholership_id)
      )';
    dbDelta($sql);
  }

  private function delete_tables() {
    global $wpdb;

    // this needs to occur at this level, and not in the
    // constructor/init since we are switching blogs for multisite
    $this->tables = array(
      'students' => $wpdb->prefix.'students',
      'inspection_results' => $wpdb->prefix.'inspection_results',
      'academics' => $wpdb->prefix.'academics',
      'scholerships' => $wpdb->prefix.'scholerships',
      'scholership_payments'=>$wpdb->prefix.'scholership_payments'
    );

    $sql = 'DROP TABLE IF EXISTS ' . $this->tables['scholership_payments'];
    $wpdb->query($sql);

    $sql = 'DROP TABLE IF EXISTS ' . $this->tables['scholerships'];
    $wpdb->query($sql);

    $sql = 'DROP TABLE IF EXISTS ' . $this->tables['academics'];
    $wpdb->query($sql);

    $sql = 'DROP TABLE IF EXISTS ' . $this->tables['inspection_results'];
    $wpdb->query($sql);

    $sql = 'DROP TABLE IF EXISTS ' . $this->tables['students'];
    $wpdb->query($sql);








  }
}

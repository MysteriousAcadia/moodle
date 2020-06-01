<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = "pgsql";
$CFG->dblibrary = 'native';
$CFG->dbhost    = "ec2-54-163-230-103.compute-1.amazonaws.com";
$CFG->dbname    = "d6hjkl9o3rhilo";
$CFG->dbuser    = "mwanuopuagkjqe";
$CFG->dbpass    = "df758ac90fcc13d527c8587510746724f809496dcf3337b67140ddb70289e2ad";
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 5432,
  'dbsocket' => '',
);

$CFG->wwwroot   = "http://online-class-test.herokuapp.com";
$CFG->dataroot  = "/tmp";
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!

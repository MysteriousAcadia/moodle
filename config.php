<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = "pgsql";
$CFG->dblibrary = 'native';
$CFG->dbhost    = "ec2-3-222-150-253.compute-1.amazonaws.com";
$CFG->dbname    = "d5fqtmc5o2j419";
$CFG->dbuser    = "akbaabgdyxtgqu";
$CFG->dbpass    = "ba72a22bec112e8ba9158c377d155d7642ab18e0f7d71e16995b109f9cc49ca4";
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

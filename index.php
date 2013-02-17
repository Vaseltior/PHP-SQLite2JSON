<?php

include_once('./classes/SQlite3ToJSONConverter.class.php');

$sDatabaseFileName = '/Users/samuelgrau/Dropbox/IVD.db';
$oDatabaseHandler = new SQlite3ToJSONConverter($sDatabaseFileName);
$sJSON = $oDatabaseHandler->getJSONFromSQLite();
var_dump($sJSON);

?>
<?php
/* Drupal 7*/

$counter = db_query("SELECT count(nid) FROM {node} WHERE node.type='YOUR-CONTENT-TYPE-HERE' AND node.status=1")->fetchField();
echo "Total : $counter";
?>

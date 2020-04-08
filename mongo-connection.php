<?php
  require 'vendor/autoload.php';

  $client = new MongoDB\Client(
      'mongodb+srv://jmp7978:admin@showcasecluster-c4zg6.gcp.mongodb.net/test?retryWrites=true&w=majority');

  echo "Connection to database successful. <br>";

  $db = $client->showcase;
  $collection = $db->projects;
  $document = $collection->findOne();

  highlight_string("<?php\n\$data =\n" . var_export($document, true) . ";\n?>");
?>

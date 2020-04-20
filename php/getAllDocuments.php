<?php
  require 'vendor/autoload.php';

  $client = new MongoDB\Client(
      'mongodb+srv://showcase:showcase@showcasecluster-c4zg6.gcp.mongodb.net/test?retryWrites=true&w=majority');

  //echo "Connection to database successful. <br>";

  $db = $client->showcase;
  $collection = $db->projects;

  //choose a random document from the collection
  $count = $collection->count();
  $randomDocumentId = rand(1, $count);

  $document = $collection->find();
  //$document = $collection->aggregate([{ $sample: {size: 1} }]); (syntax error)
  $collection = iterator_to_array($document);

  //$feature = $document->toArray(); (failed method)

  //$title = $feature->title (this method also works);
  //$title = $feature['title'];
  //$short_desc = $feature['short_desc'];
  //$image = $feature['image'];
  //$long_desc = $feature['long_desc'];


  //

  //echo $title;
  //echo $short_desc;
  //echo $image;

  /* highlight_string("<?php\n\$data =\n" . var_export($collection, true) . ";\n?>"); */
  //var_dump($document);
  //print_r($feature['short_desc']);
?>

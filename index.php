<?php
  $cars = array(
    'Hello',
    'World',
    array('Volvo', 22, 18),
    array('BMW', 15, 13),
    array('Saab', 5, 2),
    array('Land Rover', 17, 15)
  );

  echo '<h1>$cars array</h1>';
  echo '<pre>';
  var_dump($cars);
  echo '</pre>';

  $cars_keys = array_keys($cars);

  $result_one = [];

  echo '<h1>Example One</h1>';
  echo '<p>For each over array and only push key/value pairs that are type array to new array.</p>';

  foreach($cars_keys as $key) {
    $car = $cars[$key];

    if (gettype($car) !== 'array') continue;

    $result_one[] = $car;
  }

  echo '<pre>';
  var_dump($result_one);
  echo '</pre>';

  echo '<h1>Example Two</h1>';
  echo '<p>Map over array keys and return only arrays, filter to remove any false values</p>';

  function map_callback($car) {
    if (gettype($car) !== 'array') return false;

    return $car;
  };

  $result_two_map = array_map(map_callback, $cars);
  $result_two_filter = array_filter($result_two_map);

  echo '<pre>';
  var_dump($result_two_filter);
  echo '</pre>';
?>

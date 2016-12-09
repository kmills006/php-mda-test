var cars = [
  'hello',
  'world',
  ['Volvo', 22, 18],
  ['BMW', 15, 13],
  ['Saab', 5, 2],
  ['Land Rover', 17, 15],
];

var result = cars.filter(function(car) {
  return typeof car === 'object';
});

console.log('result: ', result);

function calculate_total($items) {
  $total = 0;
  foreach ($items as $item) {
    $total += $item['price'] * $item['quantity'];
  }
  return $total;
}

$items = [
  ['name' => 'Item A', 'price' => 10, 'quantity' => 2],
  ['name' => 'Item B', 'price' => 5, 'quantity' => 3],
  ['name' => 'Item C', 'price' => 20, 'quantity' => 1],
];

$total = calculate_total($items);
echo "Total: ". $total; //Notice that there is no error handling for the case where the input array is empty or a non array 
                        //or if the price or quantity is not a number

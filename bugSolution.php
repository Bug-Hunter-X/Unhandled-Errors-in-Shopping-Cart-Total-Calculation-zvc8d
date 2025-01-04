function calculate_total($items) {
  //Error Handling
  if (!is_array($items) || empty($items)) {
    return 0; // Handle empty or invalid input
  }

  $total = 0;
  foreach ($items as $item) {
    // Input validation
    if (!isset($item['price']) || !isset($item['quantity']) ||
        !is_numeric($item['price']) || !is_numeric($item['quantity'])) {
      continue; //Skip items with missing or invalid data
    }
    $total += $item['price'] * $item['quantity'];
  }
  return $total;
}

$items = [
  ['name' => 'Item A', 'price' => 10, 'quantity' => 2],
  ['name' => 'Item B', 'price' => 5, 'quantity' => 3],
  ['name' => 'Item C', 'price' => 20, 'quantity' => 1],
  ['name' => 'Item D', 'price' => 'abc', 'quantity' => 1], //Invalid price
  ['name' => 'Item E', 'price' => 15],
];

$total = calculate_total($items);
echo "Total: ". $total; 
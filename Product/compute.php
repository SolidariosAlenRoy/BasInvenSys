<!DOCTYPE html>
<html>
<head>
  <style>
   body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      height: 100vh;
      margin: 0;
      background-color: palegoldenrod;
    }

    header {
      margin-top: 20px; /* Adjust top margin as needed */
    }

    .container {
      background-color: white;
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
  </style>
</head>
<body>
    <header><h1>Basic Inventory System<h1></header>
  <div class="container">


    <?php
    $product_name = $_POST['product_name'];
    $initial_qty = $_POST['initial_qty']; // Corrected variable name
    $out = $_POST['out'];

    class Product {
        public string $product_name;
        public int $initial_qty; 
        public int $out;

        public function compute($product_name, $initial_qty, $out) {
            $this->product_name = $product_name;
            $this->initial_qty = $initial_qty;
            $this->out = $out;
        }

        public function difference($prod1, $prod2) {
            return $prod1 - $prod2;
        }

        public function displaybalance(): string {
            return $this->product_name;
        }
    }

    $compute = new Product();
    $compute->compute($product_name, $initial_qty, $out);
    $balance = $compute->difference($initial_qty, $out);
    $display = $compute->displaybalance();

    echo "<h2>Product name: " . $display . "<br><h2>";
    echo "<h2>Balance: " . $balance . "<br><h2>";
    ?>


  </div>
</body>
</html>
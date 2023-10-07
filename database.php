<?php
// Database connection
$host = "172.31.22.43";
$username = "Muhammad200553407";
$password = "8ff4eD_Aic";
$dbname = "Muhammad200553407";

$connection = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pizzaType = $_POST["pizza-type"];
    $pizzaSize = $_POST["pizza-size"];
    $pizzaCrust = $_POST["pizza-crust"];
    $pizzaToppings = isset($_POST["pizza-toppings"]) ? implode(", ", $_POST["pizza-toppings"]) : '';
    $customerName = $_POST["customer-name"];
    $customerEmail = $_POST["customer-email"];
    $customerPhone = $_POST["customer-phone"];
    $quantity = $_POST["quantity"];
    $deliveryAddress = $_POST["delivery"];

    // Insert order into the database
    $sql = "INSERT INTO orders (pizza_type, pizza_size, pizza_crust, pizza_toppings, customer_name, customer_email, customer_phone, quantity, delivery_address) VALUES ('$pizzaType', '$pizzaSize', '$pizzaCrust', '$pizzaToppings', '$customerName', '$customerEmail', '$customerPhone', '$quantity', '$deliveryAddress')";

    if ($connection->query($sql) === TRUE) {
        echo "Order received!<br>";
        echo "Pizza Type: $pizzaType<br>";
        echo "Pizza Size: $pizzaSize<br>";
        echo "Pizza Crust: $pizzaCrust<br>";
        echo "Pizza Toppings: $pizzaToppings<br>";
        echo "Customer Name: $customerName<br>";
        echo "Customer Email: $customerEmail<br>";
        echo "Customer Phone: $customerPhone<br>";
        echo "Quantity: $quantity<br>";
        echo "Delivery Address: $deliveryAddress<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}

$connection->close();
?>

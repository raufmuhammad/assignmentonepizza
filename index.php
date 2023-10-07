<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Order Pizza</title>
</head>
<body>
    <header>
        <h1>Order Your Pizza</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="#contact">CONTACT US</a></li>
            <li><a href="#order">ORDER</a></li>
            <li><a href="#about">ABOUT US</a></li>
        </ul>
    </nav>
    <main>
        <form action="database.php" method="POST">
            <label for="pizza-type">Select a Pizza:</label>
            <select id="pizza-type" name="pizza-type">
                <option value="Margherita">Margherita Pizza</option>
                <option value="Pepperoni">Pepperoni Pizza</option>
                <option value="Mushroom">Mushroom Pizza</option>
            </select>
            
            <label for="pizza-size">Choose a Size:</label>
            <select id="pizza-size" name="pizza-size">
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
            </select>
            
            <label for="pizza-crust">Select a Crust:</label>
            <select id="pizza-crust" name="pizza-crust">
                <option value="Thin">Thin Crust</option>
                <option value="Pan">Pan Crust</option>
                <option value="Stuffed">Stuffed Crust</option>
            </select>
            
            <label for="pizza-toppings">Choose Toppings (Hold Ctrl/Cmd to select multiple):</label>
            <select id="pizza-toppings" name="pizza-toppings[]" multiple>
                <option value="Cheese">Cheese</option>
                <option value="Mushrooms">Mushrooms</option>
                <option value="BellPeppers">Bell Peppers</option>
                <option value="BlackOlives">Black Olives</option>
            </select>
            
            <label for="customer-name">Your Name:</label>
            <input type="text" id="customer-name" name="customer-name">
            
            <label for="customer-email">Your Email:</label>
            <input type="email" id="customer-email" name="customer-email">
            
            <label for="customer-phone">Your Phone Number:</label>
            <input type="tel" id="customer-phone" name="customer-phone">
            
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" max="10" value="1">
            
            <label for="delivery">Delivery Address:</label>
            <textarea id="delivery" name="delivery" rows="4" cols="50"></textarea>
            
            <input type="submit" value="Place Your Order">
        </form>
        
    </main>
</body>
</html>

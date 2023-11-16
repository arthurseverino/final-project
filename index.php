<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Final Project</title>
    <link rel="stylesheet" href="style.css" />
    <script src="app.js" defer></script>
  </head>
  <body>
    <form class="form">
      <div class="form-heading">Welcome to Arthur's Store!</div>
      <div class="login-box">Enter Username and Password to login:</div>
      <input type="text" class="username" placeholder="Username" required />
      <input type="password" class="password" placeholder="Password" required />
      <button type="submit" class="submit">Login</button>
    </form>

    <div class="heading">Welcome to Arthur's Store!</div>

    <div class="products">
      <div class="product 1">
        <img src="./images/sneaker1.jpg" alt="Photo of sneakers" />
        <div class="product-name">Sneaker 1</div>
        <div class="product-price">$10</div>
        <div class="product-description">
          An original pair of blue sneakers!
        </div>
        <div class="product-button">
          <button class="add-to-cart">Add to Cart</button>
        </div>
      </div>

      <div class="product 2">
        <img src="./images/sneaker2.jpg" alt="Photo of sneakers" />
        <div class="product-name">Sneaker 2</div>
        <div class="product-price">$20</div></nobr>
        <div class="product-description">
          An authentic pair of green sneakers!
        </div>
        <div class="product-button">
          <button class="add-to-cart">Add to Cart</button>
        </div>
      </div>

      <div class="product 3">
        <img src="images/sneaker3.jpg" alt="Photo of sneakers" />
        <div class="product-name">Sneaker 3</div>
        <div class="product-price">$30</div>
        <div class="product-description">
          A beautiful, clean pair of white sneakers!
        </div>
        <div class="product-button">
          <button class="add-to-cart">Add to Cart</button>
        </div>
      </div>

      <div class="product 4">
        <img src="images/sneaker4.jpg" alt="Photo of sneakers" />
        <div class="product-name">Sneaker 4</div>
        <div class="product-price">$40</div>
        <div class="product-description">Sleek red sneakers!</div>
        <div class="product-button">
          <button class="add-to-cart">Add to Cart</button>
        </div>
      </div>

      <div class="product 5">
        <img src="images/sneaker5.jpg" alt="Photo of sneakers" />
        <div class="product-name">Sneaker 5</div>
        <div class="product-price">$50</div>
        <div class="product-description">Calm black sneakers!</div>
        <div class="product-button">
          <button class="add-to-cart">Add to Cart</button>
        </div>
      </div>

      <div class="product 6">
        <img src="images/sneaker6.jpg" alt="Photo of sneakers" />
        <div class="product-name">Sneaker 6</div>
        <div class="product-price">$60</div>
        <div class="product-description">
          These sneakers make you feel like you're walking on air!
        </div>
        <div class="product-button">
          <button class="add-to-cart">Add to Cart</button>
        </div>
      </div>

      <div class="product 7">
        <img src="images/sneaker7.jpg" alt="Photo of sneaker7" />
        <div class="product-name">Sneaker 7</div>
        <div class="product-price">$70</div>
        <div class="product-description">Orange and white classics!</div>
        <div class="product-button">
          <button class="add-to-cart">Add to Cart</button>
        </div>
      </div>

      <div class="product 8">
        <img src="images/sneaker8.jpg" alt="Photo of sneaker8" />
        <div class="product-name">Sneaker 8</div>
        <div class="product-price">$80</div>
        <div class="product-description">Flaunt your new pink sneakers!</div>
        <div class="product-button">
          <button class="add-to-cart">Add to Cart</button>
        </div>
      </div>

    <div class="total">
      <div class="total-text">Total: </div>
      <div class="total-price">$0</div>
    </div>

<?php 
    echo $_POST["name"]; 
    echo $_POST["email"];
    echo $_POST["message"];

    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "myDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, name, price FROM Products";
    $result = $conn->query($sql);

    $products = array();
    if ($result->num_rows > 0) {
    // Output data of each row
        while($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    } else {
        echo "0 results";
    }
    echo json_encode($products);
    $conn->close();

?>
  </body>
</html>


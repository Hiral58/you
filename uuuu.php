<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart Example</title>
	<style>
        header {
  background-color: #333;
  color: #fff;
  padding: 16px;
}

h1 {
  margin: 0;
}

a {
  color: #fff;
  text-decoration: none;
  float: right;
  margin-right: 16px;
}

.products {
  display: flex;
  flex-wrap: wrap;
  margin: 16px;
}

.product {
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 16px;
  margin: 16px;
  flex: 1 0 300px;
  text-align: center;
}

.product h2 {
  margin: 0;
}

.add-to-cart {
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 8px;
  margin-top: 16px;
  cursor: pointer;
}
header {
  background-color: #333;
  color: #fff;
  padding: 16px;
}

h1 {
  margin: 0;
}

a {
  color: #fff;
  text-decoration: none;
  float: right;
  margin-right: 16px;
}

.products {
  display: flex;
  flex-wrap: wrap;
  margin: 16px;
}

.product {
  border: 1px solid

        </style>
</head>
<body>
	<header>
		<h1>Shopping Cart Example</h1>
		<a href="cart.php">Cart (0)</a>
	</header>
	
	<main>
		<div class="products">
			<?php
			// connect to database
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "db";

			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}

			// retrieve products from database
			$sql = "SELECT * FROM products";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  while($row = $result->fetch_assoc()) {
			    echo "<div class='product'>";
			    echo "<h2>" . $row["name"] . "</h2>";
			    echo "<p>" . $row["description"] . "</p>";
			    echo "<p>Price: $" . $row["price"] . "</p>";
			    echo "<button class='add-to-cart' data-product-id='" . $row["id"] . "'>Add to Cart</button>";
                echo "<button class='view-details' data-product-id='" . $row["id"] . "'>View Details</button>";
			    echo "</div>";
			  }
			} else {
			  echo "No products found.";
			}

			$conn->close();
			?>
		</div>

		<div class="product-details">
			<h2></h2>
			<p></p>
			<p>Price: $<span></span></p>
			<form>
				<label for="color-select">Color:</label>
				<select id="color-select" name="color">
					<option value="red">Red</option>
					<option value="blue">Blue</option>
					<option value="green">Green</option>
				</select>

				<label for="size-select">Size:</label>
				<select id="size-select" name="size">
					<option value="s">S</option>
					<option value="m">M</option>
					<option value="l">L</option>
					<option value="xl">XL</option>
				</select>

				<label for="quantity-input">Quantity:</label>
				<input type="number" id="quantity-input" name="quantity" min="1" value="1">

				<button type="submit" class="add-to-cart-details">Add to Cart</button>
			</form>
		</div>
	</main>

	<script src="script.js"></script>
</body>
</html>
			    echo "</div>";
			  }
			} else {
			  echo "No products found.";
			}

			$conn->close();
			?>
		</div>
	</main>

	<script>
        const addToCartButtons = document.querySelectorAll('.add-to-cart');
const cartCount = document.querySelector('header a');

let cartItems = [];

addToCartButtons.forEach(function(button) {
  button.addEventListener('click', function() {
    const productId = button.getAttribute('data-product-id');
    const product = {
      id: productId,
      quantity: 1
    };
    cartItems.push(product);
    cartCount.textContent = `Cart (${cartItems.length})`;
  });
});

    </script>
</body>
</html>

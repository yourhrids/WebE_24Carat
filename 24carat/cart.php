<?php
session_start();
include("connect.php");

// INSERT OPERATION
if (isset($_POST['add'])) {
    $name = $_POST['product_name'];
    $qty = $_POST['product_quantity'];
    $stock = $_POST['stock_available'];
    $category = $_POST['category'];
    $price = $_POST['price'];

    $sql = "INSERT INTO cart (product_name, product_quantity, stock_available, category, price)
            VALUES ('$name', '$qty', '$stock', '$category', '$price')";
    mysqli_query($conn, $sql);
    header("Location: cart.php");
}

// DELETE OPERATION
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM cart WHERE id=$id");
    header("Location: cart.php");
}

// EDIT - FETCH SINGLE
$edit = false;
if (isset($_GET['edit'])) {
    $edit = true;
    $id = $_GET['edit'];
    $record = mysqli_query($conn, "SELECT * FROM cart WHERE id=$id");
    $data = mysqli_fetch_array($record);

    $name = $data['product_name'];
    $qty = $data['product_quantity'];
    $stock = $data['stock_available'];
    $category = $data['category'];
    $price = $data['price'];
}

// UPDATE OPERATION
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['product_name'];
    $qty = $_POST['product_quantity'];
    $stock = $_POST['stock_available'];
    $category = $_POST['category'];
    $price = $_POST['price'];

    $sql = "UPDATE cart SET product_name='$name', product_quantity='$qty', stock_available='$stock', category='$category', price='$price' WHERE id=$id";
    mysqli_query($conn, $sql);
    header("Location: cart.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cart Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* === Manage Cart Form Section === */
        #cart-form-section {
            background-color: #f2f2f2;
            padding: 40px;
            margin: 40px auto;
            width: 90%;
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            font-family: 'League Spartan', sans-serif;
        }

        #cart-form-section h2 {
            text-align: center;
            font-size: 32px;
            color: #088178;
            margin-bottom: 30px;
        }

        #cart-form-section form {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }

        #cart-form-section input[type="text"],
        #cart-form-section input[type="number"],
        #cart-form-section select {
            padding: 15px;
            font-size: 16px;
            border-radius: 12px;
            border: 1px solid #ccc;
            outline: none;
            transition: border-color 0.3s ease;
        }

        #cart-form-section input[type="text"]:focus,
        #cart-form-section input[type="number"]:focus,
        #cart-form-section select:focus {
            border-color: #088178;
        }

        #cart-form-section input[type="submit"] {
            grid-column: span 3;
            background-color: #088178;
            color: #fff;
            padding: 15px;
            border: none;
            font-size: 18px;
            font-weight: 600;
            border-radius: 12px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #cart-form-section input[type="submit"]:hover {
            background-color: #06685f;
        }

        /* === Cart Table === */
        #cart-form-section table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        #cart-form-section th,
        #cart-form-section td {
            padding: 15px;
            text-align: center;
            font-size: 16px;
            border-bottom: 1px solid #eee;
        }

        #cart-form-section th {
            background-color: #088178;
            color: #fff;
            font-size: 18px;
        }

        #cart-form-section td a {
            color: #088178;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        #cart-form-section td a:hover {
            color: #055e52;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <section id="header">
                <a href="homepage.php"><img src="assets/24Carat.png" class="logo" alt=""></a>
                <div class="mainmenu">
                    <ul id="navbar">
                        <li><a href="homepage.php">Home</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li class="lg-bag"><a class="active" href="cart.php"><i
                                    class="fa-solid fa-cart-shopping"></i></a></li>
                        <a href="" id="close"><i class="fa-solid fa-xmark"></i></a>
                    </ul>
                </div>
            </section>
        </nav>
    </header>

    <main>
        <section id="cart-form-section">
            <h2>Manage Cart Items</h2>
            <form method="POST" action="cart.php">
                <input type="hidden" name="id" value="<?php echo $edit ? $id : ''; ?>">
                <input type="text" name="product_name" placeholder="Product Name" required
                    value="<?php echo $edit ? $name : ''; ?>">
                <input type="number" name="product_quantity" placeholder="Quantity" required
                    value="<?php echo $edit ? $qty : ''; ?>">
                <select name="stock_available" required>
                    <option value="">Select Stock</option>
                    <option value="Yes" <?php if ($edit && $stock == 'Yes') echo 'selected'; ?>>Yes</option>
                    <option value="No" <?php if ($edit && $stock == 'No') echo 'selected'; ?>>No</option>
                </select>
                <input type="text" name="category" placeholder="Category" required
                    value="<?php echo $edit ? $category : ''; ?>">
                <input type="text" name="price" placeholder="Price" required value="<?php echo $edit ? $price : ''; ?>">
                <input type="submit" name="<?php echo $edit ? 'update' : 'add'; ?>"
                    value="<?php echo $edit ? 'Update' : 'Add'; ?>">
            </form>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Stock</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $results = mysqli_query($conn, "SELECT * FROM cart");
                    while ($row = mysqli_fetch_array($results)) {
                    ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['product_name']; ?></td>
                            <td><?php echo $row['product_quantity']; ?></td>
                            <td><?php echo $row['stock_available']; ?></td>
                            <td><?php echo $row['category']; ?></td>
                            <td>$<?php echo $row['price']; ?></td>
                            <td>
                                <a href="cart.php?edit=<?php echo $row['id']; ?>"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                &nbsp;
                                <a href="cart.php?delete=<?php echo $row['id']; ?>"
                                    onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>

    </main>

    <footer class="section-p1">
        <div class="col">
            <a href="homepage.php"><img src="./assets/24Carat.png" class="footer-logo" alt=""></a>
            <h4>Contact</h4>
            <p><Strong>Address: </Strong>Lorem ipsum dolor sit amet Lorem</p>
            <p><Strong>Phone: </Strong>+01 2222 365/ (+91) 9380 9142</p>
            <p><Strong>Hours: </Strong>10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <h4>Follow US</h4>
                <div class="icon-menu">
                    <ul>
                        <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-tiktok"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-wordpress"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="footer-menu">
                <h4>About</h4>
                <div class="footer-menu-content">
                    <ul>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Delivery Information</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms &amp; Conditions</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="footer-menu">
                <h4>My Account</h4>
                <div class="footer-menu-content">
                    <ul>
                        <li><a href="">Sign In</a></li>
                        <li><a href="">View Cart</a></li>
                        <li><a href="">My Wishlist</a></li>
                        <li><a href="">Track My Order</a></li>
                        <li><a href="">Help</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>Lorem ipsum dolor sit amet</p>
            <div class="row">
                <img src="assets/pay/app.jpg" alt="">
                <img src="assets/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="assets/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p> &copy; copyright.All resved for this company</p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
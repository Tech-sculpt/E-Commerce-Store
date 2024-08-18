<?php
session_start();

// Initialize session variables if not already set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['ADD_TO_CART'])) {
        $myitems = array_column($_SESSION['cart'], 'Item_Name');
        if (in_array($_POST['Item_Name'], $myitems)) {
            echo "<script>
                    alert('Item is already added in the cart..!');
                    window.location.href='all-products.html';
                  </script>";
        } else {
            $count = count($_SESSION['cart']);
            $_SESSION['cart'][$count] = array('Item_Name' => $_POST['Item_Name'], 'Price' => $_POST['Price'], 'Quantity' => 1);
            echo "<script>
                    alert('Item added..!');
                    window.location.href='all-products.html';
                  </script>";
        }
    }
}
?>

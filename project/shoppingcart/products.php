<?php
// The amounts of products to show on each page
$num_products_on_each_page = 50;
// The current page - in the URL, will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Select products ordered by the date added
//$stmt = $pdo->prepare('SELECT * FROM products WHERE category = ? ORDER BY date_added DESC LIMIT ?,?');

if (isset($_POST['apple'])) {
    
    $stmt = $pdo->prepare('SELECT * FROM products WHERE category = ? ORDER BY date_added DESC LIMIT ?,?');
// bindValue will allow us to use an integer in the SQL statement, which we need to use for the LIMIT clause
$stmt->bindValue(1, 'apple', PDO::PARAM_STR);
$stmt->bindValue(2, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(3, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the total number of products
$total_products = $pdo->query('SELECT * FROM products')->rowCount();
  }

  else if (isset($_POST['allproducts'])) {
    
    $stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT ?,?');
// bindValue will allow us to use an integer in the SQL statement, which we need to use for the LIMIT clause
//$stmt->bindValue(1, 'apple', PDO::PARAM_STR);
$stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the total number of products
$total_products = $pdo->query('SELECT * FROM products')->rowCount();
  
  }


  else if (isset($_POST['samsung'])) {
    
    $stmt = $pdo->prepare('SELECT * FROM products WHERE category = ? ORDER BY date_added DESC LIMIT ?,?');
// bindValue will allow us to use an integer in the SQL statement, which we need to use for the LIMIT clause
$stmt->bindValue(1, 'samsung', PDO::PARAM_STR);
$stmt->bindValue(2, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(3, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the total number of products
$total_products = $pdo->query('SELECT * FROM products')->rowCount();
  }
  
  

  else{
    $stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT ?,?');
// bindValue will allow us to use an integer in the SQL statement, which we need to use for the LIMIT clause
//$stmt->bindValue(1, 'apple', PDO::PARAM_STR);
$stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the total number of products
$total_products = $pdo->query('SELECT * FROM products')->rowCount();
  }

// Fetch the products from the database and return the result as an Array
//$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the total number of products
//$total_products = $pdo->query('SELECT * FROM products')->rowCount();
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@600&display=swap" rel="stylesheet">
<?=template_header('Products')?>
<style>
  .filter{
    font-size:20px;
    background-color:#EEE2DC;
    border: 2px solid #123C69;
    border-radius:10px;
    font-weight:bold;
    color:#123C69;
  }
  .filter:hover{
    background-color:#EDC7B7;
  }
  </style>

<div class="products content-wrapper">
    <h1 style="font-family: 'IBM Plex Serif', serif;font-size:40px;color:#AC3B61">Products</h1>
    <form method="post">
    <button type="submit" name="allproducts" value="1" class="filter">All Products</button>
            <button type="submit" name="apple" value="1" class="filter">Apple</button>
            <button type="submit" name="samsung" value="1" class="filter">Samsung</button>
</form>
    <p><?=$total_products?> Products</p>
    <div class="products-wrapper" style="display: flex; flex-wrap: wrap;">
        <?php foreach ($products as $product):?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="imgs/<?=$product['img']?>" width="200" height="250" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                &#8377;<?=$product['price']?>
                <?php if ($product['rrp'] > 0):?>
                <span class="rrp">&#8377;<?=$product['rrp']?></span>
                <?php endif;?>
            </span>
        </a><?php endforeach;?>
    </div>
    <!--
    <div class="buttons">
        <?php if ($current_page > 1): ?>
        <a href="index.php?page=products&p=<?=$current_page-1?>">Prev</a>
        <?php endif; ?>
        <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
        <a href="index.php?page=products&p=<?=$current_page+1?>">Next</a>
        <?php endif; ?>
    </div>
        -->
</div>

<?=template_footer()?>
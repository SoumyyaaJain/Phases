
<?php
// Get the 4 most recently added products
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?=template_header('Home')?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Labrada:wght@600&display=swap" rel="stylesheet">

<div class="featured">
    <h2 style="color:#EEE2DC;font-size:100px;-webkit-text-stroke: 1px #AC3B61;font-family: 'Labrada', serif;">Phases</h2>
    <p style="color:black;font-size:25px;font-weight:bold;font-family: 'Satisfy', cursive;">Aesthetic Phone Accessories</p>
</div>
<div class="recentlyadded content-wrapper">
    <h2 style="color:#AC3B61;font-weight:bold">Recently Added Products</h2>
    <div class="products">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="imgs/<?=$product['img']?>" width="200" height="250" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price">
            &#8377;<?=$product['price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&#8377;<?=$product['rrp']?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>



<?=template_footer()?>
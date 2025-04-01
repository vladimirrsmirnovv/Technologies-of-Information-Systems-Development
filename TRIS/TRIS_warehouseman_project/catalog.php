    <div class="popular-and-price">
      <div class="container">
        <h2 class="section-title">Каталог</h2>
        <table class="price-list">
		
		<?php for ($i=0; $i<$rnum; $i++): ?>
		
		<tr>
			<td class="price-image">
				<img src="<?= $product[$i]['image_link'] ?>" alt="<?= $product[$i]['name'] ?>" width="150" height="150">
			</td>
			<td class="price-item">
				<p class="price-name"><?= $product[$i]['name'] ?></p>
				<p class="price-master"><?= $product[$i]['description'] ?></p>
				<p class="price-cost"><?= $product[$i]['price'] ?> руб.</p>
				<form action="components/add_to_basket.php" name="basket">
					<input type="hidden" name="name" value="<?= $product[$i]['product_id'] ?>" >
					<input type="text" name="quantity">
					<input type="image" class="basket" src="img/buy64.png">
				</form>
			</td>
		</tr>
		
		<?php endfor; ?>
		
        </table>
      </div>
    </div>
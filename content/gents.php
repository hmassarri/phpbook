<?php
	/**
	*	gents.php
	*
	*	Content for the Gents page
	*
	*	@version	1.2 2015-0427
	*	@package	Smithside Auctions
	*	@copyright	Copyright 2015 Smithside Auctions
	*	@license	GNU General Public License
	*	@since		Since Release 1.0
	**/
	
	//Get lot information
	$lot_number = '1';
	$image = 'naval-19-173.jpg';
	$name = "Naval Officer's Formal Tailcoat, 1840's";
	$description = 'Black wool broadcloth, double breast front, missing 3 of 18 raised round gold buttons w/ crossed cannon barrels & "Ordnance Corps" text, silver sequin & tinsel embroidered emblem on each square cut tail, quilted black silk lining, very good; ';
	$price = 5700.00;

	$lot_number2 = '2';
	$image2 = 'gents-striped-8-26.jpg';
	$name2 = "Striped Cotton Tailcoat, America, 1835-1845";
	$description2 = 'Orange and white pin-striped twill cotton, double breasted, turn down collar, waist seam, self-fabric buttons, inside single button pockets in each tail, (soiled, faded, cuff edges frayed) good.';
	$price2 = 20700.00;
	
	$lot_number3 = '3';
	$image3 = 'gents-black-8-27.jpg';
	$name3 = "Black Broadcloth Tailcoat, 1830-1845";
	$description3 = 'Fine thin wool broadcloth, double breasted, notched collar, horizontal front and side waist seam, slim long sleeves with notched cuffs, curved tails, black silk satin lining quilted in diamond pattern, padded and quilted chest, black silk covered buttons, (buttons worn) excellent.';
	$price3 = 3450.00;
?>

		<h1>Product Category: Gents</h1>

		<ul class="ulfancy">
			
			<li class="row0">					
				<div class="list-photo"><a href="images/<?php echo $image; ?>">
					<img src="images/thumbnails/<?php echo $image; ?>"  alt="" /></a>
				</div>			
				<div class="list-description">
					<h2><?php echo ucwords($name); ?></h2>
					<p><?php echo htmlspecialchars($description); ?></p>
					<p><strong>Lot:</strong> #<?php echo $lot_number; ?> 
					<strong>Price:</strong> $<?php echo number_format($price); ?></p>
				</div>			
				<div class="clearfloat"></div>
			</li>
			
			<li class="row1">					
				<div class="list-photo"><a href="images/<?php echo $image2; ?>">
					<img src="images/thumbnails/<?php echo $image2; ?>"  alt="" /></a>
				</div>			
				<div class="list-description">
					<h2><?php echo ucwords($name2); ?></h2>
					<p><?php echo htmlspecialchars($description2); ?></p>
					<p><strong>Lot:</strong> #<?php echo $lot_number2; ?> 
					<strong>Price:</strong> $<?php echo number_format($price2); ?></p>
				</div>			
				<div class="clearfloat"></div>
			</li>
			
			<li class="row0">					
				<div class="list-photo"><a href="images/<?php echo $image3; ?>">
					<img src="images/thumbnails/<?php echo $image3; ?>"  alt="" /></a>
				</div>			
				<div class="list-description">
					<h2><?php echo ucwords($name3); ?></h2>
					<p><?php echo htmlspecialchars($description3); ?></p>
					<p><strong>Lot:</strong> #<?php echo $lot_number3; ?> 
					<strong>Price:</strong> $<?php echo number_format($price3); ?></p>
				</div>			
				<div class="clearfloat"></div>
			</li>
	
		</ul>
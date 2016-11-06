<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Affable Beans</title>
</head><!--/head-->

<body>
	<?php require_once("header.php") ?>
	
	
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Présentation</h2>
						<div class="panel-group category-products" id="accordian">
							Bienvenue au site Affable Beans. Nous vous proposons des produits frais et bios sans aromes ni conservateurs. A droite vous avez la liste de nos catégories de produits. Cliquer sur une catégorie pour avoir la liste des produits de cette catégorie. Ensuite ajouter le produit de votre choix au panier et validez votre commande.
						</div>
					

						
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Les catégories de produits</h2>
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/bakery.jpg" alt="" />
											<a href="produits.php" class="btn btn-default add-to-cart">%Nom Cat 1%</a>
										</div>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/bakery.jpg" alt="" />
											<a href="produits.php" class="btn btn-default add-to-cart">%Nom Cat 2%</a>
										</div>
								</div>
							</div>
						</div>

					
					</div><!--features_items-->
					
				</div>
			</div>
		</div>
	</section>
	
<?php require_once("footer.php") ?>
</body>
</html>
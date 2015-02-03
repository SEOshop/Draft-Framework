<div class="page-title row">
	<div class="col-md-12">
		<h2>Collection-page</h2>
	</div>
</div>

<div class="row">
	<p class="col-md-7">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac neque risus. Pellentesque facilisis vel lacus sit amet mattis. Mauris consectetur justo quis purus faucibus accumsan id ut velit. Cras molestie turpis non nisi dignissim molestie. In eu dolor nec quam lacinia hendrerit justo quis purus faucibus accumsan id ut velit. 
	</p>
</div>

<div class="products row">
	<div class="col-md-12">
		<?php 
		for ($i = 1; $i <= 4; $i++) {
			include("product-snippet.php"); 
		}
		?>
	</div>
</div>
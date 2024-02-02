<?php
					$islem = @$_GET['islem'];
					if($islem==1 or $islem == 2){$sql = "select * from urunler where kategori=$islem";} 
					else {$sql = "select * from urunler";} 
					$sor=mysqli_query($conn,$sql);
					while($san= mysqli_fetch_array($sor)){
					echo"<div class='col-12 col-md-4 col-lg-3 mb-5'>";
						echo"<a class='product-item' href='#' onclick='ilkay()'>";
							$sana=$san['konumu'];
							$sani=$san['isim'];
							$sanf=$san['fiyat'];
							echo"<img src='images/$sana' class='img-fluid product-thumbnail'>";
							echo"<h3 class='product-title'>$sani</h3>";
							echo"<strong class='product-price'>$sanf ₺</strong>";
							echo"<span class='icon-cross'>";
								echo"<img src='images/cross.svg' class='img-fluid'>";
							echo"</span>";
						echo"</a>";
					echo"</div>";
					}
					?>

<script>
	function ilkay() {
		alert("");
	}

</script>
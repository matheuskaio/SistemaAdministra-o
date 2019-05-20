<div class="menuficadento">
	<nav class="navegacao">
		<?php
			if(true){
				require_once 'views/components/menu/gerente.php';
			}else{
				require_once 'views/components/menu/home.php';
			}
		?>
	</nav>
</div>

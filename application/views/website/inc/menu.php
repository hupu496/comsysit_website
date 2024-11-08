 <nav class="navbar navbar-light bg-light navbar-expand-lg" id="myNavbar">
				<a href="index.php" class="navbar-brand"><img src="<?= base_url('assets/website/images/logo.png');?>" alt=""></a>
			 	<div class="collapse navbar-collapse" id="mainNav">
			  		<ul class="navbar-nav mx-auto nav-fill">
			   			<li class="nav-item">
			    			<a href="<?= base_url('/');?>" class="nav-link" style="font-size: 16px;color: black;">Home <span class="sr-only">(current)</span></a>
			   			</li>
			   			<?php
			   				if(!empty($menulist)){
		   					  foreach ($menulist as $key => $value) {
		   						?>
	   							<li class="nav-item">
		   							<a href="<?= base_url('website/'.$value['menu_controller'].'/'.$value['id']);?>" class="nav-link" style="font-size: 16px;color: black;"><?= $value['menu_name'];?></a>
		   						</li>
			   			<?php
		   					}
			   			}
			   			?>
			  		</ul>
			 	</div>
			  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
			  		<span class="navbar-toggler-icon"></span>
			 	</button>
			</nav>
		</header>
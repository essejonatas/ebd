	<div class="section-header">
    	<h3>Trimestres </h3>
    	<a class="btn-floating btn waves-effect waves-light"><i class="mdi-content-add"></i></a>
  	</div>
	<div class="row" id="trimestres-loop">
		
	</div>
	<?php foreach ($trimestre as $t) { ?>
		<div class="col s3" >
		  <div class="card">
		    <div class="card-content">
		      <span class=""><a href="#"><?= $t->nome ?></a></span>
		    </div>
		  </div>
		</div>
	<?php } ?>
	</div>
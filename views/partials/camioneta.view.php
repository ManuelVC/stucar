<div class="testmonial" id="camionetas"> 
    <div class="row testmonial_top">
    <?php foreach($data['tableCam'] as $key => $value):  ?>

    	<div class="col-md-6" style="margin-bottom: 2em">
    		<ul class="test_box">
    			<li class="test_img"><img src="<?= PUBLIC_PATH ?>assets/images/vans/grande/<?= $value['imagen'] ?>" class="img-responsive"/> </li>
				<li class="test_desc">
					<h4><a href="<?= PUBLIC_PATH ?>camioneta?c=<?= $value['camid'] ?>"><?= $value['marca'] ?></a></h4>
					<p><?= $value['descripcion'] ?><a href="<?= PUBLIC_PATH ?>camioneta?id=<?= $value['camid'] ?>" class="test_btn">   + ver mas</a></p>
			    </li>	
			    <div class="clearfix">	</div>    				
    		</ul>
    	</div>
    <?php endforeach; ?>
    </div>	
</div> 
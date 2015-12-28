<!-- ////////////////////////////////////// REFERENCIE -->
<div id="referencie" class="carousel slide">
    <div class="carousel-inner">
	<?php $active = true; ?>
	<?php foreach($referencie as $referencia): ?>
	<!-- referencie item -->
	<div class="item <?php if($active) { echo 'active'; $active = false; } ?>">
	    <h2><?php echo $referencia['title']; ?></h2>
	    <p><?php echo $referencia['desc']; ?></p>
	    <a class="btn btn-inverse" href="<?php echo $referencia['url']; ?>"><i class="icon-share-alt icon-white"></i>www</a>
	</div>
	<?php endforeach; ?>
    </div> <!-- /carousel-inner -->
    <!-- <a class="left carousel-control" href="#referencie" data-slide="prev">‹</a>
    <a class="right carousel-control" href="#referencie" data-slide="next">›</a> -->
</div>
<!-- ////////////////////////////////////// REFERENCIE END-->
<a class="btn" data-toggle="modal" href="#modalportfolio">Viac</a>
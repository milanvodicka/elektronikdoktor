<!-- ////////////////////////////////////// MODAL REFERENCIE -->
<div class="modal hide fade" id="modalportfolio" style="display: none; ">
    <div class="modal-header">
	<a class="close" data-dismiss="modal">×</a>
	<h3>Referencie</h3>
    </div>
    <div class="modal-body referencie">
	<?php foreach($referencie as $referencia): ?>
	<!-- referencie item -->
	<div class="item">
	    <h2><?php echo $referencia['title']; ?></h2>
	    <p><?php echo $referencia['desc']; ?></p>
	    <a class="btn btn-inverse" href="<?php echo $referencia['url']; ?>"><i class="icon-share-alt icon-white"></i>www</a>
	</div>
	<?php endforeach; ?>

	<!-- clear -->
	<div class="clear"><!-- --></div>
    </div><!-- modal-body -->
    <div class="modal-footer">
	<a href="#" class="btn" data-dismiss="modal">Zatvoriť</a>
    </div>
</div><!-- modal -->
<!-- ////////////////////////////////////// MODAL REFERENCIE END-->
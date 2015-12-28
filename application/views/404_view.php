<div class="container">
    <div class="row">
	<?php if(false): ?><div class="span1"><img alt="Yep" src="<?php echo base_url(); ?>img/icons/png/64x64/help.png" /></div><?php endif; ?>
	<div class="span12">
	    <h1>Nenašla sa stránka ktorú hľadáte!</h1>
	    <p>Pravdepodobne za to môže už neplatný odkaz alebo chyba v adrese. Pokračujte prosím <?php echo anchor('', 'tadiaľto'); ?>.</p>
	</div>
    </div>
</div>
<br/><hr/><br/>
<?php $this->layout->widget('3col', array()); ?>
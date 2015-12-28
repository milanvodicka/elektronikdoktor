<div class="container">
    <div class="row errors">
	<div class="span12">
	    <h1>Kontakt</h1>
	    <?php echo validation_errors();  ?>
	    <?php if($done): ?>
		<div class="alert alert-success">
		    <strong>Vaša správa bola úspešne odoslaná!</strong>
		</div>
	    <?php endif; ?>
	</div>
    </div>
    <div class="row">
	<div class="span1"><img class="img-icon" alt="Kontaktujte nás" src="<?php echo base_url(); ?>img/iconic/sprava.png" /></div>
	<div class="span7">
	    <?php 
		echo form_open('kontakt');
		echo form_label('Vaše meno: ', 'meno');
		echo form_input('meno', set_value('meno', ''), 'class="span6 error"');
		echo form_label('Váš email: ', 'email');
		echo form_input('email', set_value('email', ''), 'class="span6 error"');
		echo form_label('Správa: ', 'sprava');
		echo form_textarea(array('name'=>'sprava', 'row'=>'10', 'class'=>'span6 error'));
		?>
		<br/><button type="submit" class="btn">Odoslať</button>
		<input type="hidden" name="stamp" value="<?php echo microtime( TRUE ) ?>">
		<input type="text" name="message" class="form-special">
		<input type="text" name="url" class="form-special">
		<?php
		echo form_close();
	    ?>
	</div>
	<div class="span1"><img class="img-icon" alt="kontakt" src="<?php echo base_url(); ?>img/iconic/telefon.png" /></div>
	<div class="span3">
	    <h3>Neváhajte nás kedykoľvek kontaktovať ...</h3>
	    <p>... na nižšie uvedenom telefónnom čísle alebo prostredníctvom elektronickej pošty.</p>
	    <p>Rovnako môžete využiť náš kontaktný formulár.</p>
	    <ul class="big_numbers">
		<li>+421 905 44 52 84</li>
		<li><a href="mailto:info@elektronikdoktor.sk">info@elektronikdoktor.sk</a></li>
	    </ul>
	</div>
    </div>
</div>
<hr/>
<br/>
<?php $this->layout->widget('3col', array()); ?>

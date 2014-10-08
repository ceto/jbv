<?php if ( !is_archive() ) : ?>
<aside id="contactblock" class="footer--contactblock <?php echo is_singular('apartment')?'collapse':''; ?>">
	<div class="wrapper wrapper-extranarrow">
		<div class="page-header">
		  <h2>Meld din interesse</h2>
		</div>

		<div class="contact--left">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/randi_holligen.jpg" alt="Randi Holligen">
			<h3>Randi Holligen</h3>
			<p>Notar Molde</p>
			<p>Daglig&nbsp;leder / Eiendomsmegler&nbsp;MNEF</p>
			<p>Mobil: <a href="tel:481 37 921">481 37 921</a><br/><a href="mailto:randi@notar.no">randi@notar.no</a></p>
		</div>

		<div class="contact--right">
			<form action="#">
        <div class="formitem">
          <input required placeholder="ditt navn (obligatorisk)" type="text" id="name" name="name">
        </div>
        <div class="formitem">
          <input required placeholder="e-post (obligatorisk)" type="email" id="email" name="email">
        </div>
        <div class="formitem">
          <input placeholder="telefonnummer" type="tel" id="tel" name="tel">
        </div>
        <!-- <div class="formitem">
          <select name="subject" id="subject" name="subject">
            <option value="Általános érdeklődése">Általános érdeklődés</option>
            <option value="Lorem ipsum">Általános érdeklődées</option>
            <option value="Dolor sit amet">Dolor sit amet</option>
          </select>
        </div> -->
        <div class="formitem">
          <textarea name="message" placeholder="melding" id="message" cols="30" rows="6"></textarea>
        </div>
	      <div class="formactions">
	        <input type="submit" class="btn" value="Send">
	      </div>
    	</form>
		</div>
	</div>
</aside>
<?php endif; ?>
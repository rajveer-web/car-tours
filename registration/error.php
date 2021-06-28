<?php  if (count($errors) > 0) : ?><!--error will count-->
  <div class="error">
  <!-- foreach loop-->
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
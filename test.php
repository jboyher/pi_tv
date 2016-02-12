for ($i = 1; $i < count($options); $i++) {
?>
<input type="radio" name="<?php echo $i; ?>"><?php echo $options[$i]?><br>
<?php
}

<?php
/*
 * Error checking here
 */

$error = false;
if (empty($_GET['error']) || !is_numeric($_GET['error'])) return false;

$error = (int)$_GET['error'];
if (!$error) return false;

$errors = array(
	Thx_Admin::ERROR_PARAM => __('Beim Verarbeiten Deiner Anfrage ist ein Fehler aufgetreten, weil ein Parameter ungültig ist oder fehlt.', UpfrontThemeExporter::DOMAIN),
	Thx_Admin::ERROR_PERMISSION => __('Du bist nicht berechtigt, dies zu tun.', UpfrontThemeExporter::DOMAIN),
	Thx_Admin::ERROR_DEFAULT => __('Ups, da scheint etwas schief gelaufen zu sein.', UpfrontThemeExporter::DOMAIN),
);
if (!in_array($error, array_keys($errors))) return false;

$error = $errors[$error];
if (empty($error)) return false;

?>
<div class="error">
	<p><?php echo esc_html($error); ?></p>
</div>

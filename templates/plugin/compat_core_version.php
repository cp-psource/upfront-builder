<?php
	$current_version = class_exists('Upfront_Compat') && is_callable(array('Upfront_Compat', 'get_upfront_core_version'))
		? sprintf(__('Deine aktuelle UpFront Framework ist v%s.', UpfrontThemeExporter::DOMAIN), Upfront_Compat::get_upfront_core_version())
		: __('Deine aktuelle Version ist zu alt.', UpfrontThemeExporter::DOMAIN)
	;
?>
<div class="notice notice-error">
	<p>
		<?php echo wp_kses(
		sprintf(
			__('Du benötigst UpFront Framework in Version v1.4 oder höher, damit UpFront Builder ordnungsgemäß funktioniert. <a href="%s" target="_blank">Hol es Dir hier.</a>', UpfrontThemeExporter::DOMAIN),
			'https://cp-psource.github.io/upfront/'
		), array(
			'a' => array(
				'href' => array(),
				'target' => array(),
			),
		)
		); ?>
		<br />
		<?php echo esc_html($current_version); ?>
	</p>
</div>

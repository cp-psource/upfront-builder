<?php
	$current_version = class_exists('Upfront_Compat') && is_callable(array('Upfront_Compat', 'get_upfront_core_version'))
		? sprintf(__('Deine aktuelle Version ist bei v%s.', UpfrontThemeExporter::DOMAIN), Upfront_Compat::get_upfront_core_version())
		: __('Deine aktuelle Version ist zu alt.', UpfrontThemeExporter::DOMAIN)
	;
?>
<div class="notice notice-error">
	<p>
		<?php echo wp_kses(
		sprintf(
			__('Du benötigst UpFront Core in Version v1.4 oder höher, damit UpFront Builder ordnungsgemäß funktioniert. <a href="%s" target="_blank">Hol es dir hier.</a>', UpfrontThemeExporter::DOMAIN),
			'https://upfront.n3rds.work/upfront-framework/'
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

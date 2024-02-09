<div class="notice notice-error is-dismissible">
	<p>
		<?php esc_html_e('Leider scheint auf dieser Seite kein UpFront-Framework installiert zu sein.', UpfrontThemeExporter::DOMAIN); ?>
		<?php esc_html_e('Wir brauchen das, damit das Upfront Builder-Plug-in funktioniert.', UpfrontThemeExporter::DOMAIN); ?>
		<?php echo wp_kses(
			sprintf(
				__('<a href="%s" target="_blank">Hol es Dir hier.</a>', UpfrontThemeExporter::DOMAIN),
				'https://upfront.n3rds.work/upfront-framework/'
			), array(
				'a' => array(
					'href' => array(),
					'target' => array(),
				),
			)
		); ?>
	</p>
</div>

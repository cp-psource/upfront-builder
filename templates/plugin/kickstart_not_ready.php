<div class="notice notice-error is-dismissible">
	<p>
		<?php esc_html_e('Leider scheint auf dieser Seite kein Upfront-Core installiert zu sein.', UpfrontThemeExporter::DOMAIN); ?>
		<?php esc_html_e('Wir brauchen das, damit das Upfront Builder-Plug-in funktioniert.', UpfrontThemeExporter::DOMAIN); ?>
		<?php echo wp_kses(
			sprintf(
				__('<a href="%s" target="_blank">Hol es dir hier.</a>', UpfrontThemeExporter::DOMAIN),
				'https://n3rds.work/shop/artikel/category/piestingtal-source-themes/'
			), array(
				'a' => array(
					'href' => array(),
					'target' => array(),
				),
			)
		); ?>
	</p>
</div>

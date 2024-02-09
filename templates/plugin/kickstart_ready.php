<div class="notice notice-info is-dismissible uf-thx-kickstart">
	<p>
		<?php esc_html_e('Auf Deiner Webseite scheint das UpFront-Theme nicht aktiv zu sein, das für die Verwendung des UpFront Builder-Plug-ins erforderlich ist.', UpfrontThemeExporter::DOMAIN); ?>
	</p>
	<p>
		<?php esc_html_e('Wir können das für Dich beheben:', UpfrontThemeExporter::DOMAIN); ?>
		<button type="button" class="button button-primary" id="upfront-kickstart-start_building">
			<?php esc_html_e('Erstelle ein UpFront-Theme', UpfrontThemeExporter::DOMAIN); ?>
		</button>
		<button type="button" class="button" id="upfront-kickstart-go_away">
			<?php esc_html_e('Diese Mitteilung nicht mehr anzeigen', UpfrontThemeExporter::DOMAIN); ?>
		</button>
	</p>
	<p class="upfront-kickstart-out" style="display:none"></p>
</div>
<style>
.notice .upfront-kickstart-out.error { color: #c00; }
.notice .upfront-kickstart-out.success { color: #0c0; }
</style>

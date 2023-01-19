<?php

class Thx_L10n {

	private static $_data = array();

	private function __construct () {
		$this->_populate_strings();
	}

	public static function serve () {
		$me = new self;
		$me->_add_hooks();
	}

	private function _add_hooks () {
		add_filter('upfront_l10n', array($this, 'add_l10n_strings'));
	}

	public function add_l10n_strings ($strings) {
		if (!empty($strings['exporter'])) return $strings;
		$strings['exporter'] = self::get();
		return $strings;
	}

	/**
	 * Main data getter.
	 * Can return a prepared string, a key or an array of strings, depending on the parameter.
	 *
	 * @param bool $key Optional key parameter. If passed a true-ish value, a string is returned. Otherwise, an array
	 *
	 * @return mixed String if `$key` parameter is passed, array otherwise
	 */
	public static function get ($key=false) {
		return !empty($key)
			? (!empty(self::$_data[$key]) ? self::$_data[$key] : $key)
			: self::$_data
		;
	}

	/**
	 * Populates internal string storage.
	 */
	private function _populate_strings () {
		self::$_data = array(
			'plugin_name' => __('UpFront-Builder', UpfrontThemeExporter::DOMAIN),
			// Inherited from Upfront core l10n server
			'long_loading_notice' => __('Das Laden des Upfront Builders kann eine Weile dauern (insbesondere beim ersten Mal), bitte warte einen Moment, es geht sofort los :)', UpfrontThemeExporter::DOMAIN),
			'page_layout_name' => __('Seitenname (leer lassen für single-page.php)', UpfrontThemeExporter::DOMAIN),
			'start_fresh' => __('Frisch starten', UpfrontThemeExporter::DOMAIN),
			'start_from_existing' => __('Beginne mit vorhandenen Layout', UpfrontThemeExporter::DOMAIN),
			'create_new_layout' => __('Neues Layout erstellen', UpfrontThemeExporter::DOMAIN),
			'edit_saved_layout' => __('Gespeichertes Layout bearbeiten', UpfrontThemeExporter::DOMAIN),
			'export_str' => __('Theme speichern', UpfrontThemeExporter::DOMAIN),
			'create_responsive_layouts' => __('Responsiv', UpfrontThemeExporter::DOMAIN),
			'edit_grid' => __('Raster bearbeiten', UpfrontThemeExporter::DOMAIN),

			// modal.js
			'manage_layouts' => __('Layouts verwalten', UpfrontThemeExporter::DOMAIN),
			'create_layout' => __('Layout erstellen', UpfrontThemeExporter::DOMAIN),
			'edit_layout' => __('Layout bearbeiten', UpfrontThemeExporter::DOMAIN),
			'edit_existing_layout' => __('Vorhandenes Layout bearbeiten', UpfrontThemeExporter::DOMAIN),
			'loading' => __('Wird geladen...', UpfrontThemeExporter::DOMAIN),
			'activate_theme' => __('Theme aktivieren', UpfrontThemeExporter::DOMAIN),
			'activate_message' => __('Möchtest Du aktivieren', UpfrontThemeExporter::DOMAIN),
			'theme' => __('Theme', UpfrontThemeExporter::DOMAIN),
			'yes' => __('Ja', UpfrontThemeExporter::DOMAIN),
			'no' => __('Nein', UpfrontThemeExporter::DOMAIN),

			// sidebar.js
			'current_layout' => __('Aktuelles Layout: <b>%s</b>', UpfrontThemeExporter::DOMAIN),
			'layouts' => __('Layouts', UpfrontThemeExporter::DOMAIN),
			'media' => __('Medien', UpfrontThemeExporter::DOMAIN),
			'theme_images' => __('Medium', UpfrontThemeExporter::DOMAIN),
			'theme_sprites' => __('UI / Sprites', UpfrontThemeExporter::DOMAIN),
			'my_themes' => __('Meine Themes', UpfrontThemeExporter::DOMAIN),
			'themes' => __('Themes', UpfrontThemeExporter::DOMAIN),

			// post_image.js
			'image_variant' => __('Bildvariante', UpfrontThemeExporter::DOMAIN),
			'edit_content_style' => __('Inhaltslayout bearbeiten', UpfrontThemeExporter::DOMAIN),
			'edit_image_insert' => __('Bild einfügen bearbeiten', UpfrontThemeExporter::DOMAIN),
			'variant_name' => __('Benennediese Einfügung:', UpfrontThemeExporter::DOMAIN),
			'variant_css' => __('CSS bearbeiten', UpfrontThemeExporter::DOMAIN),
			'variant_wrap_label' => __('Wrapper', UpfrontThemeExporter::DOMAIN),
			'variant_wrap_info' => __('Wrapper', UpfrontThemeExporter::DOMAIN),
			'variant_image_label' => __('Bild', UpfrontThemeExporter::DOMAIN),
			'variant_image_info' => __('Bild', UpfrontThemeExporter::DOMAIN),
			'variant_caption_label' => __('Bildbeschriftung', UpfrontThemeExporter::DOMAIN),
			'variant_caption_info' => __('Bildbeschriftung', UpfrontThemeExporter::DOMAIN),

			// mode context dialog (application.js)
			'builder_mode_context' => __('<p>Dies ist die UpFront-Builder-Oberfläche, hier erstellst/bearbeitest Du ein verteilbares Design.</p><p>Das bedeutet, dass alle Änderungen, die Du über diese Oberfläche vornimmst, in Deinem Designordner gespeichert werden.</p>', UpfrontThemeExporter::DOMAIN),
			'editor_mode_context' => __('<p>Dies ist die UpFront-Editor-Oberfläche, hier nimmst Du standortspezifische Anpassungen vor.</p><p>Das bedeutet, dass alle Änderungen, die Du über diese Oberfläche vornimmst, spezifisch für Deine Webseite sind und alle mit Builder vorgenommenen Änderungen außer Kraft setzen.</p>', UpfrontThemeExporter::DOMAIN),
			'user_agrees' => __('Ich habe verstanden', UpfrontThemeExporter::DOMAIN),
			'dont_show_again' => __('Nicht mehr zeigen', UpfrontThemeExporter::DOMAIN),

		);
	}
}
Thx_L10n::serve();

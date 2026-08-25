<?php
/**
 * Plugin Name: Oddpost Playground Bootstrap
 * Description: Opens Oddpost automatically inside the OpenStation Playground demo.
 * Version: 1.1.0
 *
 * @package Oddpost_Playground
 */

defined( 'ABSPATH' ) || exit;

add_action(
	'admin_enqueue_scripts',
	static function () {
		if ( ! wp_script_is( 'openstation', 'registered' ) ) {
			return;
		}

		$script = <<<'JS'
(function () {
	'use strict';

	var attempts = 0;
	var maxAttempts = 80;
	var openedKey = 'oddpost-playground.opened.v3';

	function desktopApi() {
		if (!window.wp) {
			return null;
		}

		if (window.wp.desktop && typeof window.wp.desktop.openWindow === 'function') {
			return window.wp.desktop;
		}

		return window.wp.os || window.wp.desktop || null;
	}

	function openOddpost() {
		var os = desktopApi();

		if (!os || typeof os.openWindow !== 'function') {
			attempts += 1;
			if (attempts < maxAttempts) {
				window.setTimeout(openOddpost, 100);
			}
			return;
		}

		try {
			if (window.sessionStorage.getItem(openedKey)) {
				return;
			}
			window.sessionStorage.setItem(openedKey, '1');
		} catch (error) {
			// Opening once per page is still safe when storage is unavailable.
		}

		os.openWindow('oddpost', { source: 'oddpost-playground' });
	}

	function scheduleOpen() {
		var os = desktopApi();
		var whenReady = os && (os.whenReady || os.ready);

		if (typeof whenReady === 'function') {
			whenReady(function () {
				window.setTimeout(openOddpost, 150);
			});
			return;
		}

		openOddpost();
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', scheduleOpen, { once: true });
	} else {
		scheduleOpen();
	}
}());
JS;

		wp_add_inline_script( 'openstation', $script, 'after' );
	},
	100
);

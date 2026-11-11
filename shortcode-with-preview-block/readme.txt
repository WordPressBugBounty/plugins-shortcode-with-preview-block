=== Shortcode Preview Block ===
Contributors: ronakganatra
Tags: gutenberg, block, blocks, shortcode, preview
Requires at least: 6.3
Tested up to: 7.1
Requires PHP: 7.2
Stable tag: 1.1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Shows a preview of any shortcode in the editor. It renders the shortcode on the editor side so you do not need to view the front end to see the result.

== Description ==

Normal WordPress blocks do not show how a shortcode will look on the front end. This block renders the shortcode in the editor so you can check the result without opening the front end.

= How to use =

1. Add the **Shortcode with Preview** block.
2. Enter a shortcode, for example `[gallery]`.
3. The preview below the field shows the rendered output.

== Installation ==

1. Upload the plugin files to `/wp-content/plugins/shortcode-with-preview-block`, or install it through the Plugins screen.
2. Activate the plugin through the Plugins screen.
3. Edit a post or page and insert the Shortcode with Preview block.

== Frequently Asked Questions ==

= Does this replace the core Shortcode block? =

No. Use this block when you want to see the rendered shortcode while editing.

= Which WordPress version does this require? =

WordPress 6.3 or newer, and PHP 7.2 or newer. It is tested with WordPress 7.1.

== Changelog ==

= 1.1.0 =
* Tested with WordPress 7.1.
* Register the block from block.json as apiVersion 3 so it loads in the current block editor.
* Load the editor script with the block editor and server-side render dependencies it uses.
* Keep sidebar shortcode text as plain text so markup is not saved into the shortcode.

= 1.0.0 =
* Initial release.

<?php

require __DIR__ . "../../cookie-config.php";

$scn_head = get_option("scn_head");
$scn_footer = get_option("scn_footer");
$scn_config = get_option("scn_config");

if ( $scn_config == "" ) {
    $scn_config = $cookie_config;
}

?>
<div class="wrap">
	<h1>Nastavení SIT Cookie notice</h1>
	<form method="post" action="options.php">
		<?php
		settings_fields("scn_options");
		do_settings_sections("scn_options");
		?>
		<table class="form-table">
            <tr valign="top">
                <td scope="row">
                    <b>Kódy do hlavičky</b>
                    <p>Atributy: type="text/plain" data-cookiecategory="analytics"</p>
                </td>
                <td>
                    <textarea id="js-code-editor-scn-head" rows="5" name="scn_head" class="widefat textarea"><?php echo wp_unslash( $scn_head ); ?></textarea>
                </td>
            </tr>
            <tr valign="top">
                <td scope="row">
                    <b>Kódy do patičky</b>
                    <p>Atributy: type="text/plain" data-cookiecategory="analytics"</p>
                </td>
                <td>
                    <textarea id="js-code-editor-scn-footer" rows="5" name="scn_footer" class="widefat textarea"><?php echo wp_unslash(  $scn_footer ); ?></textarea>
                </td>
            </tr>
            <tr valign="top">
                <td scope="row">
                    <b>Nastavení</b>
                    <p>Pokud se smaže, doplní se základní nastavení!</p>
                </td>
                <td>
                    <textarea id="js-code-editor-scn-config" rows="5" name="scn_config" class="widefat textarea"><?php echo wp_unslash( $scn_config ); ?></textarea>
                </td>
            </tr>
		</table>
		<?php
		submit_button();
		?>
	</form>
</div>

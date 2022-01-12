<?php

$scn_head = get_option("scn_head");
$scn_footer = get_option("scn_footer");

$scn_config_ga = get_option("scn_config_ga");
$scn_config_marketing = get_option("scn_config_marketing");
$scn_config_url = get_option("scn_config_url");

if ( $scn_config_url != "" ) {
    $scn_config_marketing = false;
    $scn_config_ga = false;
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
            <tr>
                <th>
                    <label style="margin-bottom: 10px;">Kódy do hlavičky</label>
                    <p style="font-weight: normal;">Atributy: type="text/plain" data-cookiecategory="analytics"</p>
                </th>
                <td>
                    <textarea id="js-code-editor-scn-head" rows="5" name="scn_head" class="widefat textarea"><?php echo wp_unslash( $scn_head ); ?></textarea>
                </td>
            </tr>
            <tr>
                <th>
                    <label style="margin-bottom: 10px;">Kódy do patičky</label>
                    <p style="font-weight: normal;">Atributy: type="text/plain" data-cookiecategory="marketing"</p>
                </th>
                <td>
                    <textarea id="js-code-editor-scn-footer" rows="5" name="scn_footer" class="widefat textarea"><?php echo wp_unslash(  $scn_footer ); ?></textarea>
                </td>
            </tr>
            <tr>
                <th>
                    <label style="margin-bottom: 10px;">Soubor s nastavením</label>
                </th>
                <td>
                    <p>
                        <input type="checkbox" name="scn_config_ga" id="scn_config_ga"<?php echo ( $scn_config_ga ) ? " checked" : ""; ?>>
                        <label for="scn_config_ga">
                            Google Analytics
                        </label>
                    </p>
                    <p style="margin-bottom: 20px;">
                        <input type="checkbox" name="scn_config_marketing" id="scn_config_marketing"<?php echo ( $scn_config_marketing ) ? " checked" : ""; ?>>
                        <label for="scn_config_marketing">
                            Marketing
                        </label>
                    </p>
                    <p>
                        <label for="scn_config_url">Vlastní cesta k souboru s nastavením:</label><br>
                        <input type="text" name="scn_config_url" id="scn_config_url" value="<?php echo $scn_config_url; ?>" class="regular-text">
                    </p>
                </td>
            </tr>
        </table>
        <?php
        submit_button();
        ?>
    </form>
</div>

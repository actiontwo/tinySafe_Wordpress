<?php
// create custom plugin settings menu
add_action('admin_menu', 'director_create_menu');

function director_create_menu() {
//create new submenu
    add_submenu_page('themes.php', 'Theme Options', 'Theme Options', 'administrator', __FILE__, 'director_settings_page');

//call register settings function
    add_action('admin_init', 'director_register_settings');
}

function director_register_settings() {
//register our settings
    
    $arg = array(
        'Logo' => 'logo',
        'Facebook' => 'facebook',
        'Twitter' => 'twitter',
        'Youtube' => 'youtube',
        'Copyright' => 'copyright',
        'sloganBottom' =>'sloganBottom'
    );
    
    foreach ($arg as $items => $value) {
        register_setting('settings-group', $value);
    }
}

function director_settings_page() {
    ?> 
    <style> 
        table input,table textarea{
            width: 300px;
        }
    </style>
    <div class="wrap">
        <h2>Theme Settings</h2>
        <form id="landingOptions" method="post" action="options.php">
    <?php settings_fields('settings-group'); ?>
            <table class="form-table">
                <tr valign = "top">
                    <th scope = "row">Logo:</th>
                    <td>
                        <input type = "text" name = "logo" value = "<?php print get_option('logo'); ?>" placeholder='uploads/sites/4/2015/01/logo1.png' />
                        <div style = "padding:10px; background:#dedede; display:inline-block">
                            <img src = "<?php print get_home_url()."/wp-content/".get_option('logo'); ?>" />
                        </div>
                        <br/>
                        *Upload using the Media Uploader and paste the URL
                        here.
                    </td>
                </tr>
                <tr valign = "top">
                    <th scope = "row">Facebook Link:</th>
                    <td>
                        <input type = "text" name = "facebook"
                               value = "<?php print get_option('facebook'); ?>" placeholder="https://www.facebook.com/" />
                    </td>
                </tr>
                <tr valign = "top">
                    <th scope = "row">Twitter Link:</th>
                    <td>
                        <input type = "text" name = "twitter" value = "<?php print get_option('twitter'); ?>" placeholder="https://www.twitter.com/" />
                    </td>
                </tr>
                 <tr valign = "top">
                    <th scope = "row">Youtube Link:</th>
                    <td>
                        <input type = "text" name = "youtube" value = "<?php print get_option('youtube'); ?>" placeholder="https://www.youtube.com/" />
                    </td>
                </tr>
                <tr valign = "top">
                    <th scope = "row">Copyright Text:</th>
                    <td>
                        <input style="width:100%" type = "text" name = "copyright" value = "<?php print get_option('copyright'); ?>" placeholder="© 2014 TinySafe.com <span>All rights reserved.</span>" />
                    </td>
                </tr>
                <tr valign = "top">
                    <th scope = "row">Slogan Bottom:</th>
                    <td>
                        <input style="width:100%" type = "text" name = "sloganBottom" value = "<?php print get_option('sloganBottom'); ?>" placeholder="With <span class='text_blue'>TinySafe</span> you have one less thing to worry about."/>
                    </td>
                </tr>
                       
            </table>
            <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
            </p>
        </form>
    </div>
<?php } ?>


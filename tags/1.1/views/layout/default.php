<form method="post" action="<?php admin_url( 'options-general.php?page='.OPICDS_Page_SLUG ); ?>">
<?php
	echo wp_nonce_field( "edc-settings-page" ); 
	
	$DSHtmlHelper = new html_ds_helper();
	$DSHtmlHelper->opic_admin_tabs();
	$DSHtmlHelper->MainContent($mainViewFile);
?>
   <p class="submit" style="clear: both;">
      <input type="submit" name="Submit"  class="button-primary" value="<?php echo $DSHtmlHelper->getLang('btn-updatesetting') ?>" />
      <input type="hidden" name="ilc-settings-submit" value="Y" />
   </p>
</form>
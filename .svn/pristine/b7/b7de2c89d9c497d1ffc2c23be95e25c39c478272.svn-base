<?php
class DawahskillsMaincontroller extends app_ds_controlers {

	function __construct() {
		parent::__construct();
		add_action('admin_menu', array($this, 'ds_admin_menu'));
	}

	function ds_admin_menu() {
		add_options_page('Islamic Content Archive For Dawah Skills', 'Islamic Content Archive For Dawah Skills', 'manage_options',OPICDS_Page_SLUG, array($this, 'trsettings_page'));
	}

	function trsettings_page() {
		if(isset($_GET['tab'])){
			$tab = strip_tags($_GET['tab']);
		}else{
			$tab = '';
		}
		switch ($tab) {
			case 'options':
				$this->loadController('options');
				break;
			case 'language':
				$this->loadController('language');
				break;
			case 'categories':
				echo $this->loadController('categories');
				break;
			default:
				$this->loadController('language');
				break;
		}
	}

}
new DawahskillsMaincontroller();
?>
<?php
class language_ds_controller extends app_ds_controlers {
	function __construct() {
		parent::__construct();
		$this->loadView('language');
	}
}

?>
<?

class Shop extends Extension {
	
	function get_item() {
		exit('UUUU');
	}
	
	function Shop() {
		parent::Extension();
		$this->init('shop');//初期化
	}
}

?>
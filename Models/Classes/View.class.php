<?php 

class View {
	public function header() {
		global $Cart;
		global $Wishlist;
		include_once(BASE_DIR . "/Views/header.php");
	} 
	public function footer() {
		include_once(BASE_DIR . "/Views/footer.php");
	} 
}
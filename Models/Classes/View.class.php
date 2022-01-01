<?php 

class View {
	public function header() {
		global $Cart;
		global $Wishlist;
		global $Category;
		global $category;
		include_once(BASE_DIR . "/Views/header.php");
	} 
	public function footer() {
		include_once(BASE_DIR . "/Views/footer.php");
	} 
}
<?php
	class controller_shop {
	    function __construct() {
	        $_SESSION['module'] = "shop";
	    }


		function maps(){
			$json = loadModel(MODEL_SHOP, "shop_model", "maps");
			echo json_encode($json);
		}

		function normalshop(){
			$json = loadModel(MODEL_SHOP, "shop_model", "normalshop");
			echo json_encode($json);
		}
		
		function fromcarousel(){
			$json = loadModel(MODEL_SHOP, "shop_model", "fromcarousel");
			echo json_encode($json);
		}

		function fromcat(){
			$json = loadModel(MODEL_SHOP, "shop_model", "fromcat");
			echo json_encode($json);
		}

		function searchbar(){
			$json = loadModel(MODEL_SHOP, "shop_model", "searchbar");
			echo json_encode($json);
		}

		function filter(){
			$json = loadModel(MODEL_SHOP, "shop_model", "filter");
			echo json_encode($json);
		}

	}
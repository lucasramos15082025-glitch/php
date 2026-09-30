<?php
	class conversor{
		public static $fatorConversao = 0.621371;

		public static function converterKmParaMilhas($km){
			return $km * conversor::$fatorConversao;
			}

	}



printf("%.f km é equivalente a %.2f milhas", 100, conversor::converterKmParaMilhas(100));
?>
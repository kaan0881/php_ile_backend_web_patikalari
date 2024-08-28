<?php
function ucgen($toplamSatir) {
	//çizgi string
	$cizgi = "";
	
	//çizilecek karakterin sayısı
	$karakter = 1;
	
	//çizilecek satır sayısı
	$satir = 0;

    while ( $satir <= $toplamSatir) {
    	
    	for($i=1; $i <= $karakter; $i++) {
    		
    		$cizgi .= '<span style="margin: 0 1px 0 1px; font-size: 25px; font-weight:700">o</span>';
    	}
    	
    	$cizgi .= "<br>";
    	
    	$karakter += 1;
    	
    	$satir++;
    }

    return $cizgi;
}

echo ucgen(15);
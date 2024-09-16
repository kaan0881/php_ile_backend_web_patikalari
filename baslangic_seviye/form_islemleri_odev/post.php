<?php
function uceBolunen($sayi) {
    
    /*
     * Kural : girilen sayının rakamları toplamı 3 bölümünden kalan 0 ise 3' bölünür
    */
    
    //girilen sayının rakamları parçala
    $rakamlar_toplami = str_split($sayi);

    //parçalanan rakamları topla
    $rakamlar_toplami = array_sum($rakamlar_toplami);

    // rakamlar toplamı 3 bölümünü kontrol et
    if ($rakamlar_toplami % 3 == 0) {
        return "$sayi sayısı 3'e bölünebilir.";
    } else {
        //rakamlar toplamı 3'e bölünmüyorsa bölümden kalan
        $kalan = $rakamlar_toplami % 3;

        //en yakın bölüneni bulma;
        $en_yakin_bolunen = $sayi + (3 - $kalan);
        return "$sayi sayısı 3'e bölünemez. En yakın büyük bölünebilen sayı: $en_yakin_bolunen";
    }
}


//post ile veri kontrolü
if(isset($_POST['gonder'])) {

    //post ile veri kontrolü
    if(trim($_POST['sayi'] == '')) {
        echo '<div style="text-align: center;">Sayı alanı boş. Lütfen bir sayı yazın! <br> <b><a href="index.php">Tekrar Hesapla</a></div>';
    } elseif(!is_numeric($_POST['sayi'])) {
        echo '<div style="text-align: center;">Sayı alanına girilen değer sayı olmalıdır. Lütfen bir sayı yazın! <br> <b><a href="index.php">Tekrar Hesapla</a></div>';
    } else {
        echo '<div style="text-align: center;">' .uceBolunen($_POST['sayi']). '<br> <b><a href="index.php">Tekrar Hesapla</a></div>';
    };


} else {
    header("location:index.php");
}

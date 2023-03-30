<?php
//cara penulisan array
$ar_buah = array('pisang','mangga','jeruk');

//array indexed
$buah = ['alpukat','jeruk','mangga','pisang'];
//cara manggil array indexed
//echo $buah[1];

//cetak jumlah buah
echo '<br>Jumlah buah ' .count($buah);

//cetak seluruh buah
echo "<ol>";
foreach($buah as $fruit){
    echo "<li>$fruit</li>";
}
echo "<ol>";

// ========================
$buah[] = "durian";

//ubah buah index ke 1
$buah[1] = "apel";

//cetak seluruh buah
echo "<ol>";
foreach($buah as $buas){
    echo "<li>$buas</li>";
}
echo "<ol>";


//array assosiatif
$buah = ["a"=>'alpukat',"j"=>'jeruk',"m"=>'mangga'];

//cara mencetak array assosiatif dengan foreach
//echo "<ol>";
foreach ($buah as $fruit => $k ){
    //echo "<li>$fruit - $k  </li>";
}
//echo "</ol>"

?>
<?php
function cekkelulusan($nilai) {
    if ($nilai >= 75) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}

echo "Status: " . cekkelulusan(80); 
?>
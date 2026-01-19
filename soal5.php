<?php
function hitungtotalnilai($nilai) {
    $total = 0;
    foreach ($nilai as $angka) {
        $total += $angka;
    }
    return $total;
}

$daftar_nilai = [10, 20, 30, 40];
echo "Total Nilai: " . hitungtotalnilai($daftar_nilai);
?>
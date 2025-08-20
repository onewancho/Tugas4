<?php

// rentang nilai 85 - 100  peringkat huruf A
// rentang nilai 75 - 84  peringkat huruf B
// rentang nilai 60 - 74  peringkat huruf C
// rentang nilai 50 - 59  peringkat huruf D
// rentang nilai 0 - 49   peringkat huruf E

$nilai = 75; // contoh nilai

if ($nilai >= 85 && $nilai <= 100) {
    $peringkat = "A";
} elseif ($nilai >= 75 && $nilai <= 84) {
    $peringkat = "B";
} elseif ($nilai >= 60 && $nilai <= 74) {
    $peringkat = "C";
} elseif ($nilai >= 50 && $nilai <= 59) {
    $peringkat = "D";
} else {
    $peringkat = "E";
}

echo "Nilai: $nilai, Peringkat: $peringkat";


// FUNGSI

function getGrade($nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        return "A";
    } elseif ($nilai >= 75 && $nilai <= 84) {
        return "B";
    } elseif ($nilai >= 60 && $nilai <= 74) {
        return "C";
    } elseif ($nilai >= 50 && $nilai <= 59) {
        return "D";
    } else {
        return "E";
    }
}

$nilai = getGrade(20);
echo "Gradenya adalah " . $nilai;

$nilai = getGrade(50);
echo "Gradenya adalah " . $nilai;
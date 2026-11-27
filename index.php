<?php

declare(strict_types=1);

require_once __DIR__ . '/Pegawai.php';
require_once __DIR__ . '/Guru.php';
require_once __DIR__ . '/Staf.php';
require_once __DIR__ . '/Honorer.php';
require_once __DIR__ . '/Sekolah.php';

/*
 * Catatan error jika method final info() di-override pada class anak:
 *
 * class GuruCobaOverride extends Guru {
 *     public function info(): string {
 *         return 'Override info';
 *     }
 * }
 * // Fatal error: Cannot override final method Pegawai::info()
 */

$sekolah = new Sekolah('SDN 2 Ketapang');

$guru = new Guru('Novy Astoty', 4000000, 24);        // 4.000.000 + (24 x 50.000) = 5.200.000
$staf = new Staf('Rina Kartika', 3500000, 500000);   // 3.500.000 + 500.000 = 4.000.000
$honorer = new Honorer('Dedi Pratama', 25000, 80);    // 25.000 x 80 = 2.000.000

$sekolah->tambahPegawai($guru);
$sekolah->tambahPegawai($staf);
$sekolah->tambahPegawai($honorer);

echo "=== Daftar Pegawai {$sekolah->namaSekolah} ===\n";
foreach ($sekolah->getDaftarPegawai() as $pegawai) {
    echo $pegawai->info() . "\n";
}

echo "\nTotal Gaji Seluruh Pegawai: " . number_format($sekolah->totalGaji(), 0, ',', '.') . "\n";

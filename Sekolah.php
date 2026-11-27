<?php

declare(strict_types=1);

require_once __DIR__ . '/Pegawai.php';

class Sekolah
{
    /** @var array<int, Pegawai> */
    private array $daftarPegawai = [];

    public function __construct(
        public string $namaSekolah,
    ) {
    }

    public function tambahPegawai(Pegawai $p): void
    {
        $this->daftarPegawai[] = $p;
    }

    /** @return array<int, Pegawai> */
    public function getDaftarPegawai(): array
    {
        return $this->daftarPegawai;
    }

    public function totalGaji(): float
    {
        $total = 0.0;

        foreach ($this->daftarPegawai as $pegawai) {
            $total += $pegawai->hitungGaji();
        }

        return $total;
    }
}

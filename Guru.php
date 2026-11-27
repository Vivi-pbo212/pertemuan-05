<?php

declare(strict_types=1);

require_once __DIR__ . '/Pegawai.php';

class Guru extends Pegawai
{
    public const TARIF_PER_JAM = 50000.0;

    public function __construct(
        string $nama,
        float $gajiPokok,
        public int $jamMengajar,
    ) {
        parent::__construct($nama, $gajiPokok);
    }

    public function hitungGaji(): float
    {
        return $this->gajiPokok + ($this->jamMengajar * self::TARIF_PER_JAM);
    }
}

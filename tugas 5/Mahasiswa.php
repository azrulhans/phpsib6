<?php
class Mahasiswa
{
    public $nim;
    public $nama;
    public $kuliah;
    public $matkul;
    public $nilai;


    public function __construct($nim, $nama, $kuliah, $matkul, $nilai)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->kuliah = $kuliah;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    public function getstatus()
    {
        if ($this->nilai >= 65) {
            return 'Lulus';
        } else {
            return 'Tidak Lulus';
        }
    }

    public function getgrade()
    {
        if ($this->nilai >= 85) {
            return "A";
        } elseif ($this->nilai >= 70) {
            return "B";
        } elseif ($this->nilai >= 60) {
            return "C";
        } elseif ($this->nilai >= 50) {
            return "D";
        } elseif ($this->nilai >= 10) {
            return "E";
        } else {
            return 0;
        }
    }

    public function getprediket()
    {
        if ($this->nilai >= 85) {
            return 'Sangat Baik';
        } elseif ($this->nilai >= 75) {
            return 'Baik';
        } elseif ($this->nilai >= 65) {
            return 'Cukup';
        } elseif ($this->nilai >= 55) {
            return 'Kurang';
        } else {
            return 'Sangat Kurang';
        }
    }
}

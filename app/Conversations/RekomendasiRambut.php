<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class RekomendasiRambut extends Conversation
{
    protected $option;
    protected $bentukWajah;
    protected $tipeRambut;

    public function run()
    {
        $this->askInitialOption();
    }

    public function askInitialOption()
    {
        $this->ask("Pilih Opsi 1 - 3 :\n1. Rekomendasi Tren Rambut Berdasarkan Bentuk Wajah dan Tipe Rambut\n2. Perawatan Rambut\n3. Tren Rambut", function(Answer $answer) {
            $this->option = $answer->getText();

            if ($this->option == '1') {
                $this->askbentukWajah();
            } elseif ($this->option == '2') {
                $this->provideHairCareLink();
            } elseif ($this->option == '3') {
                $this->TrenRambut();
            } else {
                $this->say("Pilihan tidak valid mohon pilih angka 1 - 3. Silakan coba lagi, Jika ada yang ingin ditanyakan selain itu bisa di lihat pada <a href='http://127.0.0.1:8000/faq'>FAQ</a>");
                $this->askInitialOption();
            }
        });
    }

    public function askbentukWajah()
    {
        $this->ask("Pilih Bentuk Wajah:\n1. Oval\n2. Segitiga\n3. Bulat\n4. Kotak", function(Answer $answer) {
            $this->bentukWajah = strtolower($answer->getText());
    
            $validInputs = ['1', '2', '3', '4', 'oval', 'segitiga', 'bulat', 'kotak'];
            if (!in_array($this->bentukWajah, $validInputs)) {
                $this->say("Input tidak valid. Silakan pilih angka 1 - 4 atau nama bentuk wajah yang benar:\n1. Oval\n2. Segitiga\n3. Bulat\n4. Kotak");
                return $this->repeat();
            }
    
            // Konversi angka ke kata untuk konsistensi
            if (is_numeric($this->bentukWajah)) {
                switch ($this->bentukWajah) {
                    case '1':
                        $this->bentukWajah = 'oval';
                        break;
                    case '2':
                        $this->bentukWajah = 'segitiga';
                        break;
                    case '3':
                        $this->bentukWajah = 'bulat';
                        break;
                    case '4':
                        $this->bentukWajah = 'kotak';
                        break;
                }
            }
    
            $this->asktipeRambut();
        });
    }

    public function asktipeRambut()
    {
        $this->ask("Pilih Tipe Rambut:\n1. Lurus\n2. Bergelombang\n3. Ikal\n4. Keriting", function(Answer $answer) {
            $this->tipeRambut = strtolower($answer->getText());

            $validInputs = ['1', '2', '3', '4', 'lurus', 'bergelombang', 'ikal', 'keriting'];
            if (!in_array($this->tipeRambut, $validInputs)) {
                $this->say("Input tidak valid. Silakan pilih angka 1 - 4 atau nama tipe rambut yang benar:\n1. Lurus\n2. Bergelombang\n3. Ikal\n4. Keriting");
                return $this->repeat();
            }
    
            // Konversi angka ke kata untuk konsistensi
            if (is_numeric($this->tipeRambut)) {
                switch ($this->tipeRambut) {
                    case '1':
                        $this->tipeRambut = 'lurus';
                        break;
                    case '2':
                        $this->tipeRambut = 'bergelombang';
                        break;
                    case '3':
                        $this->tipeRambut = 'ikal';
                        break;
                    case '4':
                        $this->tipeRambut = 'keriting';
                        break;
                }
            }

            $this->recommendHairStyle();
        });
    }

    public function getHairStyleRecommendation($bentukWajah, $tipeRambut)
    {
        $recommendations = [
            'oval' => [
                'lurus' => '<a href="http://127.0.0.1:8000/tren/comma-hair">Comma Hair</a>, <a href="http://127.0.0.1:8000/tren/undercut">Undercut</a>, <a href="http://127.0.0.1:8000/tren/buzz-cut">Buzz Cut</a>, <a href="http://127.0.0.1:8000/tren/two-block">Two Block</a>, <a href="http://127.0.0.1:8000/tren/curtain"> Curtain</a>, <a href="http://127.0.0.1:8000/tren/mullet"> Mullet.</a>', 
                'bergelombang' => '<a href="http://127.0.0.1:8000/tren/curtain"> Curtain</a>, <a href="http://127.0.0.1:8000/tren/buzz-cut">Buzz Cut</a>, <a href="http://127.0.0.1:8000/tren/two-block">Two Block</a>,  <a href="http://127.0.0.1:8000/tren/mullet"> Mullet.</a>',
                'ikal' => '<a href="http://127.0.0.1:8000/tren/mullet"> Mullet</a>, <a href="http://127.0.0.1:8000/tren/buzz-cut">Buzz Cut</a>, <a href="http://127.0.0.1:8000/tren/low-taper">Low Taper</a>, <a href="http://127.0.0.1:8000/tren/curtain"> Curtain.</a>',
                'keriting' => '<a href="http://127.0.0.1:8000/tren/mullet"> Mullet</a>, <a href="http://127.0.0.1:8000/tren/buzz-cut">Buzz Cut</a>, <a href="http://127.0.0.1:8000/tren/low-taper">Low Taper</a>,  <a href="http://127.0.0.1:8000/tren/curtain"> Curtain.</a>,'
            ],
            'segitiga' => [
                'lurus' => '<a href="http://127.0.0.1:8000/tren/comma-hair">Comma Hair</a>, <a href="http://127.0.0.1:8000/tren/undercut">Undercut</a>, <a href="http://127.0.0.1:8000/tren/buzz-cut">Buzz Cut</a>, <a href="http://127.0.0.1:8000/tren/two-block">Two Block</a>, <a href="http://127.0.0.1:8000/tren/curtain"> Curtain</a>, <a href="http://127.0.0.1:8000/tren/mullet"> Mullet.</a>',
                'bergelombang' => '<a href="http://127.0.0.1:8000/tren/comma-hair">Comma Hair</a>, <a href="http://127.0.0.1:8000/tren/buzz-cut">Buzz Cut</a>, <a href="http://127.0.0.1:8000/tren/two-block">Two Block</a>, <a href="http://127.0.0.1:8000/tren/curtain"> Curtain</a>, <a href="http://127.0.0.1:8000/tren/mullet"> Mullet.</a>',
                'ikal' => '<a href="http://127.0.0.1:8000/tren/mullet"> Mullet</a>, <a href="http://127.0.0.1:8000/tren/buzz-cut">Buzz Cut</a>, <a href="http://127.0.0.1:8000/tren/low-taper">Low Taper</a>, <a href="http://127.0.0.1:8000/tren/curtain"> Curtain.</a>',
                'keriting' => '<a href="http://127.0.0.1:8000/tren/curtain"> Curtain</a>, <a href="http://127.0.0.1:8000/tren/buzz-cut">Buzz Cut</a>, <a href="http://127.0.0.1:8000/tren/low-taper"> Low Taper</a>, <a href="http://127.0.0.1:8000/tren/mullet"> Mullet.</a>'
            ],
            'bulat' => [
                'lurus' => '<a href="http://127.0.0.1:8000/tren/curtain"> Curtain</a>, <a href="http://127.0.0.1:8000/tren/buzz-cut">Buzz Cut</a>, <a href="http://127.0.0.1:8000/tren/mullet"> Mullet.</a>',
                'bergelombang' => '<a href="http://127.0.0.1:8000/tren/curtain"> Curtain</a>, <a href="http://127.0.0.1:8000/tren/buzz-cut">Buzz Cut</a>, <a href="http://127.0.0.1:8000/tren/mullet"> Mullet.</a>',
                'ikal' => '<a href="http://127.0.0.1:8000/tren/curtain"> Curtain</a>, <a href="http://127.0.0.1:8000/tren/buzz-cut">Buzz Cut</a>, <a href="http://127.0.0.1:8000/tren/low-taper">Low Taper</a>, <a href="http://127.0.0.1:8000/tren/mullet"> Mullet.</a>',
                'keriting' => '<a href="http://127.0.0.1:8000/tren/curtain"> Curtain</a>, <a href="http://127.0.0.1:8000/tren/buzz-cut">Buzz Cut</a>, <a href="http://127.0.0.1:8000/tren/low-taper">Low Taper</a>, <a href="http://127.0.0.1:8000/tren/mullet"> Mullet.</a>'
            ],
            'kotak' => [
                'lurus' => '<a href="http://127.0.0.1:8000/tren/buzz-cut">Buzz Cut</a>',
                'bergelombang' => '<a href="http://127.0.0.1:8000/tren/buzz-cut">Buzz Cut</a>',
                'ikal' => '<a href="http://127.0.0.1:8000/tren/bowl-cut">Bowl Cut</a>, <a href="http://127.0.0.1:8000/tren/buzz-cut">Buzz Cut</a>, <a href="http://127.0.0.1:8000/tren/low-taper">Low Taper</a>',
                'keriting' => '<a href="http://127.0.0.1:8000/tren/bowl-cut">Bowl Cut</a>, <a href="http://127.0.0.1:8000/tren/buzz-cut">Buzz Cut</a>, <a href="http://127.0.0.1:8000/tren/low-taper">Low Taper</a>'
            ]
        ];

        return "Rekomendasi gaya rambut berdasarkan bentuk wajah $bentukWajah dan tipe rambut $tipeRambut: " . $recommendations[$bentukWajah][$tipeRambut];
    }

    public function recommendHairStyle()
    {
        $recommendation = $this->getHairStyleRecommendation($this->bentukWajah, $this->tipeRambut);
        $this->say($recommendation . ' Untuk Tren Rambut lainnya, kunjungi <a href="http://127.0.0.1:8000/tren">Tren Rambut</a>');
        $this->askInitialOption();
    }

    public function provideHairCareLink()
    {
        $this->say('Untuk informasi perawatan rambut, kunjungi <a href="http://127.0.0.1:8000/perawatan">Perawatan Rambut</a>');
        $this->askInitialOption();
    }


    public function TrenRambut()
    {
        $this->say('Untuk Tren Rambut versi HairIdea bisa di cek pada <a href="http://127.0.0.1:8000/tren">Tren Rambut</a>');
        $this->askInitialOption();
    }
}


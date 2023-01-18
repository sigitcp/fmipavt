<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Denah;
use App\Models\Gedung;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Gedung::create([
            'gedung' => 'Gedung Baru'
        ]);
        Gedung::create([
            'gedung' => 'Gedung Lama'
        ]);
        Gedung::create([
            'gedung' => 'Gedung Biotek'
        ]);
        Gedung::create([
            'gedung' => 'Gedung Siskom'
        ]);

        Denah::create([
            'nama' => 'H 1.2',
            'luas' => '64',
            'kapasitas' => '50',
            'denah' => 'denah/63645cb893789.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'H 1.1',
            'luas' => '96',
            'kapasitas' => '70',
            'denah' => 'denah/63645cf026343.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'H 1.4',
            'luas' => '128',
            'kapasitas' => '100',
            'denah' => 'denah/63645d21d57ec.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'Umum dan Perlengkapan',
            'luas' => '192',
            'kapasitas' => '30',
            'denah' => 'denah/6365f790837e1.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'Akademik',
            'luas' => '152',
            'kapasitas' => '25',
            'denah' => 'denah/6365f7d15e550.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'Kepegawaian',
            'luas' => '32',
            'kapasitas' => '6',
            'denah' => 'denah/6365f8269f2c9.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'Tamu',
            'luas' => '32',
            'kapasitas' => '8',
            'denah' => 'denah/6365f8aa87ccf.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'Baca',
            'luas' => '64',
            'kapasitas' => '30',
            'denah' => 'denah/6365f8da0dcc2.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'H 2.2',
            'luas' => '64',
            'kapasitas' => '60',
            'denah' => 'denah/6365f9932f7ab.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'H 2.4',
            'luas' => '64',
            'kapasitas' => '60',
            'denah' => 'denah/6365f9e124a47.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'Dosen Kimia',
            'luas' => '128',
            'kapasitas' => '35',
            'denah' => 'denah/6365fa442ef88.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'H 2.6',
            'luas' => '64',
            'kapasitas' => '60',
            'denah' => 'denah/6365fae71ad7e.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'H 2.3',
            'luas' => '64',
            'kapasitas' => '60',
            'denah' => 'denah/6365fb25c672f.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'Dosen Sistem Informasi',
            'luas' => '96',
            'kapasitas' => '25',
            'denah' => 'denah/6365fb8e961fe.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'H 2.8',
            'luas' => '64',
            'kapasitas' => '60',
            'denah' => 'denah/6365fbe0db73a.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'H 2.10',
            'luas' => '64',
            'kapasitas' => '60',
            'denah' => 'denah/6365fc41759d6.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'Baca Matematika',
            'luas' => '96',
            'kapasitas' => '25',
            'denah' => 'denah/6365fd4ab9441.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'Mushola Pria',
            'luas' => '32',
            'kapasitas' => '25',
            'denah' => 'denah/6365fde431fad.gif',
            'gedung_id' => '1'
        ]); 
        Denah::create([
            'nama' => 'Keuangan',
            'luas' => '64',
            'kapasitas' => '15',
            'denah' => 'denah/6365fe9384205.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'Senat',
            'luas' => '128',
            'kapasitas' => '60',
            'denah' => 'denah/6365fef016937.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'Dekan',
            'luas' => '88',
            'kapasitas' => '15',
            'denah' => 'denah/6365ffea00a1d.gif',
            'gedung_id' => '1'
        ]); 
        Denah::create([
            'nama' => 'Jurusan Ilmu Kelautan',
            'luas' => '88',
            'kapasitas' => '24',
            'denah' => 'denah/63660075a926f.gif',
            'gedung_id' => '1'
        ]); 
        Denah::create([
            'nama' => 'Jurusan Matematika',
            'luas' => '96',
            'kapasitas' => '25',
            'denah' => 'denah/6366010e3d17b.gif',
            'gedung_id' => '1'
        ]); 
        Denah::create([
            'nama' => 'Wakil Dekan',
            'luas' => '96',
            'kapasitas' => '20',
            'denah' => 'denah/636601942c0e4.gif',
            'gedung_id' => '1'
        ]); 
        Denah::create([
            'nama' => 'Jurusan Fisika',
            'luas' => '128',
            'kapasitas' => '28',
            'denah' => 'denah/636602142520e.gif',
            'gedung_id' => '1'
        ]); 
        Denah::create([
            'nama' => 'H 3.2',
            'luas' => '64',
            'kapasitas' => '60',
            'denah' => 'denah/6366030ebd21c.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'H 3.4',
            'luas' => '64',
            'kapasitas' => '60',
            'denah' => 'denah/6366035434949.gif',
            'gedung_id' => '1'
        ]);	
        Denah::create([
            'nama' => 'H 3.1',
            'luas' => '128',
            'kapasitas' => '100',
            'denah' => 'denah/636603bb8a660.gif',
            'gedung_id' => '1'
        ]);	
        Denah::create([
            'nama' => 'H 3.3',
            'luas' => '64',
            'kapasitas' => '60',
            'denah' => 'denah/636605fe32b41.gif',
            'gedung_id' => '1'
        ]);	
        Denah::create([
            'nama' => 'H 3.6',
            'luas' => '64',
            'kapasitas' => '60',
            'denah' => 'denah/6366064632dcd.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'Sidang',
            'luas' => '32',
            'kapasitas' => '10',
            'denah' => 'denah/636606ad35197.gif',
            'gedung_id' => '1'
        ]); 
        Denah::create([
            'nama' => 'Laboratorium Sistem Informasi',
            'luas' => '96',
            'kapasitas' => '60',
            'denah' => 'denah/636607242673f.gif',
            'gedung_id' => '1'
        ]); 
        Denah::create([
            'nama' => 'Dosen Statistik',
            'luas' => '96',
            'kapasitas' => '25',
            'denah' => 'denah/636607a10e758.gif',
            'gedung_id' => '1'
        ]); 
        Denah::create([
            'nama' => 'Mushola Wanita',
            'luas' => '32',
            'kapasitas' => '15',
            'denah' => 'denah/636607f2a5b12.gif',
            'gedung_id' => '1'
        ]); 
        Denah::create([
            'nama' => 'H 3.7',
            'luas' => '64',
            'kapasitas' => '60',
            'denah' => 'denah/636608c02b064.gif',
            'gedung_id' => '1'
        ]); 
        Denah::create([
            'nama' => 'Laboratorium Ilmu Kelautan',
            'luas' => '64',
            'kapasitas' => '45',
            'denah' => 'denah/63660c2d00257.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'Laboratorium Komputasi Fisika',
            'luas' => '96',
            'kapasitas' => '30',
            'denah' => 'denah/63660ca595854.gif',
            'gedung_id' => '1'
        ]); 
        Denah::create([
            'nama' => 'H 3.10',
            'luas' => '96',
            'kapasitas' => '60',
            'denah' => 'denah/63660d0763e2d.gif',
            'gedung_id' => '1'
        ]);
        Denah::create([
            'nama' => 'Kontrol',
            'luas' => '64',
            'kapasitas' => '20',
            'denah' => 'denah/63660d4720c5e.gif',
            'gedung_id' => '1'
        ]); 
        Denah::create([
            'nama' => 'Komputer B',
            'luas' => '128',
            'kapasitas' => '95',
            'denah' => 'denah/63660da58644f.gif',
            'gedung_id' => '1'
        ]); 
        Denah::create([
            'nama' => 'Komputer A',
            'luas' => '192',
            'kapasitas' => '10',
            'denah' => 'denah/63660e162add2.gif',
            'gedung_id' => '1'
        ]); 
        Denah::create([
            'nama' => 'Laboratorium Ekologi',
            'luas' => '63',
            'kapasitas' => '10',
            'denah' => 'denah/63660f68327f0.gif',
            'gedung_id' => '2'
        ]);
        Denah::create([
            'nama' => 'Laboratorium Kultur Jaringan',
            'luas' => '63',
            'kapasitas' => '20',
            'denah' => 'denah/636615ae388d8.gif',
            'gedung_id' => '2'
        ]);
        Denah::create([
            'nama' => 'Laboratorium Mikrobiologi',
            'luas' => '64',
            'kapasitas' => '20',
            'denah' => 'denah/6366161279cb0.gif',
            'gedung_id' => '2'
        ]); 
        Denah::create([
            'nama' => 'C 1',
            'luas' => '63',
            'kapasitas' => '50',
            'denah' => 'denah/636616924edc0.gif',
            'gedung_id' => '2'
        ]); 
        Denah::create([
            'nama' => 'Laboratorium Riset Kimia Organik',
            'luas' => '63',
            'kapasitas' => '40',
            'denah' => 'denah/6366171b3cda3.gif',
            'gedung_id' => '2'
        ]); 
        Denah::create([
            'nama' => 'C 2',
            'luas' => '63',
            'kapasitas' => '50',
            'denah' => 'denah/636617a11bde1.gif',
            'gedung_id' => '2'
        ]); 
        Denah::create([
            'nama' => 'BEM',
            'luas' => '28',
            'kapasitas' => '10',
            'denah' => 'denah/636617dea3135.gif',
            'gedung_id' => '2'
        ]); 
        Denah::create([
            'nama' => 'SEKBER HMJ',
            'luas' => '98',
            'kapasitas' => '60',
            'denah' => 'denah/63661871bb8b3.gif',
            'gedung_id' => '2'
        ]);
        Denah::create([
            'nama' => 'Laboratorium Kimia B',
            'luas' => '130',
            'kapasitas' => '50',
            'denah' => 'denah/636618c8d89d6.gif',
            'gedung_id' => '2'
        ]);
        Denah::create([
            'nama' => 'Sidang',
            'luas' => '46',
            'kapasitas' => '30',
            'denah' => 'denah/63661a71390dc.gif',
            'gedung_id' => '2'
        ]);
        Denah::create([
            'nama' => 'F 2',
            'luas' => '80',
            'kapasitas' => '50',
            'denah' => 'denah/63661b1829cf1.gif',
            'gedung_id' => '2'
        ]);
        Denah::create([
            'nama' => 'Prodi S2 Kimia',
            'luas' => '80',
            'kapasitas' => '15',
            'denah' => 'denah/63661b8a78045.gif',
            'gedung_id' => '2'
        ]); 
        Denah::create([
            'nama' => 'F 3',
            'luas' => '80',
            'kapasitas' => '50',
            'denah' => 'denah/63661c7e9ffc2.gif',
            'gedung_id' => '2'
        ]); 
        Denah::create([
            'nama' => 'F 4',
            'luas' => '80',
            'kapasitas' => '50',
            'denah' => 'denah/63661d1821ebd.gif',
            'gedung_id' => '2'
        ]); 
        Denah::create([
            'nama' => 'C 3',
            'luas' => '63',
            'kapasitas' => '50',
            'denah' => 'denah/63661d7e29206.gif',
            'gedung_id' => '2'
        ]); 
        Denah::create([
            'nama' => 'UKM',
            'luas' => '0',
            'kapasitas' => '0',
            'denah' => 'denah/63661f2e618d3.gif',
            'gedung_id' => '2'
        ]);	
        Denah::create([
            'nama' => 'Aula 1',
            'luas' => '63',
            'kapasitas' => '50',
            'denah' => 'denah/6366200976953.gif',
            'gedung_id' => '2'
        ]);	
        Denah::create([
            'nama' => 'Aula 2',
            'luas' => '63',
            'kapasitas' => '50',
            'denah' => 'denah/636620280998d.gif',
            'gedung_id' => '2'
        ]);
        Denah::create([
            'nama' => 'Laboratorium Zoologi',
            'luas' => '140',
            'kapasitas' => '30',
            'denah' => 'denah/636621bca74cd.gif',
            'gedung_id' => '2'
        ]);
        Denah::create([
            'nama' => 'Laboratorium Biologi',
            'luas' => '0',
            'kapasitas' => '0',
            'denah' => 'denah/636622613283d.gif',
            'gedung_id' => '2'
        ]);
        Denah::create([
            'nama' => 'Laboratorium Kimia',
            'luas' => '0',
            'kapasitas' => '0',
            'denah' => 'denah/63662283778aa.gif',
            'gedung_id' => '2'
        ]);
        Denah::create([
            'nama' => 'Dosen Fisika',
            'luas' => '45',
            'kapasitas' => '7',
            'denah' => 'denah/636623164c6ba.gif',
            'gedung_id' => '3'
        ]);
        Denah::create([
            'nama' => 'Jurusan Fisika',
            'luas' => '45',
            'kapasitas' => '6',
            'denah' => 'denah/63662535d4d63.gif',
            'gedung_id' => '3'
        ]);
        Denah::create([
            'nama' => 'Laboratorium Fisika Dasar',
            'luas' => '100',
            'kapasitas' => '50',
            'denah' => 'denah/6366257691eba.gif',
            'gedung_id' => '3'
        ]); 
        Denah::create([
            'nama' => 'Laboratorium Geofisika dan SIG',
            'luas' => '80',
            'kapasitas' => '40',
            'denah' => 'denah/636628e586b26.gif',
            'gedung_id' => '3'
        ]);
        Denah::create([
            'nama' => 'Laboratorium Pigmen',
            'luas' => '12',
            'kapasitas' => '3',
            'denah' => 'denah/63662cbb14999.gif',
            'gedung_id' => '3'
        ]); 
        Denah::create([
            'nama' => 'Laboratorium Fisika Lanjut',
            'luas' => '24',
            'kapasitas' => '4',
            'denah' => 'denah/63662d1dae50a.gif',
            'gedung_id' => '3'
        ]); 
        Denah::create([
            'nama' => 'ASS',
            'luas' => '10',
            'kapasitas' => '1',
            'denah' => 'denah/63662d4e9409c.gif',
            'gedung_id' => '3'
        ]); 
        Denah::create([
            'nama' => 'Laboratorium Riset Kimia anorganik',
            'luas' => '77',
            'kapasitas' => '25',
            'denah' => 'denah/63662de7c360d.gif',
            'gedung_id' => '3'
        ]); 
        Denah::create([
            'nama' => 'Kepala Bioteknologi dan Riset',
            'luas' => '12',
            'kapasitas' => '2',
            'denah' => 'denah/63662e49ecfa8.gif',
            'gedung_id' => '3'
        ]);
        Denah::create([
            'nama' => 'Laboratorium Ilmu Kelautan',
            'luas' => '63',
            'kapasitas' => '22',
            'denah' => 'denah/63662ec18a6f5.gif',
            'gedung_id' => '3'
        ]); 
        Denah::create([
            'nama' => 'Dosen Sistem Komputer',
            'luas' => '80',
            'kapasitas' => '25',
            'denah' => 'denah/63662f517511e.gif',
            'gedung_id' => '4'
        ]); 
        Denah::create([
            'nama' => 'Laboratorium Workshop',
            'luas' => '80',
            'kapasitas' => '25',
            'denah' => 'denah/63662fe188058.gif',
            'gedung_id' => '4'
        ]);
        Denah::create([
            'nama' => 'Komputer B',
            'luas' => '0',
            'kapasitas' => '0',
            'denah' => 'denah/63663022e615a.gif',
            'gedung_id' => '4'
        ]); 
        Denah::create([
            'nama' => 'Komputer A',
            'luas' => '0',
            'kapasitas' => '0',
            'denah' => 'denah/6366306b988b5.gif',
            'gedung_id' => '4'
        ]);
        Denah::create([
            'nama' => 'Siskom 1',
            'luas' => '0',
            'kapasitas' => '0',
            'denah' => 'denah/636630fd74d13.gif',
            'gedung_id' => '4'
        ]);
        Denah::create([
            'nama' => 'Siskom 2',
            'luas' => '0',
            'kapasitas' => '0',
            'denah' => 'denah/6366317ef23f9.gif',
            'gedung_id' => '4'
        ]);
        Denah::create([
            'nama' => 'Siskom 3',
            'luas' => '0',
            'kapasitas' => '0',
            'denah' => 'denah/636631b8a586b.gif',
            'gedung_id' => '4'
        ]);
        Denah::create([
            'nama' => 'Siskom 4',
            'luas' => '0',
            'kapasitas' => '0',
            'denah' => 'denah/636631d0958fd.gif',
            'gedung_id' => '4'
        ]);
        
    }
}

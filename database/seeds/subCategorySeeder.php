<?php

use Illuminate\Database\Seeder;
use App\SubCategory;

class subCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      SubCategory::create([
        'category_id' => '1',
        'subcatname' => 'Alamat Email',
        'subcatslug' => str_slug('Alamat Email')
      ]);
      SubCategory::create([
        'category_id' => '1',
        'subcatname' => 'Auto collection KBB',
        'subcatslug' => str_slug('Auto collection KBB')
      ]);
      SubCategory::create([
        'category_id' => '1',
        'subcatname' => 'Auto Credit',
        'subcatslug' => str_slug('Auto Credit')
      ]);

      SubCategory::create([
        'category_id' => '2',
        'subcatname' => 'ATM Monitoring',
        'subcatslug' => str_slug('ATM Monitoring')
      ]);
      SubCategory::create([
        'category_id' => '2',
        'subcatname' => 'Halo BCA',
        'subcatslug' => str_slug('Halo BCA')
      ]);
      SubCategory::create([
        'category_id' => '2',
        'subcatname' => 'BCA Finance',
        'subcatslug' => str_slug('BCA Finance')
      ]);


      SubCategory::create([
        'category_id' => '3',
        'subcatname' => 'Beda Saldo Tahapan',
        'subcatslug' => str_slug('Beda Saldo Tahapan')
      ]);
      SubCategory::create([
        'category_id' => '3',
        'subcatname' => 'Blokir saldo/rekening',
        'subcatslug' => str_slug('Blokir saldo/rekening')
      ]);
      SubCategory::create([
        'category_id' => '3',
        'subcatname' => 'Mutasi Rekening',
        'subcatslug' => str_slug('Mutasi Rekening')
      ]);


      SubCategory::create([
        'category_id' => '4',
        'subcatname' => 'Inquiry transaksi',
        'subcatslug' => str_slug('Inquiry transaksi')
      ]);
      SubCategory::create([
        'category_id' => '4',
        'subcatname' => 'Ketentuan',
        'subcatslug' => str_slug('Ketentuan')
      ]);
      SubCategory::create([
        'category_id' => '4',
        'subcatname' => 'Pengajuan baru',
        'subcatslug' => str_slug('Pengajuan baru')
      ]);


      SubCategory::create([
        'category_id' => '5',
        'subcatname' => 'Aktivasi kartu/PIN',
        'subcatslug' => str_slug('Aktivasi kartu/PIN')
      ]);
      SubCategory::create([
        'category_id' => '5',
        'subcatname' => 'Buka Blokir',
        'subcatslug' => str_slug('Buka Blokir')
      ]);
      SubCategory::create([
        'category_id' => '5',
        'subcatname' => 'Ganti kartu instan/ konvensional',
        'subcatslug' => str_slug('Ganti kartu instan/ konvensional')
      ]);
    }
}

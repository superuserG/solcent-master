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
        'name' => 'Alamat Email',
        'slug' => str_slug('Alamat Email')
      ]);
      SubCategory::create([
        'category_id' => '1',
        'name' => 'Auto collection KBB',
        'slug' => str_slug('Auto collection KBB')
      ]);
      SubCategory::create([
        'category_id' => '1',
        'name' => 'Auto Credit',
        'slug' => str_slug('Auto Credit')
      ]);

      SubCategory::create([
        'category_id' => '2',
        'name' => 'ATM Monitoring',
        'slug' => str_slug('ATM Monitoring')
      ]);
      SubCategory::create([
        'category_id' => '2',
        'name' => 'Halo BCA',
        'slug' => str_slug('Halo BCA')
      ]);
      SubCategory::create([
        'category_id' => '2',
        'name' => 'BCA Finance',
        'slug' => str_slug('BCA Finance')
      ]);


      SubCategory::create([
        'category_id' => '3',
        'name' => 'Beda Saldo Tahapan',
        'slug' => str_slug('Beda Saldo Tahapan')
      ]);
      SubCategory::create([
        'category_id' => '3',
        'name' => 'Blokir saldo/rekening',
        'slug' => str_slug('Blokir saldo/rekening')
      ]);
      SubCategory::create([
        'category_id' => '3',
        'name' => 'Mutasi Rekening',
        'slug' => str_slug('Mutasi Rekening')
      ]);


      SubCategory::create([
        'category_id' => '4',
        'name' => 'Inquiry transaksi',
        'slug' => str_slug('Inquiry transaksi')
      ]);
      SubCategory::create([
        'category_id' => '4',
        'name' => 'Ketentuan',
        'slug' => str_slug('Ketentuan')
      ]);
      SubCategory::create([
        'category_id' => '4',
        'name' => 'Pengajuan baru',
        'slug' => str_slug('Pengajuan baru')
      ]);


      SubCategory::create([
        'category_id' => '5',
        'name' => 'Aktivasi kartu/PIN',
        'slug' => str_slug('Aktivasi kartu/PIN')
      ]);
      SubCategory::create([
        'category_id' => '5',
        'name' => 'Buka Blokir',
        'slug' => str_slug('Buka Blokir')
      ]);
      SubCategory::create([
        'category_id' => '5',
        'name' => 'Ganti kartu instan/ konvensional',
        'slug' => str_slug('Ganti kartu instan/ konvensional')
      ]);
    }
}

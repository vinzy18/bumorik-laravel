<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use App\Models\Kategorial;
use App\Models\Pemilihan;
use Illuminate\Database\Seeder;
use Database\Seeders\AuthSeeder;
use Illuminate\Database\Eloquent\Model;
use Database\Seeders\AnnouncementSeeder;
use Database\Seeders\Traits\TruncateTable;

/**
 * Class DatabaseSeeder.
 */
class DatabaseSeeder extends Seeder
{
    use TruncateTable;

    /**
     * Seed the application's database.
     */
    public function run()
    {
        Model::unguard();

        $this->truncateMultiple([
            'activity_log',
            'failed_jobs',
        ]);

        $this->call(AuthSeeder::class);
        $this->call(AnnouncementSeeder::class);

        Model::reguard();

        Kategorial::create([
            'name' => 'PKB',
        ]);

        Kategorial::create([
            'name' => 'WKI',
        ]);

        Kategorial::create([
            'name' => 'Pemuda',
        ]);

        Kategorial::create([
            'name' => 'Remaja',
        ]);

        Kategorial::create([
            'name' => 'ASM',
        ]);

        Kategorial::create([
            'name' => 'Kolom',
        ]);

        Jabatan::create([
            'name' => 'Ketua'
        ]);

        Jabatan::create([
            'name' => 'Wakil Ketua'
        ]);

        Jabatan::create([
            'name' => 'Sekretaris'
        ]);

        Jabatan::create([
            'name' => 'Wakil Sekretaris'
        ]);

        Jabatan::create([
            'name' => 'Benadahara I'
        ]);

        Jabatan::create([
            'name' => 'Bendahara II'
        ]);


        Pemilihan::create([
            'name' => 'Test',
            'kategorial_id' => '1',
            'jabatan_id' => '1'
        ]);

        Pemilihan::create([
            'name' => 'Test',
            'kategorial_id' => '1',
            'jabatan_id' => '2'
        ]);

        Pemilihan::create([
            'name' => 'Test',
            'kategorial_id' => '1',
            'jabatan_id' => '3'
        ]);
    }
}

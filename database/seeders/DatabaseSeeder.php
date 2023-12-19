<?php

namespace Database\Seeders;

use App\Models\Kerjasama;
use App\Models\Prodi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory()->create([
         'email' => 'admin@admin.com',
         'password' => Hash::make('admin'),
         'role' => 'admin',
         'no_hp' => '08245621346154' ]);
         \App\Models\User::factory()->create([
            'email' => 'prodi@prodi.com',
            'password' => Hash::make('prodi'),
            'role' => 'prodi',
            'no_hp' => '08245621346155' ]);
            \App\Models\User::factory()->create([
                'email' => 'mitra@mitra.com',
                'password' => Hash::make('mitra'),
                'role' => 'mitra',
                'no_hp' => '08245621346166' ]);
        $this->call(KategoriSeeder::class);
        $this->call(ProdiSeeder::class);
        Kerjasama::factory()->count(100)->create();
        $prodi = Prodi::all();
        Kerjasama::all()->each(function ($kerjasama) use ($prodi) {
            $kerjasama->prodi()->attach(
                $prodi->random(rand(1, 5))->pluck('id_prodi')->toArray()
            );
        });
    }
}

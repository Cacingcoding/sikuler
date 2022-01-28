<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Kesiswaan = Profile::create([
            'user_id' => '1',
            'ttl' => \Carbon\Carbon::now(),
            'alamat' => 'sukabumi',
            'jk' => 'Laki - laki',
            'nt' => '089272838267',
            'avatar' => 'default.jpg',
        ]);
        $user = Profile::create([
            'user_id' => '2',
            'ttl' => \Carbon\Carbon::now(),
            'alamat' => 'Sukabumi',
            'jk' => 'Laki - laki',
            'nt' => '089272838267',
            'ekskul' => 'PMR',
            'avatar' => 'default.jpg',
        ]);
        $user = Profile::create([
            'user_id' => '3',
            'ttl' => \Carbon\Carbon::now(),
            'alamat' => 'Sukabumi',
            'jk' => 'Laki - laki',
            'nt' => '089272838267',
            'ekskul' => 'PRAMUKA',
            'avatar' => 'default.jpg',
        ]);
        $user = Profile::create([
            'user_id' => '4',
            'ttl' => \Carbon\Carbon::now(),
            'alamat' => 'Sukabumi',
            'jk' => 'Laki - laki',
            'nt' => '089272838267',
            'ekskul' => 'ROHIS',
            'avatar' => 'default.jpg',
        ]);
        $user = Profile::create([
            'user_id' => '5',
            'ttl' => \Carbon\Carbon::now(),
            'alamat' => 'Sukabumi',
            'jk' => 'Laki - laki',
            'nt' => '089272838267',
            'ekskul' => 'PMR',
            'avatar' => 'default.jpg',
        ]);
        $user = Profile::create([
            'user_id' => '6',
            'ttl' => \Carbon\Carbon::now(),
            'alamat' => 'Sukabumi',
            'jk' => 'Laki - laki',
            'nt' => '089272838267',
            'ekskul' => 'PRAMUKA',
            'avatar' => 'default.jpg',
        ]);
        $user = Profile::create([
            'user_id' => '7',
            'ttl' => \Carbon\Carbon::now(),
            'alamat' => 'Sukabumi',
            'jk' => 'Laki - laki',
            'nt' => '089272838267',
            'ekskul' => 'ROHIS',
            'avatar' => 'default.jpg',
        ]);
        $user = Profile::create([
            'user_id' => '8',
            'ttl' => \Carbon\Carbon::now(),
            'alamat' => 'Sukabumi',
            'jk' => 'Laki - laki',
            'nt' => '089272838267',
            'ekskul' => 'PMR',
            'avatar' => 'default.jpg',
        ]);
        $user = Profile::create([
            'user_id' => '9',
            'ttl' => \Carbon\Carbon::now(),
            'alamat' => 'Sukabumi',
            'jk' => 'Laki - laki',
            'nt' => '089272838267',
            'ekskul' => 'PRAMUKA',
            'avatar' => 'default.jpg',
        ]);
        $user = Profile::create([
            'user_id' => '10',
            'ttl' => \Carbon\Carbon::now(),
            'alamat' => 'Sukabumi',
            'jk' => 'Laki - laki',
            'nt' => '089272838267',
            'ekskul' => 'ROHIS',
            'avatar' => 'default.jpg',
        ]);
    }
}

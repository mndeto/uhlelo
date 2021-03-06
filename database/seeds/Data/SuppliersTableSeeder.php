<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Supplier;

class SuppliersTableSeeder extends Seeder {

    public function run() {

        DB::table('suppliers')->delete();

        Supplier::create(['name'=>'Sandvik', 'producer' => '1', 'website' => 'http://www.sandvik.no', 'supplied_by' => '1']);
        Supplier::create(['name'=>'Øberg Verktøy', 'producer' => '0', 'website' => 'http://www.obergverktoy.no']);
        Supplier::create(['name'=>'Digernes', 'producer' => '0', 'website' => 'http://www.digernes.no']);
        Supplier::create(['name'=>'Svea Maskiner', 'producer' => '0', 'website' => 'http://www.sveamaskiner.no']);
        Supplier::create(['name'=>'Norwegian Tools', 'producer' => '0', 'website' => 'http://www.norswiss.no']);
        Supplier::create(['name'=>'Alf I Larsen', 'producer' => '0', 'website' => 'http://www.ail.no']);
        Supplier::create(['name'=>'Kennametall', 'producer' => '1', 'website' => 'http://www.kennametall.com', 'supplied_by' => '6']);
        Supplier::create(['name'=>'Iscar', 'producer' => '1', 'website' => 'http://www.iscar.com', 'supplied_by' => '4']);
        Supplier::create(['name'=>'SECO', 'producer' => '1', 'website' => 'http://www.seco.se', 'supplied_by' => '3']);
        Supplier::create(['name'=>'Maskinforetningen', 'producer' => '0', 'website' => '']);
        Supplier::create(['name'=>'Dormer', 'producer' => '1', 'website' => '', 'supplied_by' => '10']);
        Supplier::create(['name'=>'Hoffmann', 'producer' => '0', 'website' => '']);
        Supplier::create(['name'=>'Holex', 'producer' => '1', 'website' => '', 'supplied_by' => '12']);
        Supplier::create(['name'=>'Mitshubishi', 'producer' => '1', 'website' => '', 'supplied_by' => '5']);
        Supplier::create(['name'=>'OSG', 'producer' => '1', 'website' => '', 'supplied_by' => '5']);
        Supplier::create(['name'=>'Max-Mill', 'producer' => '1', 'website' => '', 'supplied_by' => '5']);
        Supplier::create(['name'=>'Garant', 'producer' => '1', 'website' => '', 'supplied_by' => '12']);
        Supplier::create(['name'=>'Kyocera Unimerco', 'producer' => '1', 'website' => '', 'supplied_by' => '1']);
        Supplier::create(['name'=>'Kyvik', 'producer' => '0', 'website' => '']);

    }
}

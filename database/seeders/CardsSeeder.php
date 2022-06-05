<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Card;

class CardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cards = [
                ["card_number"=>"142594708f3a5a3ac2980914a0fc954f",'status_id'=>1]
                
                
        ];

    
    foreach($cards as $card){
        Card::create($card);
    }

    }
}

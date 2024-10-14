<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemplateGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $TemplatesGroups = array(
            array('id' => '1','idAdmin' => '6000','name' => 'ПРЯМОЕ - РАЗДВИЖНОЕ штанга 30*10мм'),
            array('id' => '3','idAdmin' => '6000','name' => 'УГЛОВОЕ - РАЗДВИЖНОЕ (1 дверь) 30*10мм'),
            array('id' => '4','idAdmin' => '6000','name' => 'УГЛОВОЕ - РАЗДВИЖНОЕ (2 двери) 30*10мм'),
            array('id' => '5','idAdmin' => '6000','name' => 'ПРЯМОЕ - НА ПЕТЛЯХ (стена-стекло) 30*10мм'),
            array('id' => '6','idAdmin' => '6000','name' => 'ПРЯМОЕ - НА ПЕТЛЯХ (СТЕКЛО-стекло) с м/п 30*10мм'),
            array('id' => '7','idAdmin' => '6000','name' => 'ПРЯМОЕ - НА ПЕТЛЯХ 1*1 (Стекло-стекло) 30*10мм'),
            array('id' => '8','idAdmin' => '6000','name' => 'УГЛОВОЕ - НА ПЕТЛЯХ (СТЕКЛО-стекло) 30*10мм'),
            array('id' => '9','idAdmin' => '6000','name' => 'ТРАПЕЦИЯ - штанга 30*10мм'),
            array('id' => '10','idAdmin' => '6000','name' => 'ШТОРКА 30*10'),
            array('id' => '11','idAdmin' => '6000','name' => 'ПОЛУ-ТРАПЕЦИЯ - (стена-стекло) 30*10мм'),
            array('id' => '12','idAdmin' => '6000','name' => 'ПОЛУ-ТРАПЕЦИЯ - (СТЕКЛО-стекло) 30*10мм'),
            array('id' => '13','idAdmin' => '6000','name' => 'ДВЕРЬ В ПРОЕМ')
        );
        
        foreach ($TemplatesGroups as $templateGroup) {
            \App\Models\TemplateGroup::create([
                'id' => $templateGroup['id'],
                'name' => $templateGroup['name']
            ]);
        }
    }
}

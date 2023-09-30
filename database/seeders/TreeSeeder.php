<?php

namespace Database\Seeders;

use App\Models\Tree;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tree = new Tree();

        $tree->name="Árbol 01";
        $tree->specie="Roble";
        $tree->description="Árbol de prueba";

        $tree->save();

        $tree2 = new Tree();

        $tree2->name="Árbol 02";
        $tree2->specie="Roble";
        $tree2->description="Árbol de prueba 2";

        $tree2->save();

        
        $tree3 = new Tree();

        $tree3->name="Árbol 03";
        $tree3->specie="Cedro";
        $tree3->description="Árbol de prueba 3";

        $tree3->save();

                
        $tree4 = new Tree();

        $tree4->name="Árbol 04";
        $tree4->specie="Cedro";
        $tree4->description="Árbol de prueba 4";

        $tree4->save();

        $tree5 = new Tree();

        $tree5->name="Árbol 05";
        $tree5->specie="Arbusto";
        $tree5->description="Árbol de prueba 5";

        $tree5->save();
    
    }
}

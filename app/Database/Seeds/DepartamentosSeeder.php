<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DepartamentosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nombre' => 'Alamcen', 
            ],
            [
                'nombre' => 'contabilidad', 
            ],
            [
                'nombre' => 'Finanzas', 
            ],
            [
                'nombre' => 'Recursos Humanos', 
            ],
            [
                'nombre' => 'Sistemas', 
            ],
        ];
        $this->db->table('departamentos')->insertBatch($data);
    }
}

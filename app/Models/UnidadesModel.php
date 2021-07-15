<?php

namespace App\Models;

use CodeIgniter\Model;

class UnidadesModel extends Model
{

    protected $table = 'unidades'; // nombre de la tabla para este modelo
    protected $primaryKey = 'id'; // clave primaria para esta tabla

    // protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false; // si se quiere hacer borrado lógico o físico.

    protected $allowedFields = ['nombre', 'nombre_corto', 'activo']; // Aquí los campos de la tabla que vamos a manipular

    protected $useTimestamps = true;
    protected $createdField  = 'fecha_alta'; // Este campo va en la tabla.
    protected $updatedField  = 'fecha_edit'; // Este campo va en la tabla.

    protected $validationRules = [];

    protected $validationMessages = [];

    protected $skipValidation = true; // True, para validar el modelo.

}
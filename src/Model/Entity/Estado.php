<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estado Entity
 *
 * @property int $id
 * @property string|null $sigla
 * @property string|null $nome
 *
 * @property \App\Model\Entity\Cidade[] $cidades
 * @property \App\Model\Entity\Usuario[] $usuarios
 */
class Estado extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'sigla' => true,
        'nome' => true,
        'cidades' => true,
        'usuarios' => true,
    ];
}

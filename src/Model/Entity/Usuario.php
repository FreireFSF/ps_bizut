<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $cpf
 * @property \Cake\I18n\FrozenDate|null $data_nascimento
 * @property string $email
 * @property string $endereco
 * @property int $telefone
 * @property int $estado_id
 * @property int $cidade_id
 *
 * @property \App\Model\Entity\Estado $estado
 * @property \App\Model\Entity\Cidade $cidade
 */
class Usuario extends Entity
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
        'nome' => true,
        'cpf' => true,
        'data_nascimento' => true,
        'email' => true,
        'endereco' => true,
        'telefone' => true,
        'estado_id' => true,
        'cidade_id' => true,
        'estado' => true,
        'cidade' => true,
    ];
}

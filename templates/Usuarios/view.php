<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usuario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuarios view content">
            <h3><?= h($usuario->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($usuario->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cpf') ?></th>
                    <td><?= h($usuario->cpf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($usuario->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereco') ?></th>
                    <td><?= h($usuario->endereco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= $usuario->has('estado') ? $this->Html->link($usuario->estado->nome, ['controller' => 'Estados', 'action' => 'view', $usuario->estado->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cidade') ?></th>
                    <td><?= $usuario->has('cidade') ? $this->Html->link($usuario->cidade->nome, ['controller' => 'Cidades', 'action' => 'view', $usuario->cidade->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($usuario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefone') ?></th>
                    <td><?= $this->Number->format($usuario->telefone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Nascimento') ?></th>
                    <td><?= h($usuario->data_nascimento) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

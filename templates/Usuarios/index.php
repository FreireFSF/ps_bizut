<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario[]|\Cake\Collection\CollectionInterface $usuarios
 */
?>
<div class="usuarios index content">
    <?= $this->Html->link(__('Novo Usuario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usuários') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('CPF') ?></th>
                    <th><?= $this->Paginator->sort('data_nascimento') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('endereço') ?></th>
                    <th><?= $this->Paginator->sort('telefone') ?></th>
                    <th><?= $this->Paginator->sort('estado_id') ?></th>
                    <th><?= $this->Paginator->sort('cidade_id') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= $this->Number->format($usuario->id) ?></td>
                    <td><?= h($usuario->nome) ?></td>
                    <td><?= h($usuario->cpf) ?></td>
                    <td><?= h($usuario->data_nascimento) ?></td>
                    <td><?= h($usuario->email) ?></td>
                    <td><?= h($usuario->endereco) ?></td>
                    <td><?= $this->Number->format($usuario->telefone) ?></td>
                    <td><?= $usuario->has('estado') ? $this->Html->link($usuario->estado->nome, ['controller' => 'Estados', 'action' => 'view', $usuario->estado->id]) : '' ?></td>
                    <td><?= $usuario->has('cidade') ? $this->Html->link($usuario->cidade->nome, ['controller' => 'Cidades', 'action' => 'view', $usuario->cidade->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $usuario->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $usuario->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próxima') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}} páginas, showing {{current}}')) ?></p>
    </div>
</div>

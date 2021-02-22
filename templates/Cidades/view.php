<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cidade $cidade
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cidade'), ['action' => 'edit', $cidade->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cidade'), ['action' => 'delete', $cidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cidade->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cidades'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cidade'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cidades view content">
            <h3><?= h($cidade->nome) ?></h3>
            <table>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= $cidade->has('estado') ? $this->Html->link($cidade->estado->nome, ['controller' => 'Estados', 'action' => 'view', $cidade->estado->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($cidade->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cep') ?></th>
                    <td><?= h($cidade->cep) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cidade->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Usuarios') ?></h4>
                <?php if (!empty($cidade->usuarios)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nome') ?></th>
                            <th><?= __('Cpf') ?></th>
                            <th><?= __('Data Nascimento') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Endereco') ?></th>
                            <th><?= __('Telefone') ?></th>
                            <th><?= __('Estado Id') ?></th>
                            <th><?= __('Cidade Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($cidade->usuarios as $usuarios) : ?>
                        <tr>
                            <td><?= h($usuarios->id) ?></td>
                            <td><?= h($usuarios->nome) ?></td>
                            <td><?= h($usuarios->cpf) ?></td>
                            <td><?= h($usuarios->data_nascimento) ?></td>
                            <td><?= h($usuarios->email) ?></td>
                            <td><?= h($usuarios->endereco) ?></td>
                            <td><?= h($usuarios->telefone) ?></td>
                            <td><?= h($usuarios->estado_id) ?></td>
                            <td><?= h($usuarios->cidade_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Usuarios', 'action' => 'view', $usuarios->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Usuarios', 'action' => 'edit', $usuarios->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usuarios', 'action' => 'delete', $usuarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarios->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

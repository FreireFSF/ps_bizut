<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estado $estado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Estado'), ['action' => 'edit', $estado->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Estado'), ['action' => 'delete', $estado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estado->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Estados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Estado'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="estados view content">
            <h3><?= h($estado->nome) ?></h3>
            <table>
                <tr>
                    <th><?= __('Sigla') ?></th>
                    <td><?= h($estado->sigla) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($estado->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($estado->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Cidades') ?></h4>
                <?php if (!empty($estado->cidades)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Estado Id') ?></th>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nome') ?></th>
                            <th><?= __('Cep') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($estado->cidades as $cidades) : ?>
                        <tr>
                            <td><?= h($cidades->estado_id) ?></td>
                            <td><?= h($cidades->id) ?></td>
                            <td><?= h($cidades->nome) ?></td>
                            <td><?= h($cidades->cep) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Cidades', 'action' => 'view', $cidades->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Cidades', 'action' => 'edit', $cidades->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cidades', 'action' => 'delete', $cidades->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cidades->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Usuarios') ?></h4>
                <?php if (!empty($estado->usuarios)) : ?>
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
                        <?php foreach ($estado->usuarios as $usuarios) : ?>
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

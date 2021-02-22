<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usuario->id],
                ['confirm' => __('Tem certeza que deseja deletar o usuário # {0}?', $usuario->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuarios form content">
            <?= $this->Form->create($usuario) ?>
            <fieldset>
                <legend><?= __('Editar Usuario') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('cpf');
                    echo $this->Form->control('data_nascimento', ['empty' => true]);
                    echo $this->Form->control('email');
                    echo $this->Form->control('endereco');
                    echo $this->Form->control('telefone');
                    echo $this->Form->control('estado_id', ['options' => $estados]);
                    echo $this->Form->control('cidade_id', ['options' => $cidades]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('ENVIAR')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

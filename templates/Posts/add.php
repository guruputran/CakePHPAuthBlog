<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Posts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="posts form content">

            <?php echo $this->Form->create($post, ['type' => 'file']); ?>
            <fieldset>
                <legend><?= __('Add Post') ?></legend>
                <?php
                echo $this->Form->control('title');
                echo $this->Form->control('body');
                echo $this->Form->control('image_file', ['type' => 'file']);
                echo $this->Form->control('posted_date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

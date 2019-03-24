<div class="users form large-9 medium-8 columns content">
<?= $this->Form->create($user) ?>
    <fieldset>
        <legend>Register</legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('contact_number');
            echo $this->Form->control('role_id', [
                'type' => 'hidden',
                'value' => $role->id,
                ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Register')) ?>
    <?= $this->Form->end() ?>
</div>

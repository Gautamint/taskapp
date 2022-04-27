<?= $this->extend('layouts/default') ?>

<?=$this->section('title');?>Edit data <?= $this->endSection(); ?>

<?=$this->section('content');?>

<h1>Edit Task</h1>

<?php if(session()->has('errors')) :  ?>

    <ul>
        <?php
        foreach(session('errors') as $error) :?>

        <li> <?= $error ?> </li>

        <?php endforeach; ?>
    </ul>
<?php endif ?>
<?= form_open("/tasks/update/" . $task->id) ?>

<?=$this->include('Tasks/form') ?>

<button type="submit">save</button>
<a href="<?= site_url('/tasks/show/' . $task->id); ?>">cancel</a>
</form>

 <?= $this->endSection(); ?>


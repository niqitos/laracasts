<?php require 'partials/head.php'; ?>
    <h1>Task For The Day</h1>
    <ul>
        <?php foreach ($tasks as $taskKey => $task): ?>
            <li>
                <strong>Task<?= $taskKey + 1; ?>: </strong>
                <?php if($task->isComplete()):?>
                    <strike><?= $task->getDescription(); ?></strike>
                <?php else: ?>
                    <?= $task->getDescription(); ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php require 'partials/footer.php';?>
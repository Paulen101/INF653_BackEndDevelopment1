<?php include('../view/admin_header.php'); ?>

<section class="panel">
    <h1>Manage Classes</h1>
    <form action="." method="post" class="inline-form">
        <input type="hidden" name="action" value="add_class">
        <label>
            Name
            <input type="text" name="class_name" maxlength="50" required>
        </label>
        <button type="submit">Add Class</button>
    </form>
</section>

<section class="panel">
    <h2>Current Classes</h2>
    <ul class="manage-list">
        <?php foreach ($classes as $class) : ?>
            <li>
                <span><?= htmlspecialchars($class['class_name']) ?></span>
                <form action="." method="post" onsubmit="return confirm('Delete this class?');">
                    <input type="hidden" name="action" value="delete_class">
                    <input type="hidden" name="class_id" value="<?= $class['class_id'] ?>">
                    <button type="submit" class="danger">Delete</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</section>

<?php include('../view/admin_footer.php'); ?>

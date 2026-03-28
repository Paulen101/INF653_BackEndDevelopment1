<?php include('../view/admin_header.php'); ?>

<section class="panel">
    <h1>Manage Types</h1>
    <form action="." method="post" class="inline-form">
        <input type="hidden" name="action" value="add_type">
        <label>
            Name
            <input type="text" name="type_name" maxlength="50" required>
        </label>
        <button type="submit">Add Type</button>
    </form>
</section>

<section class="panel">
    <h2>Current Types</h2>
    <ul class="manage-list">
        <?php foreach ($types as $type) : ?>
            <li>
                <span><?= htmlspecialchars($type['type_name']) ?></span>
                <form action="." method="post" onsubmit="return confirm('Delete this type?');">
                    <input type="hidden" name="action" value="delete_type">
                    <input type="hidden" name="type_id" value="<?= $type['type_id'] ?>">
                    <button type="submit" class="danger">Delete</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</section>

<?php include('../view/admin_footer.php'); ?>

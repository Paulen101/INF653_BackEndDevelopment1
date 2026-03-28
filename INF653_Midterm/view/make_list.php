<?php include('../view/admin_header.php'); ?>

<section class="panel">
    <h1>Manage Makes</h1>
    <form action="." method="post" class="inline-form">
        <input type="hidden" name="action" value="add_make">
        <label>
            Name
            <input type="text" name="make_name" maxlength="50" required>
        </label>
        <button type="submit">Add Make</button>
    </form>
</section>

<section class="panel">
    <h2>Current Makes</h2>
    <ul class="manage-list">
        <?php foreach ($makes as $make) : ?>
            <li>
                <span><?= htmlspecialchars($make['make_name']) ?></span>
                <form action="." method="post" onsubmit="return confirm('Delete this make?');">
                    <input type="hidden" name="action" value="delete_make">
                    <input type="hidden" name="make_id" value="<?= $make['make_id'] ?>">
                    <button type="submit" class="danger">Delete</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</section>

<?php include('../view/admin_footer.php'); ?>

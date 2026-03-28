<?php include('../view/admin_header.php'); ?>

<section class="panel">
    <h1>Add Vehicle</h1>
    <form action="." method="post" class="vehicle-form">
        <input type="hidden" name="action" value="add_vehicle">

        <label>
            Year
            <input type="number" name="year" min="1900" max="2100" required>
        </label>

        <label>
            Model
            <input type="text" name="model" maxlength="100" required>
        </label>

        <label>
            Price
            <input type="number" name="price" step="0.01" required>
        </label>

        <label>
            Make
            <select name="make_id" required>
                <option value="">Select Make</option>
                <?php foreach ($makes as $make) : ?>
                    <option value="<?= $make['make_id'] ?>"><?= htmlspecialchars($make['make_name']) ?></option>
                <?php endforeach; ?>
            </select>
        </label>

        <label>
            Type
            <select name="type_id" required>
                <option value="">Select Type</option>
                <?php foreach ($types as $type) : ?>
                    <option value="<?= $type['type_id'] ?>"><?= htmlspecialchars($type['type_name']) ?></option>
                <?php endforeach; ?>
            </select>
        </label>

        <label>
            Class
            <select name="class_id" required>
                <option value="">Select Class</option>
                <?php foreach ($classes as $class) : ?>
                    <option value="<?= $class['class_id'] ?>"><?= htmlspecialchars($class['class_name']) ?></option>
                <?php endforeach; ?>
            </select>
        </label>

        <div class="button-row">
            <button type="submit">Add Vehicle</button>
        </div>
    </form>
</section>

<p><a href=".">View Vehicle List</a></p>

<?php include('../view/admin_footer.php'); ?>

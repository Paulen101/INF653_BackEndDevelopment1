<?php include('view/header.php'); ?>

<section class="panel">
    <h1>Vehicle Inventory</h1>
    <p>Browse our selection of quality used vehicles.</p>

    <form method="get" action="." class="filters">
        <label>
            Sort
            <select name="sort">
                <option value="price" <?= $sort == 'price' ? 'selected' : '' ?>>Price (High to Low)</option>
                <option value="year" <?= $sort == 'year' ? 'selected' : '' ?>>Year (Newest First)</option>
            </select>
        </label>

        <label>
            Make
            <select name="make_id">
                <option value="">All Makes</option>
                <?php foreach ($makes as $make): ?>
                    <option value="<?= $make['make_id'] ?>" <?= $make_id == $make['make_id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($make['make_name']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </label>

        <label>
            Type
            <select name="type_id">
                <option value="">All Types</option>
                <?php foreach ($types as $type): ?>
                    <option value="<?= $type['type_id'] ?>" <?= $type_id == $type['type_id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($type['type_name']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </label>

        <label>
            Class
            <select name="class_id">
                <option value="">All Classes</option>
                <?php foreach ($classes as $class): ?>
                    <option value="<?= $class['class_id'] ?>" <?= $class_id == $class['class_id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($class['class_name']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </label>

        <div class="button-row">
            <button type="submit">Apply</button>
            <a class="button secondary" href=".">Reset</a>
        </div>
    </form>
</section>

<section class="panel">
    <h2>Available Vehicles</h2>

    <?php if (empty($vehicles)): ?>
        <p>No vehicles match your criteria.</p>
    <?php else: ?>
        <div class="table-wrap">
            <table>
                <thead>
                <tr>
                    <th>Year</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Type</th>
                    <th>Class</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($vehicles as $vehicle): ?>
                    <tr>
                        <td><?= $vehicle['year'] ?></td>
                        <td><?= htmlspecialchars($vehicle['make_name']) ?></td>
                        <td><?= htmlspecialchars($vehicle['model']) ?></td>
                        <td><?= htmlspecialchars($vehicle['type_name']) ?></td>
                        <td><?= htmlspecialchars($vehicle['class_name']) ?></td>
                        <td>$<?= number_format($vehicle['price'], 2) ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</section>

<?php include('view/footer.php'); ?>

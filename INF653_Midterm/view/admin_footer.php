</main>
<footer class="site-footer">
    <div class="container">
        <nav class="footer-nav">
            <?php if ($action != 'list_vehicles') : ?>
                <a href=".">Dashboard</a>
            <?php endif; ?>
            <?php if ($action != 'list_makes') : ?>
                <a href="?action=list_makes">Makes</a>
            <?php endif; ?>
            <?php if ($action != 'list_types') : ?>
                <a href="?action=list_types">Types</a>
            <?php endif; ?>
            <?php if ($action != 'list_classes') : ?>
                <a href="?action=list_classes">Classes</a>
            <?php endif; ?>
            <?php if ($action != 'show_add_form') : ?>
                <a href="?action=show_add_form">Add Vehicle</a>
            <?php endif; ?>
            <a href="../index.php">View Public Site</a>
        </nav>
        <small>&copy; <?= date('Y') ?> Zippy Used Autos</small>
    </div>
</footer>
</body>
</html>

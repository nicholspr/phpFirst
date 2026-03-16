<?php
$current_page = basename(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8'));
$nav_links = [
    'index.php'     => 'Home',
    'about.php'     => 'About',
    'services.php'  => 'Services',
    'portfolio.php' => 'Portfolio',
    'contact.php'   => 'Contact',
];
?>
<nav>
    <ul>
        <?php foreach ($nav_links as $file => $label): ?>
            <li>
                <a href="<?php echo $file; ?>"
                   class="<?php echo ($current_page === $file) ? 'active' : ''; ?>">
                    <?php echo $label; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>

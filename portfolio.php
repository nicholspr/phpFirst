<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | My PHP Website</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/nav.php'; ?>
    <main>
        <h1>Portfolio</h1>
        <p>Here are some of the projects we have worked on:</p>
        <ul>
            <li>E-Commerce Platform &mdash; A full-featured online shop built with PHP and MySQL.</li>
            <li>Corporate Website &mdash; A responsive multi-page site for a local business.</li>
            <li>Blog Engine &mdash; A lightweight PHP-powered blog with an admin panel.</li>
            <li>REST API &mdash; A JSON API providing data services to mobile applications.</li>
        </ul>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> My PHP Website</p>
    </footer>
</body>
</html>

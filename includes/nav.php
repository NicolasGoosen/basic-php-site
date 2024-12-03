<?php
$menuItems = [
    "Home" => "/",
    "About" => "/about",
    "Contact" => "/contact"
];
?>
<nav>
    <ul>
        <?php foreach ($menuItems as $name => $link): ?>
            <li><a href="<?php echo $link; ?>"><?php echo $name; ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>
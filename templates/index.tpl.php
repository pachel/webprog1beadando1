<?php session_start(); ?>
<?php if (file_exists('./logicals/' . $keres['fajl'] . '.php')) {
    include("./logicals/{$keres['fajl']}.php");
} ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $ablakcim['cim'] . ((isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '') ?></title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/components/font-awesome/css/all.css">
    <link rel="stylesheet" href="styles/stilus.css">
    <?php if (file_exists('./styles/' . $keres['fajl'] . '.css')) { ?>
        <link rel="stylesheet" href="./styles/<?= $keres['fajl'] ?>.css" type="text/css"><?php } ?>
</head>
<body>
<!--
	<header>
		<img src="./images/<?= $fejlec['kepforras'] ?>" alt="<?= $fejlec['kepalt'] ?>">
		<h1><?= $fejlec['cim'] ?></h1>

	</header>-->
<section>
    <nav class="navbar navbar-expand-lg bg-nav" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fa-solid fa-graduation-cap"></i>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php foreach ($oldalak as $url => $oldal) { ?>
                        <?php if (!isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
                            <li class="nav-item" <?= (($oldal == $keres) ? ' active' : '') ?>>
                                <a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>" class="nav-link">
                                    <?= $oldal['szoveg'] ?></a>
                            </li>
                        <?php } ?>
                    <?php } ?>
                    <!--<span class="badge text-bg-danger rounded-pill">4</span>-->
                </ul>
                <span class="navbar-text">
                <?php if (isset($_SESSION['login'])) { ?>Bejlentkezve:
                    <strong><?= $_SESSION['csn'] . " " . $_SESSION['un'] . " (" . $_SESSION['login'] . ")" ?></strong><?php } ?>
                </span>
            </div>
        </div>
    </nav>
    <article class="container mt-3 mb-3">
        <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
    </article>
</section>
<footer class="container">
    <?php if (isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
    &nbsp;
    <?php if (isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
</footer>
<script type="text/javascript" src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>

<?php
require_once "../webservice/model/model.php";
require_once "../webservice/controllers/controller.php";

$songs[] = getSongs();

$playlists[] = getPlaylists();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-schale=1.0">
    <script src="https://kit.fontawesome.com/0bc22cc72a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
    <title>Home | Music Collection</title>
</head>
<body>

<div class="webcontainer">
    <section class="homepage">
        <div class="pinned-block container flex flexrow">
            <a class="pinned-item flexitem" href="?type=playlist&id=4">
                <div class="cover"></div>
                <div class="title"><?= $playlists[4]["title"] ?></div>
                <div class="subtitle"><?= $playlists[4]["author"] ?></div>
            </a>
            <a class="pinned-item flexitem" href="?type=playlist&id=2">
                <div class="cover"></div>
                <div class="title"><?= $playlists[2]["title"] ?></div>
                <div class="subtitle"><?= $playlists[2]["author"] ?></div>
            </a>
            <a class="pinned-item flexitem" href="?type=playlist&id=1">
                <div class="cover"></div>
                <div class="title"><?= $playlists[1]["title"] ?></div>
                <div class="subtitle"><?= $playlists[1]["author"] ?></div>
            </a>
            <a class="pinned-item flexitem" href="?type=playlist&id=4">
                <div class="cover"></div>
                <div class="title"><?= $playlists[4]["title"] ?></div>
                <div class="subtitle"><?= $playlists[4]["author"] ?></div>
            </a>
        </div>
        <div class="tray songs-tray container flex flexrow">
        <?php foreach ($songs as $id => $song) {
            ;?>
            <a class="tray-item flexitem" href="?type=song&id=<?=$id+1?>">
                <div class="cover"></div>
                <div class="title"><?= $song["title"] ?></div>
                <div class="subtitle"><?= $song["artist"] ?></div>
            </a>
        <?php $id++; } ?>
        </div>
        <div class="tray playlists-tray  container flex flexrow">
        <?php foreach ($playlists as $id => $playlist) {
            ;?>
            <a class="tray-item flexitem" href="?type=playlist&id=<?=$id+1?>">
                <div class="cover"></div>
                <div class="title"><?= $playlist["title"] ?></div>
                <div class="subtitle"><?= $playlist["author"] ?></div>
            </a>
        <?php $id++; } ?>
        </div>
        <div class="tray recentplaylist-tray  container flex flexrow">
        <?php foreach ($songs as $id => $song) {
            ;?>
            <a class="tray-item flexitem" href="?type=song&id=<?=$id+1?>">
                <div class="cover"></div>
                <div class="title"><?= $song["title"] ?></div>
                <div class="subtitle"><?= $song["artist"] ?></div>
            </a>
        <?php $id++; } ?>
        </div>
        <div class="tray recentplaylist-tray  container flex flexrow">
        <?php foreach ($playlists as $id => $playlist) {
            ;?>
            <a class="tray-item flexitem" href="?type=playlist&id=<?=$id+1?>">
                <div class="cover"></div>
                <div class="title"><?= $playlist["title"] ?></div>
                <div class="subtitle"><?= $playlist["author"] ?></div>
            </a>
        <?php $id++; } ?>
        </div>
    </section>

</div>

    <floatbar id="floatbar" class="floatbar-container">
        <div class="floatbar container flex flexrow"> 
            <a onclick="floatbar.updateFavorite()" class="bigicon btn btn-fav flexitem" id="starred"></a>
            <div class="floatmid flexitem">
                <div class="title" id="title"></div>
                <div class="subtitle" id="subtitle"></div>
            </div>
            <div class="infotext flexitem" id="infotext"></div>
        </div>
    </floatbar>

    <section class="bottomnavbar-container">
        <nav class="bottomnavbar container flex nav">
            <a href="../main" class="btn nav-btn btn-home active"><br><div class="btn-text">Home</div></a>
            <a onclick="floatbar.toggleFloatbar()" class="btn nav-btn btn-settings"><br><div class="btn-text">Settings</div></a>
        </nav>
    </section>

</body>
<script src="../js/main.js"></script> 
<?php checkGET() ?>
</html>


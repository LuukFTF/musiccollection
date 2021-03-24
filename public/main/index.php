<?php
require_once "../webservice/model/model.php";

$songs[] = getSongs();

$playlists[] = getPlaylists();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-schale=1.0">
    <script type="text/javascript" src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/0bc22cc72a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
    <title>Home | Music Collection</title>
</head>
<body>

    <div class="webcontainer">
        <section class="homepage">
            <div class="pinned-block container flex flexrow">
                <div class="pinned-item flexitem">
                    <div class="cover"></div>
                    <div class="title"><?= $playlists[4]["title"] ?></div>
                    <div class="subtitle"><?= $playlists[4]["author"] ?></div>
                </div>
                <div class="pinned-item flexitem">
                    <div class="cover"></div>
                    <div class="title"><?= $playlists[2]["title"] ?></div>
                    <div class="subtitle"><?= $playlists[2]["author"] ?></div>
                </div>
                <div class="pinned-item flexitem">
                    <div class="cover"></div>
                    <div class="title"><?= $playlists[1]["title"] ?></div>
                    <div class="subtitle"><?= $playlists[1]["author"] ?></div>
                </div>
                <div class="pinned-item flexitem">
                    <div class="cover"></div>
                    <div class="title"><?= $playlists[4]["title"] ?></div>
                    <div class="subtitle"><?= $playlists[4]["author"] ?></div>
                </div>
            </div>
            <div class="tray songs-tray container flex flexrow">
            <?php foreach ($songs as $id => $song) {
                ;?>
                <div class="tray-item flexitem">
                    <div class="cover"></div>
                    <div class="title"><?= $song["title"] ?></div>
                    <div class="subtitle"><?= $song["artist"] ?></div>
                </div>
            <?php $id++; } ?>
            </div>
            <div class="tray playlists-tray  container flex flexrow">
            <?php foreach ($playlists as $id => $playlist) {
                ;?>
                <div class="tray-item flexitem">
                    <div class="cover"></div>
                    <div class="title"><?= $playlist["title"] ?></div>
                    <div class="subtitle"><?= $playlist["author"] ?></div>
                </div>
            <?php $id++; } ?>
            </div>
            <div class="tray recentplaylist-tray  container flex flexrow">
            <?php foreach ($songs as $id => $song) {
                ;?>
                <div class="tray-item flexitem">
                    <div class="cover"></div>
                    <div class="title"><?= $song["title"] ?></div>
                    <div class="subtitle"><?= $song["artist"] ?></div>
                </div>
            <?php $id++; } ?>
            </div>
            <div class="tray recentplaylist-tray  container flex flexrow">
            <?php foreach ($playlists as $id => $playlist) {
                ;?>
                <div class="tray-item flexitem">
                    <div class="cover"></div>
                    <div class="title"><?= $playlist["title"] ?></div>
                    <div class="subtitle"><?= $playlist["author"] ?></div>
                </div>
            <?php $id++; } ?>
            </div>
        </section>
    </div>

    <section class="bottomnavbar-container">
        <nav class="bottomnavbar container flex nav">
            <a href="../main" class="btn nav-btn btn-home active"><br><div class="btn-text">Home</div></a>
            <a href="../settings" class="btn nav-btn btn-settings"><br><div class="btn-text">Settings</div></a>
        </nav>
    </section>

</body>
</html>


<?php
require_once "model/model.php";

!isset($_GET['type']) ? $_GET['type'] = "" : "";

switch ($_GET['type']) {
    case 'song':
        if (!isset($_GET['id'])) {
            $data = getSongs();
        } else {
            $data = getSongDetails($_GET['id']);
        }
        break;
    case 'playlist':
        if (!isset($_GET['id'])) {
            $data = getPlaylists();
        } else {
            $data = getPlaylistDetails($_GET['id']);
        }
        break;
    default:
        if (!isset($_GET['id'])) {
            $data = getSongs();
        } else {
            $data = getSongDetails($_GET['id']);
        }
}


header("Content-Type: application/json");
echo json_encode($data);
exit;

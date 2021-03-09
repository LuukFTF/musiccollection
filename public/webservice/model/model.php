<?php
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__."/data/data.php");

/**
 * @return array
 */
function getSongs(){
    global $songs;

    return $songs;
}

/**
 * @param $id
 * @return mixed
 */
function getSongDetails($id){
    global $songDetails;

    return $songDetails[$id];
}

function getPlaylists(){
    global $playlists;

    return $playlists;
}

function getPlaylistDetails($id){
    global $playlistDetails;

    return $playlistDetails[$id];
}
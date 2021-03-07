<?php

$songs = [
    [
        "id" => 1,
        "title" => "When love runs out",
        "artist" => "Onerepublic",
        "image" => "",
    ],
];


$songDetails = [
    1 => [
        "length" => "",
        "tags" => ['', '']
    ],
];

/**
 * @return array
 */
function getSongs()
{
    global $songs;
    
    return $songs;
}

/**
 * @param $id
 * @return mixed
 */
function getSongDetails($id)
{
    global $songDetails;

    return $songDetails[$id];
}

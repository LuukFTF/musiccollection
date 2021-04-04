<?php 

function checkGET(){
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    
        if($_GET['type'] == 'song') {
            $song = getSongDetails($id);
        
            $titleContent = $song["date"];
            $subtitleContent = $song["tags"];
            $infotextContent = $song["length"];
    
        } else if($_GET['type'] == 'playlist') {
            $playlist = getPlaylistDetails($id);
        
            $titleContent = $playlist["datecreated"];
            $subtitleContent = $playlist["createdby"];
            $infotextContent = $playlist["totallength"];
        }
    
        fillFloatbar($titleContent, $subtitleContent, $infotextContent);
    }
}

function fillFloatbar($titleContent, $subtitleContent, $infotextContent) {
    echo '<script type="text/javascript">',
    'floatbar.fillFloatbar("'.$titleContent.'", "'.$subtitleContent.'", "'.$infotextContent.'");',
    '</script>';
}
?>

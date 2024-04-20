<?php

require_once 'post_media.php';

class Instagram implements Post_Media {
    public function chat(): void 
    {
        echo "Chatting on Instagram";
    }
    public function sendPhotosandVideos(): void
    {
        echo "Sending photos and videos on Instagram";
    }
    public function publishPost(): void {
        echo "Publishing post on Instagram";
    }
}
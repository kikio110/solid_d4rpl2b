<?php
require_once 'video_group_manager.php';

class Whatsapp implements Video_Group_Manager {
    public function chat(): void {
        echo "Chatting on Whatsapp";
    }
    public function callGroupVideo(): void {
        echo "Calling group video on Whatsapp";
    }
    public function sendPhotosandVideos(): void {
        echo "Sending photos and videos on Whatsapp";
    }

}
<?php
require_once 'social_media.php';
interface Video_Group_Manager extends Social_Media {
    public function callGroupVideo(): void;
}
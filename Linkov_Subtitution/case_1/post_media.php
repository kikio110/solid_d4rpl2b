<?php

require_once 'social_media.php';

interface Post_Media extends Social_Media {
    public function publishPost(): void;
}
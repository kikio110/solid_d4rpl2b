<?php

require_once 'dbms.php';

class MongoDB implements DBMS {
    public function createConnection(): void{
    echo "MongoDB connection created";
  }
}
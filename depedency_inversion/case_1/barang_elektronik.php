<?php

/**
 * Defines the interface for electronic devices that can be operated and stopped.
 */
interface BarangElektronik
{
    public function berOperasi(): void;
    public function berHenti(): void;
}

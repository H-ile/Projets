<?php
class Mon_exception extends Exception {
    public function __construct($message, $code = 255) {
        parent::__construct($message, $code);
        echo "<p>Mon_exception</p>";
    }
}

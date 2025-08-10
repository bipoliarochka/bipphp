<?php
// Repository: php-logging-system
// New Feature: Log levels (INFO, WARN, ERROR)

class Logger {
    private $logFile;

    public function __construct($file) {
        $this->logFile = $file;
    }

    public function log($level, $message) {
        $timestamp = date("Y-m-d H:i:s");
        file_put_contents($this->logFile, "[$timestamp] [$level] $message\n", FILE_APPEND);
    }
}

$logger = new Logger("app.log");
$logger->log("INFO", "Application started.");
$logger->log("ERROR", "An error occurred.");
?>

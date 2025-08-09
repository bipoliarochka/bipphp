<?php
// Repository: php-logging-system
// Description: A script to implement a simple logging system.

class Logger {
    private $logFile;

    public function __construct($file) {
        $this->logFile = $file;
    }

    public function log($message) {
        $timestamp = date("Y-m-d H:i:s");
        file_put_contents($this->logFile, "[$timestamp] $message\n", FILE_APPEND);
    }

    public function readLogs() {
        return file_exists($this->logFile) ? file_get_contents($this->logFile) : "No logs available.";
    }
}

$logger = new Logger("app.log");
$logger->log("User logged in.");
echo $logger->readLogs();
?>

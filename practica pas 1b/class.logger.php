<?php
class Logger {

	private $logFile; //nombre del fichero
	private $logLevel; //nivel para registrar los mensajes
	private $confile; //connexió del fitxer
	const DEBUG = 100;
	const INFO = 75;
	const NOTICE = 50;
	const WARNING = 25;
	const ERROR = 10;
	const CRITICAL = 5;

	private function __construct() {
			$this->logLevel = 100;
			$this->logFile = "logmessage.txt";
			echo "File: ".$this->logFile;

			$this->confile = fopen($this->logFile, 'a+');

	  		if (!is_resource($this->confile)){
	  			printf("No puedo abrir el fichero %s", $this->logFile);
	  			return false;
	  		}
	  		echo "Fichero abierto!";
	}

	public static function getInstance(){
		static $objLog;
		if(!isset($objLog)){
			$objLog = new Logger();
		}
		return $objLog;
	}

	public function __destruct(){
		if(is_resource($this->confile)){
			fclose($this->confile);
		}
	}


	public function logMessage($msg, $logLevel = Logger::INFO){
		if ($logLevel > $this->logLevel){
			return false;
		}

		date_default_timezone_set('America/New_York');
	  	$formatterDate = DateTimeImmutable::createFromFormat('U',time());
	  	$time = $formatterDate->format('Y-m-d H:i:s');

	  	$msg = str_replace("\t", "", $msg);
	  	$msg = str_replace("\n", "", $msg);

	  	$strloglevel = $this->levelToString($logLevel);

	  	$msg = $time."\t".$strloglevel."\t".$msg."\n";
	  	fwrite($this->confile, $msg);

	}

	public static function levelToString($logLevel = null){

		switch ($logLevel) {
			case Logger::DEBUG:
				return 'DEBUG';
				break;
			case Logger::INFO:
				return 'INFO';
				break;
			case Logger::NOTICE:
				return 'NOTICE';
				break;
			case Logger::WARNING:
				return 'WARNING';
				break;
			case Logger::ERROR:
				return 'ERROR';
				break;
			case Logger::CRITICAL:
				return 'CRITICAL';
				break;			
			default:
				return '[OTHER]';
				break;
		}

	}

}

$log = Logger::getInstance();
$log->logMessage('Texto a registrar', Logger::DEBUG);
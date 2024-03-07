<?php
	define('PW2_XML_IN_PROGRESS', true);
    // Disable debug by default. You can enable it here
	define('_PS_MODE_DEV_', false);
    // Disble profiling just in case someone forgot to disable it
	define('_PS_DEBUG_PROFILING_', false);

	require_once(__DIR__ . '/../../config/config.inc.php');
	if(!defined('SEIGI_NO_IONCUBE_CHECK') && !extension_loaded('ionCube Loader'))
		die('Brak zainstalowanego lub niepoprawnie skonfigurowane rozszerzenie IonCube Loader na serwerze. Prosimy skontaktować się z administracją serwera.');
    Configuration::set('PS_GEOLOCATION', 0);
    if(Tools::isPHPCLI())
        $_SERVER['REQUEST_METHOD'] = 'POST';

    // Dodatkowa, własna konfiguracja inicjalizacji
    if(file_exists(__DIR__ . '/service.init.php'))
        require_once(__DIR__ . '/service.init.php');

	if(isset($_GET['showerrors'])){
		ini_set('error_reporting', 'On');
		error_reporting(E_ALL);
	}
	if(class_exists('Context', false)) {
		$fc = new FrontController;
		$fc->init();
	}
	if( $mem_limit = (int) Configuration::get('PW2_MEM_LIMIT', null, 0, 0))
		ini_set("memory_limit", $mem_limit."M");

	if( $time_limit = (int) Configuration::get('PW2_SCRIPT_TIMEOUT', null, 0, 0))
		set_time_limit($time_limit);

    include_once(__DIR__ .'/pricewars2.php');

	try {
		$pricewars = new Pricewars2();
		if($pricewars->licenseDowngradeDetect()){
		    throw new Exception('Licencja modułu uległa zmianie na niższą. Licencja się skończyła i/lub uległa deaktywacji. Moduł został zablokowany aby uniknąć błędów w generowaniu pliku. Więcej szczegółów znajdziesz konfiguracji modułu.');
        }
		$pricewars->generateXML();
	} catch (Exception $e){
		header("Content-type: text/plain");
		echo $e->getMessage();
	}

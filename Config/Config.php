<?php 

	const BASE_URL = "https://adnpanel.p3adn.com";
	

	//Zona horaria
	date_default_timezone_set('America/Caracas');

	//Datos de conexiÃ³n a Base de Datos
	const DB_HOST = "localhost:3306";
	const DB_NAME = "p3adn_panel";
	const DB_USER = "p3adn_wapi";
	const DB_PASSWORD = 'Maximus10Meridium*';
	const DB_CHARSET = "utf8";
    
    //Datos de conexi¨®n a Base de Datos de Wapi
	const DB_NAME_WAPI = "p3adn_wpapi";

	//Datos de conexi¨®n a Base de Datos Principal de Panel
	const DB_HOST_PRINCIPAL = "162.245.236.18:3306";
	const DB_NAME_PRINCIPAL = "adnpanel_wpapi";
	const DB_USER_PRINCIPAL = "adnpanel_wapi";
	const DB_PASSWORD_PRINCIPAL = 'Maximus10Meridium*';
	const DB_CHARSET_PRINCIPAL = "utf8";
	
		// Datos Din¨¢micos (pueden ser actualizados)
	define('DB_HOST_DINAMICO', 'p6adn.com:3306');
	define('DB_NAME_DINAMICO', 'p6adn_panel');
	define('DB_USER_DINAMICO', 'p6adn_wapi');
	define('DB_PASSWORD_DINAMICO', 'Maximus10Meridium*');
	define('DB_CHARSET_DINAMICO', "utf8");
	
	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$";

 ?>
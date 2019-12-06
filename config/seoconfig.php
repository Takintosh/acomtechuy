<?php
	switch ($_SERVER["REQUEST_URI"]) {
		#The file makes decisions based on the requested URL
		case "/":
		case "/".$ROUTE_INICIO:
			$CURRENT_PAGE = "Inicio"; #Just a name (or ID) for the page
			$PAGE_FILE = "inicio.php"; #It calls the view, the content of the page.

			#Here comes the title and Meta tags
			$PAGE_TITLE = "ACOM Tech-Solutions";
			$PAGE_DESCRIPTION = "ACOM Tech-Solutions Asesoría y Desarrollo de Sitios Web y Soluciones de Software.";
			$PAGE_KEYWORDS = "acom, soluciones, software, rivera, uruguay, livramento, brasil, frontera, web, programacion";
			$PAGE_TITLE_SOCIAL = $PAGE_TITLE;
			$PAGE_DESCRIPTION_SOCIAL = $PAGE_DESCRIPTION;
			$PAGE_IMAGE_SOCIAL = "acom-tech-solutions.webp";
			$PAGE_URL_SOCIAL = "acomtech.uy" . $_SERVER["REQUEST_URI"];
			$PAGE_TWITTER_SITE = "@ACOMTechUY";
			$PAGE_TWITTER_CREATOR = "@ACOMTechUY";
			break;

		case "/".$ROUTE_SERVICIOS:
			$CURRENT_PAGE = "Servicios";
			$PAGE_FILE = "servicios.php";
			$PAGE_TITLE = "ACOM Tech-Solutions | Servicios";
			$PAGE_DESCRIPTION = "ACOM Tech-Solutions Asesoría y Desarrollo de Sitios Web y Soluciones de Software.";
			$PAGE_KEYWORDS = "acom, soluciones, software, rivera, uruguay, livramento, brasil, frontera, web, programacion";
			$PAGE_TITLE_SOCIAL = $PAGE_TITLE;
			$PAGE_DESCRIPTION_SOCIAL = $PAGE_DESCRIPTION;
			$PAGE_IMAGE_SOCIAL = "acom-tech-solutions.webp";
			$PAGE_URL_SOCIAL = "acomtech.uy" . $_SERVER["REQUEST_URI"];
			$PAGE_TWITTER_SITE = "@ACOMTechUY";
			$PAGE_TWITTER_CREATOR = "@ACOMTechUY";
			break;

		case "/".$ROUTE_OUTSOURCE:
			$CURRENT_PAGE = "Outsource";
			$PAGE_FILE = "outsource.php";
			$PAGE_TITLE = "ACOM Tech-Solutions | Outsource";
			$PAGE_DESCRIPTION = "ACOM Tech-Solutions Asesoría y Desarrollo de Sitios Web y Soluciones de Software.";
			$PAGE_KEYWORDS = "acom, soluciones, software, rivera, uruguay, livramento, brasil, frontera, web, programacion";
			$PAGE_TITLE_SOCIAL = $PAGE_TITLE;
			$PAGE_DESCRIPTION_SOCIAL = $PAGE_DESCRIPTION;
			$PAGE_IMAGE_SOCIAL = "acom-tech-solutions.webp";
			$PAGE_URL_SOCIAL = "acomtech.uy" . $_SERVER["REQUEST_URI"];
			$PAGE_TWITTER_SITE = "@ACOMTechUY";
			$PAGE_TWITTER_CREATOR = "@ACOMTechUY";
			break;

		case "/".$ROUTE_SOBRE:
			$CURRENT_PAGE = "Sobre";
			$PAGE_FILE = "sobre.php";
			$PAGE_TITLE = "ACOM Tech-Solutions | Sobre Nosotros";
			$PAGE_DESCRIPTION = "ACOM Tech-Solutions Asesoría y Desarrollo de Sitios Web y Soluciones de Software.";
			$PAGE_KEYWORDS = "acom, soluciones, software, rivera, uruguay, livramento, brasil, frontera, web, programacion";
			$PAGE_TITLE_SOCIAL = $PAGE_TITLE;
			$PAGE_DESCRIPTION_SOCIAL = $PAGE_DESCRIPTION;
			$PAGE_IMAGE_SOCIAL = "acom-tech-solutions.webp";
			$PAGE_URL_SOCIAL = "acomtech.uy" . $_SERVER["REQUEST_URI"];
			$PAGE_TWITTER_SITE = "@ACOMTechUY";
			$PAGE_TWITTER_CREATOR = "@ACOMTechUY";
			break;

		case "/".$ROUTE_CONTACTO:
			$CURRENT_PAGE = "Contacto";
			$PAGE_FILE = "contacto.php";
			$PAGE_TITLE = "ACOM Tech-Solutions | Contacto";
			$PAGE_DESCRIPTION = "ACOM Tech-Solutions Asesoría y Desarrollo de Sitios Web y Soluciones de Software.";
			$PAGE_KEYWORDS = "acom, soluciones, software, rivera, uruguay, livramento, brasil, frontera, web, programacion";
			$PAGE_TITLE_SOCIAL = $PAGE_TITLE;
			$PAGE_DESCRIPTION_SOCIAL = $PAGE_DESCRIPTION;
			$PAGE_IMAGE_SOCIAL = "acom-tech-solutions.webp";
			$PAGE_URL_SOCIAL = "acomtech.uy" . $_SERVER["REQUEST_URI"];
			$PAGE_TWITTER_SITE = "@ACOMTechUY";
			$PAGE_TWITTER_CREATOR = "@ACOMTechUY";
			break;

		default:
			#As default, we call the 404 page. So every URL that doesn't match with the site routes redirects to a 404 page.
			$CURRENT_PAGE = "404";
			$PAGE_FILE = "404.php";
			$PAGE_TITLE = "ACOM Tech-Solutions | Error 404";
			break;
			
	}
?>
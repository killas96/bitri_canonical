<?

$protocol = (CMain::IsHTTPS()) ? "https://" : "http://";
if (isset($_REQUEST['PAGEN_1']) || isset($_REQUEST['set_filter']) )
	\Bitrix\Main\Page\Asset::getInstance()->addString('<link rel="canonical" href="' . $protocol . $_SERVER['HTTP_HOST'] . $APPLICATION->GetCurPage(false) . '" />');

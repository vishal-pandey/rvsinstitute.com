<?php require 'config.php'; ?>
<?php
	$sqlAbout = 'SELECT * FROM `about`';
	$stmtAbout = $conn->prepare($sqlAbout);
	$stmtAbout->execute();
	$rowAbt = $stmtAbout->fetch(PDO::FETCH_ASSOC);
	$count = $stmtAbout->rowCount();
	if($count == 1){
		define('CompanyName', $rowAbt['Abt_Name'], true);
		define('Address1', $rowAbt['Abt_Address1'], true);
		define('Address2', $rowAbt['Abt_Address2'], true);
		define('Address3', $rowAbt['Abt_Address3'], true);
		define('CountryID', $rowAbt['CountryID'], true);
		define('StateID', $rowAbt['StateID'], true);
		define('DistrictID', $rowAbt['DistrictID'], true);
		define('City', $rowAbt['Abt_City'], true);
    define('Pin', $rowAbt['Abt_Pin'], true);
		define('Mobile', $rowAbt['Abt_Mobile'], true);
		define('AlternateMobile', $rowAbt['Abt_AltMobile'], true);
		define('Email', $rowAbt['Abt_EmailInfo'], true);
		define('AdminEmail', $rowAbt['Abt_EmailAdmin'], true);
		define('Website', $rowAbt['Abt_Website'], true);
		define('EstablishmentYear', $rowAbt['Abt_EstablishmentYear'], true);
		define('EstablishmentMonth', $rowAbt['Abt_EstablishmentMonth'], true);
    define('EstablishmentDate', $rowAbt['Abt_EstablishmentDate'], true);
    define('FacebookLink', $rowAbt['Abt_Facebook'], true);
    define('TwitterLink', $rowAbt['Abt_Twitter'], true);
    define('GoogleLink', $rowAbt['Abt_Google'], true);
    define('YoutubeLink', $rowAbt['Abt_Youtube'], true);
    define('Tagline', $rowAbt['Abt_Tagline'], true);
    
    $sqlCountry = 'SELECT * FROM `country` WHERE `CountryID`='.CountryID.'';
    $stmtCountry = $conn->prepare($sqlCountry);
    $stmtCountry->execute();
    $rowCountry = $stmtCountry->fetch(PDO::FETCH_ASSOC);
    define('CountryName', $rowCountry['Country_Name'], true);
    define('CountryISO', $rowCountry['Country_2Name'], true);
    define('CountryCode3', $rowCountry['Country_3Name'], true);
    define('CountryISD', $rowCountry['Country_ISD'], true);
    
    $sqlState = 'SELECT * FROM `state` WHERE `StateID`='.StateID.'';
    $stmtState = $conn->prepare($sqlState);
    $stmtState->execute();
    $rowState = $stmtState->fetch(PDO::FETCH_ASSOC);
    define('StateName', $rowState['State_Name'], true);
    define('StateCode', $rowState['State_Code'], true);
    if(empty($rowState['State_Longitude'])){
        define('StateLongitude', '20.5937', true);
      } else {
        define('StateLongitude', $rowState['State_Longitude'], true);
      }
    if(empty($rowState['State_Latitute'])){
        define('StateLatitude', '78.9629', true);
      } else {
        define('StateLatitude', $rowState['State_Latitute'], true);
      }
      
    
    $sqlDist = 'SELECT * FROM `district` WHERE `DistrictID`='.DistrictID.'';
    $stmtDist = $conn->prepare($sqlDist);
    $stmtDist->execute();
    $rowDist = $stmtDist->fetch(PDO::FETCH_ASSOC);
    define('DistrictName', $rowDist['Dist_Name'], true);
      if(empty($rowDist['Dist_Longitude'])){
        define('DistrictLongitude', '20.5937', true);
      } else {
        define('DistrictLongitude', $rowDist['Dist_Longitude'], true);
      }
    if(empty($rowDist['Dist_Latitude'])){
        define('DistrictLatitude', '78.9629', true);
      } else {
        define('DistrictLatitude', $rowDist['Dist_Latitute'], true);
      }
    
    
    
	} else {
		define('CompanyName', 'Name Of The Company', true);
		define('CompanyEstYear', '2009', true);
		define('CompanyAddress', 'Company Address', true);
		define('CompanyCity', 'City', true);
		define('CompanyCountry', 'Country', true);
		define('CompanyCountryCode', 'Country Code', true);
		define('CompanyPhone', 'Phone', true);
		define('CompanyMobile', 'Mobile', true);
	}
?>
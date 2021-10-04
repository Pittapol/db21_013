<?php
$controllers = array('pages'=>['home', 'error'],'quotation'=>['index','newquotation','search'],'quotationdetail'=>['index','newquotationdetail','search','updateForm']); 

function call($controller, $action){
	echo "<br>routes to " . $controller . " - " . $action . "<br><br>";
    require_once("controllers/".$controller."_controller.php"); 
	switch($controller)
	{
		case "pages":	
				$controller = new PagesController();
				break;
		case "quotation" : 	
				require_once("models/quotationModel.php");
				$controller = new QuotationController();
				break;
		case "quotationdetail" : 	
				require_once("models/quotationdetailModel.php");
				$controller = new QuotationDetailController();
				break;
		case "newquotationdetail" : 
				require_once("models/quotationdetailModel.php");
				$controller = new QuotationDetailController();
				break;
		case "newQuotation" :
				require_once("models/quotationModel.php");
				$controller = new QuotationController();
				break;

	}
    $controller->{$action}();
}
if(array_key_exists($controller,$controllers))
{
    if(in_array($action,$controllers[$controller]))
    {
        call($controller,$action); }
    else
    {   call('pages','error');}
}
    else
    {   call('pages','error');}
    ?>
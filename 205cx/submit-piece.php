<?php

$this->execPieceByName('ff_InitLib');

if(ff_getSubmit('validation') != '' ){
exit();
}

$department = ff_getSubmit('department');
$recipients = array( 'info@ewboats.com' );

$address = ff_getSubmit('address');
$city = ff_getSubmit('city');
$state = ff_getSubmit('STATE');
$country = ff_getSubmit('country');
$post_code = ff_getSubmit('post_code');
$completeAddress = $address.' '.$city.' '.$state.' '.$post_code.' '.$country;
$tagmodel = ff_getSubmit('model_id');

//Get nearest Dealer data within miles
$locations = ff_locateByAddress($completeAddress, 300, 364, $tagmodel);
if( count($locations) > 0)
{
$dealer = $locations[0];
if (!empty($dealer->email))
$recipients[] = $locations[0]->email;

if (!empty($dealer->cust1))
$recipients[] = $locations[0]->cust1;

if (!empty($dealer->cust2))
$recipients[] = $locations[0]->cust2;

if (!empty($dealer->cust3))
$recipients[] = $locations[0]->cust3;

if (!empty($dealer->cust4))
$recipients[] = $locations[0]->cust4;

if (!empty($dealer->cust5))
$recipients[] = $locations[0]->cust5;
}

//Get Dealer ID, which is added via FaceBook field in Store Locator
$dealerId = $dealer->facebook;
//Get Order ID and create a link to the order
$insideEdgeLink = 'http://eworders.com/quotes/edit/' . ff_getSubmit('order_id');

global $ff_compath;
$file = JPATH_SITE . '/administrator/components/com_breezingforms/pdftpl/' . $this->formrow->name . '_pdf_attachment.php';
if (!JFile::exists($file)) {
$file = JPATH_SITE . '/administrator/components/com_breezingforms/pdftpl/pdf_attachment.php';
}

$processed = array();
$xmldata = array();

$_xmldata = $this->xmldata;

foreach ($_xmldata as $data) {
$xmldata[] = $data;
}

ob_start();
require($file);
$c = ob_get_contents();
ob_end_clean();

require_once(JPATH_SITE . '/administrator/components/com_breezingforms/libraries/tcpdf/tcpdf.php');
$pdf = new TCPDF();
$pdf->setPrintHeader(false);
$pdf->AddPage();
$pdf->writeHTML($c);
mt_srand();
$pdfprename = '/exports/download-pdf-' . date('YmdHis') . '-' . mt_rand(0, mt_getrandmax()) . '.pdf';
$pdfname = $ff_compath . $pdfprename;
$pdf->lastPage();
$pdf->Output($pdfname, "F");

$pdfurl = 'http://www.ewboats.com/components/com_breezingforms' . $pdfprename;

$email_dealer = ff_getSubmit('email_dealer');
$first_name = ff_getSubmit('first_name');
$last_name = ff_getSubmit('last_name');
$email = ff_getSubmit('email');
$phone = ff_getSubmit('phone');
$apartment = ff_getSubmit('apartment');
$city = ff_getSubmit('city');
$state = ff_getSubmit('state');
$post_code = ff_getSubmit('post_code');
$country = ff_getSubmit('country');
$area = ff_getSubmit('area');
$referred_by = ff_getSubmit('referred_by');
$comments = ff_getSubmit('comments');
$catalog = ff_getSubmit('catalog');
$model = ff_getSubmit('model');


$message = 'The following person has completed the build my boat for the 205CX, below is a link to a printable PDF with their boat details.' . "\r\n" . "\r\n" . 'Inside Edge Quote: ' . $insideEdgeLink . "\r\n" . "\r\n" . 'Name: ' . $first_name . ', ' . $last_name . "\r\n" . 'Email: ' . $email . "\r\n" . 'Phone: ' . $phone . "\r\n" . "\r\n" . 'Address:' . "\r\n" . $address . $apartment . "\r\n" . $city . ', ' . $state . ' ' . $post_code . "\r\n" . $country . "\r\n" . "\r\n" . 'In what geographic area do you do your boating? ' . $area . "\r\n" . "\r\n" . 'How did you find out about us? ' . $referred_by . "\r\n" . "\r\n" . 'Comments: ' . $comments . "\r\n" . "\r\n" . 'Additional requests: ' . $catalog . "\r\n" . "\r\n" . 'Click this link to view the PDF: ' . $pdfurl; 
		
$from = 'info@ewboats.com';
$fromname = 'EdgeWater Boats';
$subject = 'EdgeWater Boat - 205CX Deep-V Center Console';
$this->sendMail($from, $fromname, $recipients, $subject, $message);  // EMAILS THE FORM

//Send order info to Xtern
echo
'<form method="post" name="myresubmit" name="myresubmit" action="http://live-ew-app.xternsoftware.com/">
   <input type="hidden" id="cmd" name="cmd" value="order_shok_update_billto"/>
   <input type="hidden" id="billto_id" name="billto_id" value="'.$dealerId.'"/>
   <input type="hidden" id="order_id" name="order_id" value="'.htmlentities( ff_getSubmit('order_id') ).'"/>
   <input type="hidden" id="session_id" name="session_id" value="ee1bf774-3a66-414c-93bc-d085044147e3"/>
   <input type="hidden" id="return_url" name="return_url" value="'.htmlentities( ff_getSubmit('return_url') ).'"/>
</form>
<script>
document.myresubmit.submit();
</script>
';

exit;

?>
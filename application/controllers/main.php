<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Main extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view("view_main");
	}


	public function view_my_custom_index_email()
	{
		$this->load->view("view_email_v2");
	}
	

	public function send_email()
	{
		//echo $this->create_excel_sheet();
		$this->load->library('email');
		$this->email->from('applications@kershless.com','Kershless');
		$this->email->to('heshamhamdymassoud@gmail.com');
		$this->email->subject('Weekly Kershless Applications');
		$message_old = "<div id=\"body\" style=\"color:#16a085;font-size:16px;font-family: 'Open Sans',sans-serif;\">
				Dear Kershless Administrator,
				<p>
				Kindly find attatched in this e-mail, this week's <b>Kershless applications' report.</b>
				</p>
				<p>--------------------------------------------------------------------------------------------------------------------------------------------</p>
				<div  id=\"footer\" style=\"font-size:12px;\">
				If you wish to download the report instantly without having to wait a week for each weekly 				report, kindly use this link :-
				<p>
				http://wwww.kershless.com/download_report/0gBcwgbMv97fK+Q6IAywUMU4vbU=
				</p>
					
				</div>
				<p>
				Best Regards,
				<p>The Kershless System.</p>
				</p>
				</div>";
			
		$message_new = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
				<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns=\"http://www.w3.org/1999/xhtml\" style=\"width: 100%;\">
				<head>
				<!-- Define Charset -->
				<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
				<!-- Responsive Meta Tag -->
				<meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; maximum-scale=1.0;\" />
				<!-- Facebook sharing information tags -->
				<meta property=\"og:title\" content=\"*|MC:SUBJECT|*\" />
				<title>Kershless Email Notification</title>
				</head>
				<body style=\"width: auto !important; text-align: left; background-color: white; margin: 0px; padding: 0px;\" bgcolor=\"white\"><style type=\"text/css\">
				@font-face { font-family: GE SS Text UltraLight !important; src: url('/Assets/fonts/GE SS Text UltraLight.otf') format(\"opentype\") !important; }
				&gt;</style>&#13;
				&#13;
				<table width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"contentbg\" style=\"background-color: white;\" bgcolor=\"white\"><tr><td valign=\"top\">&#13;
				<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td class=\"templateColor01\" valign=\"top\" style=\"background-color: #181818; padding: 0;\" bgcolor=\"#181818\">&#13;
				<!-- // Begin Template PreHeader \\ -->&#13;
				<table class=\"BoxWrap\" width=\"50%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 280px !important;\"><tr><td height=\"30\">&#13;
				<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td class=\"text\" mc:edit=\"header_Txt\" style=\"color: white; font-family: 'Arial', sans-serif; font-size: 13px; font-weight: normal; line-height: 18px; text-align: left; text-decoration: none; padding: 10px 0;\" align=\"left\">&#13;
				<a href=\"#\" style=\"color: white; font-family: 'Arial', sans-serif; font-size: 14px; font-weight: normal; line-height: 18px; text-align: left; text-decoration: none;\">www.kershless.com</a>&#13;
				</td>&#13;
				<td class=\"text\" mc:edit=\"header_FindUs\" style=\"text-align: right; color: white; font-family: 'Arial', sans-serif; font-size: 13px; font-weight: normal; line-height: 18px; text-decoration: none;\" align=\"right\">&#13;
				Find us on:&#13;
				</td>&#13;
				<td>&#13;
				<a href=\"www.fb.com/kershless\" style=\"font-family: 'Arial', sans-serif; font-size: 14px; font-weight: normal; line-height: 18px; color: #77cc33; text-align: left; text-decoration: none;\">&#13;
				<img align=\"right\" src=\"http://kershless.com/Assets/Icons/social_03.png\" alt=\"icon\" style=\"max-width: 22px; max-height: 22px; outline: none; text-decoration: none; display: block; border: 0px none;\" mc:label=\"image\" mc:edit=\"icon_image03\" /></a>&#13;
				</td>&#13;
				<td>&#13;
				<a href=\"www.twitter.com/kershless\" style=\"font-family: 'Arial', sans-serif; font-size: 14px; font-weight: normal; line-height: 18px; color: #77cc33; text-align: left; text-decoration: none;\">&#13;
				<img align=\"right\" src=\"http://kershless.com/Assets/Icons/social_02.png\" alt=\"icon\" style=\"max-width: 22px; max-height: 22px; outline: none; text-decoration: none; display: block; border: 0px none;\" mc:label=\"image\" mc:edit=\"icon_image02\" /></a>&#13;
				</td>&#13;
				<td>&#13;
				<a href=\"www.youtube.com/kershless\" style=\"font-family: 'Arial', sans-serif; font-size: 14px; font-weight: normal; line-height: 18px; color: #77cc33; text-align: left; text-decoration: none;\">&#13;
				<img align=\"right\" src=\"http://kershless.com/Assets/Icons/social_4.png\" alt=\"icon\" style=\"max-width: 22px; max-height: 22px; outline: none; text-decoration: none; display: block; border: 0px none;\" mc:label=\"image\" mc:edit=\"icon_image01\" /></a>&#13;
				</td>&#13;
				</tr></table></td>&#13;
				</tr></table><!-- // End Template PreHeader \\ --></td>&#13;
				</tr><!-- // ********************************************************************************************************* \\ --><tr><td class=\"templateColor02\" valign=\"bottom\" style=\"background-color: #00A085; padding: 0;\" bgcolor=\"#00A085\">&#13;
				<!-- // Begin Template Header \\ -->&#13;
				<table class=\"BoxWrap\" width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 280px !important;\"><tr><td>&#13;
				<table class=\"BoxWrap\" border=\"0\" width=\"290\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 280px !important;\"><tr><td align=\"center\">&#13;
				<img src=\"http://kershless.com/Assets/Images/shady_email.png\" style=\"max-width: 662px; max-height: 581px; outline: none; text-decoration: none; display: block; border: 0px;\" mc:label=\"image\" mc:edit=\"model238x484\" /></td>&#13;
				<td class=\"title\" style=\"text-align: center; color: white; font-family: GE SS Text UltraLight; font-size: 24px; line-height: 30px; text-decoration: none;\" align=\"center\"><a href=\"www.kershless.com\" style=\"font-family: 'Arial', sans-serif; font-size: 14px; font-weight: normal; line-height: 18px; color: #77cc33; text-align: left; text-decoration: none;\"><img src=\"http://kershless.com/Assets/Images/kershless_logo_email.png\" alt=\"logo\" style=\"max-width: 401px; max-height: 194px; outline: none; text-decoration: none; display: block; border: 0px none;\" mc:label=\"image\" mc:edit=\"logo\" /></a>	شكرا لتسجيلك معنا &#13;
				<br />&#13;
				سيتم التواصل معاك لاحقا&#13;
				<hr width=\"250\" />&#13;
				كود تسجيلك&#13;
				<br /><label style=\"font-family: Impact, Charcoal, sans-serif; color: black;\">13KM22</label>&#13;
				<br />&#13;
				ممكن تديه لصحابك لو عاوزهم معاك في نفس الموسم &#13;
				<hr width=\"250\" /></td>&#13;
				</tr></table></td>&#13;
				</tr></table><!-- // End Template Header \\ --></td>&#13;
				</tr><!-- // ********************************************************************************************************* \\ --><tr><td class=\"templateColor01\" valign=\"top\" style=\"background-color: #181818; padding: 30px 0px;\" align=\"center\" height=\"100\" mc:edit=\"footer_Copyrights\" bgcolor=\"#181818\">&#13;
				<!-- // Begin Module: Footer \\ -->&#13;
				&#13;
				<a href=\"#\" class=\"button\" style=\"color: white; font-family: 'Arial', sans-serif; font-size: 11px; font-weight: normal; line-height: 14px; text-align: center; text-decoration: none;\">© Copyright 2013 - All Rights Reserved Kershless</a>			 &#13;
				<!-- // End Module: Footer \\ -->&#13;
				</td>&#13;
				</tr></table></td>&#13;
				</tr></table><!--Table End--></body>
				</html>
				";

		$message_newest = "
				<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
				<html xmlns=\"http://www.w3.org/1999/xhtml\" style=\"width: 100%;\">
				<head>


				<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />


				<meta name=\"viewport\"
				content=\"width=device-width; initial-scale=1.0; maximum-scale=1.0;\" />



				<title>Kershless Email Notification</title>


				</head>

				<body dir=\"rtl\" style=\"width: auto !important; font-family: DINNextLTArabic-Light; font-size: 100%; clear: both; background-color: white; padding: 20px;\" bgcolor=\"white\">
				<table class=\"body\" style=\"border-spacing: 0px; position: relative; border-collapse: collapse; width: 670px; margin-bottom: 25px;\">
				<tr style=\"width: 100%;\">
				<th rowspan=\"4\"></th>
				<th rowspan=\"4\"></th>
				</tr>
				<tr style=\"width: 100%;\">
				<td class=\"icon\" rowspan=\"3\"><img
				src=\"http://www.kershless.com/Assets/Images/email_logo.jpg\" /></td>
				<td class=\"content\" colspan=\"3\" style=\"width: 100%;\">
				<h1>أهلا في &reg;Kershless </h1> شكرا لتسجيلك معنا سيتم التواصل معك
				لاحقا<br /> كود التسجيل الخاص بيك هوا 13KM22<br /> <br /> يمكن
				لأصدقائك استخدام كود التسجيل الخاص بك إذا أردتم الإشتراك في نفس
				الموسم
				</td>
				</tr>
				<tr style=\"width: 100%;\">
				<td></td>
				<td style=\"width: 100%;\">
				<hr style=\"height: 0.5px; color: #C0C0C0; background-color: #C0C0C0; border: none;\" />
				follow us on: <a href=\"https://www.facebook.com/Kershless\" target=\"_blank\" style=\"text-decoration: none; color: #666666;\">fb</a>
				| <a href=\"http://www.twitter.com/kershless\" target=\"_blank\" style=\"text-decoration: none; color: #666666;\">twitter</a>
				| <a href=\"http://www.youtube.com/kershless\" target=\"_blank\" style=\"text-decoration: none; color: #666666;\">youtube</a>
					
				</td>
				</tr>
				</table>



				<style type=\"text/css\">
				body { width: auto !important; }
				body { width: auto !important; }
				body { background-color: white !important; padding: 20px !important; width: 100% !important; font-family: DINNextLTArabic-Light !important; font-size: 100% !important; clear: both !important; }
				</style>
				</body>
				</html>


				";
		$this->email->message($message_newest);
		$pathToUploadedFile = "test.csv";
		//$this->email->attach($pathToUploadedFile);
		$this->email->send();
		echo $this->email->print_debugger();
	}
}






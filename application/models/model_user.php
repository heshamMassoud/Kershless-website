<?php
/**
 * User model class
 *
 * PHP version 5

 * @category  PHP
 * @package   Models
 * @author    Hesham Massoud <hesham.massoud@tum.de>
 * @copyright 2013-2016 Kershless
 * @license   http://git.io/vtE5Z GNU GENERAL PUBLIC LICENSE
 * @link      http://www.kershless.com
 */

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * User model class
 *
 * PHP version 5

 * @category  PHP
 * @package   Models
 * @author    Hesham Massoud <hesham.massoud@tum.de>
 * @copyright 2013-2016 Kershless
 * @license   http://git.io/vtE5Z GNU GENERAL PUBLIC LICENSE
 * @link      http://www.kershless.com
 */
class Model_User extends CI_MODEL
{
    /**
     * Fetches all User records from the db
     *
     * @return Array containing all user records in the db
     */
    public function getAllData()
    {
        $query = $this->db->query('SELECT * FROM User');
        return $query->result();
    }

    /**
     * Fetches all User records who have gender = 'male' from the db
     *
     * @return Array containing all male users' records in the db
     */
    public function getAllMaleData()
    {
        $query = $this->db
            ->query("SELECT * FROM User WHERE gender = 'male' ORDER BY date");
        return $query->result();
    }

    /**
     * Fetches all User records who have gender = 'female' from the db
     *
     * @return Array containing all female users' records in the db
     */
    public function getAllFemaleData()
    {
        $query = $this->db
            ->query("SELECT * FROM User WHERE gender = 'female' ORDER BY date");
        return $query->result();
    }

    /**
     * Notifies a user by sending an email that
     * an applicant added him/her as friend in the application.
     *
     * @param int(11) $applicant_id  The ID of the applicant who added a
     *                               friend's Kershless code.
     * @param Array   $friend_record An array representing the full record
     *                               of the friend from the User model
     *
     * @return void
     */
    public function notifyFriend($applicant_id, $friend_record)
    {
        $applicant_record = $this->db
            ->get_where('User', array('id' => $applicant_id))->row();
        $applicant_fullname = $applicant_record->full_name;
        $applicant_email = $applicant_record->email;
        $applicant_friend_code = $applicant_record->friend_code;

        $friend_fullname = $friend_record->full_name;
        $friend_email = $friend_record->email;

        $this->load->library('email');
        $this->email->from('applications@kershless.com', 'Kershless');
        $this->email->to($friend_email);
        $this->email->subject('Kershless Notification');
        $message = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"
                \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
				<html xmlns=\"http://www.w3.org/1999/xhtml\"
                xmlns=\"http://www.w3.org/1999/xhtml\" style=\"width: 100%;\">
				<head>
				<!-- Define Charset -->
				<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
				<!-- Responsive Meta Tag -->
				<meta name=\"viewport\" content=\"width=device-width;
                initial-scale=1.0; maximum-scale=1.0;\" />
				<!-- Facebook sharing information tags -->
				<meta property=\"og:title\" content=\"*|MC:SUBJECT|*\" />
				<title>Kershless Email Notification</title>
				</head>
				<body style=\"width: auto !important; text-align: left; background-color:
                white; margin: 0px; padding: 0px;\"
                bgcolor=\"white\"><style type=\"text/css\">
				@font-face { font-family: GE SS Text UltraLight !important;
                src: url('/kershlesswebsite/Assets/fonts/GE SS Text UltraLight.otf')
                format(\"opentype\") !important; }
				&gt;</style>&#13;
				&#13;
				<table width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"0\"
                cellspacing=\"0\" class=\"contentbg\"
                style=\"background-color: white;\"
                bgcolor=\"white\"><tr><td valign=\"top\">&#13;
				<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr>
                <td class=\"templateColor01\" valign=\"top\"
                style=\"background-color: #34495e;
                padding: 0;\" bgcolor=\"#34495e\">&#13;
				<!-- // Begin Template PreHeader \\ -->&#13;
				<table class=\"BoxWrap\" width=\"50%\" border=\"0\" align=\"center\"
                cellpadding=\"0\" cellspacing=\"0\"
                style=\"width: 280px !important;\">
                <tr><td height=\"30\">&#13;
				<table width=\"100%\" border=\"0\"
                 cellspacing=\"0\" cellpadding=\"0\">
                <tr><td class=\"text\" mc:edit=\"header_Txt\" style=\"color: white;
                font-family: 'Arial', sans-serif;
                font-size: 13px; font-weight: normal;
                line-height: 18px; text-align: left;
                text-decoration: none; padding: 10px 0;\" align=\"left\">&#13;
				<a href=\"#\" style=\"color: white; font-family: 'Arial', sans-serif;
                font-size: 14px; font-weight: normal;
                line-height: 18px; text-align: left;
                text-decoration: none;\">www.kershless.com</a>&#13;
				</td>&#13;
				<td class=\"text\" mc:edit=\"header_FindUs\" style=\"text-align: right;
                color: white; font-family: 'Arial', sans-serif; font-size: 13px;
                font-weight: normal; line-height: 18px;
                text-decoration: none;\" align=\"right\">&#13;
				Find us on:&#13;
				</td>&#13;
				<td>&#13;
				<a href=\"www.fb.com/kershless\"
                style=\"font-family: 'Arial', sans-serif;
                font-size: 14px; font-weight: normal;
                line-height: 18px; color: #77cc33;
                text-align: left; text-decoration: none;\">&#13;
				<img align=\"right\" src=\"http://kershless.com/Assets/Icons/social_03.png\"
                alt=\"icon\" style=\"max-width: 22px;
                max-height: 22px; outline: none;
                text-decoration: none; display: block;
                border: 0px none;\" mc:label=\"image\"
                mc:edit=\"icon_image03\" /></a>&#13;
				</td>&#13;
				<td>&#13;
				<a href=\"www.twitter.com/kershless\" style=\"font-family: 'Arial', sans-serif;
                font-size: 14px; font-weight: normal; line-height: 18px;
                color: #77cc33; text-align: left; text-decoration: none;\">&#13;
				<img align=\"right\" src=\"http://kershless.com/Assets/Icons/social_02.png\"
                alt=\"icon\" style=\"max-width: 22px;
                max-height: 22px; outline: none;
                text-decoration: none; display: block;
                border: 0px none;\" mc:label=\"image\"
                mc:edit=\"icon_image02\" /></a>&#13;
				</td>&#13;
				<td>&#13;
				<a href=\"www.youtube.com/kershless\" style=\"font-family: 'Arial', sans-serif;
                font-size: 14px; font-weight: normal;
                line-height: 18px; color: #77cc33; text-align: left;
                text-decoration: none;\">&#13;
				<img align=\"right\" src=\"http://kershless.com/Assets/Icons/social_4.png\"
                alt=\"icon\" style=\"max-width: 22px;
                max-height: 22px; outline: none;
                text-decoration: none; display: block;
                border: 0px none;\" mc:label=\"image\"
                mc:edit=\"icon_image01\" /></a>&#13;
				</td>&#13;
				</tr></table></td>&#13;
				</tr></table><!-- // End Template PreHeader \\ --></td>&#13;
				</tr><!-- // **********************************
                ************************************************
                *********************** \\ --><tr><td class=\"templateColor02\"
                valign=\"bottom\" style=\"background-color: #00A085; padding: 0;
                \" bgcolor=\"#00A085\">&#13;
				<!-- // Begin Template Header \\ -->&#13;
				<table class=\"BoxWrap\" width=\"100%\" border=\"0\"
                align=\"center\" cellpadding=\"0\" cellspacing=\"0\"
                style=\"width: 280px !important;\"><tr><td>&#13;
				<table class=\"BoxWrap\" border=\"0\" width=\"290\"
                align=\"left\" cellpadding=\"0\" cellspacing=\"0\"
                style=\"width: 280px !important;\"><tr><td align=\"center\">&#13;
				</td>&#13;
				<td class=\"title\" style=\"text-align: center;
                color: white; font-family: GE SS Text UltraLight;
                font-size: 24px; line-height: 30px; text-decoration: none;
                \" align=\"center\"><a href=\"www.kershless.com\"
                style=\"font-family: 'Arial', sans-serif; font-size: 14px;
                font-weight: normal; line-height: 18px; color: #77cc33;
                text-align: left; text-decoration: none;\">
                <img src=\"http://kershless.com/Assets/Images/small_email.png\"
                alt=\"logo\" style=\"max-width: 401px; max-height: 194px;
                outline: none; text-decoration: none; display: block;
                border: 0px none;\" mc:label=\"image\" mc:edit=\"logo\" /></a>&#13;
				<br />&#13;
				عزيزي ".$friend_fullname.'، صديقك '
                .$applicant_fullname.'<br />('.$applicant_email.")
			&#13;
				طلب الاشتراك معك في نفس الموسم
						<hr width=\"250\" /></td>&#13;
						</tr></table></td>&#13;
						</tr></table><!-- // End Template Header \\ --></td>&#13;
						</tr><!-- // ********************************************
                        *********************************************************
                        **** \\ --><tr><td class=\"templateColor01\" valign=\"top\"
                        style=\"background-color: #34495e; padding: 30px 0px;\"
                        align=\"center\" height=\"100\" mc:edit=\"footer_Copyrights\"
                        bgcolor=\"#34495e\">&#13;
						<!-- // Begin Module: Footer \\ -->&#13;
						&#13;
						<a href=\"#\" class=\"button\" style=\"color: white;
                        font-family: 'Arial', sans-serif; font-size: 11px;
                        font-weight: normal; line-height: 14px; text-align: center;
                        text-decoration: none;\"> Copyright 2014 - All Rights
                        Reserved Kershless</a>
                        			 &#13;
						<!-- // End Module: Footer \\ -->&#13;
						</td>&#13;
						</tr></table></td>&#13;
						</tr></table><!--Table End--></body>
						</html>
						";

        $this->email->message($message);
        $this->email->send();
    }

    /**
     * Notifies a user that his application was successful by
     * sending an email containing his/her Kershless code
     * an applicant added him/her as friend in the application.
     *
     * @param String $applicant_name  Name of applicant
     * @param String $applicant_email E-mail of applicant
     * @param String $kershless_code  Kershless code of applicant
     *
     * @return void
     */
    private function _sendEmailToNewApplicant(
        $applicant_name,
        $applicant_email,
        $kershless_code
    ) {
        //echo $this->create_excel_sheet();
        $this->load->library('email');
        $this->email->from('applications@kershless.com', 'Kershless');
        $this->email->to($applicant_email);
        $this->email->subject('Kershless Registration Code: '.$applicant_name);
        $message = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"
                \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
				<html xmlns=\"http://www.w3.org/1999/xhtml\"
                xmlns=\"http://www.w3.org/1999/xhtml\" style=\"width: 100%;\">
				<head>
				<!-- Define Charset -->
				<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
				<!-- Responsive Meta Tag -->
				<meta name=\"viewport\" content=\"width=device-width;
                initial-scale=1.0; maximum-scale=1.0;\" />
				<!-- Facebook sharing information tags -->
				<meta property=\"og:title\" content=\"*|MC:SUBJECT|*\" />
				<title>Kershless Email Notification</title>
				</head>
				<body style=\"width: auto !important; text-align: left;
                background-color: white; margin: 0px;
                padding: 0px;\" bgcolor=\"white\">
				&#13;
				<table width=\"100%\" border=\"0\" align=\"center\"
                cellpadding=\"0\"
                cellspacing=\"0\" class=\"contentbg\"
                style=\"background-color: white;\"
                bgcolor=\"white\"><tr><td valign=\"top\">&#13;
				<table width=\"100%\" border=\"0\"
                cellspacing=\"0\" cellpadding=\"0\"><tr>
                <td class=\"templateColor01\" valign=\"top\"
                style=\"background-color: #34495e;
                padding: 0;\" bgcolor=\"#34495e\">&#13;
				<!-- // Begin Template PreHeader \\ -->&#13;
				<table class=\"BoxWrap\" width=\"50%\" border=\"0\" align=\"center\"
                cellpadding=\"0\" cellspacing=\"0\"
                style=\"width: 280px !important;\">
                <tr><td height=\"30\">&#13;
				<table width=\"100%\" border=\"0\"
                cellspacing=\"0\" cellpadding=\"0\">
                <tr><td class=\"text\" mc:edit=\"header_Txt\"
                style=\"color: white;
                font-family: 'Arial', sans-serif;
                font-size: 13px; font-weight: normal;
                line-height: 18px; text-align: left;
                text-decoration: none; padding: 10px 0;\" align=\"left\">&#13;
				<a href=\"#\" style=\"color: white;
                font-family: 'Arial', sans-serif;
                font-size: 14px; font-weight: normal;
                line-height: 18px; text-align: left;
                text-decoration: none;\">www.kershless.com</a>&#13;
				</td>&#13;
				<td class=\"text\" mc:edit=\"header_FindUs\" style=\"text-align: right;
                color: white; font-family: 'Arial', sans-serif; font-size: 13px;
                font-weight: normal; line-height: 18px;
                text-decoration: none;\" align=\"right\">&#13;
				Find us on:&#13;
				</td>&#13;
				<td>&#13;
				<a href=\"www.fb.com/kershless\" style=\"font-family:
                'Arial', sans-serif; font-size: 14px; font-weight: normal;
                line-height: 18px; color: #77cc33; text-align: left;
                text-decoration: none;\">&#13;
				<img align=\"right\" src=\"http://kershless.com/Assets/Icons/social_03.png\"
                alt=\"icon\" style=\"max-width: 22px;
                max-height: 22px; outline: none;
                text-decoration: none; display: block; border: 0px none;\"
                mc:label=\"image\" mc:edit=\"icon_image03\" /></a>&#13;
				</td>&#13;
				<td>&#13;
				<a href=\"www.twitter.com/kershless\" style=\"font-family:
                'Arial', sans-serif; font-size: 14px; font-weight: normal;
                line-height: 18px; color: #77cc33;
                text-align: left; text-decoration: none;\">&#13;
				<img align=\"right\" src=\"http://kershless.com/Assets/Icons/social_02.png\"
                alt=\"icon\" style=\"max-width: 22px; max-height: 22px; outline:
                none; text-decoration: none; display: block; border: 0px none;\"
                mc:label=\"image\" mc:edit=\"icon_image02\" /></a>&#13;
				</td>&#13;
				<td>&#13;
				<a href=\"www.youtube.com/kershless\" style=\"font-family:
                'Arial', sans-serif; font-size: 14px; font-weight: normal;
                line-height: 18px; color: #77cc33; text-align: left;
                text-decoration: none;\">&#13;
				<img align=\"right\" src=\"http://kershless.com/Assets/Icons/social_4.png\"
                alt=\"icon\" style=\"max-width: 22px;
                max-height: 22px; outline: none;
                text-decoration: none; display: block;
                border: 0px none;\" mc:label=\"image\"
                mc:edit=\"icon_image01\" /></a>&#13;
				</td>&#13;
				</tr></table></td>&#13;
				</tr></table><!-- // End Template PreHeader \\ --></td>&#13;
				</tr><!-- // ***********************************************
                *********************************************************
                * \\ --><tr><td class=\"templateColor02\" valign=\"bottom\"
                style=\"background-color: #ffffff;
                padding: 0;\" bgcolor=\"#00A085\">&#13;
				<!-- // Begin Template Header \\ -->&#13;
				<table class=\"BoxWrap\" width=\"100%\" border=\"0\"
                align=\"center\" cellpadding=\"0\" cellspacing=\"0\"
                style=\"width: 280px !important;\"><tr><td>&#13;
				<table class=\"BoxWrap\" border=\"0\" width=\"290\" align=\"left\"
                cellpadding=\"0\" cellspacing=\"0\"
                style=\"width: 280px !important;\">
                <tr><td align=\"center\">&#13;
				</td>&#13;
				<td class=\"title\" style=\"text-align: center; color: 34495e;
                font-family: GE SS Text UltraLight;
                font-size: 24px; line-height: 30px;
                text-decoration: none;\" align=\"center\">
                <a href=\"www.kershless.com\"
                style=\"font-family: 'Arial', sans-serif;
                font-size: 14px; font-weight:
                normal; line-height: 18px; color: #77cc33;
                text-decoration: none;\">
                <img src=\"http://kershless.com/Assets/Images/kershless_190x98.png\"
                alt=\"logo\" style=\"max-width: 401px;
                text-align:center !important max-height: 194px;
                outline: none; text-decoration: none; display: block;
                border: 0px none;\" mc:label=\"image\" mc:edit=\"logo\" /></a>&#13;
				<br />&#13;
				شكرا لتسجيلك معنا سيتم التواصل معك لاحقا&#13;
				<hr width=\"250\" />&#13;
				كود التسجيل الخاص بك هو&#13;
				<br /><label style=\"font-family: Impact, Charcoal,
                sans-serif; color: #34495e ;\">".$kershless_code."</label>&#13;
						<br />&#13;
                        يمكن لأصدقائك استخدام كود
                        التسجيل الخاص بك إذا أردتم
                         الإشتراك في نفس الموسم &#13;
                         <hr width=\"250\" /><label style=\"font-family: Impact, Charcoal,
                sans-serif; color: #d43f3a ;\">تنبيه هام</label>
                         <br>
                         تسجيلك الحالي لا يعني أنك اشتركت في المسابقة ، علما بأنه سيتم مراجعة بياناتك وفي حالة عدم مطابقتها للشروط المحددة في الشرح المعلن على وسائل التواصل الاجتماعي فإننا نعتذر عن عدم التواصل معك وسيعتبر تسجيلك غير مقبول تلقائيا ، ولكن في حالة ملء جميع البيانات والصور بشكل صحيح سيتم التواصل معك عن طريق برنامج واتساب Whatsapp خلال أسبوع من الآن لتأكيد البيانات واعتماد اشتراكك في المسابقة.
                         <br>
                         <br>إدارة كرشلس
						<hr width=\"250\" /></td>&#13;
						</tr></table></td>&#13;
						</tr></table><!-- // End Template Header \\ --></td>&#13;
						</tr><!-- // ********************************************
                        **********************************************************
                        *** \\ --><tr><td class=\"templateColor01\" valign=\"middle\"
                        style=\"background-color: #34495e !important;
                        \" align=\"center\"
                        height=\"100\" mc:edit=\"footer_Copyrights\"
                        bgcolor=\"#34495e\">&#13;
						<!-- // Begin Module: Footer \\ -->&#13;
						&#13;
						<a href=\"#\" class=\"button\" style=\"color: white ;
                        font-family: 'Arial', sans-serif; font-size: 11px;
                        font-weight: normal; line-height: 14px; text-align: center;
                        text-decoration: none;\">
                        Copyright ". date("Y") ." - All Rights Reserved Kershless</a>
                        &#13;
						<!-- // End Module: Footer \\ -->&#13;
						</td>&#13;
						</tr></table></td>&#13;
						</tr></table><!--Table End--></body>
						</html>
						";
        $this->email->message($message);
        $this->email->send();
    }

    /**
     * 1. Takes post data
     * 2. Calculates the applicant's BMI and gives him/her a weight category
     * 3. Assigns him/her a kershless code
     * 4. Stores all the data in the db
     * 5. Notifies friend(s) if kershless code(s) were/was entered
     * 6. finally sends the applicant an e-mail with his/her personal Kershless code.
     *
     * @return void
     */
    public function addUser()
    {
        $first_name_arabic = $this->input->post('first_name_arabic');
        $middle_name_arabic = $this->input->post('middle_name_arabic');
        $family_name_arabic = $this->input->post('family_name_arabic');
        $first_name_english = $this->input->post('first_name_english');
        $middle_name_english = $this->input->post('middle_name_english');
        $family_name_english = $this->input->post('family_name_english');

        $day = $this->input->post('DOB');
        $month = $this->input->post('MOB');
        $year = $this->input->post('YOB');
        $gender = $this->input->post('gender');
        $marital_status = $this->input->post('marital_status');
        $job = $this->input->post('job');
        $nationality = $this->input->post('nationality');
        $countryOfResidence = $this->input->post('country');
        $countryCode = $this->input->post('dial_code');
        $mobileNumber = $this->input->post('mobile_number');
        $email = $this->input->post('email');
        $facebook = $this->input->post('facebook');
        $weight = $this->input->post('weight');
        $height = $this->input->post('height');
        $profilePicture = $this->input->post('profile_picture_name');
        $weight_image_name = $this->input->post('weight_image_name');
        $height_image_name = $this->input->post('height_image_name');
        $reasonToBeKershless = $this->input->post('reason');
        $provocation = $this->input->post('provocation');
        $friendCode = $this->input->post('friend_code');
        $name_agreement = $this->input->post('name_agreement');
        $name_presentation = $this->input->post('name-presentation');
        $picture_agreement = $this->input->post('picture_agreement');
        $overall_agreement = $this->input->post('overall_agreement');
        $operations_desc = $this->input->post('operations_desc');
        $terminalDiseases_desc = $this->input->post('terminalDiseases_desc');
        $boneFractures_desc = $this->input->post('boneFractures_desc');
        $drugs_desc = $this->input->post('drugs_desc');
        $allergy_desc = $this->input->post('allergy_desc');

        $first_name_arabic = $this->security->xss_clean($first_name_arabic);
        $middle_name_arabic = $this->security->xss_clean($middle_name_arabic);
        $family_name_arabic = $this->security->xss_clean($family_name_arabic);
        $first_name_english = $this->security->xss_clean($first_name_english);
        $middle_name_english = $this->security->xss_clean($middle_name_english);
        $family_name_english = $this->security->xss_clean($family_name_english);
        $gender = $this->security->xss_clean($gender);
        $marital_status = $this->security->xss_clean($marital_status);
        $job = $this->security->xss_clean($job);
        $nationality = $this->security->xss_clean($nationality);
        $countryOfResidence = $this->security->xss_clean($countryOfResidence);
        $countryCode = $this->security->xss_clean($countryCode);
        $mobileNumber = $this->security->xss_clean($mobileNumber);
        $email = $this->security->xss_clean($email);
        $facebook = $this->security->xss_clean($facebook);
        $weight = $this->security->xss_clean($weight);
        $height = $this->security->xss_clean($height);
        $profilePicture = $this->security->xss_clean($profilePicture);
        $weight_image_name = $this->security->xss_clean($weight_image_name);
        $height_image_name = $this->security->xss_clean($height_image_name);
        $reasonToBeKershless = $this->security->xss_clean($reasonToBeKershless);
        $provocation = $this->security->xss_clean($provocation);
        $friendCode = $this->security->xss_clean($friendCode);
        $operations_desc = $this->security->xss_clean($operations_desc);
        $terminalDiseases_desc = $this->security->xss_clean($terminalDiseases_desc);
        $boneFractures_desc = $this->security->xss_clean($boneFractures_desc);
        $drugs_desc = $this->security->xss_clean($drugs_desc);
        $allergy_desc = $this->security->xss_clean($allergy_desc);
        $initials_arabic = mb_substr($first_name_arabic, 0, 1) . '.' . mb_substr($middle_name_arabic, 0, 1) . '.' . mb_substr($family_name_arabic, 0, 1) . '.';
        $initials_english = $first_name_english[0] . '.' . $middle_name_english[0] . '.' . $family_name_english[0] . '.';
        $displayed_name_arabic = $initials_arabic;
        $displayed_name_english = $initials_english;

        if ($name_agreement == 'accept') {
            if ($name_presentation == 1) {
                $displayed_name_arabic = $first_name_arabic . ' ' . $middle_name_arabic;
                $displayed_name_english = $first_name_english . ' ' . $middle_name_english;
            } else {
                $displayed_name_arabic = $first_name_arabic . ' ' . $family_name_arabic;
                $displayed_name_english = $first_name_english . ' ' . $family_name_english;
            }
        }



        if ($gender == 1) {
            $gender = 'male';
            $gender_part_of_kershless_code = 'M';
        } else {
            $gender = 'female';
            $gender_part_of_kershless_code = 'F';
        }

        if ($marital_status == 1) {
            $marital_status = 'Single';
        } else {
            $marital_status = 'Married';
        }

        $current_date = date('Y-m-d : H:i:s', time() + (2 * 60 * 60));

        $date_of_birth = $year.'-'.$month.'-'.($day + 1);
        $age = date('Y') - $year;

        $mobileNumber = '('.$countryCode.')'.$mobileNumber;

        $year_part_of_kershless_code = 17;
        $kershlessCode = $year_part_of_kershless_code
                            . 'K' . $gender_part_of_kershless_code;

        $height_square = $height * $height;
        $bmi = $weight / $height_square;

        /*Very severely underweight	less than 15	less than 0.60
         Severely underweight	from 15.0 to 16.0	from 0.60 to 0.64
        Underweight	from 16.0 to 18.5	from 0.64 to 0.74
        Normal (healthy weight)	from 18.5 to 25	from 0.74 to 1.0
        Overweight	from 25 to 30	from 1.0 to 1.2
        Obese Class I (Moderately obese)	from 30 to 35	from 1.2 to 1.4
        Obese Class II (Severely obese)	from 35 to 40	from 1.4 to 1.6
        Obese Class III (Very severely obese)	over 40	over 1.6
        */
        $bmi_category = '';
        if ($bmi < 16) {
            $bmi_category
                = 'Severely underweight';
        } else {
            if ($bmi < 18.5) {
                $bmi_category
                    = 'Underweight';
            } else {
                if ($bmi < 25) {
                    $bmi_category
                        = 'Normal';
                } else {
                    if ($bmi < 30) {
                        $bmi_category
                            = 'Overweight';
                    } else {
                        if ($bmi < 35) {
                            $bmi_category
                                = 'Obese Class I (Moderately obese)';
                        } else {
                            if ($bmi < 40) {
                                $bmi_category
                                    = 'Obese Class II (Severely obese)';
                            } else {
                                $bmi_category
                                    = 'Obese Class III (Very severely obese)';
                            }
                        }
                    }
                }
            }
        }

        if ($name_agreement != 'accept') {
            $name_agreement = 'reject';
        }
        if ($picture_agreement != 'accept') {
            $picture_agreement = 'reject';
        }
        if ($overall_agreement != 'accept') {
            $overall_agreement = 'reject';
        }

        //echo $kershlessCode;
        //13KM0001

        //prepping the new record
        $newRecord = array(
            'kershless_code' => $kershlessCode,
            'profile_picture' => $profilePicture,
            'first_name_arabic' => $first_name_arabic,
            'middle_name_arabic' => $middle_name_arabic,
            'family_name_arabic' => $family_name_arabic,
            'display_name_arabic' => $displayed_name_arabic,
            'first_name_english' => $first_name_english,
            'middle_name_english' => $middle_name_english,
            'family_name_english' => $family_name_english,
            'display_name_english' => $displayed_name_english,
            'date_of_birth' => $date_of_birth,
            'age' => $age,
            'gender' => $gender,
            'marital_status' => $marital_status,
            'job' => $job,
            'nationality' => $nationality,
            'country' => $countryOfResidence,
            'mobile_number' => $mobileNumber,
            'email' => $email,
            'facebook' => $facebook,
            'weight' => $weight,
            'weight_image' => $weight_image_name,
            'height' => $height,
            'height_image' => $height_image_name,
            'bmi' => $bmi,
            'bmi_category' => $bmi_category,
            'reason' => $reasonToBeKershless,
            'provocation' => $provocation,
            'friend_code' => $friendCode,
            'name_agreement' => $name_agreement,
            'picture_agreement' => $picture_agreement,
            'overall_agreement' => $overall_agreement,
            'operations_desc' => $operations_desc,
            'terminalDiseases_desc' => $terminalDiseases_desc,
            'boneFractures_desc' => $boneFractures_desc,
            'drugs_desc' => $drugs_desc,
            'allergy_desc' => $allergy_desc,
            'date' => $current_date
        );

        //run the query
        $this->db
            ->insert('User', $newRecord);

        //-----------------------
        $justAddedRecord = $this->db
            ->from('User')->order_by('date', 'desc')->get()->row();
        $lastId = $justAddedRecord->id;
        $data = array(
            'kershless_code' => $kershlessCode.$lastId,
        );

        $this->db
            ->where('id', $lastId)->update('User', $data);

        $this->_sendEmailToNewApplicant($first_name_arabic, $email, $kershlessCode.$lastId);
        if ($friendCode != '') {
            $friendCode = str_replace(' ', '', $friendCode);
            $friend_codes = explode(',', $friendCode);
            foreach ($friend_codes as &$value) {
                $friend = $this->db
                    ->get_where('User', array('kershless_code' => $value))->row();
                $this->notifyFriend($lastId, $friend);
            }
        }
    }
}

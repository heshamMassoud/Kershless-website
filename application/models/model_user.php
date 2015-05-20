<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/* Author: Hesham Massoud
 * Description: User model class
*/


class Model_user extends CI_MODEL
{

    public function login()
    {
        $this->load->view("view_login");
    }

    public function get_all_data()
    {
        $query = $this->db->query("SELECT * FROM User");
        return $query->result();
    }

    public function get_all_male_data()
    {
        $query = $this->db->query("SELECT * FROM User WHERE gender = 'male' ORDER BY date");
        return $query->result();
    }

    public function get_all_female_data()
    {
        $query = $this->db->query("SELECT * FROM User WHERE gender = 'female' ORDER BY date");
        return $query->result();
    }

    public function notify_friend($applicant_id, $friend_record)
    {
        $applicant_record = $this->db->get_where('User', array('id' => $applicant_id))->row();
        $applicant_fullname = $applicant_record->full_name;
        $applicant_email = $applicant_record->email;
        $applicant_friend_code = $applicant_record->friend_code;

        //$friend_record = $this->db->get_where('User', array('kershless_code' => $applicant_friend_code))->row();
        $friend_fullname = $friend_record->full_name;
        $friend_email = $friend_record->email;


        $this->load->library('email');
        $this->email->from('applications@kershless.com', 'Kershless');
        $this->email->to($friend_email);
        $this->email->subject('Kershless Notification');
        $message = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
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
				@font-face { font-family: GE SS Text UltraLight !important; src: url('/kershlesswebsite/Assets/fonts/GE SS Text UltraLight.otf') format(\"opentype\") !important; }
				&gt;</style>&#13;
				&#13;
				<table width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"contentbg\" style=\"background-color: white;\" bgcolor=\"white\"><tr><td valign=\"top\">&#13;
				<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td class=\"templateColor01\" valign=\"top\" style=\"background-color: #34495e; padding: 0;\" bgcolor=\"#34495e\">&#13;
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
				</td>&#13;
				<td class=\"title\" style=\"text-align: center; color: white; font-family: GE SS Text UltraLight; font-size: 24px; line-height: 30px; text-decoration: none;\" align=\"center\"><a href=\"www.kershless.com\" style=\"font-family: 'Arial', sans-serif; font-size: 14px; font-weight: normal; line-height: 18px; color: #77cc33; text-align: left; text-decoration: none;\"><img src=\"http://kershless.com/Assets/Images/small_email.png\" alt=\"logo\" style=\"max-width: 401px; max-height: 194px; outline: none; text-decoration: none; display: block; border: 0px none;\" mc:label=\"image\" mc:edit=\"logo\" /></a>&#13;
				<br />&#13;
				عزيزي " . $friend_fullname . "، صديقك " . $applicant_fullname . "<br />(" . $applicant_email . ")
			&#13;
				طلب الاشتراك معك في نفس الموسم
						<hr width=\"250\" /></td>&#13;
						</tr></table></td>&#13;
						</tr></table><!-- // End Template Header \\ --></td>&#13;
						</tr><!-- // ********************************************************************************************************* \\ --><tr><td class=\"templateColor01\" valign=\"top\" style=\"background-color: #34495e; padding: 30px 0px;\" align=\"center\" height=\"100\" mc:edit=\"footer_Copyrights\" bgcolor=\"#34495e\">&#13;
						<!-- // Begin Module: Footer \\ -->&#13;
						&#13;
						<a href=\"#\" class=\"button\" style=\"color: white; font-family: 'Arial', sans-serif; font-size: 11px; font-weight: normal; line-height: 14px; text-align: center; text-decoration: none;\"> Copyright 2014 - All Rights Reserved Kershless</a>			 &#13;
						<!-- // End Module: Footer \\ -->&#13;
						</td>&#13;
						</tr></table></td>&#13;
						</tr></table><!--Table End--></body>
						</html>
						";

        $this->email->message($message);
        $this->email->send();
    }

    public function notify_applicant($applicant_id)
    {
        $applicant_record = $this->db->get_where('User', array('id' => $applicant_id))->row();
        $applicant_fullname = $applicant_record->full_name;
        $applicant_email = $applicant_record->email;
        $applicant_friend_code = $applicant_record->friend_code;

        $this->load->library('email');
        $this->email->from('applications@kershless.com', 'Kershless');
        $this->email->to($applicant_email);
        $this->email->subject('Kershless Notification');
        $this->email->message('Dear ' . $applicant_fullname . ',\n Thank you for registering to kershless.');
        $this->email->send();
    }


    function _send_email_to_new_applicant($applicant_name, $applicant_email, $kershless_code)
    {
        //echo $this->create_excel_sheet();
        $this->load->library('email');
        $this->email->from('applications@kershless.com', 'Kershless');
        $this->email->to($applicant_email);
        $this->email->subject('Kershless Registration Code: ' . $applicant_name);
        $message = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
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
				@font-face { font-family: GE SS Text UltraLight !important; src: url('/kershlesswebsite/Assets/fonts/GE SS Text UltraLight.otf') format(\"opentype\") !important; }
				&gt;</style>&#13;
				&#13;
				<table width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"contentbg\" style=\"background-color: white;\" bgcolor=\"white\"><tr><td valign=\"top\">&#13;
				<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td class=\"templateColor01\" valign=\"top\" style=\"background-color: #34495e; padding: 0;\" bgcolor=\"#34495e\">&#13;
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
				</td>&#13;
				<td class=\"title\" style=\"text-align: center; color: white; font-family: GE SS Text UltraLight; font-size: 24px; line-height: 30px; text-decoration: none;\" align=\"center\"><a href=\"www.kershless.com\" style=\"font-family: 'Arial', sans-serif; font-size: 14px; font-weight: normal; line-height: 18px; color: #77cc33; text-align: left; text-decoration: none;\"><img src=\"http://kershless.com/Assets/Images/small_email.png\" alt=\"logo\" style=\"max-width: 401px; max-height: 194px; outline: none; text-decoration: none; display: block; border: 0px none;\" mc:label=\"image\" mc:edit=\"logo\" /></a>&#13;
				<br />&#13;
				شكرا لتسجيلك معنا سيتم التواصل معك لاحقا&#13;
				<hr width=\"250\" />&#13;
				كود التسجيل الخاص بك هو&#13;
				<br /><label style=\"font-family: Impact, Charcoal, sans-serif; color: white;\">" . $kershless_code . "</label>&#13;
						<br />&#13;
						يمكن لأصدقائك استخدام كود التسجيل الخاص بك إذا أردتم الإشتراك في نفس الموسم &#13;
						<hr width=\"250\" /></td>&#13;
						</tr></table></td>&#13;
						</tr></table><!-- // End Template Header \\ --></td>&#13;
						</tr><!-- // ********************************************************************************************************* \\ --><tr><td class=\"templateColor01\" valign=\"top\" style=\"background-color: #34495e; padding: 30px 0px;\" align=\"center\" height=\"100\" mc:edit=\"footer_Copyrights\" bgcolor=\"#34495e\">&#13;
						<!-- // Begin Module: Footer \\ -->&#13;
						&#13;
						<a href=\"#\" class=\"button\" style=\"color: white; font-family: 'Arial', sans-serif; font-size: 11px; font-weight: normal; line-height: 14px; text-align: center; text-decoration: none;\"> Copyright 2014 - All Rights Reserved Kershless</a>			 &#13;
						<!-- // End Module: Footer \\ -->&#13;
						</td>&#13;
						</tr></table></td>&#13;
						</tr></table><!--Table End--></body>
						</html>
						";
        $this->email->message($message);
        $this->email->send();
    }


    public function addUser()//$weight_image = array(), $height_image = array())
    {
        $fullname = $this->input->post("fullname");
        $fullname_english = $this->input->post("fullname_english");
        $day = $this->input->post("DOB");
        $month = $this->input->post("MOB");
        $year = $this->input->post("YOB");
        //$age = $this->input->post("age");
        $gender = $this->input->post("gender");
        $marital_status = $this->input->post("marital_status");
        $job = $this->input->post("job");
        $nationality = $this->input->post("nationality");
        $countryOfResidence = $this->input->post("country");
        $countryCode = $this->input->post("dial_code");
        $mobileNumber = $this->input->post("mobile_number");
        $email = $this->input->post("email");
        $facebook = $this->input->post("facebook");
        $weight = $this->input->post("weight");
        $height = $this->input->post("height");
        $profilePicture = $this->input->post('profile_picture_name');
        $weight_image_name = $this->input->post('weight_image_name');
        $height_image_name = $this->input->post('height_image_name');
        $reasonToBeKershless = $this->input->post("reason");
        $provocation = $this->input->post("provocation");
        $friendCode = $this->input->post("friend_code");
        $name_agreement = $this->input->post("name_agreement");
        $picture_agreement = $this->input->post("picture_agreement");
        $overall_agreement = $this->input->post("overall_agreement");
        $operations_check = $this->input->post("operations_check");
        $operations_desc = $this->input->post("operations_desc");
        $terminalDiseases_check = $this->input->post("terminalDiseases_check");
        $terminalDiseases_desc = $this->input->post("terminalDiseases_desc");
        $boneFractures_check = $this->input->post("boneFractures_check");
        $boneFractures_desc = $this->input->post("boneFractures_desc");
        $drugs_check = $this->input->post("drugs_check");
        $drugs_desc = $this->input->post("drugs_desc");


        $fullname = $this->security->xss_clean($fullname);
        $fullname_english = $this->security->xss_clean($fullname_english);
        //$age = $this->security->xss_clean($age);
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


        if ($gender == 1) {
            $gender = 'male';
            $gender_part_of_kershless_code = "M";
        } else {
            $gender = 'female';
            $gender_part_of_kershless_code = "F";
        }

        if ($marital_status == 1) {
            $marital_status = 'Single';
        } else {
            $marital_status = 'Married';
        }

        $current_date = date("Y-m-d : H:i:s", time() + (2 * 60 * 60));

        $date_of_birth = $year . '-' . $month . '-' . ($day + 1);
        $age = date("Y") - $year;

        $mobileNumber = "(" . $countryCode . ")" . $mobileNumber;

        $year_part_of_kershless_code = date("y");
        $kershlessCode = $year_part_of_kershless_code . "K" . $gender_part_of_kershless_code;


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
        $bmi_category = "";
        if ($bmi < 16) {
            $bmi_category = "Severely underweight";
        } else {
            if ($bmi < 18.5) {
                $bmi_category = "Underweight";
            } else {
                if ($bmi < 25) {
                    $bmi_category = "Normal";
                } else {
                    if ($bmi < 30) {
                        $bmi_category = "Overweight";
                    } else {
                        if ($bmi < 35) {
                            $bmi_category = "Obese Class I (Moderately obese)";
                        } else {
                            if ($bmi < 40) {
                                $bmi_category = "Obese Class II (Severely obese)";
                            } else {
                                $bmi_category = "Obese Class III (Very severely obese)";
                            }

                        }

                    }

                }

            }

        }

        if ($name_agreement != "accept") {
            $name_agreement = "reject";
        }
        if ($picture_agreement != "accept") {
            $picture_agreement = "reject";
        }
        if ($operations_check != "accept") {
            $operations_check = "reject";
        }
        if ($terminalDiseases_check != "accept") {
            $terminalDiseases_check = "reject";
        }
        if ($boneFractures_check != "accept") {
            $boneFractures_check = "reject";
        }
        if ($drugs_check != "accept") {
            $drugs_check = "reject";
        }
        if ($overall_agreement != "accept") {
            $overall_agreement = "reject";
        }


        //echo $kershlessCode;
        //13KM0001

        //
        // $data = array(
        //          'filename' => $image_data['file_name'],
        //          'fullpath' => $image_data['full_path']
        //      );

        //prepping the new record
        $newRecord = array(
            'kershless_code' => $kershlessCode,
            'profile_picture' => $profilePicture,
            'full_name' => $fullname,
            'full_name_english' => $fullname_english,
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
            //'weight_image' => $weight_image['file_name'],$height_image_name
            'weight_image' => $weight_image_name,
            'height' => $height,
            'height_image' => $height_image_name,
            //'height_image' => $height_image['file_name'],
            'bmi' => $bmi,
            'bmi_category' => $bmi_category,
            'reason' => $reasonToBeKershless,
            'provocation' => $provocation,
            'friend_code' => $friendCode,
            'name_agreement' => $name_agreement,
            'picture_agreement' => $picture_agreement,
            'overall_agreement' => $overall_agreement,
            'operations_check' => $operations_check,
            'operations_desc' => $operations_desc,
            'terminalDiseases_check' => $terminalDiseases_check,
            'terminalDiseases_desc' => $terminalDiseases_desc,
            'boneFractures_check' => $boneFractures_check,
            'boneFractures_desc' => $boneFractures_desc,
            'drugs_check' => $drugs_check,
            'drugs_desc' => $drugs_desc,
            'date' => $current_date
        );

        //run the query
        $this->db->insert("User", $newRecord);


        //-----------------------
        $justAddedRecord = $this->db->from('User')->order_by("date", "desc")->get()->row();
        $lastId = $justAddedRecord->id;
        $data = array(
            'kershless_code' => $kershlessCode . $lastId
        );

        $this->db->where('id', $lastId)->update('User', $data);
        //$this->db->update('User', $data);

        //$this->notify_applicant($lastId);
        $this->_send_email_to_new_applicant($fullname, $email, $kershlessCode . $lastId);
        if ($friendCode != "") {
            $friendCode = str_replace(' ', '', $friendCode);
            $friend_codes = explode(",", $friendCode);
            foreach ($friend_codes as &$value) {
                $friend = $this->db->get_where('User', array('kershless_code' => $value))->row();
                $this->notify_friend($lastId, $friend);
            }
            //echo "There is friend code!";
        } else {
            //echo "There is no friend!";
        }
    }


}

?>

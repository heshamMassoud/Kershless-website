<!-- //**local_to_global FOR all  paths remove '/Kershless'-->

<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="ar" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta property="og:image" content="<?php echo base_url(); ?>Assets/Images/kershless_496x351.png"/>
    <meta property="og:image:width" content="496"/>
    <meta property="og:image:height" content="351"/>


    <title>Kershless</title>

    <link rel="shortcut icon" href="<?php echo base_url(); ?>Assets/Images/tab-logo.png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">



    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="<?php echo base_url(); ?>Assets/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/tipsy.css"
          type="text/css"/>
    <!-- Bootstrap RTL -->
    <link href="<?php echo base_url(); ?>Assets/css/bootstrap-rtl.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/fonts/jf/font.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/fonts.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/intlTelInput.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<?php

echo form_open_multipart('85eb787e9664e9a94f714daa943c52da/');



//####### Form Submitter ################
$form_submitter = array(
    'name' => 'submit',
    'id' => 'form_submitter',
    'value' => 'submit!',
    'style' => 'visibility:hidden'
);

//########## Right Column php Form Helper Input SERVER SIDE ERROR HANDELING ####################
if (form_error('first_name_arabic') != '') {
    $first_name_arabic_class = "form-control input_form_error";
    $first_name_arabic_hidden_error = array(
        'id' => 'first_name_arabic_hidden_error',
        'name' => 'first_name_arabic_hidden_error',
        'type' => 'hidden',
        'value' => form_error('first_name_arabic')
    );
    echo form_input($first_name_arabic_hidden_error);
} else {
    $first_name_arabic_class = "form-control input_form";
}

if (form_error('middle_name_arabic') != '') {
    $middle_name_arabic_class = "form-control input_form_error";
    $middle_name_arabic_hidden_error = array(
        'id' => 'middle_name_arabic_hidden_error',
        'name' => 'middle_name_arabic_hidden_error',
        'type' => 'hidden',
        'value' => form_error('middle_name_arabic')
    );
    echo form_input($middle_name_arabic_hidden_error);
} else {
    $middle_name_arabic_class = "form-control input_form";
}

if (form_error('family_name_arabic') != '') {
    $family_name_arabic_class = "form-control input_form_error";
    $family_name_arabic_hidden_error = array(
        'id' => 'family_name_arabic_hidden_error',
        'name' => 'family_name_arabic_hidden_error',
        'type' => 'hidden',
        'value' => form_error('family_name_arabic')
    );
    echo form_input($family_name_arabic_hidden_error);
} else {
    $family_name_arabic_class = "form-control input_form";
}

if (form_error('first_name_english') != '') {
    $first_name_english_class = "form-control input_form_error";
    $first_name_english_hidden_error = array(
        'id' => 'first_name_english_hidden_error',
        'name' => 'first_name_english-hidden_error',
        'type' => 'hidden',
        'value' => form_error('first_name_english')
    );
    echo form_input($first_name_english_hidden_error);
} else {
    $first_name_english_class = "form-control input_form";
}

if (form_error('middle_name_english') != '') {
    $middle_name_english_class = "form-control input_form_error";
    $middle_name_english_hidden_error = array(
        'id' => 'middle_name_english_hidden_error',
        'name' => 'middle_name_english_hidden_error',
        'type' => 'hidden',
        'value' => form_error('middle_name_english')
    );
    echo form_input($middle_name_english_hidden_error);
} else {
    $middle_name_english_class = "form-control input_form";
}

if (form_error('family_name_english') != '') {
    $family_name_english_class = "form-control input_form_error";
    $family_name_english_hidden_error = array(
        'id' => 'family_name_english_hidden_error',
        'name' => 'family_name_english_hidden_error',
        'type' => 'hidden',
        'value' => form_error('family_name_english')
    );
    echo form_input($family_name_english_hidden_error);
} else {
    $family_name_english_class = "form-control input_form";
}

if (form_error('nationality') != '') {
    $nationality_class = "form-control input_form_error";
    $nationality_hidden_error = array(
        'id' => 'nationality_hidden_error',
        'name' => 'nationality_hidden_error',
        'type' => 'hidden',
        'value' => form_error('nationality')
    );
    echo form_input($nationality_hidden_error);
} else {
    $nationality_class = "form-control input_form";
}


if (form_error('country') != '') {
    $country_class = "form-control input_form_error";
    $country_hidden_error = array(
        'id' => 'country_hidden_error',
        'name' => 'country_hidden_error',
        'type' => 'hidden',
        'value' => form_error('country')
    );
    echo form_input($country_hidden_error);
} else {
    $country_class = "form-control input_form";
}


//########## Middle Column php Form Helper Input SERVER SIDE ERROR HANDELING ####################

//-------------------------------------------------
if (form_error('profile_picture_name') != '') {
    $profile_picture_class = "input_form_error";
    $profile_picture_hidden_error = array(
        'id' => 'profile_picture_hidden_error',
        'name' => 'profile_picture_hidden_error',
        'type' => 'hidden',
        'value' => form_error('profile_picture_name')
    );
    echo form_input($profile_picture_hidden_error);
} else {
    $profile_picture_class = "normal";
}


$profile_picture_name = array(
    'id' => 'profile_picture_name',
    'name' => 'profile_picture_name',
    'type' => 'hidden',
    'value' => 'empty'
);

$profile_picture_file_upload = array(
    'id' => 'profile_picture_file_upload',
    'name' => 'profile_picture_file_upload',
    'hidden' => 'true'
);

echo form_input($profile_picture_name);

//echo form_upload($profile_picture_file_upload);
//-------------------------------------------------

//-------------------------------------------------
if (form_error('weight_image_name') != '') {
    $weight_image_class = "col-md-6 rightdiv input_form_error";
    $weight_image_hidden_error = array(
        'id' => 'weight_image_hidden_error',
        'name' => 'weight_image_hidden_error',
        'type' => 'hidden',
        'value' => form_error('weight_image_name')
    );
    echo form_input($weight_image_hidden_error);
} else {
    $weight_image_class = "col-md-6 rightdiv input_form";
}

$weight_image_name = array(
    'id' => 'weight_image_name',
    'name' => 'weight_image_name',
    'type' => 'hidden',
    'value' => 'empty'
);

$weight_image_file_upload = array(
    'id' => 'weight_image_file_upload',
    'name' => 'weight_image_file_upload',
    'hidden' => 'true'
);

echo form_input($weight_image_name);

//echo form_upload($weight_image_file_upload);


//-------------------------------------------------

//-------------------------------------------------
if (form_error('height_image_name') != '') {
    $height_image_class = "col-md-6 leftdiv input_form_error";
    $height_image_hidden_error = array(
        'id' => 'height_image_hidden_error',
        'name' => 'height_image_hidden_error',
        'type' => 'hidden',
        'value' => form_error('height_image_name')
    );
    echo form_input($height_image_hidden_error);
} else {
    $height_image_class = "col-md-6 leftdiv input_form";
}

$height_image_name = array(
    'id' => 'height_image_name',
    'name' => 'height_image_name',
    'type' => 'hidden',
    'value' => 'empty'
);

$height_image_file_upload = array(
    'id' => 'height_image_file_upload',
    'name' => 'height_image_file_upload',
    'hidden' => 'true'
);

echo form_input($height_image_name);

//echo form_upload($height_image_file_upload);


//-------------------------------------------------

if (form_error('weight') != '') {
    $weight_class = "col-md-6 input_form_error";
    $weight_hidden_error = array(
        'id' => 'weight_hidden_error',
        'name' => 'weight_hidden_error',
        'type' => 'hidden',
        'value' => form_error('weight')
    );
    echo form_input($weight_hidden_error);
} else {
    $weight_class = "col-md-6 input_form";
}

if (form_error('height') != '') {
    $height_class = "col-md-6 leftdiv input_form_error";
    $height_hidden_error = array(
        'id' => 'height_hidden_error',
        'name' => 'height_hidden_error',
        'type' => 'hidden',
        'value' => form_error('height')
    );
    echo form_input($height_hidden_error);

} else {
    $height_class = "col-md-6 leftdiv input_form";
}


if (form_error('reason') != '') {
    $reason_class = "input_form_error";
    $reason_hidden_error = array(
        'id' => 'reason_hidden_error',
        'name' => 'reason_hidden_error',
        'type' => 'hidden',
        'value' => form_error('reason')
    );
    echo form_input($reason_hidden_error);

} else {
    $reason_class = "input_form";
}


if (form_error('provocation') != '') {
    $provocation_class = "input_form_error";
    $provocation_hidden_error = array(
        'id' => 'provocation_hidden_error',
        'name' => 'provocation_hidden_error',
        'type' => 'hidden',
        'value' => form_error('provocation')
    );
    echo form_input($provocation_hidden_error);

} else {
    $provocation_class = "input_form";
}

if (form_error('friend_code') != '') {
    $friend_code_class = "input_form_error";
    $friend_code_hidden_error = array(
        'id' => 'friend_code_hidden_error',
        'name' => 'friend_code_hidden_error',
        'type' => 'hidden',
        'value' => form_error('friend_code')
    );
    echo form_input($friend_code_hidden_error);

} else {
    $friend_code_class = "input_form";
}


//########## Left Column php Form Helper Input SERVER SIDE ERROR HANDELING ####################

if (form_error('mobile_number') != '') {
    $mobile_number_class = "col-md-12 form-control mob input_form_error";
    $mobile_number_hidden_error = array(
        'id' => 'mobile_number_hidden_error',
        'name' => 'mobile_number_hidden_error',
        'type' => 'hidden',
        'value' => form_error('mobile_number')
    );
    echo form_input($mobile_number_hidden_error);
} else {
    $mobile_number_class = "col-md-12 form-control mob input_form";
}

if (form_error('dial_code') != '') {
    $dial_code_class = "col-md-3 form-control mobCode input_form_error";
    $dial_code_hidden_error = array(
        'id' => 'dial_code_hidden_error',
        'name' => 'dial_code_hidden_error',
        'type' => 'hidden',
        'value' => form_error('dial_code')
    );
    echo form_input($dial_code_hidden_error);
} else {
    $dial_code_class = "col-md-3 form-control mobCode input_form";
}


if (form_error('email') != '') {
    $email_class = "col-md-12 form-control input_form_error";
    $email_hidden_error = array(
        'id' => 'email_hidden_error',
        'name' => 'email_hidden_error',
        'type' => 'hidden',
        'value' => form_error('email')
    );
    echo form_input($email_hidden_error);

} else {
    $email_class = "col-md-12 form-control input_form";
}

if (form_error('facebook') != '') {
    $facebook_class = "col-md-12 form-control input_form_error";
    $facebook_hidden_error = array(
        'id' => 'facebook_hidden_error',
        'name' => 'facebook_hidden_error',
        'type' => 'hidden',
        'value' => form_error('facebook')
    );
    echo form_input($facebook_hidden_error);

} else {
    $facebook_class = "col-md-12 form-control input_form";
}

//########## Right Column php Form Helper Input Elements ####################

function buildDayDropdown($name = '', $value = '')
{
    $days = '1';
    while ($days <= '31') {
        $day[] = $days;
        $days++;
    }
    $dd_id = 'id="DOB" class="form-control input_form col-md-4"';
    return form_dropdown($name, $day, $value - 1, $dd_id);
}

function buildYearDropdown($name = '', $value = '')
{
    $current_year = 1900;
    while ($current_year <= 2000) {
        $year[$current_year] = $current_year;
        $current_year++;
    }
    $dd_id = 'id="YOB" class="form-control input_form col-md-4"';
    return form_dropdown($name, $year, $value, $dd_id);
}

function buildMonthDropdown($name = '', $value = '')
{
    $month = array(
        '01' => 'يناير',
        '02' => 'فبراير',
        '03' => 'مارس',
        '04' => 'أبريل',
        '05' => 'مايو',
        '06' => 'يونيو',
        '07' => 'ﻳﻭﻟﻳﻭ',
        '08' => 'أغسطس',
        '09' => 'سبتمبر',
        '10' => 'أكتوبر',
        '11' => 'نوفمبر',
        '12' => 'ديسمبر');
    $dd_id = 'id="MOB" class="form-control input_form col-md-4"';
    return form_dropdown($name, $month, $value, $dd_id);
}

$first_name_arabic = array(
    'name' => 'first_name_arabic',
    'id' => 'first_name_arabic',
    'value' => set_value('first_name_arabic'),
    'class' => $first_name_arabic_class,
    'placeholder' => 'الإسم الاول *',
    'onBlur' => 'first_arabic_name_client_validation_blur();',
    'onFocus' => 'first_arabic_name_client_validation_focus();'
);

$middle_name_arabic = array(
    'name' => 'middle_name_arabic',
    'id' => 'middle_name_arabic',
    'value' => set_value('middle_name_arabic'),
    'class' => $middle_name_arabic_class,
    'placeholder' => 'اسم الأب *',
    'onBlur' => 'middle_arabic_name_client_validation_blur();',
    'onFocus' => 'middle_arabic_name_client_validation_focus();'
);

$family_name_arabic = array(
    'name' => 'family_name_arabic',
    'id' => 'family_name_arabic',
    'value' => set_value('family_name_arabic'),
    'class' => $family_name_arabic_class,
    'placeholder' => 'اللقب * ',
    'onBlur' => 'family_arabic_name_client_validation_blur();',
    'onFocus' => 'family_arabic_name_client_validation_focus();'
);

$first_name_english = array(
    'name' => 'first_name_english',
    'id' => 'first_name_english',
    'value' => set_value('first_name_english'),
    'class' => $first_name_english_class,
    'placeholder' => '* First name',
    'onBlur' => 'first_english_name_client_validation_blur();',
    'onFocus' => 'first_english_name_client_validation_focus();'
);

$middle_name_english = array(
    'name' => 'middle_name_english',
    'id' => 'middle_name_english',
    'value' => set_value('middle_name_english'),
    'class' => $middle_name_english_class,
    'placeholder' => '* Middle name',
    'onBlur' => 'middle_english_name_client_validation_blur();',
    'onFocus' => 'middle_english_name_client_validation_focus();'
);

$family_name_english = array(
    'name' => 'family_name_english',
    'id' => 'family_name_english',
    'value' => set_value('family_name_english'),
    'class' => $family_name_english_class,
    'placeholder' => '* Family name',
    'onBlur' => 'family_english_name_client_validation_blur();',
    'onFocus' => 'family_english_name_client_validation_focus();'
);

$job = array(
    'name' => 'job',
    'id' => 'job',
    'value' => set_value('job'),
    'placeholder' => 'المهنة',
    'class' => 'form-control input_form'
);

//########## Middle Column php Form Helper Input Elements ####################
$friend_code = array(
    'name' => 'friend_code',
    'id' => 'friend_code',
    'class' => $friend_code_class,
    'value' => set_value('friend_code'),
    'placeholder' => 'كود التسجيل الخاص بصديقك ..(لو أكثر من واحد : codeI, codeII, codeIII, etc)',
    'onBlur' => 'friend_code_client_validation_blur();',
    'onFocus' => 'friend_code_client_validation_focus();'
);
$weight = array(
    'name' => 'weight',
    'id' => 'weight',
    'class' => $weight_class,
    'value' => set_value('weight'),
    'placeholder' => 'وزنك بالكجم *',
    'onBlur' => 'weight_client_validation_blur();',
    'onFocus' => 'weight_client_validation_focus();'
);

$height = array(
    'name' => 'height',
    'id' => 'height',
    'class' => $height_class,
    'value' => set_value('height'),
    'placeholder' => 'طولك بالمتر *',
    'onBlur' => 'height_client_validation_blur();',
    'onFocus' => 'height_client_validation_focus();'
);

$reason = array(
    'name' => 'reason',
    'id' => 'reason',
    'class' => $reason_class,
    'value' => set_value('reason'),
    'placeholder' => 'كلمة توضح فيها هدفك من الاشتراك في كرشلس *',
    'onBlur' => 'reason_client_validation_blur();',
    'onFocus' => 'reason_client_validation_focus();'
);

$provocation = array(
    'name' => 'provocation',
    'id' => 'provocation',
    'class' => $provocation_class,
    'value' => set_value('provocation'),
    'placeholder' => 'كلمة توجهها للمنافسين *',
    'onBlur' => 'provocation_client_validation_blur();',
    'onFocus' => 'provocation_client_validation_focus();'
);

//########## Left Column php Form Helper Input Elements ####################

$mobile_number = array(
    'name' => 'mobile_number',
    'id' => 'mobile_number',
    'class' => $mobile_number_class,
    'value' => set_value('mobile_number'),
    'placeholder' => 'رقم الهاتف على الوتساب*',
    'onBlur' => 'mobile_number_client_validation_blur();',
    'onFocus' => 'mobile_number_client_validation_focus();'
);

$dial_code = array(
    'name' => 'dial_code',
    'id' => 'dial_code',
    'type' => 'hidden'
);

$email = array(
    'name' => 'email',
    'id' => 'email',
    'value' => set_value('email'),
    'placeholder' => 'البريد الإلكتروني *',
    'class' => $email_class,
    'onBlur' => 'email_client_validation_blur();',
    'onFocus' => 'email_client_validation_focus();'
);

$facebook = array(
    'name' => 'facebook',
    'id' => 'facebook',
    'value' => set_value('facebook'),
    'placeholder' => 'فيسبوك Ex: fb.com/username',
    'class' => $facebook_class,
    'onBlur' => 'facebook_client_validation_blur();',
    'onFocus' => 'facebook_client_validation_focus();'
);

$name_agreement_checkbox = $this->input->post('name_agreement', true) == null ? false : true;
$name_agreement = array(
    'name' => 'name_agreement',
    'id' => 'name_agreement',
    'value' => 'accept',
    'checked' => $name_agreement_checkbox
);

$picture_agreement_checkbox = $this->input->post('picture_agreement', true) == null ? false : true;
$picture_agreement = array(
    'name' => 'picture_agreement',
    'id' => 'picture_agreement',
    'value' => 'accept',
    'checked' => $picture_agreement_checkbox
);


$operations_desc = array(
    'name' => 'operations_desc',
    'id' => 'operations_desc',
    'class' => 'input_form',
    'value' => set_value('operations_desc'),
    'placeholder' => '  هل تعرضت لعمليات جراحية ؟ من فضلك أذكر التفاصيل.'
);


$terminalDiseases_desc = array(
    'name' => 'terminalDiseases_desc',
    'id' => 'terminalDiseases_desc',
    'class' => 'input_form',
    'value' => set_value('terminalDiseases_desc'),
    'placeholder' => 'هل تعاني من اي امراض مزمنة ( سكر - غده - كبد - قولون عصبي ) ؟ من فضلك أذكر التفاصيل.'
);

$boneFractures_desc = array(
    'name' => 'boneFractures_desc',
    'id' => 'boneFractures_desc',
    'class' => 'input_form',
    'value' => set_value('boneFractures_desc'),
    'placeholder' => 'هل تعاني من اي مشاكل في العمود الفقري او المفاصل ؟ من فضلك أذكر التفاصيل.'
);

$drugs_desc = array(
    'name' => 'drugs_desc',
    'id' => 'drugs_desc',
    'class' => 'input_form',
    'value' => set_value('drugs_desc'),
    'placeholder' => 'هل تتناول أدوية ؟ من فضلك أذكر التفاصيل.'
);

$allergy_desc = array(
    'name' => 'allergy_desc',
    'id' => 'allergy_desc',
    'class' => 'input_form',
    'value' => set_value('allergy_desc'),
    'placeholder' => 'هل لديك حساسية من أطعمة معينة ؟ من فضلك أذكر التفاصيل.'
);

$overall_agreement_checkbox = $this->input->post('overall_agreement', true) == null ? false : true;
$overall_agreement = array(
    'name' => 'overall_agreement',
    'id' => 'overall_agreement',
    'value' => 'accept',
    'checked' => $overall_agreement_checkbox,
    'onClick' => 'toggle_overall_agreement_checkbox();'
);


?>
<body>
<div style="display: none;"><?php echo form_upload($profile_picture_file_upload);
    echo form_upload($weight_image_file_upload);
    echo form_upload($height_image_file_upload); ?></div>
<div class="container">
    <div class="row logo-register">
      <div class="col-md-5"></div>
      <div class="col-md-2">  <a href="<?php echo base_url();?>">
          <img src="<?php echo base_url(); ?>Assets/Images/kershless_logo.svg"
              class="img-responsive" alt="Kershless">
        </a></div>

        <div class="col-md-5"></div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="col-md-12 gen-info">
              <h3 class="gen-h3">بيانات عامة</h3>
                <form role="form">
                    <div class="form-group arabic-name">
                        <div class="col-md-4 form-group first-name-arabic">
                            <?php echo form_input($first_name_arabic); ?>
                        </div>
                        <div class="col-md-4 form-group middle-name-arabic">
                            <?php echo form_input($middle_name_arabic); ?>
                        </div>
                        <div class="col-md-4 form-group family-name-arabic">
                            <?php echo form_input($family_name_arabic); ?>
                        </div>
                    </div>

                    <div class="form-group english-name">
                        <div class="col-md-4 form-group first-name-english">
                            <?php echo form_input($first_name_english); ?>
                        </div>
                        <div class="col-md-4 form-group middle-name-english">
                            <?php echo form_input($middle_name_english); ?>
                        </div>
                        <div class="col-md-4 form-group family-name-english">
                            <?php echo form_input($family_name_english); ?>
                        </div>
                    </div>

                    <div class="form-group name-agreement">
                        <?php echo form_checkbox($name_agreement); ?>
                        موافق علي عرض أسمي في النتائج على وسائل التواصل الاجتماعي
                    </div>

                    <div class="form-group name-presentation" hidden>
                        <div> طريقة عرض الإسم</div>
                        <label class="col-md-6"> <?php
                            echo form_radio('name-presentation', '1', true, 'id="first-middle"');
                            ?> <span id="first-middle-span">Firstname Middlename</span>
                        </label> <label class="col-md-6"> <?php
                            echo form_radio('name-presentation', '2', false, 'id="first-last"');
                            ?> <span id="first-last-span">Firstname Lastname</span>
                        </label>
                    </div>

                    <div class="form-group bir-da">
                        <div>تاريخ الميلاد *</div>
                        <?php
                        echo buildDayDropdown('DOB', $this->input->post('DOB') + 1);
                        ?>
                        <?php
                        echo buildMonthDropdown('MOB', $this->input->post('MOB'));
                        ?>
                        <?php
                        echo buildYearDropdown('YOB', $this->input->post('YOB'));
                        ?>
                    </div>
                    <div class="form-group sex">
                        <h4>النوع *</h4>
                        <?php
                        $gender_radiobutton = $this->input->post('gender');
                        if ($gender_radiobutton == 1) {
                            ?>
                            <label class="col-md-6"> <?php
                                echo form_radio('gender', '1', true, 'id="male_radio"');
                                ?> <span>ذكر</span>
                            </label> <label class="col-md-6"> <?php
                                echo form_radio('gender', '2', false, 'id="female_radio"');
                                ?> <span>أنثي</span>
                            </label>
                        <?php
                        } else {
                            if ($gender_radiobutton == 2) {
                                ?>
                                <label class="col-md-6"> <?php
                                    echo form_radio('gender', '1', false, 'id="male_radio"');
                                    ?> <span>ذكر</span>
                                </label> <label class="col-md-6"> <?php
                                    echo form_radio('gender', '2', true, 'id="female_radio"');
                                    ?> <span>أنثي</span>
                                </label>
                            <?php
                            } else {
                                ?>
                                <label class="col-md-6"> <?php
                                    echo form_radio('gender', '1', true, 'id="male_radio"');
                                    ?> <span>ذكر</span>
                                </label> <label class="col-md-6"> <?php
                                    echo form_radio('gender', '2', false, 'id="female_radio"');
                                    ?> <span>أنثي</span>
                                </label>
                            <?php
                            }
                        }
                        ?>
                    </div>
                    <div class="form-group marital">
                        <h4>الحالة الإجتماعية *</h4>
                        <?php

                        $marital_status_radiobutton = $this->input->post('marital_status');
                        if ($marital_status_radiobutton == 1) {
                            ?>

                            <label class="col-md-4"> <?php
                                echo form_radio('marital_status', '1', true);
                                ?> <span>أعزب</span>
                            </label> <label class="col-md-4"> <?php
                                echo form_radio('marital_status', '2', false);
                                ?> <span>متزوج</span>
                            </label> <label class="col-md-4"> <?php
                                echo form_radio('marital_status', '3', false);
                                ?> <span>ﺃﺧﺭﻯ</span>
                            </label>
                        <?php
                        } else {
                            if ($marital_status_radiobutton == 2) {
                                ?>
                                <label class="col-md-4"> <?php
                                    echo form_radio('marital_status', '1', false);
                                    ?> <span>أعزب</span>
                                </label> <label class="col-md-4"> <?php
                                    echo form_radio('marital_status', '2', true);
                                    ?> <span>متزوج</span>
                                </label> <label class="col-md-4"> <?php
                                    echo form_radio('marital_status', '3', false);
                                    ?> <span>ﺃﺧﺭﻯ</span>
                                </label>
                            <?php

                            } else {
                                if ($marital_status_radiobutton == 3) {
                                    ?>
                                    <label class="col-md-4"> <?php
                                        echo form_radio('marital_status', '1', false);
                                        ?> <span>أعزب</span>
                                    </label> <label class="col-md-4"> <?php
                                        echo form_radio('marital_status', '2', false);
                                        ?> <span>متزوج</span>
                                    </label> <label class="col-md-4"> <?php
                                        echo form_radio('marital_status', '3', true);
                                        ?> <span>ﺃﺧﺭﻯ</span>
                                    </label>
                                <?php

                                } else {
                                    ?>
                                    <label class="col-md-4"> <?php
                                        echo form_radio('marital_status', '1', true);
                                        ?> <span>أعزب</span>
                                    </label> <label class="col-md-4"> <?php
                                        echo form_radio('marital_status', '2', false);
                                        ?> <span>متزوج</span>
                                    </label> <label class="col-md-4"> <?php
                                        echo form_radio('marital_status', '3', false);
                                        ?> <span>ﺃﺧﺭﻯ</span>
                                    </label>
                                <?php
                                }
                            }
                        }

                        ?>

                    </div>
                    <div class="form-group jobtype">
                        <?php echo form_input($job); ?>
                    </div>

                    <div class="form-group nation">
                        <?php
                        $nationality = array(
                            'NONE' => 'الجنسية *',
                            'DZ' => 'الجزائر',
                            'BH' => 'البحرين',
                            'TD' => 'تشاد',
                            'KM' => 'جزر القمر',
                            'DJ' => 'جيبوتي',
                            'EG' => 'مصر',
                            'IQ' => 'العراق',
                            'JO' => 'الأردن',
                            'KW' => 'الكويت',
                            'LB' => 'لبنان',
                            'LY' => 'ليبيا',
                            'MR' => 'موريتانيا',
                            'MA' => 'المغرب',
                            'OM' => 'عمان',
                            'PS' => 'فلسطين',
                            'QA' => 'قطر',
                            'SA' => 'المملكة العربية السعودية',
                            'SO' => 'الصومال',
                            'SD' => 'السودان',
                            'SY' => 'سوريا',
                            'TN' => 'تونس',
                            'AE' => 'الامارات العربية المتحدة',
                            'YE' => 'اليمن',
                            'AW' => 'آروبا',
                            'AZ' => 'أذربيجان',
                            'AM' => 'أرمينيا',
                            'ES' => 'أسبانيا',
                            'AU' => 'أستراليا',
                            'AF' => 'أفغانستان',
                            'AL' => 'ألبانيا',
                            'DE' => 'ألمانيا',
                            'AG' => 'أنتيجوا وبربودا',
                            'AO' => 'أنجولا',
                            'AI' => 'أنجويلا',
                            'AD' => 'أندورا',
                            'UY' => 'أورجواي',
                            'UZ' => 'أوزبكستان',
                            'UG' => 'أوغندا',
                            'UA' => 'أوكرانيا',
                            'IE' => 'أيرلندا',
                            'IS' => 'أيسلندا',
                            'ET' => 'اثيوبيا',
                            'ER' => 'اريتريا',
                            'EE' => 'استونيا',
                            'IL' => 'اسرائيل',
                            'AR' => 'الأرجنتين',
                            'EC' => 'الاكوادور',
                            'BS' => 'الباهاما',
                            'BR' => 'البرازيل',
                            'PT' => 'البرتغال',
                            'BA' => 'البوسنة والهرسك',
                            'GA' => 'الجابون',
                            'ME' => 'الجبل الأسود',
                            'DK' => 'الدانمرك',
                            'CV' => 'الرأس الأخضر',
                            'SV' => 'السلفادور',
                            'SN' => 'السنغال',
                            'SE' => 'السويد',
                            'EH' => 'الصحراء الغربية',
                            'CN' => 'الصين',
                            'VA' => 'الفاتيكان',
                            'PH' => 'الفيلبين',
                            'AQ' => 'القطب الجنوبي',
                            'CM' => 'الكاميرون',
                            'CG' => 'الكونغو - برازافيل',
                            'HU' => 'المجر',
                            'IO' => 'المحيط الهندي البريطاني',
                            'TF' => 'المقاطعات الجنوبية الفرنسية',
                            'MX' => 'المكسيك',
                            'GB' => 'المملكة المتحدة',
                            'NO' => 'النرويج',
                            'AT' => 'النمسا',
                            'NE' => 'النيجر',
                            'IN' => 'الهند',
                            'US' => 'الولايات المتحدة الأمريكية',
                            'JP' => 'اليابان',
                            'GR' => 'اليونان',
                            'ID' => 'اندونيسيا',
                            'IR' => 'ايران',
                            'IT' => 'ايطاليا',
                            'PG' => 'بابوا غينيا الجديدة',
                            'PY' => 'باراجواي',
                            'PK' => 'باكستان',
                            'PW' => 'بالاو',
                            'BW' => 'بتسوانا',
                            'PN' => 'بتكايرن',
                            'BB' => 'بربادوس',
                            'BM' => 'برمودا',
                            'BN' => 'بروناي',
                            'BE' => 'بلجيكا',
                            'BG' => 'بلغاريا',
                            'BZ' => 'بليز',
                            'BD' => 'بنجلاديش',
                            'PA' => 'بنما',
                            'BJ' => 'بنين',
                            'BT' => 'بوتان',
                            'PR' => 'بورتوريكو',
                            'BF' => 'بوركينا فاسو',
                            'BI' => 'بوروندي',
                            'PL' => 'بولندا',
                            'BO' => 'بوليفيا',
                            'PF' => 'بولينيزيا الفرنسية',
                            'PE' => 'بيرو',
                            'TZ' => 'تانزانيا',
                            'TH' => 'تايلند',
                            'TW' => 'تايوان',
                            'TM' => 'تركمانستان',
                            'TR' => 'تركيا',
                            'TT' => 'ترينيداد وتوباغو',
                            'TG' => 'توجو',
                            'TV' => 'توفالو',
                            'TK' => 'توكيلو',
                            'TO' => 'تونجا',
                            'TL' => 'تيمور الشرقية',
                            'JM' => 'جامايكا',
                            'GI' => 'جبل طارق',
                            'GD' => 'جرينادا',
                            'GL' => 'جرينلاند',
                            'AX' => 'جزر أولان',
                            'AN' => 'جزر الأنتيل الهولندية',
                            'TC' => 'جزر الترك وجايكوس',
                            'KY' => 'جزر الكايمن',
                            'MH' => 'جزر المارشال',
                            'MV' => 'جزر الملديف',
                            'UM' => 'جزر الولايات المتحدة البعيدة الصغيرة',
                            'SB' => 'جزر سليمان',
                            'FO' => 'جزر فارو',
                            'VI' => 'جزر فرجين الأمريكية',
                            'VG' => 'جزر فرجين البريطانية',
                            'FK' => 'جزر فوكلاند',
                            'CK' => 'جزر كوك',
                            'CC' => 'جزر كوكوس',
                            'MP' => 'جزر ماريانا الشمالية',
                            'WF' => 'جزر والس وفوتونا',
                            'CX' => 'جزيرة الكريسماس',
                            'BV' => 'جزيرة بوفيه',
                            'IM' => 'جزيرة مان',
                            'NF' => 'جزيرة نورفوك',
                            'HM' => 'جزيرة هيرد وماكدونالد',
                            'CF' => 'جمهورية افريقيا الوسطى',
                            'CZ' => 'جمهورية التشيك',
                            'DO' => 'جمهورية الدومينيك',
                            'CD' => 'جمهورية الكونغو الديمقراطية',
                            'ZA' => 'جمهورية جنوب افريقيا',
                            'GT' => 'جواتيمالا',
                            'GP' => 'جوادلوب',
                            'GU' => 'جوام',
                            'GE' => 'جورجيا',
                            'GS' => 'جورجيا الجنوبية وجزر ساندويتش الجنوبية',
                            'JE' => 'جيرسي',
                            'DM' => 'دومينيكا',
                            'RW' => 'رواندا',
                            'RU' => 'روسيا',
                            'BY' => 'روسيا البيضاء',
                            'RO' => 'رومانيا',
                            'RE' => 'روينيون',
                            'ZM' => 'زامبيا',
                            'ZW' => 'زيمبابوي',
                            'CI' => 'ساحل العاج',
                            'WS' => 'ساموا',
                            'AS' => 'ساموا الأمريكية',
                            'SM' => 'سان مارينو',
                            'PM' => 'سانت بيير وميكولون',
                            'VC' => 'سانت فنسنت وغرنادين',
                            'KN' => 'سانت كيتس ونيفيس',
                            'LC' => 'سانت لوسيا',
                            'MF' => 'سانت مارتين',
                            'SH' => 'سانت هيلنا',
                            'ST' => 'ساو تومي وبرينسيبي',
                            'LK' => 'سريلانكا',
                            'SJ' => 'سفالبارد وجان مايان',
                            'SK' => 'سلوفاكيا',
                            'SI' => 'سلوفينيا',
                            'SG' => 'سنغافورة',
                            'SZ' => 'سوازيلاند',
                            'SR' => 'سورينام',
                            'CH' => 'سويسرا',
                            'SL' => 'سيراليون',
                            'SC' => 'سيشل',
                            'CL' => 'شيلي',
                            'RS' => 'صربيا',
                            'CS' => 'صربيا والجبل الأسود',
                            'TJ' => 'طاجكستان',
                            'GM' => 'غامبيا',
                            'GH' => 'غانا',
                            'GF' => 'غويانا',
                            'GY' => 'غيانا',
                            'GN' => 'غينيا',
                            'GQ' => 'غينيا الاستوائية',
                            'GW' => 'غينيا بيساو',
                            'VU' => 'فانواتو',
                            'FR' => 'فرنسا',
                            'VE' => 'فنزويلا',
                            'FI' => 'فنلندا',
                            'VN' => 'فيتنام',
                            'FJ' => 'فيجي',
                            'CY' => 'قبرص',
                            'KG' => 'قرغيزستان',
                            'KZ' => 'كازاخستان',
                            'NC' => 'كاليدونيا الجديدة',
                            'HR' => 'كرواتيا',
                            'KH' => 'كمبوديا',
                            'CA' => 'كندا',
                            'CU' => 'كوبا',
                            'KR' => 'كوريا الجنوبية',
                            'KP' => 'كوريا الشمالية',
                            'CR' => 'كوستاريكا',
                            'CO' => 'كولومبيا',
                            'KI' => 'كيريباتي',
                            'KE' => 'كينيا',
                            'LV' => 'لاتفيا',
                            'LA' => 'لاوس',
                            'LU' => 'لوكسمبورج',
                            'LR' => 'ليبيريا',
                            'LT' => 'ليتوانيا',
                            'LI' => 'ليختنشتاين',
                            'LS' => 'ليسوتو',
                            'MQ' => 'مارتينيك',
                            'MO' => 'ماكاو الصينية',
                            'MT' => 'مالطا',
                            'ML' => 'مالي',
                            'MY' => 'ماليزيا',
                            'YT' => 'مايوت',
                            'MG' => 'مدغشقر',
                            'MK' => 'مقدونيا',
                            'MW' => 'ملاوي',
                            'ZZ' => 'منطقة غير معرفة',
                            'MN' => 'منغوليا',
                            'MU' => 'موريشيوس',
                            'MZ' => 'موزمبيق',
                            'MD' => 'مولدافيا',
                            'MC' => 'موناكو',
                            'MS' => 'مونتسرات',
                            'MM' => 'ميانمار',
                            'FM' => 'ميكرونيزيا',
                            'NA' => 'ناميبيا',
                            'NR' => 'نورو',
                            'NP' => 'نيبال',
                            'NG' => 'نيجيريا',
                            'NI' => 'نيكاراجوا',
                            'NZ' => 'نيوزيلاندا',
                            'NU' => 'نيوي',
                            'HT' => 'هايتي',
                            'HN' => 'هندوراس',
                            'NL' => 'هولندا',
                            'HK' => 'هونج كونج الصينية'
                        );
                        $resulting_array = array_combine($nationality, $nationality);
                        $resulting_array["الجنسية *"] = "NONE";
                        $resulting_array = array_flip($resulting_array);
                        echo form_dropdown('nationality', $resulting_array, $this->input->post('nationality'), 'id="nationality" class="' . $nationality_class . '"');
                        ?>
                    </div>
                    <div class="form-group cnty">
                        <?php
                        $country = array(
                            'NONE' => 'البلد المقيم بها *',
                            'DZ' => 'الجزائر',
                            'BH' => 'البحرين',
                            'TD' => 'تشاد',
                            'KM' => 'جزر القمر',
                            'DJ' => 'جيبوتي',
                            'EG' => 'مصر',
                            'IQ' => 'العراق',
                            'JO' => 'الأردن',
                            'KW' => 'الكويت',
                            'LB' => 'لبنان',
                            'LY' => 'ليبيا',
                            'MR' => 'موريتانيا',
                            'MA' => 'المغرب',
                            'OM' => 'عمان',
                            'PS' => 'فلسطين',
                            'QA' => 'قطر',
                            'SA' => 'المملكة العربية السعودية',
                            'SO' => 'الصومال',
                            'SD' => 'السودان',
                            'SY' => 'سوريا',
                            'TN' => 'تونس',
                            'AE' => 'الامارات العربية المتحدة',
                            'YE' => 'اليمن',
                            'AW' => 'آروبا',
                            'AZ' => 'أذربيجان',
                            'AM' => 'أرمينيا',
                            'ES' => 'أسبانيا',
                            'AU' => 'أستراليا',
                            'AF' => 'أفغانستان',
                            'AL' => 'ألبانيا',
                            'DE' => 'ألمانيا',
                            'AG' => 'أنتيجوا وبربودا',
                            'AO' => 'أنجولا',
                            'AI' => 'أنجويلا',
                            'AD' => 'أندورا',
                            'UY' => 'أورجواي',
                            'UZ' => 'أوزبكستان',
                            'UG' => 'أوغندا',
                            'UA' => 'أوكرانيا',
                            'IE' => 'أيرلندا',
                            'IS' => 'أيسلندا',
                            'ET' => 'اثيوبيا',
                            'ER' => 'اريتريا',
                            'EE' => 'استونيا',
                            'IL' => 'اسرائيل',
                            'AR' => 'الأرجنتين',
                            'EC' => 'الاكوادور',
                            'BS' => 'الباهاما',
                            'BR' => 'البرازيل',
                            'PT' => 'البرتغال',
                            'BA' => 'البوسنة والهرسك',
                            'GA' => 'الجابون',
                            'ME' => 'الجبل الأسود',
                            'DK' => 'الدانمرك',
                            'CV' => 'الرأس الأخضر',
                            'SV' => 'السلفادور',
                            'SN' => 'السنغال',
                            'SE' => 'السويد',
                            'EH' => 'الصحراء الغربية',
                            'CN' => 'الصين',
                            'VA' => 'الفاتيكان',
                            'PH' => 'الفيلبين',
                            'AQ' => 'القطب الجنوبي',
                            'CM' => 'الكاميرون',
                            'CG' => 'الكونغو - برازافيل',
                            'HU' => 'المجر',
                            'IO' => 'المحيط الهندي البريطاني',
                            'TF' => 'المقاطعات الجنوبية الفرنسية',
                            'MX' => 'المكسيك',
                            'GB' => 'المملكة المتحدة',
                            'NO' => 'النرويج',
                            'AT' => 'النمسا',
                            'NE' => 'النيجر',
                            'IN' => 'الهند',
                            'US' => 'الولايات المتحدة الأمريكية',
                            'JP' => 'اليابان',
                            'GR' => 'اليونان',
                            'ID' => 'اندونيسيا',
                            'IR' => 'ايران',
                            'IT' => 'ايطاليا',
                            'PG' => 'بابوا غينيا الجديدة',
                            'PY' => 'باراجواي',
                            'PK' => 'باكستان',
                            'PW' => 'بالاو',
                            'BW' => 'بتسوانا',
                            'PN' => 'بتكايرن',
                            'BB' => 'بربادوس',
                            'BM' => 'برمودا',
                            'BN' => 'بروناي',
                            'BE' => 'بلجيكا',
                            'BG' => 'بلغاريا',
                            'BZ' => 'بليز',
                            'BD' => 'بنجلاديش',
                            'PA' => 'بنما',
                            'BJ' => 'بنين',
                            'BT' => 'بوتان',
                            'PR' => 'بورتوريكو',
                            'BF' => 'بوركينا فاسو',
                            'BI' => 'بوروندي',
                            'PL' => 'بولندا',
                            'BO' => 'بوليفيا',
                            'PF' => 'بولينيزيا الفرنسية',
                            'PE' => 'بيرو',
                            'TZ' => 'تانزانيا',
                            'TH' => 'تايلند',
                            'TW' => 'تايوان',
                            'TM' => 'تركمانستان',
                            'TR' => 'تركيا',
                            'TT' => 'ترينيداد وتوباغو',
                            'TG' => 'توجو',
                            'TV' => 'توفالو',
                            'TK' => 'توكيلو',
                            'TO' => 'تونجا',
                            'TL' => 'تيمور الشرقية',
                            'JM' => 'جامايكا',
                            'GI' => 'جبل طارق',
                            'GD' => 'جرينادا',
                            'GL' => 'جرينلاند',
                            'AX' => 'جزر أولان',
                            'AN' => 'جزر الأنتيل الهولندية',
                            'TC' => 'جزر الترك وجايكوس',
                            'KY' => 'جزر الكايمن',
                            'MH' => 'جزر المارشال',
                            'MV' => 'جزر الملديف',
                            'UM' => 'جزر الولايات المتحدة البعيدة الصغيرة',
                            'SB' => 'جزر سليمان',
                            'FO' => 'جزر فارو',
                            'VI' => 'جزر فرجين الأمريكية',
                            'VG' => 'جزر فرجين البريطانية',
                            'FK' => 'جزر فوكلاند',
                            'CK' => 'جزر كوك',
                            'CC' => 'جزر كوكوس',
                            'MP' => 'جزر ماريانا الشمالية',
                            'WF' => 'جزر والس وفوتونا',
                            'CX' => 'جزيرة الكريسماس',
                            'BV' => 'جزيرة بوفيه',
                            'IM' => 'جزيرة مان',
                            'NF' => 'جزيرة نورفوك',
                            'HM' => 'جزيرة هيرد وماكدونالد',
                            'CF' => 'جمهورية افريقيا الوسطى',
                            'CZ' => 'جمهورية التشيك',
                            'DO' => 'جمهورية الدومينيك',
                            'CD' => 'جمهورية الكونغو الديمقراطية',
                            'ZA' => 'جمهورية جنوب افريقيا',
                            'GT' => 'جواتيمالا',
                            'GP' => 'جوادلوب',
                            'GU' => 'جوام',
                            'GE' => 'جورجيا',
                            'GS' => 'جورجيا الجنوبية وجزر ساندويتش الجنوبية',
                            'JE' => 'جيرسي',
                            'DM' => 'دومينيكا',
                            'RW' => 'رواندا',
                            'RU' => 'روسيا',
                            'BY' => 'روسيا البيضاء',
                            'RO' => 'رومانيا',
                            'RE' => 'روينيون',
                            'ZM' => 'زامبيا',
                            'ZW' => 'زيمبابوي',
                            'CI' => 'ساحل العاج',
                            'WS' => 'ساموا',
                            'AS' => 'ساموا الأمريكية',
                            'SM' => 'سان مارينو',
                            'PM' => 'سانت بيير وميكولون',
                            'VC' => 'سانت فنسنت وغرنادين',
                            'KN' => 'سانت كيتس ونيفيس',
                            'LC' => 'سانت لوسيا',
                            'MF' => 'سانت مارتين',
                            'SH' => 'سانت هيلنا',
                            'ST' => 'ساو تومي وبرينسيبي',
                            'LK' => 'سريلانكا',
                            'SJ' => 'سفالبارد وجان مايان',
                            'SK' => 'سلوفاكيا',
                            'SI' => 'سلوفينيا',
                            'SG' => 'سنغافورة',
                            'SZ' => 'سوازيلاند',
                            'SR' => 'سورينام',
                            'CH' => 'سويسرا',
                            'SL' => 'سيراليون',
                            'SC' => 'سيشل',
                            'CL' => 'شيلي',
                            'RS' => 'صربيا',
                            'CS' => 'صربيا والجبل الأسود',
                            'TJ' => 'طاجكستان',
                            'GM' => 'غامبيا',
                            'GH' => 'غانا',
                            'GF' => 'غويانا',
                            'GY' => 'غيانا',
                            'GN' => 'غينيا',
                            'GQ' => 'غينيا الاستوائية',
                            'GW' => 'غينيا بيساو',
                            'VU' => 'فانواتو',
                            'FR' => 'فرنسا',
                            'VE' => 'فنزويلا',
                            'FI' => 'فنلندا',
                            'VN' => 'فيتنام',
                            'FJ' => 'فيجي',
                            'CY' => 'قبرص',
                            'KG' => 'قرغيزستان',
                            'KZ' => 'كازاخستان',
                            'NC' => 'كاليدونيا الجديدة',
                            'HR' => 'كرواتيا',
                            'KH' => 'كمبوديا',
                            'CA' => 'كندا',
                            'CU' => 'كوبا',
                            'KR' => 'كوريا الجنوبية',
                            'KP' => 'كوريا الشمالية',
                            'CR' => 'كوستاريكا',
                            'CO' => 'كولومبيا',
                            'KI' => 'كيريباتي',
                            'KE' => 'كينيا',
                            'LV' => 'لاتفيا',
                            'LA' => 'لاوس',
                            'LU' => 'لوكسمبورج',
                            'LR' => 'ليبيريا',
                            'LT' => 'ليتوانيا',
                            'LI' => 'ليختنشتاين',
                            'LS' => 'ليسوتو',
                            'MQ' => 'مارتينيك',
                            'MO' => 'ماكاو الصينية',
                            'MT' => 'مالطا',
                            'ML' => 'مالي',
                            'MY' => 'ماليزيا',
                            'YT' => 'مايوت',
                            'MG' => 'مدغشقر',
                            'MK' => 'مقدونيا',
                            'MW' => 'ملاوي',
                            'ZZ' => 'منطقة غير معرفة',
                            'MN' => 'منغوليا',
                            'MU' => 'موريشيوس',
                            'MZ' => 'موزمبيق',
                            'MD' => 'مولدافيا',
                            'MC' => 'موناكو',
                            'MS' => 'مونتسرات',
                            'MM' => 'ميانمار',
                            'FM' => 'ميكرونيزيا',
                            'NA' => 'ناميبيا',
                            'NR' => 'نورو',
                            'NP' => 'نيبال',
                            'NG' => 'نيجيريا',
                            'NI' => 'نيكاراجوا',
                            'NZ' => 'نيوزيلاندا',
                            'NU' => 'نيوي',
                            'HT' => 'هايتي',
                            'HN' => 'هندوراس',
                            'NL' => 'هولندا',
                            'HK' => 'هونج كونج الصينية'
                        );
                        $resulting_array = array_combine($country, $country);
                        $resulting_array["البلد المقيم بها *"] = "NONE";
                        $resulting_array = array_flip($resulting_array);
                        echo form_dropdown('country', $resulting_array, $this->input->post('country'), 'id="country" class="' . $country_class . '"');
                        ?>

                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>


    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="col-md-12 com-info">
              <h3>بيانات المسابقة</h3>
                <div class="form-group uplpho">
                    <div id="profile_picture_upload"
                         class="<?php echo $profile_picture_class ?>"></div>
                         <label class="file-size">حجم الصورة أقل من </label><label>&nbsp;3MB</label>
                         <br>
                </div>
                <div class="form-group picture-agreement">
                    <?php echo form_checkbox($picture_agreement); ?>
                    موافق علي عرض صورتي في النتائج على وسائل التواصل الاجتماعي
                </div>
                <div class="form-group photoboth">
                    <div id="weight_upload_div"
                         class="<?php echo $weight_image_class ?>">
                        <div id="weight_upload_button">صورة وزنك *</div>
                    </div>
                    <div id="height_upload_div"
                         class="<?php echo $height_image_class ?>">
                        <div id="height_upload_button">صورة طولك *</div>
                    </div>
                </div>
                <div class="form-group weight">
                    <?php echo form_input($weight); ?>
                    <?php echo form_input($height); ?>
                </div>

                <div class="form-group reas">
                    <?php echo form_textarea($reason); ?>
                </div>

                <div class="form-group provo">
                    <?php echo form_textarea($provocation); ?>
                </div>
                <div class="form-group frecode">
                    <?php echo form_textarea($friend_code); ?>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="col-md-12 con-info">
              <h3>بيانات التواصل</h3>
                <div class="form-group mobno">
                    <?php echo form_input($mobile_number); ?>
                    <?php echo form_input($dial_code); ?>
                </div>

                <div class="form-group mail">
                    <?php echo form_input($email); ?>
                </div>

                <div class="form-group fb">
                    <?php echo form_input($facebook); ?>
                </div>




            </div>

        </div>
        <div class="col-md-3"></div>
    </div>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="col-md-12 con-info">
              <h3>بيانات الحالة الصحية</h3>
                <div class="form-group operations-desc">
                    <?php echo form_textarea($operations_desc); ?>
                </div>
                <div class="form-group terminalDiseases-desc">
                    <?php echo form_textarea($terminalDiseases_desc); ?>
                </div>
                <div class="form-group boneFractures-desc">
                    <?php echo form_textarea($boneFractures_desc); ?>
                </div>
                <div class="form-group drugs-desc">
                    <?php echo form_textarea($drugs_desc); ?>
                </div>
                <div class="form-group allergy-desc">
                    <?php echo form_textarea($allergy_desc); ?>
                </div>
                <br><br>
                <div>
                    <?php echo form_checkbox($overall_agreement); ?>
                    أقر بأن جميع البيانات المذكورة صحيحة و على مسئوليتي الشخصية طبقاً
                    <a id="agreement_rules"
                       href="register/rules" target="_blank"
                       style="text-decoration: none; color: #16a085;">للشروط و الأحكام.</a>
                    *
                </div>
                <?php
                echo form_submit($form_submitter);
                echo form_close();
                ?>
                <button id="bottom_middle_submit" type="button" class="btn btn-primary gobtn">جاهز للتحدي</button>
            </div>

        </div>
        <div class="col-md-3"></div>
    </div>

    <footer>
        <p class="col-md-12 required">(*) بيانات لا يكتمل التسجيل بدونها</p>

        <p class="col-md-12 copyrights">&copy; Kershless <?php echo date("Y");?></p>
    </footer>
</div>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>Assets/js/jquery.tipsy.js"></script>
<script src="<?php echo base_url(); ?>Assets/js/clientside_validation_v2.js"></script>
<script src="<?php echo base_url(); ?>Assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="<?php echo base_url(); ?>Assets/js/intlTelInput.js"></script>
</body>
</html>

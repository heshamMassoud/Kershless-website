<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Error reporting
*/
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
date_default_timezone_set('Europe/London');

define('EOL', (PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
define('ENABLE_PHPEXCEL', false);

if (ENABLE_PHPEXCEL) {
    if (ENVIRONMENT == "production") {
        include_once 'http://kershless.com/Classes/PHPExcel.php';
    } else {
        include_once '/Applications/XAMPP/xamppfiles/htdocs/kershless/Classes/PHPExcel.php';
    }
}

class Register extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('language');
        $this->lang->load('register');
        $this->db->simple_query('SET NAMES \'utf-8\'');
    }

    public function index()
    {
        //Begining of the year zeros testing (ps. not supposed to be here)
        //$currentYear = date("Y");
        //$this->db->select("* FROM User WHERE User.date > '" . $currentYear . "-1-1'");
        //$query = $this->db->get();
        //$results = $query->result();
        //echo count($results);
        //return;

        $this->load->view("view_register");
    }

    public function rules()
    {
        $this->load->view("view_agreement_terms");
    }

    function _createRichExcelSheetMale()
    {
        // Create new PHPExcel object
        echo date('H:i:s'), " Create new PHPExcel object", EOL;
        $objPHPExcel = new PHPExcel();

        // Set document properties
        echo date('H:i:s'), " Set document properties", EOL;
        $objPHPExcel->getProperties()->setCreator("Kershless")
            ->setLastModifiedBy("Kershless")
            ->setTitle("Kershless Male Applicants")
            ->setSubject("Office 2007 XLSX Test Document")
            ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
            ->setKeywords("kershless Male applications")
            ->setCategory("Test result file");

        // Set default font
        echo date('H:i:s'), " Set default font", EOL;
        $objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')
            ->setSize(16);
        $objPHPExcel->getDefaultStyle()->getAlignment()
            ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        $objPHPExcel->getActiveSheet()->getStyle('A1:E999')
            ->getAlignment()->setWrapText(true);

        $line_number = 1;

        // Set title
        $objPHPExcel->getActiveSheet()->getStyle('A' . $line_number)->getFont()->setName('Arial')
            ->setSize(32)
            ->setColor(new PHPExcel_Style_Color(PHPExcel_Style_Color::COLOR_RED));;

        $objPHPExcel->getActiveSheet()->setCellValue('A' . $line_number, "Kershles Weekly Male Applications");
        $objPHPExcel->setActiveSheetIndex(0)->mergeCells("A" . $line_number . ":" . "D" . $line_number);

        // Database Access
        $this->load->model("model_user");
        $results = $this->model_user->get_all_male_data();
        $season_counter = 1;

        // Set Season title
        $line_number += 2;
        $objPHPExcel->getActiveSheet()->getStyle('A' . $line_number)->getFont()->setName('Arial')
            ->setSize(22)
            ->setColor(new PHPExcel_Style_Color(PHPExcel_Style_Color::COLOR_BLUE));;
        $objPHPExcel->getActiveSheet()->setCellValue('A' . $line_number, "Kershles Season " . $season_counter);
        $objPHPExcel->setActiveSheetIndex(0)->mergeCells("A" . $line_number . ":" . "B" . $line_number);
        $line_number += 2;

        // Set Season headers
        $objPHPExcel->getActiveSheet()->setCellValue('A' . $line_number, 'Serial')
            ->setCellValue('B' . $line_number, 'Kershless Code')
            ->setCellValue('C' . $line_number, 'Profile Picture')
            ->setCellValue('D' . $line_number, 'Full Name')
            ->setCellValue('E' . $line_number, 'Date Of Birth')
            ->setCellValue('F' . $line_number, 'Marital Status')
            ->setCellValue('G' . $line_number, 'Job')
            ->setCellValue('H' . $line_number, 'Nationality')
            ->setCellValue('I' . $line_number, 'Country')
            ->setCellValue('J' . $line_number, 'Mobile Number')
            ->setCellValue('K' . $line_number, 'Email')
            ->setCellValue('L' . $line_number, 'Facebook')
            ->setCellValue('M' . $line_number, 'Weight(kg)')
            ->setCellValue('N' . $line_number, 'Weight Image')
            ->setCellValue('O' . $line_number, 'Height(m)')
            ->setCellValue('P' . $line_number, 'Height Image')
            ->setCellValue('Q' . $line_number, 'BMI(Body Mass Index)')
            ->setCellValue('R' . $line_number, 'BMI Category')
            ->setCellValue('S' . $line_number, 'Reason to be Kershless')
            ->setCellValue('T' . $line_number, 'Provocation')
            ->setCellValue('U' . $line_number, 'Friend Code')
            ->setCellValue('V' . $line_number, 'Date')
            ->setCellValue('W' . $line_number, 'Name Usage Agreement')
            ->setCellValue('X' . $line_number, 'Profile Picture Usage Agreement')
            ->setCellValue('Y' . $line_number, 'Season')
            ->setCellValue('Z' . $line_number, 'Review');
        $objPHPExcel->getActiveSheet()->getStyle('A' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('B' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('C' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('D' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('E' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('F' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('G' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('H' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('I' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('J' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('K' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('L' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('M' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('N' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('O' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('P' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('Q' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('R' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('S' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('T' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('U' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('V' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('W' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('X' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('Y' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('Z' . $line_number)->getFont()->setBold(true);

        $line_number++;

        for ($i = 0; $i < count($results); $i++) {
            $objPHPExcel->getActiveSheet()->setCellValue('A' . $line_number, $i + 1)
                ->setCellValue('B' . $line_number, $results[$i]->kershless_code)
                //->setCellValue('C' . $line_number, $results[$i]->profile_picture)
                ->setCellValue('D' . $line_number, $results[$i]->full_name)
                ->setCellValue('E' . $line_number, $results[$i]->date_of_birth)
                ->setCellValue('F' . $line_number, $results[$i]->marital_status)
                ->setCellValue('G' . $line_number, $results[$i]->job)
                ->setCellValue('H' . $line_number, $results[$i]->nationality)
                ->setCellValue('I' . $line_number, $results[$i]->country)
                ->setCellValue('J' . $line_number, $results[$i]->mobile_number)
                ->setCellValue('K' . $line_number, $results[$i]->email)
                ->setCellValue('L' . $line_number, $results[$i]->facebook)
                ->setCellValue('M' . $line_number, $results[$i]->weight)
                // ->setCellValue('N' . $line_number, $results[$i]->weight_image)
                ->setCellValue('O' . $line_number, $results[$i]->height)
                //->setCellValue('P' . $line_number, $results[$i]->height_image)
                ->setCellValue('Q' . $line_number, $results[$i]->bmi)
                ->setCellValue('R' . $line_number, $results[$i]->bmi_category)
                ->setCellValue('S' . $line_number, $results[$i]->reason)
                ->setCellValue('T' . $line_number, $results[$i]->provocation)
                ->setCellValue('U' . $line_number, $results[$i]->friend_code)
                ->setCellValue('V' . $line_number, $results[$i]->date)
                ->setCellValue('W' . $line_number, $results[$i]->name_agreement)
                ->setCellValue('X' . $line_number, $results[$i]->picture_agreement);

            $objPHPExcel->getActiveSheet()->getCell('C' . $line_number)->getHyperlink()->setUrl('/Applications/XAMPP/xamppfiles/htdocs/kershlesswebsite/uploads/' . $results[$i]->profile_picture);
            $objPHPExcel->getActiveSheet()->getCell('C' . $line_number)->getHyperlink()->setTooltip('Download picture!');
            $objPHPExcel->getActiveSheet()->getCell('N' . $line_number)->getHyperlink()->setUrl('/Applications/XAMPP/xamppfiles/htdocs/kershlesswebsite/uploads/' . $results[$i]->weight_image);
            $objPHPExcel->getActiveSheet()->getCell('N' . $line_number)->getHyperlink()->setTooltip('Download picture!');

            $objPHPExcel->getActiveSheet()->getCell('P' . $line_number)->getHyperlink()->setUrl('/Applications/XAMPP/xamppfiles/htdocs/kershlesswebsite/uploads/' . $results[$i]->height_image);
            $objPHPExcel->getActiveSheet()->getCell('P' . $line_number)->getHyperlink()->setTooltip('Download picture!');

            // Add a drawing to the worksheet
            echo date('H:i:s'), " Add a drawing to the worksheet", EOL;
            $objDrawing = new PHPExcel_Worksheet_Drawing();
            $objDrawing->setName('PHPExcel logo' . $line_number);
            $objDrawing->setDescription('PHPExcel logo' . $line_number);
            $objDrawing->setPath('/Applications/XAMPP/xamppfiles/htdocs/kershlesswebsite/uploads/' . $results[$i]->weight_image);
            $objDrawing->setHeight(100);
            $objPHPExcel->getActiveSheet()->getRowDimension($line_number)->setRowHeight(100);
            //echo $objDrawing->getWidth();
            $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth($objDrawing->getWidth() / 10);
            $objDrawing->setCoordinates('N' . $line_number);
            //$objDrawing->setOffsetX(10);
            $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

            // Add a drawing to the worksheet
            echo date('H:i:s'), " Add a drawing to the worksheet", EOL;
            $objDrawing = new PHPExcel_Worksheet_Drawing();
            $objDrawing->setName('PHPExcel logo' . $line_number);
            $objDrawing->setDescription('PHPExcel logo' . $line_number);
            $objDrawing->setPath('/Applications/XAMPP/xamppfiles/htdocs/kershlesswebsite/uploads/' . $results[$i]->height_image);
            $objDrawing->setHeight(100);
            $objPHPExcel->getActiveSheet()->getRowDimension($line_number)->setRowHeight(100);
            $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth($objDrawing->getWidth() / 10);
            $objDrawing->setCoordinates('P' . $line_number);
            //$objDrawing->setOffsetX(10);
            $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

            // Add a drawing to the worksheet

            if ($results[$i]->profile_picture != "") {
                echo date('H:i:s'), " Add a drawing to the worksheet", EOL;
                $objDrawing = new PHPExcel_Worksheet_Drawing();
                $objDrawing->setName('PHPExcel logo' . $line_number);
                $objDrawing->setDescription('PHPExcel logo' . $line_number);
                echo '/Applications/XAMPP/xamppfiles/htdocs/kershlesswebsite/uploads/' . $results[$i]->profile_picture;
                $objDrawing->setPath('/Applications/XAMPP/xamppfiles/htdocs/kershlesswebsite/uploads/' . $results[$i]->profile_picture);
                $objDrawing->setHeight(100);
                $objPHPExcel->getActiveSheet()->getRowDimension($line_number)->setRowHeight(100);
                $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth($objDrawing->getWidth() / 10);
                $objDrawing->setCoordinates('C' . $line_number);
                //$objDrawing->setOffsetX(10);
                $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

                $line_number++;
            }
        }


        // Add some data, resembling some different data types
        echo date('H:i:s'), " Add some data", EOL;


        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        //$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
        //$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
        //$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('U')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('V')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('W')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('X')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setAutoSize(true);


        // Rename worksheet
        echo date('H:i:s'), " Rename worksheet", EOL;
        $objPHPExcel->getActiveSheet()->setTitle('Kershless Male Applicants');


        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);


        // Save Excel 2007 file
        echo date('H:i:s'), " Write to Excel2007 format", EOL;
        $callStartTime = microtime(true);

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save("/Applications/XAMPP/xamppfiles/htdocs/kershlesswebsite/uploads/kershless_male_applicants.xlsx");
        $callEndTime = microtime(true);
        $callTime = $callEndTime - $callStartTime;

        echo date('H:i:s'), " File written to ", str_replace('.php', '.xlsx', pathinfo(__FILE__, PATHINFO_BASENAME)), EOL;
        echo 'Call time to write Workbook was ', sprintf('%.4f', $callTime), " seconds", EOL;
        // Echo memory usage
        echo date('H:i:s'), ' Current memory usage: ', (memory_get_usage(true) / 1024 / 1024), " MB", EOL;


        echo date('H:i:s'), " Reload workbook from saved file", EOL;
        $callStartTime = microtime(true);

        $objPHPExcel = PHPExcel_IOFactory::load(str_replace('.php', '.xlsx', __FILE__));

        $callEndTime = microtime(true);
        $callTime = $callEndTime - $callStartTime;
        echo 'Call time to reload Workbook was ', sprintf('%.4f', $callTime), " seconds", EOL;
        // Echo memory usage
        echo date('H:i:s'), ' Current memory usage: ', (memory_get_usage(true) / 1024 / 1024), " MB", EOL;


        var_dump($objPHPExcel->getActiveSheet()->toArray());


        // Echo memory peak usage
        echo date('H:i:s'), " Peak memory usage: ", (memory_get_peak_usage(true) / 1024 / 1024), " MB", EOL;

        // Echo done
        echo date('H:i:s'), " Done testing file", EOL;
        echo 'File has been created in ', getcwd(), EOL;
    }

    function _createRichExcelSheetFemale()
    {
        // Create new PHPExcel object
        echo date('H:i:s'), " Create new PHPExcel object", EOL;
        $objPHPExcel = new PHPExcel();

        // Set document properties
        echo date('H:i:s'), " Set document properties", EOL;
        $objPHPExcel->getProperties()->setCreator("Kershless")
            ->setLastModifiedBy("Kershless")
            ->setTitle("Kershless Feale Applicants")
            ->setSubject("Office 2007 XLSX Test Document")
            ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
            ->setKeywords("kershless Feale applications")
            ->setCategory("Test result file");

        // Set default font
        echo date('H:i:s'), " Set default font", EOL;
        $objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')
            ->setSize(16);
        $objPHPExcel->getDefaultStyle()->getAlignment()
            ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        $objPHPExcel->getActiveSheet()->getStyle('A1:E999')
            ->getAlignment()->setWrapText(true);

        $line_number = 1;

        // Set title
        $objPHPExcel->getActiveSheet()->getStyle('A' . $line_number)->getFont()->setName('Arial')
            ->setSize(32)
            ->setColor(new PHPExcel_Style_Color(PHPExcel_Style_Color::COLOR_RED));;

        $objPHPExcel->getActiveSheet()->setCellValue('A' . $line_number, "Kershles Weekly Female Applications");
        $objPHPExcel->setActiveSheetIndex(0)->mergeCells("A" . $line_number . ":" . "D" . $line_number);

        // Database Access
        $this->load->model("model_user");
        $results = $this->model_user->get_all_female_data();
        $season_counter = 1;

        // Set Season title
        $line_number += 2;
        $objPHPExcel->getActiveSheet()->getStyle('A' . $line_number)->getFont()->setName('Arial')
            ->setSize(22)
            ->setColor(new PHPExcel_Style_Color(PHPExcel_Style_Color::COLOR_BLUE));;
        $objPHPExcel->getActiveSheet()->setCellValue('A' . $line_number, "Kershles Season " . $season_counter);
        $objPHPExcel->setActiveSheetIndex(0)->mergeCells("A" . $line_number . ":" . "B" . $line_number);
        $line_number += 2;

        // Set Season headers
        $objPHPExcel->getActiveSheet()->setCellValue('A' . $line_number, 'Serial')
            ->setCellValue('B' . $line_number, 'Kershless Code')
            //->setCellValue('C' . $line_number, 'Profile Picture')
            ->setCellValue('D' . $line_number, 'Full Name')
            ->setCellValue('E' . $line_number, 'Date Of Birth')
            ->setCellValue('F' . $line_number, 'Marital Status')
            ->setCellValue('G' . $line_number, 'Job')
            ->setCellValue('H' . $line_number, 'Nationality')
            ->setCellValue('I' . $line_number, 'Country')
            ->setCellValue('J' . $line_number, 'Mobile Number')
            ->setCellValue('K' . $line_number, 'Email')
            ->setCellValue('L' . $line_number, 'Facebook')
            ->setCellValue('M' . $line_number, 'Weight(kg)')
            ->setCellValue('N' . $line_number, 'Weight Image')
            ->setCellValue('O' . $line_number, 'Height(m)')
            ->setCellValue('P' . $line_number, 'Height Image')
            ->setCellValue('Q' . $line_number, 'BMI(Body Mass Index)')
            ->setCellValue('R' . $line_number, 'BMI Category')
            ->setCellValue('S' . $line_number, 'Reason to be Kershless')
            ->setCellValue('T' . $line_number, 'Provocation')
            ->setCellValue('U' . $line_number, 'Friend Code')
            ->setCellValue('V' . $line_number, 'Date')
            ->setCellValue('W' . $line_number, 'Name Usage Agreement')
            ->setCellValue('X' . $line_number, 'Profile Picture Usage Agreement')
            ->setCellValue('Y' . $line_number, 'Season')
            ->setCellValue('Z' . $line_number, 'Review');
        $objPHPExcel->getActiveSheet()->getStyle('A' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('B' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('C' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('D' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('E' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('F' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('G' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('H' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('I' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('J' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('K' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('L' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('M' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('N' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('O' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('P' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('Q' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('R' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('S' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('T' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('U' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('V' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('W' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('X' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('Y' . $line_number)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle('Z' . $line_number)->getFont()->setBold(true);

        $line_number++;

        for ($i = 0; $i < count($results); $i++) {
            $objPHPExcel->getActiveSheet()->setCellValue('A' . $line_number, $i + 1)
                ->setCellValue('B' . $line_number, $results[$i]->kershless_code)
                //->setCellValue('C' . $line_number, $results[$i]->profile_picture)
                ->setCellValue('D' . $line_number, $results[$i]->full_name)
                ->setCellValue('E' . $line_number, $results[$i]->date_of_birth)
                ->setCellValue('F' . $line_number, $results[$i]->marital_status)
                ->setCellValue('G' . $line_number, $results[$i]->job)
                ->setCellValue('H' . $line_number, $results[$i]->nationality)
                ->setCellValue('I' . $line_number, $results[$i]->country)
                ->setCellValue('J' . $line_number, $results[$i]->mobile_number)
                ->setCellValue('K' . $line_number, $results[$i]->email)
                ->setCellValue('L' . $line_number, $results[$i]->facebook)
                ->setCellValue('M' . $line_number, $results[$i]->weight)
                //->setCellValue('N' . $line_number, $results[$i]->weight_image)
                ->setCellValue('O' . $line_number, $results[$i]->height)
                //->setCellValue('P' . $line_number, $results[$i]->height_image)
                ->setCellValue('Q' . $line_number, $results[$i]->bmi)
                ->setCellValue('R' . $line_number, $results[$i]->bmi_category)
                ->setCellValue('S' . $line_number, $results[$i]->reason)
                ->setCellValue('T' . $line_number, $results[$i]->provocation)
                ->setCellValue('U' . $line_number, $results[$i]->friend_code)
                ->setCellValue('V' . $line_number, $results[$i]->date)
                ->setCellValue('W' . $line_number, $results[$i]->name_agreement)
                ->setCellValue('X' . $line_number, $results[$i]->picture_agreement);

            $objPHPExcel->getActiveSheet()->getCell('C' . $line_number)->getHyperlink()->setUrl('/Applications/XAMPP/xamppfiles/htdocs/kershlesswebsite/uploads/' . $results[$i]->profile_picture);
            $objPHPExcel->getActiveSheet()->getCell('C' . $line_number)->getHyperlink()->setTooltip('Download picture!');

            $objPHPExcel->getActiveSheet()->getCell('N' . $line_number)->getHyperlink()->setUrl('/Applications/XAMPP/xamppfiles/htdocs/kershlesswebsite/uploads/' . $results[$i]->weight_image);
            $objPHPExcel->getActiveSheet()->getCell('N' . $line_number)->getHyperlink()->setTooltip('Download picture!');

            $objPHPExcel->getActiveSheet()->getCell('P' . $line_number)->getHyperlink()->setUrl('/Applications/XAMPP/xamppfiles/htdocs/kershlesswebsite/uploads/' . $results[$i]->height_image);
            $objPHPExcel->getActiveSheet()->getCell('P' . $line_number)->getHyperlink()->setTooltip('Download picture!');

            // Add a drawing to the worksheet
            echo date('H:i:s'), " Add a drawing to the worksheet", EOL;
            $objDrawing = new PHPExcel_Worksheet_Drawing();
            $objDrawing->setName('PHPExcel logo' . $line_number);
            $objDrawing->setDescription('PHPExcel logo' . $line_number);
            $objDrawing->setPath('/Applications/XAMPP/xamppfiles/htdocs/kershlesswebsite/uploads/' . $results[$i]->weight_image);
            $objDrawing->setHeight(100);
            $objPHPExcel->getActiveSheet()->getRowDimension($line_number)->setRowHeight(100);
            //echo $objDrawing->getWidth();
            $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth($objDrawing->getWidth() / 10);
            $objDrawing->setCoordinates('N' . $line_number);
            //$objDrawing->setOffsetX(10);
            $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

            // Add a drawing to the worksheet
            echo date('H:i:s'), " Add a drawing to the worksheet", EOL;
            $objDrawing = new PHPExcel_Worksheet_Drawing();
            $objDrawing->setName('PHPExcel logo' . $line_number);
            $objDrawing->setDescription('PHPExcel logo' . $line_number);
            $objDrawing->setPath('/Applications/XAMPP/xamppfiles/htdocs/kershlesswebsite/uploads/' . $results[$i]->height_image);
            $objDrawing->setHeight(100);
            $objPHPExcel->getActiveSheet()->getRowDimension($line_number)->setRowHeight(100);
            $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth($objDrawing->getWidth() / 10);
            $objDrawing->setCoordinates('P' . $line_number);
            //$objDrawing->setOffsetX(10);
            $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

            // Add a drawing to the worksheet

            if ($results[$i]->profile_picture != "") {
                echo date('H:i:s'), " Add a drawing to the worksheet", EOL;
                $objDrawing = new PHPExcel_Worksheet_Drawing();
                $objDrawing->setName('PHPExcel logo' . $line_number);
                $objDrawing->setDescription('PHPExcel logo' . $line_number);
                echo '/Applications/XAMPP/xamppfiles/htdocs/kershlesswebsite/uploads/' . $results[$i]->profile_picture;
                $objDrawing->setPath('/Applications/XAMPP/xamppfiles/htdocs/kershlesswebsite/uploads/' . $results[$i]->profile_picture);
                $objDrawing->setHeight(100);
                $objPHPExcel->getActiveSheet()->getRowDimension($line_number)->setRowHeight(100);
                $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth($objDrawing->getWidth() / 10);
                $objDrawing->setCoordinates('C' . $line_number);
                //$objDrawing->setOffsetX(10);
                $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

                $line_number++;
            }
        }


        // Add some data, resembling some different data types
        echo date('H:i:s'), " Add some data", EOL;


        $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        //$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
        //$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
        //$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('U')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('V')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('W')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('X')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setAutoSize(true);


        // Rename worksheet
        echo date('H:i:s'), " Rename worksheet", EOL;
        $objPHPExcel->getActiveSheet()->setTitle('Kershless Male Applicants');


        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);


        // Save Excel 2007 file
        echo date('H:i:s'), " Write to Excel2007 format", EOL;
        $callStartTime = microtime(true);

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save("/Applications/XAMPP/xamppfiles/htdocs/kershlesswebsite/uploads/kershless_female_applicants.xlsx");
        $callEndTime = microtime(true);
        $callTime = $callEndTime - $callStartTime;

        echo date('H:i:s'), " File written to ", str_replace('.php', '.xlsx', pathinfo(__FILE__, PATHINFO_BASENAME)), EOL;
        echo 'Call time to write Workbook was ', sprintf('%.4f', $callTime), " seconds", EOL;
        // Echo memory usage
        echo date('H:i:s'), ' Current memory usage: ', (memory_get_usage(true) / 1024 / 1024), " MB", EOL;


        echo date('H:i:s'), " Reload workbook from saved file", EOL;
        $callStartTime = microtime(true);

        $objPHPExcel = PHPExcel_IOFactory::load(str_replace('.php', '.xlsx', __FILE__));

        $callEndTime = microtime(true);
        $callTime = $callEndTime - $callStartTime;
        echo 'Call time to reload Workbook was ', sprintf('%.4f', $callTime), " seconds", EOL;
        // Echo memory usage
        echo date('H:i:s'), ' Current memory usage: ', (memory_get_usage(true) / 1024 / 1024), " MB", EOL;


        var_dump($objPHPExcel->getActiveSheet()->toArray());


        // Echo memory peak usage
        echo date('H:i:s'), " Peak memory usage: ", (memory_get_peak_usage(true) / 1024 / 1024), " MB", EOL;

        // Echo done
        echo date('H:i:s'), " Done testing file", EOL;
        echo 'File has been created in ', getcwd(), EOL;
    }

    public function createExcelSheets()
    {
        $this->_createRichExcelSheetMale();
        $this->_createRichExcelSheetFemale();
    }


    public function createExcelSheet()
    {
        $this->load->model("model_user");
        $results = $this->model_user->get_all_data();
        echo count($results);
        for ($i = 0; $i < count($results); $i++) {
            echo $results[$i]->full_name;
        }
        $file = fopen("test.csv", "w");
        //fwrite($file,"Kershless Code,Full Name,Date Of Birth,Age,Gender,Nationality,Country,Mobile Number,Email,Facebook,Weight Image, Height Image,Reason to be Kershless,Provocation,Friend Code,Date\n");
        /*	foreach($results as $row)
        {
        $breaks = array("\r\n", "\n", "\r");
        $reason = str_replace($breaks, "", $row->reason);
        $reason = mysql_real_escape_string($reason);
        $provocation = str_replace($breaks, "", $row->provocation);
        $provocation = mysql_real_escape_string($provocation);
        $reason = str_replace(',', '[comma]', $reason);
        $provocation = str_replace(',', '[comma]', $provocation);
        fwrite($file,$row->full_name.','.$row->date_of_birth.','.$row->age.','.$row->country.','.$row->marital_status.','.$row->profile_picture.','.$row->email.',#'.$row->mobile_number.','.$reason.','.$provocation."\n");
        }*/
        $season_counter = 1;
        fwrite($file, "Kershlees Season " . $season_counter . "\n");
        fwrite($file, "Kershless Code,Full Name,Date Of Birth,Age,Gender,Nationality,Country,Mobile Number,Email,Facebook,Weight(kg),Weight Image,Height(m),Height Image,BMI(Body Mass Index),BMI Category,Reason to be Kershless,Provocation,Friend Code,Date\n");
        for ($i = 0; $i < count($results); $i++) {
            if ($i % 12 == 0 && $i != 0) {
                $season_counter++;
                fwrite($file, "\n \n \n \n");
                fwrite($file, "Kershlees Season " . $season_counter . "\n");
                fwrite($file, "Kershless Code,Full Name,Date Of Birth,Age,Gender,Nationality,Country,Mobile Number,Email,Facebook,Weight(kg),Weight Image,Height(m),Height Image,BMI(Body Mass Index),BMI Category,Reason to be Kershless,Provocation,Friend Code,Date\n");
            }
            $breaks = array("\r\n", "\n", "\r");
            $reason = str_replace($breaks, "", $results[$i]->reason);
            $reason = mysql_real_escape_string($reason);
            $provocation = str_replace($breaks, "", $results[$i]->provocation);
            $provocation = mysql_real_escape_string($provocation);
            $reason = str_replace(',', '[comma]', $reason);
            $provocation = str_replace(',', '[comma]', $provocation);
            fwrite($file, 'الله,' . $results[$i]->full_name . ',' . $results[$i]->date_of_birth . ',' . $results[$i]->age . ',' . $results[$i]->gender . ',' . $results[$i]->nationality . ',' . $results[$i]->country . ',' . $results[$i]->mobile_number . ',' . $results[$i]->email . ',' . $results[$i]->facebook . ',' . $results[$i]->weight . ',' . $results[$i]->weight_image . ',' . $results[$i]->height . ',' . $results[$i]->height_image . ',' . $results[$i]->bmi . ',' . $results[$i]->bmi_category . ',' . $reason . ',' . $provocation . ',' . $results[$i]->friend_code . ',' . $results[$i]->date . "\n");
        }

        fclose($file);
        return $file;
    }


    public function sendEmail()
    {
        //echo $this->createExcelSheet();
        $this->load->library('email');
        $this->email->from('applications@kershless.com', 'Kershless');
        $this->email->to('heshamhamdymassoud@gmail.com');
        $this->email->subject('Weekly Kershless Applications');
        $this->email->message('Dear Kershless Administrator,\n Kindly find attatched this week\'s Kershless Applications\' Report.');
        $pathToUploadedFile = "test.csv";
        $this->email->attach($pathToUploadedFile);
        $this->email->send();
        echo $this->email->print_debugger();
    }

    public function sendEmailToUser($email, $kershless_code, $name)
    {
        //echo $this->createExcelSheet();
        $this->load->library('email');
        $this->email->from('applications@kershless.com', 'Kershless');
        $this->email->to($email);
        $this->email->subject($name . ': ' . 'أهلا بك في &reg;Kershless');
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
				<td class=\"content\" colspan=\"3\" style=\"width: 100%;font-size: x-large;\">
				<h2>أهلا بك في &reg;Kershless </h2> شكرا لتسجيلك معنا سيتم التواصل معك
				لاحقا<br /> كود التسجيل الخاص بك هو <b>" . $kershless_code . "</b><br /> <br /> يمكن
						لأصدقائك استخدام كود التسجيل الخاص بك إذا أردتم الإشتراك في نفس
						الموسم
						<br>
						سوف يتم التواصل معك خلال 10 أيام
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
        $this->email->send();
    }


    public function registerValidation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<label>', '</label>');
        //echo $this->input->post('overall_agreement',TRUE)==null ? 0 : 1;
        //echo "HERE IS THE VARIABLE :";
        //echo $this->input->post('profile_picture_name');


        if ($this->input->post('profile_picture_name') == "empty") {
            $this->form_validation->set_rules('profile_picture_name', 'الصورة الشخصية', 'required_profile_picture');
        }

        if ($this->input->post('weight_image_name') == "empty") {
            $this->form_validation->set_rules('weight_image_name', 'الصورة وزنك', 'required_weight_image');
        }

        if ($this->input->post('height_image_name') == "empty") {
            $this->form_validation->set_rules('height_image_name', 'الصورة طولك', 'required_height_image');
        }

        if ($this->input->post('overall_agreement', true) == null) {
            $this->form_validation->set_rules('overall_agreement', 'الإقرار', 'required');
            set_checkbox('overall_agreement', '1');
        }
        $this->form_validation->set_rules('fullname', 'الإسم الثلاثي', 'required|xss_clean|valid_arabic_fullname');
        $this->form_validation->set_rules('fullname_english', 'الإسم الثلاثي', 'required|xss_clean|valid_english_fullname');
        $this->form_validation->set_rules('job', 'المهنة', 'xss_clean');
        $this->form_validation->set_rules('country', 'Country of Residence', 'required_country|xss_clean');
        $this->form_validation->set_rules('nationality', 'Nationality', 'required_country|xss_clean');
        $this->form_validation->set_rules('mobile_number', 'رقم الهاتف', 'numeric|required|xss_clean');
        $this->form_validation->set_rules('email', 'الايميل', 'required|trim|xss_clean|valid_email');
        $this->form_validation->set_rules('facebook', 'فيسبوك', 'xss_clean|valid_facebook');
        $this->form_validation->set_rules('weight', 'الوزن', 'xss_clean|numeric|greater_than[0]|required');
        $this->form_validation->set_rules('height', 'الطول', 'xss_clean|valid_height|required|numeric|greater_than[0]');
        $this->form_validation->set_rules('reason', 'الهدف', 'required|trim|xss_clean|arabic');
        $this->form_validation->set_rules('provocation', 'الكلمة الموجهة للمنافسين', 'required|trim|xss_clean|arabic');
        $this->form_validation->set_rules('friend_code', 'كود التسجيل الخاص بصديقك', 'xss_clean|valid_kershless_code[User.kershless_code]');

        if (!empty($_FILES['height_image'])) {
            if ($_FILES['height_image']['error'] == UPLOAD_ERR_NO_FILE) {
                $this->form_validation->set_rules('height_image', 'Height Picture', 'required');
            }
        }
        if (!empty($_FILES['weight_image'])) {
            if ($_FILES['weight_image']['error'] == UPLOAD_ERR_NO_FILE) {
                $this->form_validation->set_rules('weight_image', 'Weight Picture', 'required');
            }
        }

        if ($this->form_validation->run()) {
            $this->load->model("model_user");
            $this->model_user->addUser();
            $data = array('name' => $this->input->post('fullname'));
            $this->load->view("view_success", $data);

        } else {
            $this->load->view("view_register");
        }
    }

}

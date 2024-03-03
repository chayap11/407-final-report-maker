<!DOCTYPE html>
<html lang="th">

 <head>
    <title>Organize your Report quickly | Quick Report</title>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#dc577e">
<meta name="author" content="Chaya's Team">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="01-home.html, 02-cover.html, 03-preface.html, 04-thankna.html, 05-intro.html, 06-data.html, 07-method.html, 08-result.html, 09-arumsumsumna.html, 10-references.html, 11-appendix.html">
<link rel="stylesheet" href="main.py">


<!--link to java downloadpage-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
    function generatePDF() {
    const element = document.getElementById('container_content');
    var opt = {
          margin:       1,
          filename:     'ReportMaker_project.pdf',
          image:        { type: 'jpeg', quality: 2 },
          html2canvas:  { scale: 2 },
          jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
        };
        // Choose the element that our invoice is rendered in.
        html2pdf().set(opt).from(element).save();
    }
</script>

</head>


 <body>
 <style>
    body {
        height: 842px;
        width: 595px;
        /* to centre page on screen*/
        margin-left: auto;
        margin-right: auto;
    }
</style>

    <div class="text-center" style="padding:20px;"></div>
    <button onclick="generatePDF()">Download</button>

    <div class="container_content" id="container_content" >

<div class="invoice-box">

<?php
    error_reporting(E_NOTICE);
    echo"$_POST[project_name]<br><br>";

    echo"$_POST[doc_creater]<br><br>";
    
    echo"โครงงานนี้เป็นส่วนหนึ่งของ$_POST[project_about]<br>";

    if (empty($_POST['grade'])) {echo "";}
    else {echo"$_POST[grade]<br>";}

    if (empty($_POST['term'])) {echo "";}
    else {echo"ภาคเรียนที่ $_POST[term] ";}

    echo"ปีการศึกษา $_POST[school_year]<br>";

    echo"กลุ่มสาระการเรียนรู้$_POST[subject_areas]<br>";

    echo"โรงเรียน$_POST[school_name]<br>";

    if (empty($_POST['district'])) {echo "";}
    else {echo"อำเภอ$_POST[district] ";}

    if (empty($_POST['province'])) {echo "";}
    else {echo"จังหวัด$_POST[province]<br>";}
    echo"$_POST[arcade]";

    if (empty($_POST['teacher_name'])) {echo "";}
    else {echo"ครูที่ปรึกษา<br>$_POST[teacher_name]<br><br>";}

    if (empty($_POST['abstract'])) {echo "";}
    else {echo"บทคัดย่อ<br>$_POST[abstract]<br><br>";}

    if (empty($_POST['preface'])) {echo "";}
    else {echo"บทนำ<br>$_POST[preface]<br><br>";}

    echo"กิตติกรรมประกาศ<br>$_POST[thanks]<br><br>";

    echo"ที่มาและความสำคัญ<br>$_POST[important]<br><br>";

    if (empty($_POST['hypothesis'])) {echo "";}
    else {echo"สมมติฐาน<br>$_POST[hypothesis]<br>";}

    if (empty($_POST['variable1'])) {echo "";}
    else {echo"ตัวแปรต้นหรือตัวแปรอิสระ<br>$_POST[variable1]<br>";}

    if (empty($_POST['variable2'])) {echo "";}
    else {echo"ตัวแปรตาม<br>$_POST[variable2]<br>";}

    if (empty($_POST['variable3'])) {echo "";}
    else {echo"ตัวแปรควบคุม<br>$_POST[variable3]<br>";}

    echo"ขอบเขต<br>$_POST[scope]<br>";

    echo"วิธีการดำเนินการ<br>$_POST[process]<br>";

    echo"ผลที่คาดว่าจะได้รับ<br>$_POST[expect]<br>";
    
    echo"นิยามศัพท์เฉพาะ<br>$_POST[vocab]<br><br>";

//wait

    echo"วัสดุ อุปกรณ์ เครื่องมือ และโปรแกรมที่ใช้พัฒนา$_POST[equip]<br>";

    if (empty($_POST['chem'])) {echo "";}
    else {echo"สารเคมี<br>$_POST[chem]<br><br>";}

    if (empty($_POST['creature'])) {echo "";}
    else {echo"สิ่งมีชีวิต<br>$_POST[creature]<br><br>";}

    echo"ขั้นตอนการดำเนินงาน$_POST[process2]<br>";

    echo"สรุปผลการศึกษา$_POST[conclude]<br>";

    if (empty($_POST['debate'])) {echo "";}
    else {echo"อภิปรายผล<br>$_POST[debate]<br><br>";}

    if (empty($_POST['problems'])) {echo "";}
    else {echo"ปัญหาและอุปสรรค<br>$_POST[problems]<br><br>";}

    if (empty($_POST['suggestion'])) {echo "";}
    else {echo"ข้อเสนอแนะ<br>$_POST[suggestion]<br><br>";}

    echo"บรรณานุกรม$_POST[bibliography]<br>";

?>

</div>

 </body>
  
</html>
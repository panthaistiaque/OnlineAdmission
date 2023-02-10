<?php   ob_start();
	require_once 'dompdf/autoload.inc.php';
	// reference the Dompdf namespace
	use Dompdf\Dompdf;
 function fetch_data()  
 {  
      $output = "";  
      $connect = mysqli_connect("localhost", "root", "", "ju_online_admission");  
      $sql = "SELECT * FROM admission_result where id=1";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_assoc($result))  
      {       
      $output = '<div class="col-lg-10 col-lg-offset-1 alert bg-primary" style="margin-bottom:0px!important;color:white">
	  <h3 class="form-signin-heading text-center"style="margin-top:0px;margin-bottom:0px!important"><i class="glyphicon glyphicon-book"></i>&nbsp;Student Profile</h3>
	  </div>
	  <div class="col-lg-10 col-lg-offset-1" style="background-color:#eee"><br>
		  <table  style="width:100%">
		  <tr>
			  <td style="text-align: center;">
				  <img src="images/logo.png">
				  <h5>ছাত্র-ছাত্রী ভর্তি ফরম</br>১ম বর্ষ স্নাতক (সম্মান)</h5> 
				  
			  </td>
		  </tr>
	  </table>
	  <table class="table table-bordered" style="width:60%;margin-left:auto;margin-right:auto;margin-bottom:15px">
		  <tr>
			  <td class="input_title">ভর্তি পরীক্ষার রোল নম্বর</td>
			  <td class="input_field"> '.$row['exam_roll'].'</td>
			  <td class="input_title">ভর্তির মেধাক্রম</td>
			  <td class="input_field"> '.$row['merit_position'].'</td>
		  </tr>
		  <tr>
			  <td class="input_title">ভর্তির বিভাগ</td>
			  <td class="input_field"> '.$row['unit'].'</td>
			  <td class="input_title">শিক্ষাবর্ষ</td>
			  <td class="input_field"> '.$row['year'].'</td>
		  </tr>
	  </table>';  
	  
      }  
	  return  $output;  
	 
 }  
  $html = <<<'ENDHTML'
<html>
 <body>
  <script type="text/php">
  <p style="font-family: DejaVu Sans, sans-serif;">献给母亲的爱</p>
  </script>
  <h1>Hello Dompdf</h1>
 </body>
</html>
ENDHTML;
 if(isset($_POST["create_pdf"]))  
 {  


	$html = file_get_contents('example.html');
    $my_var = mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8');
	// instantiate and use the dompdf class
	$dompdf = new Dompdf();
	//$dompdf->set_option('defaultFont', 'DejaVu Sans');
	$dompdf->loadHtml($my_var);
	
	// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('A4', 'portrait');
	
	// Render the HTML as PDF
	$dompdf->render();
	
	// Output the generated PDF to Browser
	$dompdf->stream();
	
 }
 ?>



<?php $page_title = "Profile"; ?>
<?php
session_start();
require_once 'get-data.php';

$student_details = getStudentInfo();
$academic_details = getAcademicInfo();
$result = getResult();
?>
<?php include_once 'templates/header.php'; ?>

<style>
			td.input_title {
				width: 20%;
				
			}
			td.input_field {
				width: 30%;
			}
			td.input_title_exam {
				font-weight:bold;
			}
			.inp{
				width: 100%;
       
				font-size: 15px;
				font-weight:bold;
			}
			.inp2{
				width: 100%;
				border: none;
				font-size: 15px;
				font-weight:bold;
			}
			textarea{
        width: 100%;
        border:none;
			}
	
	    input{
        border:none;
        padding: 5px;
      }
			.inpt{
				width: 25%;
			}
			#edu{

				border-collapse: collapse;
				padding: 5px;
				text-align: center;
			}
			table#edu td {
		
				border-collapse: collapse;
				padding: 5px;
				text-align: center;
			}
		</style>

<br>
<div class="col-lg-10 col-lg-offset-1 alert bg-primary" style="margin-bottom:0px!important;color:white">
<h3 class="form-signin-heading text-center"style="margin-top:0px;margin-bottom:0px!important"><i class="glyphicon glyphicon-book"></i>&nbsp;Student Profile</h3>
</div>
<div class="col-lg-10 col-lg-offset-1" style="background-color:#eee"><br>
    <table  style="width:100%">
	<tr>
		<td style="text-align: center;">
			<img src="images/logo.png">
			<h5 style="font-family: AdorshoLipi!important">ছাত্র-ছাত্রী ভর্তি ফরম</br>১ম বর্ষ স্নাতক (সম্মান)</h5> 
			<form method="post">  
                          <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF" />  
                     </form> 
		</td>
	</tr>
</table>
<table class="table table-bordered" style="width:60%;margin-left:auto;margin-right:auto;margin-bottom:15px">
	<tr>
		<td class="input_title">ভর্তি পরীক্ষার রোল নম্বর</td>
		<td class="input_field"> <?php echo($result['exam_roll']) ?></td>
		<td class="input_title">ভর্তির মেধাক্রম</td>
		<td class="input_field"> .$result['merit_position']; ?>" readonly/></td><!--Marit Position-->
	</tr>
	<tr>
		<td class="input_title">ভর্তির বিভাগ</td>
		<td class="input_field"><input  class="inp2" type="text" value=" .$result['unit']; ?>" readonly/></td>
		<td class="input_title">শিক্ষাবর্ষ</td>
		<td class="input_field"> .$result['year']; ?>" readonly/></td><!--Marit Position-->
	</tr>
</table>
<table class="table table-bordered" style="width:100%">
	<tr>
		<td valign="top" rowspan=3>১ .</td>
		<td class="inpt">ছাত্র/ছাত্রীর পুরো নাম  (বাংলায়) </td>
		<td><input class="inp" type="text" value=" .$student_details['full_name_bn']; ?>" readonly/></td>
	</tr>
	<tr>
		<td class="inpt" >ইংরেজি তে</td>
		<td><input class="inp" type="text" value=" .$student_details['full_name']; ?>" readonly/></td>
	</tr>
	<tr>
		<td class="inpt" >ডাক নাম (যদি থাকে)</td>
		<td><input class="inp" type="text" value=" .$student_details['nick_name']; ?>" readonly/></td>
	</tr>
	<tr>
		<td valign="top" >২ .</td>
		<td class="inpt">জন্ম তারিখ </td>
		<td><input class="inp" type="text" value=" .$student_details['date_of_birth']; ?>" readonly/></td>
	</tr>
	<tr>
		<td valign="top" rowspan=2>৩ .</td>
		<td class="inpt">পিতার নাম (বাংলায়) </td>
		<td><input class="inp" type="text" value=" .$student_details['f_name_bn']; ?>" readonly/></td>
	</tr>
	<tr>
		<td class="inpt">ইংরেজি তে</td>
		<td><input class="inp" type="text" value=" .$student_details['f_name']; ?>" readonly/></td>
	</tr>
	<tr>
		<td valign="top" rowspan=2>৪.</td> 
		<td class="inpt">মাতার নাম (বাংলায়) </td>
		<td><input class="inp" type="text" value=" .$student_details['m_name_bn']; ?>" readonly/></td>
	</tr>
	<tr>
		<td class="inpt">ইংরেজি তে</td>
		<td><input class="inp" type="text" value=" .$student_details['m_name']; ?>" readonly/></td>
	</tr>
	<tr>
		<td valign="top" >৫.</td> 
		<td  valign="top" class="inpt">অভিভাবকের নাম ও ঠিকানা (পিতা/মাতা না থাকলে)</td>
		<td><textarea class="inp" rows="2" readonly> .$student_details['g_name_address_without_parent']; ?></textarea></td>
	</tr>
	<tr>
		<td valign="top" >৬.</td> 
		<td class="input_title">ধর্ম </td>
		<td  colspan="2">
			<table style="width:100%">
			<tr>
				<td class="input_field"><input class="inp" type="text" value=" .$student_details['religion']; ?>" readonly/></td>
				<td class="input_title">জাতীয়তা </td>
				<td class="input_field"><input class="inp" type="text" value=" .$student_details['nationality']; ?>" readonly/></td><!--Marit Position-->
			</tr>
			</table>
		</td>
	</tr>	
	<tr>
		<td valign="top" rowspan=2>৭.</td> 
		<td  valign="top" class="inpt">ঠিকানাঃ স্থায়ীঃ </td>
		<td><textarea class="inp" rows="2" readonly>House No:  .$student_details['permanent_house']; ?>Village: .$student_details['permanent_vill']; ?>Post: .$student_details['permanent_post']; ?>PO.S: .$student_details['permanent_police_s']; ?>District: .$student_details['permanent_dist']; ?>Country: .$student_details['permanent_country']; ?></textarea></td>
	</tr>
	<tr>
		<td  valign="top" class="inpt">বর্তমানঃ </td>
		<td><textarea class="inp" rows="2" readonly>House No:  .$student_details['present_house']; ?>Village: .$student_details['present_vill']; ?>Post: .$student_details['present_post']; ?>PO.S: .$student_details['present_police_s']; ?>District: .$student_details['present_dist']; ?>Country: .$student_details['present_country']; ?></textarea></td>
	</tr>
	<tr>
		<td valign="top" rowspan=3>৮.</td> 
		<td  valign="top" class="inpt">পিতা /  অভিভাবকের পেশা ( পদমর্যাদা ও কর্মস্থলের ঠিকানাসহ ) </td>
		<td><textarea class="inp" rows="2" readonly> .$student_details['g_occupation']; ?>, .$student_details['g_address']; ?>,Mobile .$student_details['g_mobile']; ?>,Monthly income: .$student_details['g_monthly_income']; ?></textarea></td>
	</tr>
	<tr>
		<td class="input_title">ফোন নম্বরঃ </td>
		<td  colspan="2">
			<table style="width:100%">
				<tr>
					<td class="input_field"><input class="inp" type="text" value=" .$student_details['g_mobile']; ?>" readonly/></td>
					<td class="input_title">মাসিক আয়ঃ</td>
					<td class="input_field"><input class="inp" type="text" value=" .$student_details['g_monthly_income']; ?> " readonly/></td><!--Marit Position-->
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td class="inpt">ছাত্র/ছাত্রীর মোবাইল নম্বরঃ </td>
		<td><input class="inp" type="text" value=" .$student_details['s_mobile']; ?>" readonly/></td>
	</tr>
	<tr>
		<td valign="top">৯ .</td> 
		<td  valign="top" class="inpt" colspan="2">ছাত্র/ছাত্রীর পূর্বের পরীক্ষা সমূহেরবিবরণঃ</td>
	</tr>
	<tr>
		<td colspan="3" >
			<table class="table table-bordered" style="width:100%;margin-bottom:5px">
				<tr>
					<td >পরীক্ষার নাম  </td>
					<td >শিক্ষা বোর্ড</td>
					<td >শিক্ষা প্রতিষ্ঠান</td>
					<td >পরীক্ষার বর্ষ </td>
					<td >প্রাপ্ত জিপিএ </td> 
					<td >পরীক্ষার বিষয় সমূহ</td>
					<td >বিভাগ</td>
				</tr>
				<tr>
					<td >SSC</td>
					<td > .$academic_details['ssc_board']; ?></td>
					<td > .$academic_details['ssc_institution']; ?></td>
					<td > .$academic_details['ssc_year']; ?></td> 
					<td > .$academic_details['ssc_gpa']; ?> </td> 
					<td > .$academic_details['ssc_subject']; ?></td>
					<td > .$academic_details['ssc_group']; ?></td>
        </tr>
        <tr>
					<td >HSC</td>
					<td > .$academic_details['hsc_board']; ?></td>
					<td > .$academic_details['hsc_institution']; ?></td>
					<td > .$academic_details['hsc_year']; ?></td> 
					<td > .$academic_details['hsc_gpa']; ?> </td> 
					<td > .$academic_details['hsc_subject']; ?></td>
					<td > .$academic_details['hsc_group']; ?></td>
				</tr>
			</table>
		</td> 
	</tr>
	<tr>
		<td valign="top">১০.</td> 
		<td  valign="top" class="inpt">কোন শিক্ষা বিরতি থাকলে তার কারনঃ </td>
		<td><textarea class="inp" rows="2" readonly></textarea></td>
	</tr>
	<tr>
		<td valign="top" rowspan=4>১১. </td> 
		<td  valign="top" colspan="2" class="inpt">এই বিশ্ব বিদ্যালয় এর অন্য বিভাগ বা অন্য শিক্ষা  প্রতিষ্ঠান এ ভর্তি হলে তার বিবরণঃ </td>
	</tr>
	<tr>
		<td class="inpt" >শিক্ষা প্রতিষ্ঠান</td>
		<td><input class="inp" type="text" value="Titumir College, Dhaka University" readonly/></td>
	</tr>
	<tr>
		<td class="inpt" >ঠিকানা</td>
		<td><input class="inp" type="text" value="Mohakhili , Dhaka" readonly/></td>
	</tr>
	<tr>
		<td class="input_title">বিভাগ: </td>
		<td  colspan="2">
			<table style="width:100%">
				<tr>
					<td class="input_field"><input class="inp" type="text" value="Zoology" readonly/></td>
					<td class="input_title">শিক্ষাবর্ষ</td>
					<td class="input_field"><input class="inp" type="text" value="2017 " readonly/></td><!--Marit Position-->
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td valign="top" rowspan=2>১২. </td> 
		<td  valign="top" colspan="2" class="inpt">এই বিশ্ব বিদ্যালয় এ  পূর্বে  কখনো অধ্যয়ন করে থাকলে তার বিবরণঃ </td>
	</tr>
	<tr>
		<td  colspan="3">
			<table class=""style="width:100%">
				<tr>
					<td > বিভাগঃ </td>
					<td ><input class="inp" type="text" value="Botany" readonly/></td>
					<td >&nbsp;&nbsp; শিক্ষাবর্ষঃ </td>
					<td ><input  class="inp"type="text" value="2016-2017" readonly/></td>
					<td >&nbsp;&nbsp; হলঃ </td> 
					<td ><input class="inp" type="text" value="-" readonly/></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td valign="top" rowspan=2>১৩ .</td>
		<td class="inpt">স্থানীয় অভিভাবক নাম  </td>
		<td><input class="inp" type="text" value="Mohammad Istiaque Hossain" readonly/></td>
	</tr>
	<tr>
		<td class="inpt" >ঠিকানা ও ফোন নম্বরঃ</td>
		<td><input class="inp" type="text" value="Mohammad Istiaque Hossain" readonly/></td>
	</tr>
</table>
<br><br><br>
</div>
<?php include_once 'templates/footer.php'; ?>
<?php 
  
 ?>
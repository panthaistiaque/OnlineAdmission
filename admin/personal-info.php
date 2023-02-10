<?php $page_title = "Profile"; ?>
<?php
session_start();
require_once 'get-data.php';
if (isset($_GET['exam_roll'])) {
    $exam_roll=$_GET['exam_roll'];
}

$student_details = getStudentInfo($exam_roll);
$academic_details = getAcademicInfo($exam_roll);
$result = getResult($exam_roll);
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
			<h5>ছাত্র-ছাত্রী ভর্তি ফরম</br>১ম বর্ষ স্নাতক (সম্মান)</h5> 
			
		</td>
	</tr>
</table>
<table class="table table-bordered" style="width:60%;margin-left:auto;margin-right:auto;margin-bottom:15px">
	<tr>
		<td class="input_title">ভর্তি পরীক্ষার রোল নম্বর</td>
		<td class="input_field"><input class="inp2" type="text" value="<?php echo $result['exam_roll']; ?>" readonly/></td><!--Admission Roll-->
		<td class="input_title">ভর্তির মেধাক্রম</td>
		<td class="input_field"><input class="inp2" type="text" value="<?php echo $result['merit_position']; ?>" readonly/></td><!--Marit Position-->
	</tr>
	<tr>
		<td class="input_title">ভর্তির বিভাগ</td>
		<td class="input_field"><input  class="inp2" type="text" value="<?php echo $result['department']; ?>" readonly/></td><!--Admission Roll-->
		<td class="input_title">শিক্ষাবর্ষ</td>
		<td class="input_field"><input class="inp2" type="text" value="<?php echo $result['year']; ?>" readonly/></td><!--Marit Position-->
	</tr>
</table>
<table class="table table-bordered" style="width:100%">
	<tr>
		<td valign="top" rowspan=3>১ .</td>
		<td class="inpt">ছাত্র/ছাত্রীর পুরো নাম  (বাংলায়) </td>
		<td><input class="inp" type="text" value="<?php echo $student_details['full_name_bn']; ?>" readonly/></td>
	</tr>
	<tr>
		<td class="inpt" >ইংরেজি তে</td>
		<td><input class="inp" type="text" value="<?php echo $student_details['full_name']; ?>" readonly/></td>
	</tr>
	<tr>
		<td class="inpt" >ডাক নাম (যদি থাকে)</td>
		<td><input class="inp" type="text" value="<?php echo $student_details['nick_name']; ?>" readonly/></td>
	</tr>
	<tr>
		<td valign="top" >২ .</td>
		<td class="inpt">জন্ম তারিখ </td>
		<td><input class="inp" type="text" value="<?php echo $student_details['date_of_birth']; ?>" readonly/></td>
	</tr>
	<tr>
		<td valign="top" rowspan=2>৩ .</td>
		<td class="inpt">পিতার নাম (বাংলায়) </td>
		<td><input class="inp" type="text" value="<?php echo $student_details['f_name_bn']; ?>" readonly/></td>
	</tr>
	<tr>
		<td class="inpt">ইংরেজি তে</td>
		<td><input class="inp" type="text" value="<?php echo $student_details['f_name']; ?>" readonly/></td>
	</tr>
	<tr>
		<td valign="top" rowspan=2>৪.</td> 
		<td class="inpt">মাতার নাম (বাংলায়) </td>
		<td><input class="inp" type="text" value="<?php echo $student_details['m_name_bn']; ?>" readonly/></td>
	</tr>
	<tr>
		<td class="inpt">ইংরেজি তে</td>
		<td><input class="inp" type="text" value="<?php echo $student_details['m_name']; ?>" readonly/></td>
	</tr>
	<tr>
		<td valign="top" >৫.</td> 
		<td  valign="top" class="inpt">অভিভাবকের নাম ও ঠিকানা (পিতা/মাতা না থাকলে)</td>
		<td><textarea class="inp" rows="2" readonly><?php echo $student_details['g_name_address_without_parent']; ?></textarea></td>
	</tr>
	<tr>
		<td valign="top" >৬.</td> 
		<td class="input_title">ধর্ম </td>
		<td  colspan="2">
			<table style="width:100%">
			<tr>
				<td class="input_field"><input class="inp" type="text" value="<?php echo $student_details['religion']; ?>" readonly/></td><!--Admission Roll-->
				<td class="input_title">জাতীয়তা </td>
				<td class="input_field"><input class="inp" type="text" value="<?php echo $student_details['nationality']; ?>" readonly/></td><!--Marit Position-->
			</tr>
			</table>
		</td>
	</tr>	
	<tr>
		<td valign="top" rowspan=2>৭.</td> 
		<td  valign="top" class="inpt">ঠিকানাঃ স্থায়ীঃ </td>
		<td><textarea class="inp" rows="2" readonly>House No: <?php echo $student_details['permanent_house']; ?>&nbsp;Village:<?php echo $student_details['permanent_vill']; ?>&nbsp;Post:<?php echo $student_details['permanent_post']; ?>&nbsp;PO.S:<?php echo $student_details['permanent_police_s']; ?>&nbsp;District:<?php echo $student_details['permanent_dist']; ?>&nbsp;Country:<?php echo $student_details['permanent_country']; ?></textarea></td>
	</tr>
	<tr>
		<td  valign="top" class="inpt">বর্তমানঃ </td>
		<td><textarea class="inp" rows="2" readonly>House No: <?php echo $student_details['present_house']; ?>&nbsp;Village:<?php echo $student_details['present_vill']; ?>&nbsp;Post:<?php echo $student_details['present_post']; ?>&nbsp;PO.S:<?php echo $student_details['present_police_s']; ?>&nbsp;District:<?php echo $student_details['present_dist']; ?>&nbsp;Country:<?php echo $student_details['present_country']; ?></textarea></td>
	</tr>
	<tr>
		<td valign="top" rowspan=3>৮.</td> 
		<td  valign="top" class="inpt">পিতা /  অভিভাবকের পেশা ( পদমর্যাদা ও কর্মস্থলের ঠিকানাসহ ) </td>
		<td><textarea class="inp" rows="2" readonly><?php echo $student_details['g_occupation']; ?>,&nbsp;<?php echo $student_details['g_address']; ?>,&nbsp;Mobile<?php echo $student_details['g_mobile']; ?>,&nbsp;Monthly income:<?php echo $student_details['g_monthly_income']; ?></textarea></td>
	</tr>
	<tr>
		<td class="input_title">ফোন নম্বরঃ </td>
		<td  colspan="2">
			<table style="width:100%">
				<tr>
					<td class="input_field"><input class="inp" type="text" value="<?php echo $student_details['g_mobile']; ?>" readonly/></td><!--Admission Roll-->
					<td class="input_title">মাসিক আয়ঃ</td>
					<td class="input_field"><input class="inp" type="text" value="<?php echo $student_details['g_monthly_income']; ?> " readonly/></td><!--Marit Position-->
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td class="inpt">ছাত্র/ছাত্রীর মোবাইল নম্বরঃ </td>
		<td><input class="inp" type="text" value="<?php echo $student_details['s_mobile']; ?>" readonly/></td>
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
					<td ><?php echo $academic_details['ssc_board']; ?></td>
					<td ><?php echo $academic_details['ssc_institution']; ?></td>
					<td ><?php echo $academic_details['ssc_year']; ?></td> 
					<td ><?php echo $academic_details['ssc_gpa']; ?> </td> 
					<td ><?php echo $academic_details['ssc_subjects']; ?></td>
					<td ><?php echo $academic_details['ssc_group']; ?></td>
        </tr>
        <tr>
					<td >HSC</td>
					<td ><?php echo $academic_details['hsc_board']; ?></td>
					<td ><?php echo $academic_details['hsc_institution']; ?></td>
					<td ><?php echo $academic_details['hsc_year']; ?></td> 
					<td ><?php echo $academic_details['hsc_gpa']; ?> </td> 
					<td ><?php echo $academic_details['hsc_subjects']; ?></td>
					<td ><?php echo $academic_details['hsc_group']; ?></td>
				</tr>
			</table>
		</td> 
	</tr>
	<tr>
		<td valign="top">১০.</td> 
		<td  valign="top" class="inpt">কোন শিক্ষা বিরতি থাকলে তার কারনঃ </td>
		<td><textarea class="inp" rows="2" readonly><?php echo $student_details['study_gap_cause']; ?></textarea></td>
	</tr>
	<tr>
		<td valign="top" rowspan=4>১১. </td> 
		<td  valign="top" colspan="2" class="inpt">এই বিশ্ব বিদ্যালয় এর অন্য বিভাগ বা অন্য শিক্ষা  প্রতিষ্ঠান এ ভর্তি হলে তার বিবরণঃ </td>
	</tr>
	<tr>
		<td class="inpt" >শিক্ষা প্রতিষ্ঠান</td>
		<td><input class="inp" type="text" value="<?php echo $student_details['admitted_institution']; ?>" readonly/></td>
	</tr>
	<tr>
		<td class="inpt" >ঠিকানা</td>
		<td><input class="inp" type="text" value="<?php echo $student_details['admitted_institution_addres']; ?>" readonly/></td>
	</tr>
	<tr>
		<td class="input_title">বিভাগ: </td>
		<td  colspan="2">
			<table style="width:100%">
				<tr>
					<td class="input_field"><input class="inp" type="text" value="<?php echo $student_details['admitted_department']; ?>" readonly/></td><!--Admission Roll-->
					<td class="input_title">শিক্ষাবর্ষ</td>
					<td class="input_field"><input class="inp" type="text" value="<?php echo $student_details['admitted_year']; ?> " readonly/></td><!--Marit Position-->
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
					<td ><input class="inp" type="text" value="<?php echo $student_details['previous_ju_department']; ?>" readonly/></td>
					<td >&nbsp;&nbsp; শিক্ষাবর্ষঃ </td>
					<td ><input  class="inp"type="text" value="<?php echo $student_details['previous_ju_year']; ?>" readonly/></td>
					<td >&nbsp;&nbsp; হলঃ </td> 
					<td ><input class="inp" type="text" value="<?php echo $student_details['previous_ju_hall']; ?>" readonly/></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td valign="top" rowspan=2>১৩ .</td>
		<td class="inpt">স্থানীয় অভিভাবক নাম  </td>
		<td><input class="inp" type="text" value="<?php echo $student_details['local_guardian_name']; ?>" readonly/></td>
	</tr>
	<tr>
		<td class="inpt" >ঠিকানা ও ফোন নম্বরঃ</td>
		<td><textarea class="inp" rows="2" readonly><?php echo $student_details['local_guardian_address']; ?> </textarea></td>
	</tr>
</table>
<br><br><br>
</div>

<?php include_once 'templates/footer.php'; ?>
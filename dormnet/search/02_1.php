<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- TemplateBeginEditable name="doctitle" -->
	<title>Dorm-net 119</title>
	<!-- TemplateEndEditable -->
	<!-- TemplateBeginEditable name="head" -->
	<!-- TemplateEndEditable -->
	<link href="./css/main.css" rel="stylesheet" type="text/css" />
	<!-- Include JavaScripts -->
	<script type="text/javascript" src="./scripts/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="./scripts/main.js"></script>

</head>

<body>

<canvas height="300px">
	<p>Your browser doesn't support HTML5. Try using Firefox or Chrome.</p>
</canvas>
<script type="text/javascript" src="./scripts/bg.js"></script>


<div class="outerWrapper">
	<!-- @start .container -->
	<div class="container">
		<!-- @start .container -->
		<div class="header" style="width:1000px; height:200px;">
			<a href="./01_1.php"><img src="./images/banner.png" alt="Dormnet119 home" name="banner" /></a>
		<!-- end .header -->
		</div>

		<!-- @start .navbar -->
		<div id="navbar">
		<ul class="level1">
		<!-- Button 1 -->
		<li><a href="http://dormnet119.cdpa.tw/?action=BugReport&amp;lang=zh" title="�J������">�J������</a></li>

		<!-- Button 2 : Drop menu -->
		<li class="submenu">�d��...
			<ul class="level2">
				<li><a href="http://dormnet119.cdpa.tw/?action=Tuition&amp;type=QueryIPInfomation&amp;lang=zh" title="�d�� IP �C��">�d�� IP �C��</a></li>
				<li><a href="http://wiki.cdpa.nsysu.edu.tw/Dorms_ip" title="����C��" target="_blank">����C��</a></li>
				<li><a href="http://dormnet119.cdpa.tw/?action=Tuition&amp;type=QueryMACAddress&amp;lang=zh" title="���׶i��">���׶i��</a></li>
			</ul>
		</li>

		<!-- Button 3 -->
		<li><a href="http://dormnet119.cdpa.tw/?action=BugReport&amp;lang=zh" title="�d����">�d����</a></li>
		</ul>
		</div>
		<!-- @end .navigation -->
		<!-- @start .content -->
		<div class="content">

			<div>
				<h1 style="text-align: center; font-size: 36px; margin-left: -50px">�d�� IP �C��</h1>
			</div>
			<h3>�п�ܹ�Ǹ�T</h3>
		<?php
		require ( "mysql.php" ) ;
		$sql  = "SELECT * FROM `ip_search`" ;
		$sth = $dbh -> query($sql) ;
		$result = $sth -> fetchAll() ;
		
		?>
	<form method = "post" >
	 <p>�J�ٴɧO : 
	 <select name = "dorm">
	  <option selected = "selected" placeholder >-- �п�� --</option>
	  <option value="wuling_1">�Z���@��</option>
	  <option value="wuling_2">�Z���G��</option>
	  <option value="wuling_3">�Z���T��</option>
	  <option value="wuling_4">�Z���|��</option>
	  <option value="jhweihan_a">�A��A��</option>
	  <option value="jhweihan_b">�A��B��</option>
	  <option value="jhweihan_c">�A��C��</option>
	  <option value="jhweihan_d">�A��D��</option>
	  <option value="jhweihan_e">�A��E��</option>
	  <option value="jhweihan_f">�A��F��</option>
	  <option value="jhweihan_g">�A��G��</option>
	  <option value="jhweihan_h">�A��H��</option>
	  <option value="jhweihan_l">�A��L��</option>
	 </select>
	 <p>��ǩи� :
	  <input type = "text" name = "room" size = "3" />
	 </p>
	 <p>��ǧɸ� :
	  <input type = "text" name = "bed" size = "3" />
	 </p>
	 <input type="submit" value="�}�l�d��" id="start" />
	</form>
	<?php
		if ( isset($_POST[ 'dorm' ])&& isset($_POST[ 'room' ]) && isset($_POST[ 'bed' ]) ){
			foreach ( $result as $tmp ){
				if ( $_POST[ 'dorm' ] == $tmp[ 'dorm' ] && $_POST[ 'room' ] == $tmp[ 'room' ] && $_POST[ 'bed' ] == $_POST[ 'bed' ]){
					echo '�ɦ� : '.htmlspecialchars( $tmp[ 'room' ] ).'-'.htmlspecialchars( $tmp[ 'bed' ] ).'</br>' ;
					echo 'IP ��} : '.htmlspecialchars( $tmp[ 'IP' ] ).'</br>' ;
					echo '�l�����B�n : '.htmlspecialchars( $tmp[ 'submask' ] ).'</br>' ;
					echo '�w�]�X�D : '.htmlspecialchars( $tmp[ 'gateway' ] ).'</br>' ;
				}
				
			}
		}
	?>
			


		<!-- @end .content -->
		</div>

		<!-- @start footer -->
		<div id="footer"><a href="#">Home</a> | <a href="#">Products</a> | <a href="#">Services</a> | <a href="#">About Us</a> | <a href="#">Contact Us</a> | <a href="#">Site Map</a> | <a href="#">Privacy</a><br />
			<br />
			Copyright c 2012 NSYSU-CDPA. All Rights Reserved. <img src="" width="1" />
		<!-- @end footer -->
		</div>

	<!-- @end .container -->
	</div>
</div>


</body>
</html>

	
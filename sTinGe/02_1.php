<?php
	session_start() ;
	$_SESSION [ 'sure' ] = false ;
?>
<html>
 <head><meta charset = "big5"><title></title></head>
  <body>
	<h1 align = "center" >IP�d�ߦC��</h1><hr>
	<p align = "center" >�п�ܹ�Ǹ�T</p>
	<p>�dIP�]�w</p>
	<?php
		if ( $_SESSION [ 'sure' ] == true ){
			
			
		}
	?>
	<form method = "post" >
	 <p>�J�ٴɧO : 
	 <select>
	  <option selected = "selected" >-- �п�� --</option>
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  <option value="4">4</option>
	  <option value="A">A</option>
	  <option value="B">B</option>
	  <option value="C">C</option>
	  <option value="D">D</option>
	  <option value="E">E</option>
	  <option value="F">F</option>
	  <option value="G">G</option>
	  <option value="H">L</option>
	  <option value="H">L</option>
	 </select>
	 <p>��ǩи� :
	  <input type = "text" name = "room" size = "3" />
	 </p>
	 <p>��ǧɸ� :
	  <select name="bed">
	  <option value="" selected="selected">--�п��--</option>
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  <option value="4">4</option>
	  </select>
	 </p>
	 <input type="submit" value="�}�l�d��" id="start" />
	 <input name="reset" value="���s���" type="reset" />
	</form>
	<?php
		if (isset($_POST[ 'room' ])){
			$_SESSION[ 'sure' ]=true ;
			echo "�ɦ� : F102-1</br>IP : 140.117.182.53</br>�l�����B�n : 255.255.254.0</br>�w�]�X�D : 140.117.183.254</br>" ;
		}
	?>
  </body>
</html>
<?php
include"komek.php";
?>


<div class="container">

<div class="alert alert-dark" role="alert">
	


	<?php

	$sec = mysqli_query($con,'SELECT
			menu.id,
			menu.ad AS m_ad,
			menu.tarix,
			restoran.id AS rest_id, restoran.ad AS r_ad FROM menu,restoran WHERE menu.restoran_id=restoran.id AND menu.id="'.$_GET['menu_id'].'"  ORDER BY menu.id DESC');
		$info = mysqli_fetch_array($sec);


		echo'<b>Restoran: </b>'.$info['r_ad'].' | <b>Menu: </b>'.$info['m_ad'].'</h2>';





	?>




</div>




	<?php

	if(isset($_POST["axtar"]) && !empty($_POST["sorgu"]))
	{$axtar = " AND ( terkib.element LIKE '%".$_POST['sorgu']."%' OR terkib.qiymet LIKE '%".$_POST['sorgu']."%')";}
	else
	{$axtar = "";}

if(isset($_POST['sil']))
{
	echo'
	<div class="alert alert-warning" role="alert">
	<form method="post">
	
	<b>'.$_POST['ad'].'</b>  məhsulunu silməyə əminsinizmi?<br>

	<input type="hidden" name="id" value="'.$_POST['id'].'">
	
	<button type="submit" name="he" class="btn btn-success btn-sm">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg>
							</button>

	<button type="submit" name="yox" class="btn btn-danger btn-sm">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg>
							</button>

	</form>
	</div>';
}

if(isset($_POST['he']))
{
	$sil = mysqli_query($con,"DELETE FROM terkib WHERE id='".$_POST['id']."'");


	if($sil==true)
	{echo'<div class="alert alert-success" role="alert">Menyu uğurla silindi</div>';}
	else
	{echo'<div class="alert alert-danger" role="alert">Menyunu silmək mümkün olmadı</div>';}
}



	if(isset($_POST['d']))
	{
		if(empty($_POST['element'])){unset($_POST['element']);} else{$element = trim($_POST['element']);}
		if(empty($_POST['qiymet'])){unset($_POST['qiymet']);} else{$qiymet = trim($_POST['qiymet']);}
		

		if(isset($element) && isset($qiymet))
		{
			
				include"upload.php";

				if(!isset($error))
				{
						$daxilet = mysqli_query($con,"INSERT INTO terkib(element,rid,mid,qiymet,foto,tarix) 
											VALUES('".$element."','".$_GET['rest_id']."','".$_GET['menu_id']."','".$qiymet."','".$foto_unvan."','".$tarix."')");

						
					

				if($daxilet==true)
				{echo'<div class="alert alert-success" role="alert">Menyu elementi uğurla əlavə edildi</div>';}
			    else
			    {echo'<div class="alert alert-danger" role="alert">Menyunu elementini əlavə etmək olmadı</div>';}
		}



		}
	}




if(isset($_POST['update']))
{
	if(empty($_POST['qiymet'])){unset($_POST['qiymet']);} else{$qiymet = trim($_POST['qiymet']);}
	if(empty($_POST['element'])){unset($_POST['element']);} else{$element = trim($_POST['element']);}
	
		
	if(isset($qiymet) && isset($element))
		{
			 if($_FILES['foto']['size']<100)
				{$foto_unvan = $_POST['cari_foto'];}
				else
				{include"upload.php";}

			if(!isset($error))
	        {


				$yenile = mysqli_query($con,"UPDATE terkib SET 
					qiymet='".$qiymet."',
					element='".$element."',
					foto='".$foto_unvan."'
					
					WHERE id='".$_POST['id']."'");

				

				if($yenile==true)
				{echo'<div class="alert alert-success" role="alert">Tərkib uğurla yeniləndi</div>';}
				else
				{echo'<div class="alert alert-danger" role="alert">Tərkibi yeniləmək olmadı</div>';}
		}
			
	}
	else
	{echo'Lütfən məlumatları tam doldurun<br>';}
}









if(isset($_POST['edit']))

{
	$sec = mysqli_query($con,"SELECT * FROM terkib WHERE id='".$_POST['id']."'");
	$info = mysqli_fetch_array($sec);

	echo'
	<div class="alert alert-dark" role="alert">
		<form method="post" enctype="multipart/form-data">
			Element:<br>
			<input type="text" name="element" class="form-control" autocomplete="off" value="'.$info['element'].'"><br>
			Qiymet:<br>
			<input type="text" name="qiymet" class="form-control" autocomplete="off" value="'.$info['qiymet'].'"><br>
            <input type="hidden" name="cari_foto" value="'.$info['foto'].'">
			Foto:<br>
			<img style="width:80px; height:60px;" src="'.$info['foto'].'"><br>
			<input type="file" name="foto" class="form-control"><br><br>
			
			<input type="hidden" name="id" value="'.$info['id'].'">

	<button type="submit" name="update" class="btn btn-success">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg>
							</button>

	<button type="submit" name="yox" class="btn btn-danger">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg>
							</button>



		</form>
	</div>';



}




if(!isset($_POST['edit']))
{
	echo'
	<div class="alert alert-dark" role="alert">
		<form method="post" enctype="multipart/form-data">
			
			Element:<br>
			<input type="text" name="element" class="form-control" autocomplete="off"><br>
			Qiymet:<br>
			<input type="text" name="qiymet" class="form-control" autocomplete="off"><br>
			Foto:<br>
			<input type="file" name="foto" class="form-control"><br><br>
			<input type="hidden" name="menu_id" value="'.$_GET['menu_id'].'">
			<input type="hidden" name="rest_id" value="'.$_GET['rest_id'].'">
			<button type="submit" name="d" class="btn btn-success">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
	  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
	</svg>
			</button>
		</form>
	</div>';

}

		
		$sec = mysqli_query($con,'SELECT
			terkib.id,
			terkib.element,
			terkib.qiymet,
			terkib.tarix,
            terkib.foto,
			menu.ad AS m_ad,
			restoran.ad AS r_ad FROM terkib,menu,restoran 
			WHERE menu.restoran_id=restoran.id AND terkib.rid=restoran.id AND terkib.mid=menu.id AND terkib.mid="'.$_GET['menu_id'].'" '.$axtar.' ORDER BY terkib.tarix DESC');
		$info = mysqli_fetch_array($sec);
		$say = mysqli_num_rows($sec);


		
?>

	<div class="alert alert-info" role="alert">Bazada <b><?=$say ?></b> menyu var</div>

	<table class="table table-striped table-dark">

		<thead>
			<th>#</th>
			<th>Foto</th>
			<th>Restoran</th>
			<th>Menu</th>
			<th>Element</th>
			<th>Qiymət</th>
			<th>Tarix</th>
   			<th></th>
		</thead>

		<tbody>


			<?php

				$i = 0;

				do
				{
					$i++;


					echo'<tr>';

						echo'<td>'.$i.'</td>';
						echo'<td><img style="width:80px; height:60px;" src="'.$info['foto'].'"></td>';
						echo'<td>'.$info['r_ad'].'</td>';
						echo'<td>'.$info['m_ad'].'</td>';
						echo'<td>'.$info['element'].'</td>';
						echo'<td>'.$info['qiymet'].'</td>';
						echo'<td>'.$info['tarix'].'</td>';
						echo'<td>

							<form method="post">
							<input type="hidden" name="id" value="'.$info['id'].'">
							<input type="hidden" name="ad" value="'.$info['m_ad'].'">
							<input type="hidden" name="ad" value="'.$info['r_ad'].'">

							<button type="submit" name="edit" class="btn btn-success btn-sm">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
							</button>
							
							<button type="submit" name="sil" class="btn btn-danger btn-sm">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg>
							</button>


							</form>


						</td>';

					echo'</tr>';

				}
				while($info = mysqli_fetch_array($sec));

			?>


		</tbody>


	</table>


</div>
<?php
include"komek.php";
?>


<div class="container">

	<?php

	if(isset($_POST["axtar"]) && !empty($_POST["sorgu"]))
	{$axtar = " WHERE (ad LIKE '%".$_POST['sorgu']."%') ";}
	else
	{$axtar = "";}

if(isset($_POST['sil']))
{
	echo'
	<div class="alert alert-warning" role="alert">
	<form method="post" >
	
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
	$sil = mysqli_query($con,"DELETE FROM menu WHERE id='".$_POST['id']."'");

	if($sil==true)
	{echo'<div class="alert alert-success" role="alert">Menyu uğurla silindi</div>';}
	else
	{echo'<div class="alert alert-danger" role="alert">Menyunu silmək mümkün olmadı</div>';}
}



	if(isset($_POST['d']))
	{
		if(empty($_POST['restoran_id'])){unset($_POST['restoran_id']);} else{$restoran_id = trim($_POST['restoran_id']);}
		if(empty($_POST['ad'])){unset($_POST['ad']);} else{$ad = trim($_POST['ad']);}
		

		if(isset($restoran_id))
		{
			    if($_FILES['pdf']['size']>500)
				{include"uploadpdf.php";}
                
				if(!isset($error))
				{
						$daxilet = mysqli_query($con,"INSERT INTO menu(restoran_id,ad,pdf,tarix) 
											VALUES('".$restoran_id."','".$ad."','".$pdf."','".$tarix."')");

						
					

    				if($daxilet==true)
    				{echo'<div class="alert alert-success" role="alert">Menyu elementi uğurla əlavə edildi</div>';}
    			    else
    			    {echo'<div class="alert alert-danger" role="alert">Menyunu elementini əlavə etmək olmadı</div>';}
		        }



		}
	}




if(isset($_POST['update']))
{
	if(empty($_POST['restoran_id'])){unset($_POST['restoran_id']);} else{$restoran_id = trim($_POST['restoran_id']);}
	if(empty($_POST['ad'])){unset($_POST['ad']);} else{$ad = trim($_POST['ad']);}
		
	if(isset($restoran_id) && isset($ad))
		{
		
				
			    if($_FILES['pdf']['size']<100)
				{$foto_unvan = $_POST['cari_pdf'];}
				else
				{include"uploadpdf.php";}


				$yenile = mysqli_query($con,"UPDATE menu SET 
					restoran_id='".$restoran_id."',
					ad='".$ad."',
					pdf='".$pdf."'
					
					WHERE id='".$_POST['id']."'");
				
				

				if($yenile==true)
				{echo'<div class="alert alert-success" role="alert">Menyu uğurla yeniləndi</div>';}
				else
				{echo'<div class="alert alert-danger" role="alert">Menyunu yeniləmək olmadı</div>';}

			
			
	}
	else
	{echo'Lütfən məlumatları tam doldurun<br>';}
}










if(isset($_POST['edit']))

{
	$sec = mysqli_query($con,"SELECT * FROM menu WHERE id='".$_POST['id']."'");
	$info = mysqli_fetch_array($sec);

	
	echo'
	<div class="alert alert-dark" role="alert">
		<form method="post" enctype="multipart/form-data">
			Restoran:<br>
			<select name="restoran_id" class="form-control">
			<option value="">Restoranı seçin</option>';


			$b = mysqli_query($con,"SELECT * FROM restoran ORDER BY ad DESC");
			$binfo = mysqli_fetch_array($b);

			

			do
			{
				if($info['restoran_id']==$binfo['id']){$x = 'selected';} else{$x = '';}
				echo'<option '.$x.' value="'.$binfo['id'].'">'.$binfo['ad'].'</option>'; 
			}
			while($binfo = mysqli_fetch_array($b));

			echo'
			</select>
			<input type="hidden" name="id" value="'.$info['id'].'">
			Menyu:<br>
			<input type="text" name="ad" class="form-control" autocomplete="off" value="'.$info['ad'].'"><br>
			Menyu pdf-i:
			<pdf style="width:80px; height:60px;" src="'.$info['pdf'].'"><br>
			<input type="file" name="pdf" class="form-control"><br><br>
			<input type="hidden" name="cari_pdf" value="'.$info['pdf'].'">
             
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
			Restoran:<br>
			<select name="restoran_id" class="form-control">
			<option value="">Restoranı seçin</option>';


			$b = mysqli_query($con,"SELECT * FROM restoran ORDER BY ad DESC");
			$binfo = mysqli_fetch_array($b);

			do
			{echo'<option value="'.$binfo['id'].'">'.$binfo['ad'].'</option>'; }
			while($binfo = mysqli_fetch_array($b));

			echo'
			</select>
			Menyu:<br>
			<input type="text" name="ad" class="form-control" autocomplete="off"><br>
            Menyu pdf-i:
  			<input type="file" name="pdf" class="form-control"><br><br>
			<button type="submit" name="d" class="btn btn-success">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
	  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
	</svg>
			</button>
		</form>
	</div>';

}

		
		$sec = mysqli_query($con,'SELECT
			menu.id,
			menu.ad AS m_ad,
			menu.tarix,
			menu.pdf,
			restoran.id AS rest_id, restoran.ad AS r_ad FROM menu,restoran WHERE menu.restoran_id=restoran.id  GROUP BY restoran.ad ORDER BY menu.id DESC');
		$say = mysqli_num_rows($sec);

?>

	<div class="alert alert-info" role="alert">Bazada <b><?=$say ?></b> menyu var</div>

	<table class="table table-striped table-dark" id="cedvel">

		<thead>
			<th>#</th>
			<th>Restoran</th>
			<th>Menu</th>
			
			<th>Tarix</th>
   			<th></th>
		</thead>

		<tbody>


			<?php


				$i = 0;

				while($info = mysqli_fetch_array($sec))
				{
					$i++;


					echo'<tr>';

						echo'<td>'.$i.'</td>';
						echo'<td>'.$info['r_ad'].'</td>';
						echo'<td>'.$info['m_ad'].'</td>';
						echo'<td>'.$info['tarix'].'</td>';
						echo'<td>

							<form method="post">
							<input type="hidden" name="id" value="'.$info['id'].'">
							<input type="hidden" name="ad" value="'.$info['m_ad'].'">
							<input type="hidden" name="ad" value="'.$info['r_ad'].'">
							<input type="hidden" name="pdf" value="'.$info['pdf'].'">


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

							<a class="btn btn-primary btn-sm" href="terkib.php?menu_id='.$info['id'].'&rest_id='.$info['rest_id'].'">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
</svg>
							</a>

							<a target="_blank" class="btn btn-warning btn-sm" href="'.$info['pdf'].'">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-pdf" viewBox="0 0 16 16">
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
  <path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/>
</svg>
							</a>

							</form>


						</td>';

					echo'</tr>';

				}
				


			?>


		</tbody>


	</table>


</div>
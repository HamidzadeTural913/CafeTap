<?php

include"komek.php";


?>

<div class="container">

<?php

if(isset($_POST['d']))
{
	if(empty($_POST['restoran_id'])){unset($_POST['restoran_id']);} else{$restoran_id = trim($_POST['restoran_id']);}
	if(empty($_POST['ad'])){unset($_POST['ad']);} else{$ad = trim($_POST['ad']);}
    if(empty($_POST['soyad'])){unset($_POST['soyad']);} else{$soyad = trim($_POST['soyad']);}
    if(empty($_POST['tel'])){unset($_POST['tel']);} else{$tel = trim($_POST['tel']);}
    if(empty($_POST['otaq'])){unset($_POST['otaq']);} else{$otaq = trim($_POST['otaq']);}
    if(empty($_POST['qeyd'])){unset($_POST['qeyd']);} else{$qeyd = trim($_POST['qeyd']);}
    if(empty($_POST['tarix'])){unset($_POST['tarix']);} else{$tarix = trim($_POST['tarix']);}
    if(empty($_POST['saat'])){unset($_POST['saat']);} else{$saat = trim($_POST['saat']);}
    if(empty($_POST['created'])){unset($_POST['created']);} else{$created = trim($_POST['created']);}
    
    

    
	

	   
    if(isset($restoran_id) && isset($ad) && isset($soyad) && isset($tel) && isset($otaq) && isset($qeyd) && isset($tarix) && isset($saat) && isset($created))
   
		{
				$yoxla = mysqli_query($con,"SELECT * FROM restoran  WHERE ad='".$ad."' AND  soyad='".$soyad."' AND  tel='".$tel."' AND  tarix='".$tarix."' AND  saat='".$saat."' AND id!='".$_POST['id']."' ");


			
				{	
			          $daxilet = mysqli_query($con,"INSERT INTO rezerv(restoran_id,
			          ad,soyad,tel,otaq,qeyd,tarix,saat,created) 
				
					VALUES(
					    '".$restoran_id."','".$ad."','".$soyad."','".$tel."','".$otaq."','".$qeyd."',
					    '".$tarix."','".$saat."','".$saat."')");
					    
					
					

                      
                    
                    
                   

					if($daxilet==true)
					{echo'<div class="alert alert-success" role="alert">Rezerv uğurla əlavə edildi</div>';}
				    else
				    {echo'<div class="alert alert-danger" role="alert">Rezervi əlavə etmək olmadı</div>';}

				}

	
		}	
	    else
		{echo'<div class="alert alert-danger">Lütfən məlumatları tam daxil edin</div>';}



if(isset($_POST['sil']))
{
	echo'
	<div class="alert alert-warning" role="alert">
	<form method="post">
	
	<b>'.$_POST['ad'].'</b>  restoranını silməyə əminsinizmi?<br>

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
	$sil = mysqli_query($con,"DELETE FROM rezerv WHERE id='".$_POST['id']."'");

	if($sil==true)
	{echo'<div class="alert alert-success" role="alert">Rezerv uğurla silindi</div>';}
	else
	{echo'<div class="alert alert-danger" role="alert">Rezervi silmək mümkün olmadı</div>';}
}



if(isset($_POST['update']))
{
	if(empty($_POST['restoran_id'])){unset($_POST['restoran_id']);} else{$restoran_id = trim($_POST['restoran_id']);}
	if(empty($_POST['ad'])){unset($_POST['ad']);} else{$ad = trim($_POST['ad']);}
    if(empty($_POST['soyad'])){unset($_POST['soyad']);} else{$soyad = trim($_POST['soyad']);}
    if(empty($_POST['tel'])){unset($_POST['tel']);} else{$tel = trim($_POST['tel']);}
    if(empty($_POST['otaq'])){unset($_POST['otaq']);} else{$otaq = trim($_POST['otaq']);}
    if(empty($_POST['qeyd'])){unset($_POST['qeyd']);} else{$qeyd = trim($_POST['qeyd']);}
    if(empty($_POST['tarix'])){unset($_POST['tarix']);} else{$tarix = trim($_POST['tarix']);}
    if(empty($_POST['saat'])){unset($_POST['saat']);} else{$saat = trim($_POST['saat']);}
    if(empty($_POST['created'])){unset($_POST['created']);} else{$created = trim($_POST['created']);}

		 if(isset($restoran_id) && isset($ad) && isset($soyad) && isset($tel) && isset($otaq) && isset($qeyd) && isset($tarix) && isset($saat) && isset($created))
   
		{
				$yoxla = mysqli_query($con,"SELECT * FROM restoran  WHERE ad='".$ad."' AND  soyad='".$soyad."' AND  tel='".$tel."' AND  tarix='".$tarix."' AND  saat='".$saat."' AND id!='".$_POST['id']."' ");

			
				

				if(!isset($error))
				{
					$yenile = mysqli_query($con,"UPDATE restoran SET 
						
						restoran_id='".$restoran_id."',
						ad='".$ad."',
						soyad='".$soyad."',
						tel='".$tel."',
						otaq='".$otaq."',
						qeyd='".$qeyd."',
						tarix='".$tarix."',
						saat='".$saat."',
						created='".$created."',
						
						WHERE id ='".$_POST['id']."'");
						
					

				
						
					
					if($yenile==true)
					{echo'<div class="alert alert-success" role="alert">Rezerv uğurla yeniləndi</div>';}
					else
					{echo'<div class="alert alert-danger" role="alert">Rezervi yeniləmək mümkün olmadı</div>';}
				}
			}
			else
			{echo'<div class="alert alert-danger" role="alert">Rezerv artıq mövcuddur</div>';}
	}
	else
	{echo'<div class="alert alert-danger" role="alert">Lütfən məlumatları tam doldurun</div>';}






if(isset($_POST['edit']))
{
	
	$sec = mysqli_query($con,"SELECT * FROM rezerv WHERE id='".$_POST['id']."'");
	$info = mysqli_fetch_array($sec);

           


	
	echo'
	<div class="alert alert-dark" role="alert">
		<form method="post" enctype="multipart/form-data">
		    Ad:<br>
			<input type="text" name="ad" class="form-control" autocomplete="off" value="'.$info['ad'].'"><br>
			Soyad:<br>
			<input type="text" name="unvan" class="form-control" autocomplete="off" value="'.$info['soyad'].'"><br>
			Telefon:<br>
			<input type="text" name="tel" class="form-control" autocomplete="off" value="'.$info['tel'].'"><br>
			Otaq:<br>
			<input type="text" name="sitel" class="form-control" autocomplete="off" value="'.$info['otaq'].'"><br>
            Qeyd:<br>
			<textarea cols="24" rows="5" name="haqqinda" class="form-control" autocomplete="off">'.$info['qeyd'].'</textarea>
			Tarix:<br>
			<input type="date" name="tarix" class="form-control" autocomplete="off" value="'.$info['tarix'].'"><br>
			Saat:<br>
			<input type="time" name="saat" class="form-control" autocomplete="off" value="'.$info['saat'].'"><br>'
            

		 
            
            
?>       
            
<?php
            echo'
		    


            <input type="hidden" name="restoran_id" value="'.$info['restoran_id'].'">
			<input type="hidden" name="id" value="'.$info['id'].'">
			<input type="hidden" name="ad" value="'.$info['ad'].'">
			<input type="hidden" name="soyad" value="'.$info['soyad'].'">
			<input type="hidden" name="tel" value="'.$info['tel'].'">
			<input type="hidden" name="otaq" value="'.$info['otaq'].'">
		    <input type="hidden" name="qeyd" value="'.$info['qeyd'].'">
		    <input type="hidden" name="tarix" value="'.$info['tarix'].'">
		    <input type="hidden" name="saat" value="'.$info['saat'].'">
		    <input type="hidden" name="created" value="'.$info['created'].'">
		
			

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
			Ad:<br>
			<input type="text" name="ad" class="form-control" autocomplete="off" value="'.$info['ad'].'"><br>
			Soyad:<br>
			<input type="text" name="unvan" class="form-control" autocomplete="off" value="'.$info['soyad'].'"><br>
			Telefon:<br>
			<input type="text" name="tel" class="form-control" autocomplete="off" value="'.$info['tel'].'"><br>
			Otaq:<br>
			<input type="text" name="sitel" class="form-control" autocomplete="off" value="'.$info['otaq'].'"><br>
            Qeyd:<br>
			<textarea cols="24" rows="5" name="haqqinda" class="form-control" autocomplete="off">'.$info['qeyd'].'</textarea>
			Tarix:<br>
			<input type="date" name="tarix" class="form-control" autocomplete="off" value="'.$info['tarix'].'"><br>
			Saat:<br>
			<input type="time" name="saat" class="form-control" autocomplete="off" value="'.$info['saat'].'"><br>
            
            
		 
		</form>
	</div>';

}

		
}		
     

?>
 

  </form>

  <?php
 
  $sec = mysqli_query($con,'SELECT 
  rezerv.ad AS rezerv, rezerv.soyad, rezerv.tel, rezerv.otaq, rezerv.qeyd, rezerv.tarix, rezerv.saat, rezerv.qeyd, 
  restoran.ad AS restoran
  FROM rezerv, restoran 
  WHERE rezerv.restoran_id=restoran.id 
  ORDER BY rezerv.id DESC');
  $info = mysqli_fetch_array($sec);
  $say = mysqli_num_rows($sec);
  

if($say>0)
{
  ?>


  <div class="alert alert-info" role="alert">Bazada <b><?=$say ?></b> Rezerv var</div>

  <table class="table table-dark" id="cedvel">
  	<thead>
  		<th>#</th>
  		<th>Restoran</th>
  		<th>Ad</th>
  		<th>Soyad</th>
  		<th>Telefon</th>
  		<th>Otaq</th>
   		<th>Qeyd</th>
   		<th>Tarix</th>
   		<th>Saat</th>
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
                echo'<td>'.$info['restoran'].'</td>';
               echo'<td>'.$info['rezerv'].'</td>';
               echo'<td>'.$info['soyad'].'</td>';
               echo'<td>'.$info['tel'].'</td>';
               echo'<td>'.$info['otaq'].'</td>';
               echo'<td>'.$info['qeyd'].'</td>';
               echo'<td>'.$info['tarix'].'</td>';
               echo'<td>'.$info['saat'].'</td>';
               
              
               echo'<td>

                    <form method="post">
                    <input type="hidden" name="id" value="'.$info['id'].'">
					<input type="hidden" name="ad" value="'.$info['ad'].'">
					<input type="hidden" name="restoran_ad" value="'.$info['restoran_ad'].'">
				
					<input type="hidden" name="unvan" value="'.$info['soyad'].'">
					<input type="hidden" name="haqqinda" value="'.$info['tel'].'">
					<input type="hidden" name="tel" value="'.$info['qeyd'].'">
					<input type="hidden" name="sitel" value="'.$info['tarix'].'">
					<input type="hidden" name="metro" value="'.$info['saat'].'">
					
					

					<button type="submit" name="edit" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                    </button>
					
					
					<button type="submit" name="sil" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
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

<?php 
}
else
{echo'<div class="alert alert-warning" role="alert">Bazada heç bir rezerv mövcud deyldir</div>';} 




?>

</div>

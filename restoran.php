<?php
include"komek.php";
?>

<div class="container-fluid" >

<?php



if(isset($_POST['axtar']) && !empty($_POST['sorgu']))
{$axtar = " WHERE (ad LIKE '%".$_POST['sorgu']."%' OR unvan LIKE '%".$_POST['sorgu']."%')";}
else
{$axtar = "";}


if(isset($_POST['d']))
{
	if(empty($_POST['ad'])){unset($_POST['ad']);} else{$ad = trim($_POST['ad']);}
    if(empty($_POST['unvan'])){unset($_POST['unvan']);} else{$unvan = trim($_POST['unvan']);}
    if(empty($_POST['tel'])){unset($_POST['tel']);} else{$tel = trim($_POST['tel']);}
    if(empty($_POST['sitel'])){unset($_POST['sitel']);} else{$sitel = trim($_POST['sitel']);}
    if(empty($_POST['haqqinda'])){unset($_POST['haqqinda']);} else{$haqqinda = trim($_POST['haqqinda']);}
    if(empty($_POST['depozit'])){unset($_POST['depozit']);} else{$depozit = trim($_POST['depozit']);}
    if(empty($_POST['metro'])){unset($_POST['metro']);} else{$metro = trim($_POST['metro']);}
    if(empty($_POST['aciq'])){unset($_POST['aciq']);} else{$aciq = trim($_POST['aciq']);}
    if(empty($_POST['baqli'])){unset($_POST['baqli']);} else{$baqli = trim($_POST['baqli']);}
    if(empty($_POST['insta'])){unset($_POST['insta']);} else{$insta = trim($_POST['insta']);}
    if(empty($_POST['video'])){unset($_POST['video']);} else{$video = trim($_POST['video']);}
    if(empty($_POST['gmap'])){unset($_POST['gmap']);} else{$gmap = trim($_POST['gmap']);}

    if(isset($_POST['brend']))
    {$brend=$_POST['brend'];}
    else
    {$brend='';}
    
    if(isset($_POST['butun']))
    {$butun=$_POST['butun'];}
    else
    {$butun='';}
    
    if(isset($_POST['cofe']))
    {$cofe=$_POST['cofe'];}
    else
    {$cofe='';}
    
    if(isset($_POST['sirniyyat']))
    {$sirniyyat=$_POST['sirniyyat'];}
    else
    {$sirniyyat='';}
    
    if(isset($_POST['hotel']))
    {$hotel=$_POST['hotel'];}
    else
    {$hotel='';}
    
    if(isset($_POST['book']))
    {$book=$_POST['book'];}
    else
    {$book='';}
    
    if(isset($_POST['canli']))
    {$canli=$_POST['canli'];}
    else
    {$canli='';}

    if(isset($_POST['biznes']))
    {$biznes=$_POST['biznes'];}
    else
    {$biznes='';}

    if(isset($_POST['catdirilma']))
    {$catdirilma=$_POST['catdirilma'];}
    else
    {$catdirilma='';}

    if(isset($_POST['banket']))
    {$banket=$_POST['banket'];}
    else
    {$banket='';}

    if(isset($_POST['kabinet']))
    {$kabinet=$_POST['kabinet'];}
    else
    {$kabinet='';}

    if(isset($_POST['milli']))
    {$milli=$_POST['milli'];}
    else
    {$milli='';}

    if(isset($_POST['ecnebi']))
    {$ecnebi=$_POST['ecnebi'];}
    else
    {$ecnebi='';}

    if(isset($_POST['doner']))
    {$doner=$_POST['doner'];}
    else
    {$doner='';}
    
    if(isset($_POST['susi']))
    {$susi=$_POST['susi'];}
    else
    {$susi='';}
    
    if(isset($_POST['ps']))
    {$ps=$_POST['ps'];}
    else
    {$ps='';}

    if(isset($_POST['club']))
    {$club=$_POST['club'];}
    else
    {$club='';}

    if(isset($_POST['postter']))
    {$postter=$_POST['postter'];}
    else
    {$postter='';}

    if(isset($_POST['qelyan']))
    {$qelyan=$_POST['qelyan'];}
    else
    {$qelyan='';}

    if(isset($_POST['karaoke']))
    {$karaoke=$_POST['karaoke'];}
    else
    {$karaoke='';}

    if(isset($_POST['sutka']))
    {$sutka=$_POST['sutka'];}
    else
    {$sutka='';}
    
    if(isset($_POST['trend']))
    {$trend=1;}
    else
    {$sutka='';}
    

    
	

	if(isset($ad) && isset($unvan) && isset($tel) && isset($haqqinda))
		{
				$yoxla = mysqli_query($con,"SELECT * FROM restoran  WHERE ad='".$ad."' AND  unvan='".$unvan."' AND  tel='".$tel."'");


				if (mysqli_num_rows($yoxla)==0)
				 {
				 	include"upload.php";
				 	include"upload2.php";
				 	include"upload3.php";
					include"upload4.php";
					include"upload5.php";
					if(!isset($error))
					{
			          $daxilet = mysqli_query($con,"INSERT INTO restoran(
			          ad,unvan,tel,sitel,haqqinda,depozit,brend,butun,cofe,sirniyyat,hotel,book,
			          canli,biznes,catdirilma,banket,kabinet,
			          milli,ecnebi,doner,susi,ps,
			          club,postter,qelyan,karaoke,sutka,
			          metro,aciq,baqli,insta,video,gmap,
			          foto,foto_masa,foto_zal,foto_dord,foto_bes,tarix,trend) 
				
					VALUES(
					    '".$ad."','".$unvan."','".$tel."','".$sitel."','".$haqqinda."','".$depozit."','".$brend."','".$butun."','".$cofe."','".$sirniyyat."','".$hotel."','".$book."',
					    '".$canli."','".$biznes."','".$catdirilma."','".$banket."','".$kabinet."',
					    '".$milli."','".$ecnebi."','".$doner."','".$susi."','".$ps."',
					    '".$club."','".$postter."','".$qelyan."','".$karaoke."','".$sutka."',
					    '".$metro."','".$aciq."','".$baqli."','".$insta."','".$video."','".$gmap."','".$foto_unvan."','".$foto_masa."','".$foto_zal."','".$foto_dord."','".$foto_bes."','".$tarix."','".$trend."')");
					    
					
					}

                      
                    
                    
                   

					if($daxilet==true)
					{echo'<div class="alert alert-success" role="alert">Restoran u??urla ??lav?? edildi</div>';}
				    else
				    {echo'<div class="alert alert-danger" role="alert">Restoran?? ??lav?? etm??k olmad??</div>';}

				}

		
		}
	    else
		{echo'<div class="alert alert-danger">L??tf??n m??lumatlar?? tam daxil edin</div>';}

}


if(isset($_POST['sil']))
{
	echo'
	<div class="alert alert-warning" role="alert">
	<form method="post">
	
	<b>'.$_POST['ad'].'</b>  restoran??n?? silm??y?? ??minsinizmi?<br>

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
	$sil = mysqli_query($con,"DELETE FROM restoran WHERE id='".$_POST['id']."'");

	if($sil==true)
	{echo'<div class="alert alert-success" role="alert">Restoran u??urla silindi</div>';}
	else
	{echo'<div class="alert alert-danger" role="alert">Restoran?? silm??k m??mk??n olmad??</div>';}
}



if(isset($_POST['update']))
{
	if(empty($_POST['ad'])){unset($_POST['ad']);} else{$ad = trim($_POST['ad']);}
	if(empty($_POST['unvan'])){unset($_POST['unvan']);} else{$unvan = trim($_POST['unvan']);}
    if(empty($_POST['tel'])){unset($_POST['tel']);} else{$tel = trim($_POST['tel']);}
    if(empty($_POST['sitel'])){unset($_POST['sitel']);} else{$sitel = trim($_POST['sitel']);}
    if(empty($_POST['haqqinda'])){unset($_POST['haqqinda']);} else{$haqqinda = trim($_POST['haqqinda']);}
    if(empty($_POST['depozit'])){unset($_POST['depozit']);} else{$depozit = trim($_POST['depozit']);}
    if(empty($_POST['metro'])){unset($_POST['metro']);} else{$metro = trim($_POST['metro']);}
    if(empty($_POST['aciq'])){unset($_POST['aciq']);} else{$aciq = trim($_POST['aciq']);}
    if(empty($_POST['baqli'])){unset($_POST['baqli']);} else{$baqli = trim($_POST['baqli']);}
    if(empty($_POST['insta'])){unset($_POST['insta']);} else{$insta = trim($_POST['insta']);}
    if(empty($_POST['video'])){unset($_POST['video']);} else{$video = trim($_POST['video']);}
    if(empty($_POST['gmap'])){unset($_POST['gmap']);} else{$gmap = trim($_POST['gmap']);}
    

		if(isset($ad) && isset($unvan) && isset($tel) && isset($haqqinda))
		{
			$yoxla = mysqli_query($con,"SELECT * FROM restoran  WHERE ad='".$ad."' AND  unvan='".$unvan."' AND  tel='".$tel."' AND id!='".$_POST['id']."'");

			if(mysqli_num_rows($yoxla)==0)
			{
                if(empty($_POST['brend'])){$brend='';} else{$brend='Brend';}
                if(empty($_POST['butun'])){$butun='';} else{$butun='B??t??n restoranlar';}
                if(empty($_POST['cofe'])){$cofe='';} else{$cofe='Coffee';}
                if(empty($_POST['sirniyyat'])){$sirniyyat='';} else{$sirniyyat='??irniyyat evi';}
                if(empty($_POST['canli'])){$canli='';} else{$canli='Canl?? musiqi';}
                if(empty($_POST['biznes'])){$biznes='';} else{$biznes='Business lunch';}
                if(empty($_POST['catdirilma'])){$catdirilma='';} else{$catdirilma='??atd??r??lma';}
                if(empty($_POST['banket'])){$banket='';} else{$banket='Banket';}
                if(empty($_POST['kabinet'])){$kabinet='';} else{$kabinet='Kabinet';}
                if(empty($_POST['milli'])){$milli='';} else{$milli='Milli';}
                if(empty($_POST['ecnebi'])){$ecnebi='';} else{$ecnebi='??cn??bi';}
                if(empty($_POST['doner'])){$doner='';} else{$doner='D??n??r';}
                if(empty($_POST['susi'])){$susi='';} else{$susi='Su??i';}
                if(empty($_POST['ps'])){$ps='';} else{$ps='Playstation 3/4';}
                if(empty($_POST['club'])){$club='';} else{$club='Club';}
                if(empty($_POST['postter'])){$postter='';} else{$postter='Posttrerminal';}
                if(empty($_POST['qelyan'])){$qelyan='';} else{$qelyan='Q??lyan';}
                if(empty($_POST['karaoke'])){$karaoke='';} else{$karaoke='Karaoke';}
                if(empty($_POST['sutka'])){$sutka='';} else{$sutka='7/24 A????q';}
				
				if($_FILES['foto']['size']<100)
				{$foto_unvan = $_POST['cari_foto1'];}
				else
				{include"upload.php";}


				if($_FILES['foto_masa']['size']<100)
				{$foto_masa = $_POST['cari_foto2'];} 
				else			
                {include"upload2.php";}

                if($_FILES['foto_zal']['size']<100)
				{$foto_zal = $_POST['cari_foto3'];} 
				else			
                {include"upload3.php";}
                
                if($_FILES['foto_dord']['size']<100)
				{$foto_dord = $_POST['cari_foto4'];} 
				else			
                {include"upload4.php";}
                
                if($_FILES['foto_bes']['size']<100)
				{$foto_bes = $_POST['cari_foto5'];} 
				else			
                {include"upload5.php";}
                
                if(isset($_POST['trend']))
                {$trend=1;}
                else
                {$sutka='';}
                            


				if(!isset($error))
				{
					$yenile = mysqli_query($con,"UPDATE restoran SET 
						ad='".$ad."',
						unvan='".$unvan."',
						tel='".$tel."',
						sitel='".$sitel."',
						haqqinda='".$haqqinda."',
						depozit='".$depozit."',
						brend='".$brend."',
						butun='".$butun."',
						cofe='".$cofe."',
						sirniyyat='".$sirniyyat."',
						hotel='".$hotel."',
						book='".$book."',
						canli='".$canli."',
						biznes='".$biznes."',
						catdirilma='".$catdirilma."',
						banket='".$banket."',
						kabinet='".$kabinet."',
						milli='".$milli."',
						doner='".$doner."',
						susi='".$susi."',
						ecnebi='".$ecnebi."',
						ps='".$ps."',
						club='".$club."',
						postter='".$postter."',
						qelyan='".$qelyan."',
						karaoke='".$karaoke."',
						sutka='".$sutka."',
						metro='".$metro."',
						aciq='".$aciq."',
						baqli='".$baqli."',
						insta='".$insta."',
						video='".$video."',
						gmap='".$gmap."',

						foto='".$foto_unvan."',
						foto_masa='".$foto_masa."',
						foto_zal='".$foto_zal."',
						foto_dord='".$foto_dord."',
						foto_bes='".$foto_bes."',
						tarix= '".$tarix."',
						trend= '".$trend."'
						WHERE id ='".$_POST['id']."'");
						
					

				
						
					
					if($yenile==true)
					{echo'<div class="alert alert-success" role="alert">Restoran u??urla yenil??ndi</div>';}
					else
					{echo'<div class="alert alert-danger" role="alert">Restoran?? yenil??m??k m??mk??n olmad??</div>';}
				}
			}
			else
			{echo'<div class="alert alert-danger" role="alert">Restoran art??q m??vcuddur</div>';}
	}
	else
	{echo'<div class="alert alert-danger" role="alert">L??tf??n m??lumatlar?? tam doldurun</div>';}
}





if(isset($_POST['edit']))
{
	
	$sec = mysqli_query($con,"SELECT * FROM restoran WHERE id='".$_POST['id']."'");
	$info = mysqli_fetch_array($sec);

    if($info['brend']=='Brend'){$brend='checked';} else{$brend='';}  
    if($info['butun']=='B??t??n restoranlar'){$butun='checked';} else{$butun='';}  
    if($info['cofe']=='Coffee'){$cofe='checked';} else{$cofe='';}
    if($info['sirniyyat']=='??irniyyat evi'){$sirniyyat='checked';} else{$sirniyyat='';}
    if($info['hotel']=='Hotel'){$hotel='checked';} else{$hotel='';}
    if($info['book']=='Book cafe'){$book='checked';} else{$book='';}
	if($info['canli']=='Canl?? musiqi'){$canli='checked';} else{$canli='';}
	if($info['biznes']=='Business Lunch'){$biznes='checked';} else{$biznes='';}
	if($info['catdirilma']=='??atd??r??lma'){$catdirilma='checked';} else{$catdirilma='';}
	if($info['banket']=='Banket'){$banket='banket';} else{$banket='';}
	if($info['kabinet']=='Kabinet'){$kabinet='checked';} else{$kabinet='';}
	if($info['milli']=='Milli'){$milli='checked';} else{$milli='';}
	if($info['ecnebi']=='??cn??bi'){$ecnebi='checked';} else{$ecnebi='';}
	if($info['doner']=='D??n??r'){$doner='checked';} else{$doner='';}
	if($info['susi']=='Su??i'){$susi='checked';} else{$susi='';}
	if($info['ps']=='Play-Station 3/4'){$ps='checked';} else{$ps='';}
	if($info['club']=='Club'){$club='checked';} else{$club='';}
	if($info['postter']=='Post-terminal'){$postter='checked';} else{$postter='';}
	if($info['qelyan']=='Q??lyan'){$qelyan='checked';} else{$qelyan='';}
	if($info['karaoke']=='Karaoke'){$karaoke='checked';} else{$karaoke='';}
	if($info['sutka']=='7/24 a????q'){$sutka='checked';} else{$sutka='';}
    if($info['trend']=='1'){$trend='checked';} else{$sutka='';}
    


	
	echo'
	<div class="alert alert-dark" role="alert">
		<form method="post" enctype="multipart/form-data">
			Restoran??n ad??:<br>
			<input type="text" name="ad" class="form-control" autocomplete="off" value="'.$info['ad'].'"><br>
			??nvan:<br>
			<input type="text" name="unvan" class="form-control" autocomplete="off" value="'.$info['unvan'].'"><br>
			??laq?? n??mr??si:<br>
			<input type="text" name="tel" class="form-control" autocomplete="off" value="'.$info['tel'].'"><br>
			Sifari?? n??mr??si:<br>
			<input type="text" name="sitel" class="form-control" autocomplete="off" value="'.$info['sitel'].'"><br>
            Haqq??m??zda:<br>
			<textarea cols="24" rows="5" name="haqqinda" class="form-control" autocomplete="off">'.$info['haqqinda'].'</textarea>
			Depozit:<br>
			<input type="text" name="depozit" class="form-control" autocomplete="off" value="'.$info['depozit'].'"><br>

			Brend
            <input type="checkbox" '.$brend.' name="brend" value="Brend">
			B??t??n restoranlar
            <input type="checkbox" '.$butun.' name="butun" value="B??t??n restoranlar">  
            Coffee
            <input type="checkbox" '.$cofe.' name="cofe" value="Cofe">  
            ??irniyyat evi
            <input type="checkbox" '.$sirniyyat.' name="sirniyyat" value="??irniyyat evi">  
            Hotel
            <input type="checkbox" '.$hotel.' name="hotel" value="Hotel">  
            Book cafe
            <input type="checkbox" '.$book.' name="book" value="Book cafe">  
			Canl?? musiqi
            <input type="checkbox" '.$canli.' name="canli" value="Canl?? musiqi">  
            Business Lunch
            <input type="checkbox" '.$biznes.' name="biznes" value="Business Lunch">  
            ??atd??r??lma
            <input type="checkbox" '.$catdirilma.' name="catdirilma" value="??atd??r??lma">  
            Banket
            <input type="checkbox" '.$banket.' name="banket" value="Banket">  
            Kabinet
            <input type="checkbox" '.$kabinet.' name="kabinet" value="Kabinet">  
            Milli
            <input type="checkbox" '.$milli.' name="milli" value="Milli">  
            ??cn??bi
            <input type="checkbox" '.$ecnebi.' name="ecnebi" value="??cn??bi">  
            D??n??r
            <input type="checkbox" '.$doner.' name="doner" value="D??n??r">  
            Su??i
            <input type="checkbox" '.$susi.' name="susi" value="Su??i">  
            Play-Station 3/4
            <input type="checkbox" '.$ps.' name="ps" value="Play-Station 3/4">  
            Club
            <input type="checkbox" '.$club.' name="club" value="Club">  
            Post-terminal
            <input type="checkbox" '.$postter.' name="postter" value="Post-terminal">  
            Q??lyan
            <input type="checkbox" '.$qelyan.' name="qelyan" value="Q??lyan">  
            Karaoke
            <input type="checkbox" '.$karaoke.' name="karaoke" value="Karaoke">  
            7/24 a????q
            <input type="checkbox" '.$sutka.' name="sutka" value="7/24 a????q">
            Trend
            <input type="checkbox" '.$trend.' name="trend" value="1">';
            
?>       
            <select name="metro" class="form-control">
		        <option value="">Metro se??in</option>
		        <option <?php if($info['metro']=='H??zi Aslanov'){echo'selected';} ?> value="H??zi Aslanov">H??zi Aslanov</option>
		        <option <?php if($info['metro']=='??hm??dli'){echo'selected';} ?>  value="??hm??dli">??hm??dli</option>
		        <option <?php if($info['metro']=='Xalqlar Dostlu??u'){echo'selected';} ?> value="Xalqlar Dostlu??u">Xalqlar Dostlu??u</option>
		        <option <?php if($info['metro']=='Neft??il??r'){echo'selected';} ?> value="Neft??il??r">Neft??il??r</option>
		        <option <?php if($info['metro']=='Qara Qarayev'){echo'selected';} ?> value="Qara Qarayev">Qara Qarayev</option>
		        <option <?php if($info['metro']=='Ulduz'){echo'selected';} ?> value="Ulduz">Ulduz</option>
		        <option <?php if($info['metro']=='N??riman N??rimanov'){echo'selected';} ?> value="N??riman N??rimanov">N??riman N??rimanov</option>
		        <option <?php if($info['metro']=='G??nclik'){echo'selected';} ?> value="G??nclik">G??nclik</option>
		        <option <?php if($info['metro']=='28 May'){echo'selected';} ?> value="28 May">28 May</option>
		        <option <?php if($info['metro']=='??ah ??smay??l X??tai'){echo'selected';} ?> value="??ah ??smay??l X??tai">??ah ??smay??l X??tai</option>
		        <option <?php if($info['metro']=='Sahil'){echo'selected';} ?> value="Sahil">Sahil</option>
		        <option <?php if($info['metro']=='??????ri????h??r'){echo'selected';} ?> value="??????ri????h??r">??????ri????h??r</option>
		        <option <?php if($info['metro']=='Nizami'){echo'selected';} ?> value="Nizami">Nizami</option>
		        <option <?php if($info['metro']=='Elml??r Akademiyas??'){echo'selected';} ?> value="Elml??r Akademiyas??">Elml??r Akademiyas??</option>
		        <option <?php if($info['metro']=='??n??aat????lar'){echo'selected';} ?> value="??n??aat????lar">??n??aat????lar</option>
		        <option <?php if($info['metro']=='20 Yanvar'){echo'selected';} ?> value="20 Yanvar">20 Yanvar</option>
		        <option <?php if($info['metro']=='Memar ??c??mi'){echo'selected';} ?> value="Memar ??c??mi">Memar ??c??mi</option>
		        <option <?php if($info['metro']=='N??simi'){echo'selected';} ?> value="N??simi">N??simi</option>
		        <option <?php if($info['metro']=='Azadl??q prospekti'){echo'selected';} ?> value="Azadl??q prospekti">Azadl??q prospekti</option>
		        <option <?php if($info['metro']=='D??rn??g??l'){echo'selected';} ?> value="D??rn??g??l">D??rn??g??l</option>
		        
		        
		    </select>
		    
<?php
            echo'
		    A????l??r:<br>
		    <input type="time" class="form-control" name="aciq" autocomplete="off" value="'.$info['aciq'].'">
		   
		    Ba??lan??r:<br>
		    <input type="time" class="form-control" name="bagli" autocomplete="off" value="'.$info['baqli'].'">
		   
		    ??nstagram:
		    <input type="text" class="form-control" name="insta" autocomplete="off" value="'.$info['insta'].'">
		    
		    Youtube video:
		    <input type="text" class="form-control" name="video" autocomplete="off" value="'.$info['video'].'">
		    
		    X??rit?? ??zr?? ??razi:
		    <input type="text" class="form-control" name="gmap" autocomplete="off" value="'.$info['gmap'].'">



			<input type="hidden" name="id" value="'.$info['id'].'">
			<input type="hidden" name="cari_foto1" value="'.$info['foto'].'">
			<input type="hidden" name="cari_foto2" value="'.$info['foto_masa'].'">
			<input type="hidden" name="cari_foto3" value="'.$info['foto_zal'].'">
			<input type="hidden" name="cari_foto4" value="'.$info['foto_dord'].'">
		    <input type="hidden" name="cari_foto5" value="'.$info['foto_bes'].'">
			Foto:<br>
			<img style="width:80px; height:60px;" src="'.$info['foto'].'"><br>
			<input type="file" name="foto" class="form-control"><br><br>
			Masa fotosu:<br>
			<img style="width:80px; height:60px;" src="'.$info['foto_masa'].'"><br>
			<input type="file" name="foto_masa" class="form-control"><br><br>
			Zal fotosu:<br>
			<img style="width:80px; height:60px;" src="'.$info['foto_zal'].'"><br>
			<input type="file" name="foto_zal" class="form-control"><br><br>
			Arxa fon fotosu:<br>
			<img style="width:80px; height:60px;" src="'.$info['foto_dord'].'"><br>
			<input type="file" name="foto_dord" class="form-control"><br><br>
			??lav?? foto:<br>
			<img style="width:80px; height:60px;" src="'.$info['foto_bes'].'"><br>
			<input type="file" name="foto_bes" class="form-control"><br><br>
			
	
			

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
			Restoran??n ad??:<br>
			<input type="text" name="ad" class="form-control" autocomplete="off"><br>
			??nvan:<br>
			<input type="text" name="unvan" class="form-control" autocomplete="off"><br>
			??laq?? n??mr??si:<br>
			<input type="text" name="tel" class="form-control" autocomplete="off"><br>
			Sifari?? n??mr??si:<br>
			<input type="text" name="sitel" class="form-control" autocomplete="off" ><br>
            Haqq??m??zda:<br>
			<textarea cols="48" rows="5" name="haqqinda" class="form-control" autocomplete="off"></textarea><br>
			Depozit:<br>
			<input type="text" name="depozit" class="form-control" autocomplete="off"><br>

            Brend
            <input type="checkbox" name="brend" value="Brend"> 
            B??t??n restoranlar
            <input type="checkbox" name="butun" value="B??t??n restoranlar"> 
            Coffee
            <input type="checkbox" name="cofe" value="Coffee"> 
            ??irniyyat m??kan??
            <input type="checkbox" name="sirniyyat" value="??irniyyat m??kan??">
            Hotel
            <input type="checkbox" name="hotel" value="Hotel">
            Book cafe
            <input type="checkbox" name="book" value="Book cafe">
            Canl?? musiqi
            <input type="checkbox" name="canli" value="Canl?? musiqi">  
            Business Lunch
            <input type="checkbox" name="biznes" value="Business Lunch">  
            ??atd??r??lma
            <input type="checkbox" name="catdirilma" value="??atd??r??lma">  
            Banket
            <input type="checkbox" name="banket" value="Banket">  
            Kabinet
            <input type="checkbox" name="kabinet" value="Kabinet">  
            Milli
            <input type="checkbox" name="milli" value="Milli">  
            ??cn??bi
            <input type="checkbox" name="ecnebi" value="??cn??bi">  
            D??n??r
            <input type="checkbox" name="doner" value="D??n??r">  
            Su??i
            <input type="checkbox" name="susi" value="Su??i">  
            Play-Station 3/4
            <input type="checkbox" name="ps" value="Play-Station 3/4">  
            Club
            <input type="checkbox" name="club" value="Club">  
            Post-terminal
            <input type="checkbox" name="postter" value="Post-terminal">  
            Q??lyan
            <input type="checkbox" name="qelyan" value="Q??lyan">  
            Karaoke
            <input type="checkbox" name="karaoke" value="Karaoke">  
            7/24 a????q
            <input type="checkbox" name="sutka" value="7/24 a????q"><br><br>
            
		    
		    <select name="metro" class="form-control">
		        <option value="">Metro se??in</option>
		        <option value="H??zi Aslanov">H??zi Aslanov</option>
		        <option value="??hm??dli">??hm??dli</option>
		        <option value="Xalqlar Dostlu??u">Xalqlar Dostlu??u</option>
		        <option value="Neft??il??r">Neft??il??r</option>
		        <option value="Qara Qarayev">Qara Qarayev</option>
		        <option value="Ulduz">Ulduz</option>
		        <option value="N??riman N??rimanov">N??riman N??rimanov</option>
		        <option value="G??nclik">G??nclik</option>
		        <option value="28 May">28 May</option>
		        <option value="??ah ??smay??l X??tai">??ah ??smay??l X??tai</option>
		        <option value="Sahil">Sahil</option>
		        <option value="??????ri????h??r">??????ri????h??r</option>
		        <option value="Nizami">Nizami</option>
		        <option value="Elml??r Akademiyas??">Elml??r Akademiyas??</option>
		        <option value="??n??aat????lar">??n??aat????lar</option>
		        <option value="20 Yanvar">20 Yanvar</option>
		        <option value="Memar ??c??mi">Memar ??c??mi</option>
		        <option value="N??simi">N??simi</option>
		        <option value="Azadl??q prospekti">Azadl??q prospekti</option>
		        <option value="D??rn??g??l">D??rn??g??l</option>
		        
		        
		    </select>
		    A????l??r:<br>
		    <input type="time" class="form-control" name="aciq">
		    Ba??lan??r:<br>
		    <input type="time" class="form-control" name="baqli">
		    
		    Instagram:<br>
		    <input type="text" class="form-control" name="insta">
		    
		    Youtube video:<br>
		    <input type="text" class="form-control" name="video">
		    
		    X??rit?? ??zr?? ??razi:<br>
		    <input type="text" class="form-control" name="gmap">
		    
		    

		    Restoran??n g??r??n??????:<br>
			<input type="file" name="foto" class="form-control">
			Masa g??r??n??????:<br>
            <input type="file" name="foto_masa" class="form-control">
            Zal g??r??n??????:<br>
            <input type="file" name="foto_zal" class="form-control"><br><br>
            Arxa fon fotosu:<br>
            <input type="file" name="foto_dord" class="form-control"><br><br>
            ??lav?? foto:<br>
            <input type="file" name="foto_bes" class="form-control"><br>
            
            Trend: <input type="checkbox" name="trend" value="1"><br><br>
            

            <button type="submit" name="d" class="btn btn-success">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
	  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
	</svg>
			</button>
		</form>
	</div>';

}

		
		


?>
 

  </form>

  <?php
 
  $sec = mysqli_query($con,'SELECT * FROM restoran  '.$axtar.' ORDER BY id DESC');
  $info = mysqli_fetch_array($sec);
  $say = mysqli_num_rows($sec);

if($say>0)
{
  ?>


  <div class="alert alert-info" role="alert">Bazada <b><?=$say ?></b> Restoran var</div>

  <table class="table table-dark" id="cedvel">
  	<thead>
  		<th>#</th>
  		<th>Foto</th>
  		<th>Restoran</th>
  		<th>??nvan</th>
  		<th>??laq??</th>
   		<th>Insta</th>
   		<th>Tarix</th>
   		<th></th>
   	    <th></th>
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
               echo'<td>'.$info['ad'].'</td>';
               echo'<td>'.$info['unvan'].'</td>';
               echo'<td>'.$info['tel'].'</td>';
               
               echo'<td><a target="_blank" href="https://www.instagram.com/'.$info['insta'].'">'.$info['insta'].'</a></td>';
               echo'<td>'.$info['tarix'].'</td>';
               echo'<td>

                    <form method="post">
                    <input type="hidden" name="id" value="'.$info['id'].'">
                    <input type="hidden" name="depozit" value="'.$info['depozit'].'">
					<input type="hidden" name="ad" value="'.$info['ad'].'">
				
					<input type="hidden" name="unvan" value="'.$info['unvan'].'">
					<input type="hidden" name="haqqinda" value="'.$info['haqqinda'].'">
					<input type="hidden" name="tel" value="'.$info['tel'].'">
					<input type="hidden" name="sitel" value="'.$info['sitel'].'">
					<input type="hidden" name="metro" value="'.$info['metro'].'">
					<input type="hidden" name="aciq" value="'.$info['aciq'].'">
					<input type="hidden" name="baqli" value="'.$info['baqli'].'">
					<input type="hidden" name="insta" value="'.$info['insta'].'">
					

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
{echo'<div class="alert alert-warning" role="alert">Bazada he?? bir restoran m??vcud deyldir</div>';} 




?>

</div>

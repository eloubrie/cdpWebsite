
<html>
    <head>
        <meta charset="utf-8" />
        <title>Formulaire d'inscription</title>
        <link type="text/css" rel="stylesheet" href="../styles/style.css" />
		<script type="text/javascript" >
				
				function verifconfirm ()
	{
		var abs=0;
	if(document.getElementById('MP').value!=document.getElementById('CMP').value)
	{
		document.getElementById("CMP").style.background="red";
		
		return false;

		}else
						
			return true;
			
	}
		
	</script>
    </head>
    <body>
	<?php
	
	if(isset($_GET['modif']))
	{
	$titre=$_GET['titre'];
	$Theme=$_GET['th'];
	$Type=$_GET['tp'];
	$Date=$_GET['date'];
	$Lab=$_GET['lab'];
	$lieu=$_GET['lieu'];
	$Dure=$_GET['dure'];
	$Cap=$_GET['capa'];
	echo"<form method='get' name=form1 action='../controller/creationAtelier.php'><input type='hidden' name='MO' value='1'>";
	}
	
	?>
	<h1 align="center" style='color:red' > Formulaire de création d'atelier </h1>
        <div>
            <form method="get"  id="For" name="fomr1" onsubmit="return verifconfirm ()" action="../controller/creationAtelier.php">
                <fieldset>
                    <legend>Ajouter atelier</legend>
    
                    <label for="TA">Titre atelier  <span class="requis">*</span></label>
                    <input type="text"  name="TA" value="<?php if(isset($_GET['modif']))echo "$titre";?>"	 size="20" maxlength="20" />
                    <br />
                    
                    <label for="TH">Thème de l'atelier  </label>
                    <input type="text"  name="TH" value="<?php if(isset($_GET['modif']))echo "$Theme";?>" size="20" maxlength="20" />
                    <br /> 


                    <label for="TY">Type atelier <span class="requis">*</span></label>
                    <input type="text"  name="TY" value="<?php if(isset($_GET['modif']))echo "$Type";?>" size="20" maxlength="20" />
                    <br />
                    
                    <label for="HR">Date de l'atelier</label>
                    <input type="date"  name="HR" value="<?php if(isset($_GET['modif']))echo "$Date";?>" size="20" maxlength="60" />
                    <br />
					
					
					<label for='LAB'>Laboratoire</label>
						<input type='text'  id='LAB' name='LAB' value="<?php if(isset($_GET['modif']))echo "$Lab";?>" size='20' maxlength='60'  />
						<br />
					<label for="LI">Lieu</label>
                    <input type="text" id="LI" name="LI" value="<?php if(isset($_GET['modif']))echo "$lieu";?>" size="20" maxlength="60"  />
                    <br />
					
					<label for="DR">Durée</label>
                    <input type="text" id="DR" name="DR" value="<?php if(isset($_GET['modif']))echo "$Dure";?>" size="20" maxlength="60"  />
                    <br />
					
					<label for="CA">Capacité</label>
                    <input type="text" id="CA" name="CA" value="<?php if(isset($_GET['modif']))echo "$Cap";?>" size="20" maxlength="60"  />
                    <br />
					<center><input type="submit" id="in" value="Valider"   />
                <input type="reset" value="Remettre à zéro" /> <br /></center>
				</fieldset>
            </form>
        </div>
    </body>
</html>
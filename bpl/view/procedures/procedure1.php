 

<hlml>

    <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    </head>

    <div class="container">
    <?php
				$link = oci_connect("BPL", "bpl", "localhost/XE");
				if($link){



					$query = 'BEGIN player_role; END;';
					$stid = oci_parse($link, $query);
					$r = oci_execute($stid);

		
		}

		?> 
	</div>
	</html>
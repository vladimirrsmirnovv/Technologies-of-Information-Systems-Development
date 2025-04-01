<?php
   include_once 'components/db_connect.php'; 	
    $query = "SELECT * FROM shipment WHERE status = 'в обработке'";
    $rnum = 0;
    $orders = array ();

	if ($result = mysqli_query($link, $query)) {
		$rnum = mysqli_num_rows($result);
		for ($i=0; $i<$rnum; $i++) {
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			$orders[$i] = $row;
        }
		mysqli_free_result($result);
	}

  	mysqli_close($link);

	include_once 'components/wh_header.php';
	include_once 'components/wh_catalog.php';
	include_once 'components/add_item.html';
	include_once 'components/footer.html';
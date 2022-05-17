<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include "list.php";
include "db.php";

		$sql = "DELETE FROM `health_history` WHERE health_history_id='".$_GET['id']."' ";
		if (mysqli_query($conn, $sql)) {
			echo  '<script>Swal.fire({
                        icon: "success",
                        title: "Congratulations..",
                        text: "Record is deleted",
                    }).then(function() {
                        window.location.href = "./list.php"
                    });</script>';
		} 
		else {
			echo  '<script>Swal.fire({
                        icon: "error",
                        title: "Oops....",
                        text: "Record is not deleted",,
                    }).then(function() {
                        window.location.href = "./list.php"
                    });</script>';
		}
		mysqli_close($conn);

?>
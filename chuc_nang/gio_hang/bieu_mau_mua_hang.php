<?php 
	echo "<br>";
	echo "<br>";
	echo "<form method='post' action='' class='container'>";
		echo "<input type='hidden' name='thong_tin_khach_hang' value='co' > ";
		echo "<div class='table-responsive'>";
			echo "<table class='table'>";
				echo "<tr>";
					echo "<td colspan='2' class='bg-info text-white' height='30px'>";
						echo "<b>Thông tin mua hàng</b>";
					echo "</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td height='40px'>Lưu ý : </td>";
					echo "<td>";
						echo "Tên người mua, địa chỉ, điện thoại bắt buộc phải điền vào";
					echo "</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td width='180px'>Tên người mua :</td>";
					echo "<td>";
						echo "<input type='text' class='form-control' name='ten_nguoi_mua' >";
					echo "</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>Email : </td>";
					echo "<td>";
						echo "<input type='text' class='form-control' name='email' >";
					echo "</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>Địa chỉ : </td>";					
					echo "<td>";
						echo "<textarea class='form-control' name='dia_chi' ></textarea>";
					echo "</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>Điện thoại : </td>";
					echo "<td>";
						echo "<input type='text' class='form-control' name='dien_thoai' >";
					echo "</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>Nội dung :</td>";
					echo "<td>";
						echo "<textarea class='form-control' name='noi_dung' rows='4'></textarea>";
					echo "</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>&nbsp;</td>";
					echo "<td>";
						echo "<input type='submit' class='btn btn-primary' value='Mua hàng'>";
					echo "</td>";
				echo "</tr>";
			echo "</table>";
		echo "</div>";
	echo "</form>";
?> 

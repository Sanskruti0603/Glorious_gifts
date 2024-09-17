<?php


session_start();
include './connection.php';
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>A simple, clean, and responsive HTML invoice template</title>

	<style>
		.invoice-box {
			max-width: 800px;
			margin: auto;
			padding: 30px;
			border: 1px solid #eee;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
			font-size: 16px;
			line-height: 24px;
			font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			color: #555;
		}

		.invoice-box table {
			width: 100%;
			line-height: inherit;
			text-align: left;
		}

		.invoice-box table td {
			padding: 5px;
			vertical-align: top;
		}

		.invoice-box table tr td:nth-child(2) {
			text-align: right;
		}

		.invoice-box table tr.top table td {
			padding-bottom: 20px;
		}

		.invoice-box table tr.top table td.title {
			font-size: 45px;
			line-height: 45px;
			color: #333;
		}

		.invoice-box table tr.information table td {
			padding-bottom: 40px;
		}

		.invoice-box table tr.heading td {
			background: #eee;
			border-bottom: 1px solid #ddd;
			font-weight: bold;
		}

		.invoice-box table tr.details td {
			padding-bottom: 20px;
		}

		.invoice-box table tr.item td {
			border-bottom: 1px solid #eee;
		}

		.invoice-box table tr.item.last td {
			border-bottom: none;
		}

		.invoice-box table tr.total td:nth-child(2) {
			border-top: 2px solid #eee;
			font-weight: bold;
		}

		@media only screen and (max-width: 600px) {
			.invoice-box table tr.top table td {
				width: 100%;
				display: block;
				text-align: center;
			}

			.invoice-box table tr.information table td {
				width: 100%;
				display: block;
				text-align: center;
			}
		}

		/* RTL */
		.invoice-box.rtl {
			direction: rtl;
			font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
		}

		.invoice-box.rtl table {
			text-align: right;
		}

		.invoice-box.rtl table tr td:nth-child(2) {
			text-align: left;
		}
	</style>
</head>

<body>
	<div class="invoice-box">
		<?php
		$oid = $_GET['oid'];
		$q = mysqli_query($connection, "select * from tbl_ordermaster where order_id='{$oid}'");
		$odata = mysqli_fetch_array($q);

		$uq = mysqli_query($connection, "select * from tbl_user where user_id='{$odata['user_id']}'");
		$udata = mysqli_fetch_array($uq);

		$sh = mysqli_query($connection, "select * from tbl_shipping where order_id='{$oid}'");
		$shu = mysqli_fetch_array($sh);

		?>


		<table cellpadding="0" cellspacing="0">

			<tr class="top">
				<td colspan="2">
					<table>
						<tr>
							<td class="title">
								<img src="logo.PNG" style="width: 100%; max-width: 300px" />
							</td>
							<td class="title">

							</td>
							<td>
								Invoice #<?php echo $odata['order_id']; ?><br />
								Date:<?php echo $odata['ordermaster_date']; ?><br />

							</td>
						</tr>
					</table>
				</td>
			</tr>

			<tr class="information">
				<td colspan="2">
					<table>
						<tr>
							<td class="title">

							</td>
							<td class="title">

							</td>
							<td>
								Name : <?php echo $udata[1]; ?><br />
								Address:<?php echo $shu[2]; ?><br />

							</td>
						</tr>
					</table>
				</td>
			</tr>



			<tr class="heading">
				<td>Item</td>
				<td>Quantity</td>
				<td></td>
				<td>Price</td>
			</tr>



			<?php


			$odq = mysqli_query($connection, "select * from tbl_orderdetail where order_id ='{$oid}'");
			$total = 0;
			while ($data = mysqli_fetch_array($odq)) {
				$pq = mysqli_query($connection, "select * from tbl_product where product_id='{$data['product_id']}'");
				$pdata = mysqli_fetch_array($pq);
				$single= $pdata['product_price'];
				$qty = $data['orderdetail_quantity'];
				$tot = $single * $qty;
			?>
				<tr class="item">
					<td><?php echo $pdata['product_name']; ?></td>
					<td><?php echo $data['orderdetail_quantity'] ?></td>
					<td></td>
					<td>Rs.<?php echo $tot ?></td>

					<?php $total = $total + $data['product_price']; ?>
				</tr>


			<?php
			}
			?>
			<tr class="total">
				<td><strong><?php echo "Payable amount"; ?></strong></td>
				<td></td>
				<td></td>
				<td>Rs.<?php echo $total ?></td>

			</tr>
		</table><br><br><br><br>
		<h4>Terms & Condition:</h4>
		This is a computer generated invoice and does not require signature.<br>

		For any queries regarding this invoice, please contact Glorious Gifts at 7043562314.
	</div>

</body>

</html>
<?php
// Tạo một mảng 'Giỏ hàng - cart' có cấu trúc như sau
$cart = array(
	'p001' => array('name'=>'IphoneX', 'price'=>1000, 'quantity'=>1),
	'p005' => array('name'=>'Macbookpro', 'price'=>3000, 'quantity'=>2),
	'p002' => array('name'=>'Adapter', 'price'=>200, 'quantity'=>1),
);
//Tính tiền theo giá và số lượng sản phẩm
$total = 0;


echo"<table border='1'>";
echo"<tr>
<th>Tên sản phẩm</th>
<th>Giá</th>
<th>Số lượng</th>
<th>Thành tiền</th>
</tr>";
foreach ($cart as $k => $v) {
	$tt = $v['quantity']*$v['price'];

echo"<tr>";
   echo"<td>".$v['name']."</td>";
   echo"<td>".$v['price']."</td>";
   echo"<td>".$tt."</td>";
   echo"<td>".$cart['p001']""['quantity']*$cart['p001']['price']."</td>";
   $total += $tt;
   echo"</tr>"
}
echo"<tr><td colspan='3'>Tổng tiền</td><td>".$total."</td></tr>";
echo"</table>";
?>

 
//-Get, Post Gửi DL từ client-> server
// SeSIOn  cấp phân
//Cookie lưu DL vào cache t duyệt



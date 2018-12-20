<?php
// Yêu cầu: Tạo ra một mảng tài khoản, trong đó mỗi phần tử của mảng bao gồm: tên đăng nhập và mật khẩu. Viết chương trình kiểm tra dữ liệu đầu vào, nếu tên đăng nhập và mật khẩu trùng với 1 phần tử nào trong mảng tài khoản thì hiển thị đăng nhập thành công. Ngược lại, hiển thị đăng nhập thất bại.

$account = array(
	"admin" => 'admin',
	"user"  => 'user',
	"manager"=>'manager'

	
);
$user = "manager";
$pass = "manager";
foreach ($account as $key => $value) {
	if ($user == $key && $pass == $value){
		$flag = 1;
		break;
	}
}
	if($flag==1){
		echo"Đăng nhập thành công";
	}else{
		echo"Đăng nhập thất bại";
	}


?>
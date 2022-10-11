
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            margin: 20px 0;
        }
        .text{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<h1>DANH SÁCH KHÁCH HÀNG</h1>
<div class="grow">
                <div class="w-full mx-auto">
                    <div class="">
                        <div class="bg-[green] text-white p-[10px] text-[18px] leading-[20px] rounded-t-lg">Danh sách Khách Hàng</div>
                        <div class="pb-[15px] border border-[#ccc] border-solid rounded-b-lg">

                            
                            <div class="flex items-center justify-center mt-6">
                                <table >
                                    <tr class="font-bold p-[20px]">
                                        <td class="">Mã Khách Hàng</td>
                                        <td>Tên Khách Hàng</td>
                                        <td>Email</td>
                                        <td>Mật Khẩu</td>
                                        <td>Phone</td>
                                        <td>Địa Chỉ</td>
                                        <td>Sửa tài khoản</td>
                                        <td>Xóa tài khoản</td>
                                    </tr>
                                    
                                <tr>
                                    <td>
                                    </td>
                                    <td> 
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <a class="border border-[#000] p-2 bg-[#008844] text-white" href="../categories/index.php?update&id=">Sửa</a>
                                    </td>
                                    <td>
                                        <a class="border border-[#000] p-2 bg-[#d62d20] text-white" href="../categories/index.php?remove&id=">Xóa</a>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                </div>
<div class="text">
<a href="index.php?add.php">Thêm mới khách hàng</a>
</div>
</body>
</html>
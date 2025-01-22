@extends('layout.layout_auth')
@section('content')
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            position: relative; /* Make .header the positioning context */
            background-color: #ffccd5;
            padding: 15px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            color: #d62839;
        }
        .content {
            padding: 20px;
        }
        .info {
            margin-bottom: 20px;
            background-color: #f1f3ff;
            border: 1px solid #d0d7ff;
            border-radius: 8px;
            padding: 15px;
        }
        .info div {
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
        }
        .info div:last-child {
            margin-bottom: 0;
        }
        .button {
            display: block;
            width: 100%;
            padding: 10px 0;
            text-align: center;
            background-color: #4f63ff;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 20px;
        }
        .button:hover {
            background-color: #3949ab;
        }
        .note {
            font-size: 14px;
            color: #555;
            line-height: 1.6;
        }
        .note li {
            margin-bottom: 10px;
        }
        .back-button {
            position: absolute;
            top: 15px;
            left: 15px;
            color: black;
            font-size: 1.2rem;
            text-decoration: none;
        }
    </style>
   <div class="container">
         
        <div class="header">
            <a href="javascript:history.back()" class="back-button">&#8592;</a>
            <span>Kết thúc sớm {{$subaccount->id}} Truy cập giao dịch</span>
        </div>
        <div class="content">
            <div class="info">
                <div><strong>Thời gian giao dịch:</strong> {{$subaccount->created_at}}</div>
                <div><strong>Loại giao dịch:</strong>
                    <?php
                        $type = 1; // Example value, you can change it dynamically

                        switch ($type) {
                            case 1:
                                echo 'Hằng ngày';
                                break;
                            case 3:
                                echo 'Hằng tuần';
                                break;
                            case 4:
                                echo 'Hằng tháng';
                                break;
                            default:
                                echo 'Không xác định'; // Default case for unsupported types
                        }
                    ?>
                </div>
            </div>
            <button class="button" onclick="handleButtonClick({{$subaccount->id}})">Nộp đơn</button>
            <div class="note">
                <p>Lưu ý:</p>
                <ul>
                    <li>1. Tài khoản giao dịch đã hết hạn, sẽ được tự động gia hạn. Nếu bạn cần kết thúc sớm vui lòng nộp đơn.</li>
                    <li>2. Chấm dứt sớm không thể hoàn trả tiền quản lý chưa hết hạn, chỉ có thể hoàn trả số tiền ký quỹ còn lại.</li>
                    <li>3. Yêu cầu chấm dứt phải xóa cổ phần.</li>
                    <li>4. Sau khi chấm dứt, số giao dịch sẽ bị xóa và không thể sử dụng được nữa, cần đăng ký lại tài khoản giao dịch mới.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
        function handleButtonClick(subaccountId) {
            // Perform the desired action here, e.g., making an API call or submitting a form
           

            // Optionally, redirect the user to another page
            // window.location.href = "/path-to-redirect";
            $.ajax({
                    url : `/processTerminateSubaccount/`,
                    type:'post',
                    data:{
                        id : subaccountId,
                        _token: $('#csrf').val()
                    },
                    success: function(res){
                        if(res.status){
                            toastr.success(res.message);
                            // setTimeout(() => {
                            //     window.location.reload();
                            // }, "2000");
                            //alert("Yêu cầu của bạn đã được gửi thành công!");
                        }
                        else{
                            toastr.error(res.message);
                        }
                    }
                })
        }
    </script>
@endsection


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết thúc giao dịch sớm</title>
    
</head>
<body>
    
</body>
</html> -->

@extends('layout.layout_auth')
@section('content')
  <style>
    .fakeimg {
      height: 200px;
      background: #aaa;
    }
    .header-default{
      background:#3e4cf3;
      display:flex;
      justify-content:space-between;
      height:54px;
      align-items:center;
    }
    .header-default .logo-header{
        width: 132px;
        height: 26px;
    }
    .row >*{
      height: auto;
    }
    .col{
      background: #fff !important;

    }
    .nav-link{
       display:flex;
       flex-direction: column;
       align-items:center;
       justify-content:center;
       text-align:center;
      }

      .nav-pills .nav-link, .nav-pills .show>.nav-link{
         border: 1px solid #ccc !important;
         border-radius: 4px !important;

      }
      .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
        color:#333 !important;
        background: #ebedfe !important;
        border: 2px solid #3e4cf3 !important;
        border-radius: 4px !important;
        
      }
    .items{
      
    }
    @media screen and (max-width:  768px) {
      .items::-webkit-scrollbar {
          display: none;
      }  
    }

    .items::-webkit-scrollbar {
          
    } 
    .item-cp.active{
      font-weight: bold;
      color:#3e4cf3;
      background:#eceeff;
    }
    .item-cp{
      padding: 6px 16px;
      white-space: nowrap;
      background-color: #f5f5f5;
      border-radius:4px;
      color:#959595;
      width: auto;
      margin-right:10px;
      margin-bottom:10px;
      cursor: pointer;
    }
    .list-item-cp{
      margin-top:10px;
      display:flex;
      width: auto;
      overflow: auto;
    }
    .list-item-cp.list-item-cp2{

    }
    .table-custom{
      
    }
    .table-custom thead th{
      color:#959595;
      font-size:13px;
    }
    .ellipsis-text {
    display: inline-block;
    max-width: 120px; /* Giá trị tối đa của chiều rộng */
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    font-size:12px;
}
.item-payment{
   width:140px;
   border:1px solid #ccc;
   margin-right:8px;
   font-size:13px;
   border-radius:4px;
   height:auto;
   display:flex;
   align-items:center;
   justify-content:center;
   text-align: center;
   cursor: pointer;
   padding:10px 0;
}
.item-payment.active{
   border-color:#3e4cf3;
   color:#3e4cf3;
   background:#ebedfe;
}
.item-chi-tiet {
            padding: 8px;
            cursor: pointer;
            margin-right: 10px;
            padding-bottom:10px;
            color:#959595;
            font-size: 18px;
            white-space: nowrap;
        }

        /* Thêm CSS để chỉnh kiểu cho phần tử được chọn */
        .item-chi-tiet.active {
            font-weight: bold;
            color: blue;
            border-bottom:2px solid blue;

        }

        /* Thêm CSS để ẩn các menu mặc định khi trang tải */
        #menu1, #menu2,#menu3,#menu4,#menu5,#menu6 {
            display: none;
        }
        
        #menu-container::-webkit-scrollbar {
    display: none;
}


.custom-select-container {
    width: 100%;
    margin-bottom: 20px;
    margin-top: 15px;
}

.select2-container--default .select2-selection--single {
    height: 60px;
    display: flex;
    align-items: center;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-weight: bold;
    color: #333;
    cursor: pointer;
    background-color: white;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    padding-left: 20px;
    padding-right: 20px;
    line-height: normal;
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 100%;
    right: 15px;
    display: flex;
    align-items: center;
    font-size: 25px;
    color: black;
}



/* Ẩn thanh cuộn trong các trình duyệt không dựa trên WebKit */
#menu-container {
    overflow: -moz-scrollbars-none;
    -ms-overflow-style: none;
    scrollbar-width: none;
}
    th{
        color:#959595 !important;
        text-align: end;
    }
    .item-price{
        width: 30%;
    }
    .item-price.active{
        color:rgb(62, 76, 244) !important;
        border:1px solid rgb(62, 76, 244) !important;
        background: #ebedfe !important;
    }
    .list-cp{
        width: 100% !important;
        margin-top: 20px;
    }
    .item-cp{
        width: 100% !important;
        margin-right: 0px !important;
    }
    .item-cp img{
        width: 40px;
    }
    .card {
            max-width: 400px;
            background-color: #eef3ff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin: auto;
        }
        .card-header{
            background-color: #6671f8;
        }
        .card-header-first-line {
           
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .card-header-first-line {
            align-items: center;
            flex-direction:row;
        }
        .card-header h2 {
            font-size: 18px;
            margin: 0;
        }
        .card-header a {
            text-decoration: none;
            color: #0056b3;
            font-size: 14px;
        }
        
        .card-status-enable {
            color: #1abc9c;
            font-weight: bold;
         
        }
        .card-body {
            padding: 16px;
        }
        .card-body p {
            margin: 8px 0;
            display: flex;
            justify-content: space-between;
            font-size: 14px;
        }
        .highlight {
            font-weight: bold;
        }
        
        .detail{
            background: linear-gradient(rgb(255, 255, 255), rgba(255, 255, 255, 1));
            border-radius:60px;
        }
        .detail a{
            margin:10px;
        }
        .flex-column{
            display:flex;
            flex-direction: column;
        }
        .flex-row{
            display:flex;
            flex-direction: row;
        }
        .justify-space-between{
            justify-content:space-between;
        }
        .label{
            color:#959595;
        }


        .circle {
            width: 20px;
            height: 20px;
            border: 2px solid white;
            border-radius: 50%;
            margin-right: 10px;
        }

        .circle-container {
            display: inline-flex; /* Shrinks to fit content */
            align-items: center;
            background-color: #6ec2a0; /* Green background */
            padding: 0px 20px 0px 0px;
            border-radius: 50px; /* Rounded edges */
            font-family: Arial, sans-serif;
            color: white;
            font-size: 16px;
        }

        .circle {
            width: 24px;
            height: 24px;
            background-color: #5bd493; /* Match container background */
            border-radius: 50%;
            display: flex; /* Center content */
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 0 2px #5bd493; /* White border effect */
            margin-right: 10px; /* Space between circle and text */
        }

        .circle::after {
            content: '✓'; /* Checkmark */
            font-size: 16px;
            color: g;
        }


        .outlined-container {
            display: inline-flex;
            align-items: center;
            padding: 0px 20px 0px 0px;
            border-radius: 50px;
            font-family: Arial, sans-serif;
            color: white;
            font-size: 16px;
        }

        .outlined-circle {
            width: 24px;
            height: 24px;
            border: 2px solid white; /* White border for the circle */
            border-radius: 50%;
            margin-right: 10px;
        }
  </style>  

    <div class="container homecontainer"
    style="background:#dfebfb">
    <div class="header-default" style="display:flex;font-size:20px;font-weight:bold;justify-content:center;background-color:#dfebfb;border:none !important">
       Danh sách hợp đồng
    </div>
    <div class="d-flex"
        style="height:100vh;padding:15px;background-color:#dfebfb;justify-content:flex-start;align-items:flex-start;flex-direction:column">
        <a href="{{route('accountAfter')}}" style="text-decoration:none;;background: rgb(195, 209, 251);
            color: rgb(57, 63, 108);
            font-weight: 500;cursor:pointer;
            font-size: 18px;
            padding: 6px 18px;
            overflow: visible;width:100%;border-radius:30px">
            Yêu cầu hợp đồng cho bạn
            <i style="float:right;color:#fff;padding:6px 6px;text-align:center;font-size:14px;border-radius:50%;background:linear-gradient(0deg,#d59511,#fcec94)"  class=" bi bi-chevron-right"></i>

        </a>
        <div style="width: 100%;
    justify-content: flex-end;
    padding: 10px 18px;
    color: green;
    display: flex;
    float: inline-end;flex-direction:column;">Phí quản lý: <?= number_format($customer['fee_manager']) ?><br><span style="color:#333;font-size:10px">(Phi quản lý là phí có thể sử dụng thay thế tiền để gia hạn hợp đồng)</span></div>
        <div class="list-cp list-cp-viet">
     
                        <?php if($wallets != null && count($wallets) > 0){ 
                                foreach($wallets as $item) { ?>
                                      <div class="card">
            <div class="card-header">
                <div class="card-header-first-line">
                    <h2>Tài khoản giao dịch</h2>
                    <div class="detail">
                    <a href="#" class="detail">Xem chi tiết</a>
                    </div>
                </div>
                <div class="card-status">
                    <span>{{ $item['id'] }}(Giao dịch)</span>
                </div>
                <div>
                    <!-- <span class="card-status-enable">✅ Giao dịch</span>
                      -->
                      <!-- <div class="<?php echo $item["id"] == $customer['subaccount_Id'] ? 'circle-container' : 'outlined-container'; ?>">
                      <div class="<?php echo $item["id"] == 92 ? 'outlined-circle' : 'outlined-circle'; ?>">
                        <span>Chuyển đổi giao dịch</span>
                    </div> -->
                    <!-- <div class="circle-container">
                        <div class="circle"></div>
                        <span>Chuyển đổi giao dịch</span>
                                </div> -->

                    <!-- <div class="outlined-container">
                        <div class="outlined-circle"></div>
                        <span>Chuyển đổi giao dịch</span>
                    </div> -->

                    <div class="<?php echo $item["enabled"] != null && $item["enabled"] == 1 ? 'circle-container' : 'outlined-container'; ?>" 
                        onclick="handleClick('container', <?php echo $item['id']; ?>, event)">
                        <div class="<?php echo $item["enabled"] != null && $item["enabled"] == 1 ? 'circle' : 'outlined-circle'; ?>" 
                            onclick="handleClick('circle', <?php echo $item['id']; ?>, event)">
                        </div>
                        <span onclick="handleClick('span', <?php echo $item['id']; ?>, event)">Chuyển đổi giao dịch</span>
                    </div>

                </div>
                <div style="" class="flex-row justify-space-between">
                    <div >
                        <div class="flex-column">
                        <span class="label">Thời gian giao dịch</span>
                        <div style="color:black;font-weight:bold">{{ $item['next_at'] }} đến {{ \Carbon\Carbon::parse($item['next_at'])->addDays($item['exp_daynum'])->format('d-m-Y') }}</div>
                        </div>
                    </div>
                    <div >
                    <div class="flex-column">
                        <span class="label">Loại tài chính</span>
                        <span>Hàng ngày</span>
                        </div>
                    </div>
                </div>
                
            </div>
        <div class="card-body">
        <div>
            
            </div>
    
        <p><span>Tổng tài sản</span><span class="highlight">22.747.655</span></p>
        <p><span>Thị trường giao dịch</span><span>Cổ phiếu Việt/VND</span></p>
        <p><span>Vốn ban đầu</span><span>{{ number_format($item['money'], 0, ',', '.') }}</span></p>

        <p><span>Định vị giá thị trường</span><span>4.723.500</span></p>
        <p><span>Cảnh báo</span><span>21.000.000</span></p>
        <p><span>Khoảng cách cảnh báo</span><span>1.747.655</span></p>
        <p><span>Thanh lý</span><span>20.600.000</span></p>
        <p><span>Khoảng cách vị thế</span><span>2.147.655</span></p>
        <p><span>Phí quản lý gia hạn</span><span>15</span></p>
        <p><span>Tỷ lệ</span><span>10</span></p>
        <p><span>Số dư</span><span class="highlight">18.024.155</span></p>
    </div>
</div>

                        <?php } } ?>
                    </div>
    </div>
    
    <!--<div class="" style="padding:15px;float:end">-->
    <!--               <button type="button" style="width:100%;color:#a29595;background:#fff;border-radius:8px;border:none" class="btn btn-primary">Hiển thị hoàn thành giao dịch</button>-->
    <!--           </div>-->
   
     
</div>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        function showModal() {
            $('.modal-first').css('display', 'flex').hide().fadeIn();
            $("body").css('overflow', 'hidden');
        }
        $('.js-item-data').on('click', function () {
            var detailInfo = $(this).closest('.item-data').find('.detail-info');
            detailInfo.slideToggle(300);
        });
        $('.js-show-detail').on('click', function () {
            var detailInfo = $(this).closest('.item-data').find('.detail-info');
            detailInfo.slideToggle(300);
        });
    });
    function isAuto(id, type){
        if(confirm('Bạn có muốn '+(type == 1 ? 'gia hạn tự động' : 'huỷ gia hạn tự động')+' hợp đồng này không?')){
                $.ajax({
                    url : '/isauto',
                    type:'post',
                    data:{
                        id : id,
                        type: type,
                        _token: $('#csrf').val()
                    },
                    success: function(res){
                        if(res.status){
                            toastr.success(res.message);
                            window.location.reload();
                        }
                        else{
                            toastr.error(res.message);
                        }
                    }
                })
            }
        }
    function payDebt(id){
            if(confirm('Bạn có muốn thanh toán khoản vay này không?')){
                $.ajax({
                    url : '/paydebt',
                    type:'post',
                    data:{
                        id : id,
                        _token: $('#csrf').val()
                    },
                    success: function(res){
                        if(res.status){
                            toastr.success(res.message);
                            window.location.reload();
                        }
                        else{
                            toastr.error(res.message);
                        }
                    }
                })
            }
        }

    function handleClick(elementType, id, event) {
        console.log('handleClick',id);
            event.stopPropagation(); // Prevents bubbling up to parent elements
            console.log(`Clicked element: ${elementType}, ID: ${id}`);
            $.ajax({
                    url : `/changeSubaccount/${id}`,
                    type:'post',
                    data:{
                        id : id,
                        _token: $('#csrf').val()
                    },
                    success: function(res){
                        if(res.status){
                            toastr.success(res.message);
                            // setTimeout(() => {
                            //     window.location.reload();
                            // }, "2000");
                            
                        }
                        else{
                            toastr.error(res.message);
                        }
                    }
                })
    }
</script>
@endsection

   



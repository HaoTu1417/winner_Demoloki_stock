<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết giao dịch</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .back-button {
            position: absolute;
            top: 15px;
            left: 15px;
            color: black;
            font-size: 1.2rem;
            text-decoration: none;
        }

        .back-button:hover {
            text-decoration: underline;
        }

        .transaction-details {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .transaction-details p {
            margin-bottom: 5px;
            display: flex;
            justify-content: space-between;
        }

        .transaction-details strong {
            font-size: 1rem;
        }

        .transaction-details .text-danger {
            color: #dc3545;
        }

        .transaction-details .text-success {
            color: #28a745;
        }
        .icon-back{
        font-size: 25px;

        }   
        .bi-chevron-left::before {
            content: "\f284";
            margin: 13px;

        }
        
    </style>
</head>
<body>
    <div class="container mt-4">
        <!-- <a href="javascript:history.back()" class="back-button">&#8592;</a> -->
        <div class="" style="background-color:rgb(62, 76, 244);display:flex;flex-direction:row">
            <div  class="color:#fff" style="flex:1;height: 50px;">
               <i style="color:#fff" onclick="history.back()" class="icon-back bi bi-chevron-left"></i>
            </div>
            <div style="text-align:center;flex:1;color:white;font-size:20px;white-space:nowrap;align-content:center"><span>Chi tiết giao dịch</span></div>
            <div style="flex:1;justify-content:flex-end;display:flex" ></div>
            <!-- <img class="js-show-change-langue" src="assets/images/dowload/hslang_white.png" style="width:22px;height:22px;margin-right:12px"> </img> -->
        </div>

        <!-- <h4 class="text-center"></h4> -->

        <?php if (isset($historyOrders) && !empty($historyOrders)) : ?>
            <?php foreach ($historyOrders as $order) : ?>
                <div class="transaction-details">
                    <p><strong>Mã giao dịch:</strong> <span><?= htmlspecialchars($order->id) ?></span></p>
                  
                   
                    <p><strong>Số tiền giao dịch:</strong> <span><?= number_format($order->money, 0, ',', '.') ?> VND</span></p>
                   
                    <p><strong>Thời gian:</strong> <span><?= htmlspecialchars($order->created_at) ?></span></p>
                    <p><strong>Ghi chú:</strong> <span><?= htmlspecialchars($order->note) ?></span></p>
                    <p><strong>Loại giao dịch:</strong> 
                        <span class="<?= $order->type == 2 ? 'text-danger' : ($order->type == 3 ? 'text-success' : '') ?>">
                            <?= htmlspecialchars($order->type == 2 ? 'Mua' : ($order->type == 3 ? 'Bán' : 'Khác')) ?>
                        </span>
                    </p>
                   
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="alert alert-warning">Không có dữ liệu giao dịch để hiển thị.</div>
        <?php endif; ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>STORE VN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css?id=<?php echo rand(0, 9999); ?>">
    <link rel="stylesheet" href="/assets/css/module.css?id=<?php echo rand(0, 9999); ?>">
    <link rel="stylesheet" href="/assets/css/betting.css?id=<?php echo rand(0, 9999); ?>">
    <link rel="stylesheet" href="/assets/css/toastr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="/assets/js/jquery-3.7.1.min.js"></script>
    <script src="/assets/js/toastr.min.js"></script>
    <script src="/assets/js/accounting.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }

        .body {
            padding: 0 10px;
        }

        .body-top {
            padding-top: 60px;

        }

        .TimeLeft_C {
            width: 100%;
            height: 96px;
            position: relative;
            background-image: url(/assets/png/diban-f3c339c5.png);
            background-repeat: no-repeat;
            background-size: contain;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            padding: 20px;
        }

        .TimeLeft_C-rule {
            position: absolute;
            bottom: 12px;
            right: 20px;
            height: 22px;
            width: 128px;
            font-size: .29333rem;
            text-align: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            border-radius: 0.08rem;
            background: #11BF7A;
            font-size: 12px;
            color: white;
        }

        .TimeLeft_C-rule svg {
            width: 18px;
        }

        .TimeLeft_C-l {
            color: #fff;
            display: flex;
            flex-direction: column;
        }

        .TimeLeft_C-name {
            font-size: 12px;
            color: #75fff7;
        }

        .TimeLeft_C-id {
            font-size: 13px;
        }

        .TimeLeft_C-tip {
            position: absolute;
            bottom: 0;
            left: 20px;
            font-size: 12px;
        }

        .TimeLeft_C-r {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            flex-wrap: nowrap;

        }

        .TimeLeft_C-text {
            font-size: 12px;
            color: #75fff7;
        }

        .TimeLeft_C-time {
            margin-left: 0.26667rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            color: #333;
            font-size: .66667rem;
        }

        .symbol {
            background: unset !important;
            color: #cd9047 !important;
        }

        .TimeLeft_C-time div {
            color: #fff;
            gradient(284deg, #cd9047 -4.68%, #fedd84 140.37%);
            background-image: linear-gradient(166deg, #cd9047 -4.68%, #fedd84 140.37%);
            box-shadow: drop-shadow(0 .01333rem 0 #745315);
            border-radius: 4px;
            ;
            font-weight: 700;
            height: 32px;
            line-height: 32px;
            width: 17px;
            font-family: Oswald;
            text-align: center;
            font-size: 28px;
        }

        .Betting_C-head {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            margin: 10px 0;
        }

        .Betting_C-head-g {
            background: #cd9047;
            width: 32%;
            text-align: center;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .Betting_C-head-p {
            background: #EF4770;
            width: 32%;
            text-align: center;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .Betting_C-head-r {
            background: #adb0d4;
            width: 32%;
            text-align: center;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .Betting_C-numC {
            width: 100%;
            height: auto;
            object-fit: cover;
            margin-top: 0.26667rem;
            padding: 0.56rem 0.29333rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            background-image: url(/assets/png/bet-e00871af.png);
            background-repeat: no-repeat;
            background-size: contain;
            padding: 10px;
        }

        @media screen and (min-width: 768px) {
            .Betting_C-numC {
                background-size: cover !important;

            }

            .TimeLeft_C {
                background-size: cover !important;

            }

        }

        .nav {
            background: none;
            display: flex;
            justify-content: space-between;
        }

        .nav-item {
            width: 32%;
            display: flex;
            justify-content: center;
            align-items: center;
            white-space: nowrap;
            background: #1e2034;
            border-radius: 10px;
            color: #9397BD;
        }

        .nav-link.active {
            color: #945b16 !important;
        }

        .nav-item button {
            width: 100%;
            padding: 10px 2px;
        }

        .Betting_C-numC>div {
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            width: 25%;
            height: 108px;
            margin-bottom: 10px;
        }

        .Betting_C-numC>div.w5 {
            width: 50%;
            height: 110px;
        }

        .Betting_C-numC>div.Betting_C-numC-item0 {
            background-image: url(/assets/png/n0-700ec4b1.png );

        }

        .Betting_C-numC>div.Betting_C-numC-item5 {
            background-image: url(/assets/png/n5-50c5e305.png);
        }

        .Betting_C-numC>div.Betting_C-numC-item1 {
            background-image: url(/assets/png/n1-49fe9ced.png);
        }

        .Betting_C-numC>div.Betting_C-numC-item2 {
            background-image: url(/assets/png/n2-da417d5e.png);
        }

        .Betting_C-numC>div.Betting_C-numC-item3 {
            background-image: url(/assets/png/n3-22ad65c0.png);
        }

        .Betting_C-numC>div.Betting_C-numC-item7 {
            background-image: url(/assets/png/n7-7091816a.png);
        }

        .Betting_C-numC>div.Betting_C-numC-item4 {
            background-image: url(/assets/png/n4-99a5bfa8.png);
        }

        .Betting_C-numC>div.Betting_C-numC-item6 {
            background-image: url(/assets/png/n6-3669f956.png);
        }

        .Betting_C-numC>div.Betting_C-numC-item8 {
            background-image: url(/assets/png/n8-e26bf092.png);
        }

        .Betting_C-numC>div.Betting_C-numC-item9 {
            background-image: url(/assets/png/n9-a92af725.png);
        }

        .Betting_C-foot {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            margin-top: 10px;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
        }

        .Betting_C-foot>div {
            width: calc((100% - 0.21333rem)/2);
            height: 54px;
            line-height: 54px;
            background-image: url(/assets/png/btn-aab6c633.png);
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-position: center;
            text-align: center;
            font-size: 18px;
            font-weight: 700;
            color: #fedd84;
        }

        .row>* {
            height: auto;
        }

        .GameRecord__C-head {
            padding: 8px 0;
            border-top-right-radius: 8px;
            border-top-left-radius: 8px;

            background: #303454;

        }

        .GameRecord__C-body {
            padding: 8px 0;
            line-height: 16px;
            font-site: 16px;
            color: #fff;
            background: #1e2034;
            border-bottom: 1px solid #ccc;

        }

        .GameRecord__C-body .col {
            text-align: center;
            white-space: nowrap;
            padding: 6px 0;
        }

        .GameRecord__C-head .col {
            text-align: center;
        }

        .col--8 {
            width: 40% !important;
        }

        .GameRecord__C-foot {
            height: 60px;
            background: #1e2034;
            color: #fff;
            padding: 8px 80px;
            margin-top: 0.48rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .GameRecord__C-foot-prev {
            padding: 8px;
            background: #303454;
            border-radius: 8px;
            transform: rotate(180deg) !important;

        }

        .GameRecord__C-foot-next {
            padding: 8px;
            background: #303454;
            border-radius: 8px;


        }

        .Trend__C-body1 {
            background: #1e2034;
            padding-bottom: 14px;
        }

        .Trend__C-body1-line>div:first-child {
            width: 148px;
            padding-left: 10px;
            text-align: left;
        }

        .Trend__C-body1-line {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            font-size: 13px;
            color: #686c94;
            height: 22px;
        }

        .Trend__C-body1-line+.Trend__C-body1-line {
            margin-top: 10px;

        }

        .Trend__C-body1-line.header {
            padding-top: 14px;
            height: 31px;
            padding-left: 10px;
            color: #adb0d4;
            font-size: 14px;
        }

        .Trend__C-body1-line-num {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            padding-right: 8px;
        }

        .Trend__C-body1-line.lottery .Trend__C-body1-line-num>div {
            border-radius: 50%;
            border: 0.01333rem solid #cd9047;
            color: #cd9047;
        }

        .Trend__C-body1-line-num>div {
            width: 19px;
            height: 19px;
            line-height: 19px;
            font-size: 14px;
            color: #9397bd;
            text-align: center;
        }

        .Trend__C-body1-line {
            margin-top: 12px;
        }

        .Trend__C-body2 {
            background: #1e2034;
            padding-bottom: 14px;
        }

        .Trend__C-body2-Num>div {
            width: 19px;
            height: 19px;
            line-height: 19px;
            font-size: 11px;
            color: #9397bd;
            text-align: center;
        }

        .Trend__C-body2>div {
            height: 54px;
            padding: 18px 10px;
            border-top: 4px solid #303454;
        }

        .Trend__C-body2-Num {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .Trend__C-body2-Num>div {
            width: 16px;
            height: 16px;
            line-height: 16px;
            color: #9397bd;
            text-align: center;
            border-radius: 50%;

        }


        .Trend__C-body2-Num {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            position: relative;
            height: 18px;
        }

        .Trend__C-body2 .line-canvas {
            position: absolute;
            top: 50%;
            left: 0;
            height: 54px;
            width: calc(100% - 24px);
            z-index: 9;
        }

        .Trend__C-body2-Num-item {
            border: 1px solid #bbbbbb;
            color: #bbb;
            margin-right: 6px;
        }

        .Trend__C-body2-Num-BS.isB {
            background-image: url(/assets/png/ringIcon-520625f3.png);
        }

        .Trend__C-body2-Num-BS {
            width: 16px;
            height: 16px;
            margin-left: 12px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            background-image: url(/assets/png/necklace-47e42f83.png);
        }

        .Trend__C-body2-Num-item.action {
            position: relative;
            z-index: 10;
            border: none;
            color: #fff;
            background: #cd9047;
        }
    </style>
</head>

<body>
    <div class="container homecontainer">
        @include('home.layout.header_4')
        <div class="body">
            <div class="body-top">
                <div>
                    <div class="GameRecord__C-foot">
                        <div class="GameRecord__C-foot-prev btnPrevHistory">
                            <i class=" bi bi-chevron-right"></i>

                        </div>
                        <div class="GameRecord__C-foot-page showTotalHistory"></div>
                        <div class="GameRecord__C-foot-next btnNextHistory">
                            <i class=" bi bi-chevron-right"></i>

                        </div>
                    </div>
                    <div class="GameRecord__C-head">
                        <div class="row" style="color:#fff">
                            <div class="col col-5">Số tiền</div>
                            <div class="col col-3">Ngày G.D</div>
                            <div class="col col-4">Ghi chú</div>
                        </div>
                    </div>
                    <div class="list-body" id="listHistorySession" style="margin-bottom:20px">

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <input type="text" id="csrf" hidden value="{{ csrf_token() }}" />
    <script>
        $(document).ready(function() {
            var offset = 0;
            var total = 0;
            function getHistoryPlay() {
                $.ajax({
                    url: '/historys',
                    type: 'get',
                    dataType: 'json',
                    data: {
                        offset: offset,
                        limit: 20
                    },
                    success: function(res) {
                        var html = '';
                        total = res.total;
                        $('.showTotalHistory').html((offset == 0 ? 1 : 1 + (offset / 20)) + '/' + Math
                            .round(res.total / 20).toString());
                        if (res.data.length > 0) {
                            for (var i = 0; i < res.data.length; i++) {
                                html += '<div class="GameRecord__C-body"> <div class="row">';
                                html += '<div class="col col-5" style="font-size:14px; white-space: break-spaces;">' + res.data[i]
                                    .money + '</div>';
                                html += '<div class="col col-3" style="font-size:14px; white-space: break-spaces;">' + res.data[i].created_at + '</div>';
                                html += '<div class="col col-4" style="font-size:14px; white-space: break-spaces;">' + res.data[i].note + '</div>';
                                html += '</div></div>';
                            }
                            $('#listHistorySession').html(html);
                        } else {
                            $('#listHistorySession').html('Không có lịch sử');
                        }
                    }
                });
            }

            $('.btnPrevHistory').click(function() {
                if (offset < 20) {
                    return;
                }
                offset -= 20;
                getHistoryPlay();
            });

            $('.btnNextHistory').click(function() {
                if (offset > total) {
                    return;
                }
                offset += 20;
                getHistoryPlay();
            });

            getHistoryPlay();

        });
    </script>
</body>

</html>

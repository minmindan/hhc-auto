<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/contact2.css') }}" />
    <style>
        .button-section .btn-for-a {
            display: flex;
            align-content: center;
            justify-content: center;
        }

        .button-section button a {
            width: 100%;
            height: 100%;
            display: flex;
            align-content: center;
            justify-content: center;
            text-align: center;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <main>
        <!-- 聯絡表單區塊 -->
        <div id="contact-id" style="margin-top: 0;">

            <!-- 表單區塊 -->
            <div class="form-container">
                <!-- 說明文字 -->
                <!-- 表單 -->
                <tbody>
                    <tr>
                        <td style="background-color:#f2ffff;padding:10px;width:30%;border:1px solid #d8dfe3" width="180px">查詢類型</td>
                        <td style="padding:10px;border:1px solid #d8dfe3">@if ($data[0]->type == 1)
                            {{'設備'}}
                            @elseif ($data[0]->type == 2)
                            {{'軟體'}}
                            @elseif ($data[0]->type == 3)
                            {{'部品零件'}}
                            @elseif ($data[0]->type == 4)
                            {{'耗材'}}
                            @elseif ($data[0]->type == 5)
                            {{'維修'}}
                            @endif</td>
                    </tr>
                    <tr>
                        <td style="background-color:#f2ffff;padding:10px;width:30%;border:1px solid #d8dfe3" width="180px">公司名稱/個人</td>
                        <td style="padding:10px;border:1px solid #d8dfe3">{{ $data[0]->company }}</td>
                    </tr>
                    <tr>
                        <td style="background-color:#f2ffff;padding:10px;width:30%;border:1px solid #d8dfe3" width="180px">職稱</td>
                        <td style="padding:10px;border:1px solid #d8dfe3">{{ $data[0]->title }}</td>
                    </tr>
                    <tr>
                        <td style="background-color:#f2ffff;padding:10px;width:30%;border:1px solid #d8dfe3" width="180px">姓名</td>
                        <td style="padding:10px;border:1px solid #d8dfe3">2169D{{ $data[0]->name }}0013660</td>
                    </tr>
                    <tr>
                        <td style="background-color:#f2ffff;padding:10px;width:30%;border:1px solid #d8dfe3" width="180px">電話號碼</td>
                        <td style="padding:10px;border:1px solid #d8dfe3">{{ $data[0]->phone }}</td>
                    </tr>
                    <tr>
                        <td style="background-color:#f2ffff;padding:10px;width:30%;border:1px solid #d8dfe3" width="180px">電子郵件</td>
                        <td style="padding:10px;border:1px solid #d8dfe3">{{ $data[0]->address }}</td>
                    </tr>
                    <tr>
                        <td style="background-color:#f2ffff;padding:10px;width:30%;border:1px solid #d8dfe3" width="180px">需求說明</td>
                        <td style="padding:10px;border:1px solid #d8dfe3">{{ $data[0]->demand }}</td>
                    </tr>
                </tbody>

            </div>
        </div>
    </main>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ショップ一覧</title>
</head>
<body>
    <h1>ショップ一覧</h1>
    <table>
        <thead>
            <tr>
                <th>ショップ名</th>
                <th>営業時間</th>
                <th>定休日</th>
                <th>電話番号</th>
                <!-- 他のカラムを追加 -->
            </tr>
        </thead>
        <tbody>
            @foreach($shops as $shop)
            <tr>
                <td>{{ $shop->name }}</td>
                <td>{{ $shop->business_hours }}</td>
                <td>{{ $shop->regular_holiday }}</td>
                <td>{{ $shop->phone }}</td>
                <!-- 他のカラムを追加 -->
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

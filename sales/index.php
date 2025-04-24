<?php
// 売上リスト
function salesList($year, $month)
{
    // TODO: DB処理
    $sales = [];
    return $sales;
}

// TODO: 売上一覧

// TODO: 総売上金額

// 年月プルダウンデータ
$years = range(date('Y'), 2023);
$months = range(1, 12);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YSEレジ</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <main class="container mx-auto">
        <h2 class="p-4 text-2xl text-center">売上</h2>
        <!-- 検索 -->
        <div class="p-3 text-center">
            <form action="" method="get">
                <div class="py-4">
                    <select name="year" class="text-xl p-3">
                        <?php foreach ($years as $year) : ?>
                            <option value="<?= $year ?>"><?= $year ?></option>
                        <?php endforeach ?>
                    </select>
                    年
                    <select name="month" class="text-xl p-3">
                        <?php foreach ($months as $month) : ?>
                            <option value="<?= $month ?>"><?= $month ?></option>
                        <?php endforeach ?>
                    </select>
                    月
                </div>
                <div class="my-2 flex gap-2">
                    <button class="bg-gray-500 text-white text-md font-bold py-3 rounded hover:bg-gray-600 transition w-full">検索</button>
                    <a href="./" class="bg-gray-500 text-white text-md font-bold py-3 rounded hover:bg-gray-600 transition w-full">クリア</a>
                    <a href="../" class=" text-md font-bold py-3 w-full">戻る</a>
                </div>
            </form>
        </div>

        <!-- 総売上 -->
        <section>
            <h3 class="text-xl text-center p-3">
                <label for="" class="p-3">総売上</label>
                <span class="font-bold text-2xl p-3">&yen;300,000</span>
            </h3>
        </section>

        <!-- 売上一覧 -->
        <section>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-md font-medium text-gray-500 uppercase tracking-wider">領収書番号</th>
                        <th scope="col" class="px-6 py-3 text-left text-md font-medium text-gray-500 uppercase tracking-wider">売上日時</th>
                        <th scope="col" class="px-6 py-3 text-left text-md font-medium text-gray-500 uppercase tracking-wider">売上高</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4">0123456789</td>
                        <td class="px-6 py-4">2025/01/01 14:40</td>
                        <td class="px-6 py-4">&yen;500</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">0123456789</td>
                        <td class="px-6 py-4">2025/01/01 14:40</td>
                        <td class="px-6 py-4">&yen;500</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">0123456789</td>
                        <td class="px-6 py-4">2025/01/01 14:40</td>
                        <td class="px-6 py-4">&yen;500</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">0123456789</td>
                        <td class="px-6 py-4">2025/01/01 14:40</td>
                        <td class="px-6 py-4">&yen;500</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">0123456789</td>
                        <td class="px-6 py-4">2025/01/01 14:40</td>
                        <td class="px-6 py-4">&yen;500</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

</body>

</html>
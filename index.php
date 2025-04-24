<?php

// TODO: エラーメッセージ
$error = "エラーメッセージ";


// TODO: メッセージ
$message = "通常メッセージ";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YSEレジ</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-200 flex justify-center items-center min-h-screen">
    <div class="bg-white rounded p-6 shadow-md w-full max-w-md">
        <div id="errors" class="mb-4">
            <ul>
                <li class="text-red-600"><?= $error ?></li>
            </ul>
        </div>

        <div class="text-gray-700 mb-4">
            <?= $message ?>
        </div>

        <form action="update.php" method="post">
            <input
                type="text"
                id="display"
                name="price"
                class="w-full text-right text-3xl mb-4 px-4 py-2 border border-gray-500 rounded bg-gray-50"
                readonly />

            <div class="grid grid-cols-2 gap-4 mb-6">
                <button
                    type="submit"
                    class="bg-gray-500 text-white text-lg font-bold py-3 rounded hover:bg-gray-600 transition w-full">
                    計上
                </button>
                <a
                    href="sales/"
                    class="bg-gray-500 text-white text-lg font-bold py-3 rounded text-center hover:bg-gray-600 transition w-full">
                    売上
                </a>
            </div>

            <div class="grid grid-cols-4 gap-3">
                <!-- 数字 & 操作ボタン -->
                <button class="bg-gray-100 hover:bg-gray-200 text-xl font-medium rounded aspect-square w-full" onclick="addNumber('7')" type="button">7</button>
                <button class="bg-gray-100 hover:bg-gray-200 text-xl font-medium rounded aspect-square w-full" onclick="addNumber('8')" type="button">8</button>
                <button class="bg-gray-100 hover:bg-gray-200 text-xl font-medium rounded aspect-square w-full" onclick="addNumber('9')" type="button">9</button>
                <button class="bg-red-500 text-white hover:bg-red-600 text-xl font-medium rounded aspect-square w-full" onclick="clearAll()" type="button">AC</button>

                <button class="bg-gray-100 hover:bg-gray-200 text-xl font-medium rounded aspect-square w-full" onclick="addNumber('4')" type="button">4</button>
                <button class="bg-gray-100 hover:bg-gray-200 text-xl font-medium rounded aspect-square w-full" onclick="addNumber('5')" type="button">5</button>
                <button class="bg-gray-100 hover:bg-gray-200 text-xl font-medium rounded aspect-square w-full" onclick="addNumber('6')" type="button">6</button>
                <button class="bg-yellow-400 text-white hover:bg-yellow-500 text-xl font-medium rounded aspect-square w-full" onclick="calculate('+')" type="button">＋</button>

                <button class="bg-gray-100 hover:bg-gray-200 text-xl font-medium rounded aspect-square w-full" onclick="addNumber('1')" type="button">1</button>
                <button class="bg-gray-100 hover:bg-gray-200 text-xl font-medium rounded aspect-square w-full" onclick="addNumber('2')" type="button">2</button>
                <button class="bg-gray-100 hover:bg-gray-200 text-xl font-medium rounded aspect-square w-full" onclick="addNumber('3')" type="button">3</button>
                <button class="bg-yellow-400 text-white hover:bg-yellow-500 text-xl font-medium rounded aspect-square w-full" onclick="calculate('*')" type="button">×</button>

                <button class="bg-gray-100 hover:bg-gray-200 text-xl font-medium rounded aspect-square w-full" onclick="addNumber('0')" type="button">0</button>
                <button class="bg-gray-100 hover:bg-gray-200 text-xl font-medium rounded aspect-square w-full" onclick="addNumber('00')" type="button">00</button>
                <button class="bg-gray-500 text-white hover:bg-gray-600 text-xl font-medium rounded aspect-square w-full" onclick="calculateTax()" type="button">Tax</button>
                <button class="bg-gray-600 text-white hover:bg-gray-700 text-xl font-medium rounded aspect-square w-full" onclick="calculateTotal()" type="button">＝</button>
            </div>
        </form>
    </div>

    <script src="js/app.js"></script>
</body>


</html>
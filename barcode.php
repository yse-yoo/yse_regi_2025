<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>バーコード対応レジ</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-4">

  <div class="max-w-lg mx-auto bg-white shadow p-4 rounded">
    <h1 class="text-xl font-bold mb-4">POSレジ（バーコード対応）</h1>

    <!-- バーコード入力欄（スキャナ用） -->
    <input type="text" id="barcodeInput" placeholder="バーコードをスキャンしてください"
      class="w-full border border-gray-300 p-2 rounded mb-3" autofocus>

    <!-- 商品情報表示 -->
    <div id="productInfo" class="mb-3 text-gray-700"></div>

    <!-- 数量入力 -->
    <input type="number" id="quantityInput" value="1" min="1"
      class="w-full border border-gray-300 p-2 rounded mb-3">

    <!-- 合計金額表示 -->
    <div class="text-right text-lg font-semibold">合計: <span id="totalDisplay">¥0</span></div>

    <!-- ボタン -->
    <div class="mt-4 flex gap-2">
      <button onclick="addToCart()" class="bg-blue-600 text-white px-4 py-2 rounded">追加</button>
      <button onclick="checkout()" class="bg-green-600 text-white px-4 py-2 rounded">精算</button>
    </div>
  </div>

  <script src="js/barcode.js"></script>
</body>
</html>

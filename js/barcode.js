// pos.js
let cart = [];

async function fetchProduct(barcode) {
    const res = await fetch('api/product_lookup.php?code=' + barcode);
    console.log(res);
    return await res.json();
}

document.getElementById("barcodeInput").addEventListener("keydown", async (e) => {
    if (e.key === "Enter") {
        const code = e.target.value.trim();
        if (!code) return;

        const data = await fetchProduct(code);
        if (data && data.name) {
            document.getElementById("productInfo").textContent = `${data.name}（¥${data.price}）`;
        } else {
            document.getElementById("productInfo").textContent = `商品が見つかりません`;
        }

        e.target.value = ""; // 入力欄をクリア
    }
});

function addToCart() {
    const info = document.getElementById("productInfo").textContent;
    const quantity = parseInt(document.getElementById("quantityInput").value);
    if (!info || quantity <= 0) return;

    const match = info.match(/（¥(\d+)）/);
    const price = match ? parseInt(match[1]) : 0;
    const total = price * quantity;

    cart.push({ name: info, quantity, total });
    updateTotal();
}

function updateTotal() {
    const sum = cart.reduce((acc, item) => acc + item.total, 0);
    document.getElementById("totalDisplay").textContent = `¥${sum}`;
}

function checkout() {
    alert("お会計ありがとうございます！");
    cart = [];
    document.getElementById("totalDisplay").textContent = `¥0`;
}

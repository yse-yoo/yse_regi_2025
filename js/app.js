let current = "";
let total = 0;
let isMultiplying = false;
let multiplyValue = 0;

/**
 * ディスプレイの値を更新する関数
 * @param {string} value - 表示する値。nullの場合はcurrentディスプレイ
 * @param {*} value 
 */
function updateDisplay(value = null) {
    const display = document.getElementById("display");
    display.value = value !== null ? value : current || "0";
}

/**
 * 数字を追加する関数
 * @param {*} num 
 */
function addNumber(num) {
    current += num.toString();
    updateDisplay();
}

/**
 * 演算子を追加する関数
 * @param {*} operator 
 */
function clearAll() {
    current = "";
    total = 0;
    multiplyValue = 0;
    isMultiplying = false;
    updateDisplay();
}

/**
 * 計算を行う関数
 * @param {*} op 
 */
function calculate(op) {
    if (op === "*") {
        multiplyValue = parseFloat(current) || 0;
        current = "";
        isMultiplying = true;
    } else if (op === "+") {
        if (isMultiplying) {
            current = (multiplyValue * (parseFloat(current) || 0)).toString();
            isMultiplying = false;
        }
        total += parseFloat(current) || 0;
        current = "";
        updateDisplay(total.toFixed(2));
    }
}

/**
 * プラス演算子を追加する関数
 */
function calculateTotal() {
    calculate("+");
}

/**
 * 税込み計算を行う関数
 */
function calculateTax() {
    if (current) {
        current = (parseFloat(current) * 1.1).toFixed(2);
        updateDisplay();
    }
    return false;
}

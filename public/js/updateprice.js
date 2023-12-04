function updateQuantity(change, index) {
    let quant = 'quantity'
    let idx = index

    let qty = quant + idx
    const quantityInput = document.getElementById(qty);
    let quantity = parseInt(quantityInput.value);
    quantity += change;

    // Ensure quantity is not negative
    if (quantity < 0) {
        quantity = 0;
    }

    quantityInput.value = quantity;
    updatePrice(idx);
    updateGrandTotal();
}

function updatePrice(index) {
    let quant = 'quantity'
    let idx = index
    let qty = quant + idx
    const pricePerUnit = 10000; // ganti berdasarkan harganya nanti
    const quantity = parseInt(document.getElementById(qty).value);
    let pstring = 'price'
    let price = pstring + idx
    const totalPrice = (pricePerUnit * quantity).toLocaleString('id-ID');

    document.getElementById(price).innerHTML = `<strong>Rp ${totalPrice}</strong>`;
}

function updateGrandTotal() {
    let grandTotal = 0;
    for(let i =1; i<=5; i++){
        let price = 'price' + i
        let total = document.getElementById(price).textContent;
        total = total.replaceAll('.' ,'')
        total = total.replace('Rp' ,'')
        total = total.replace(' ' ,'')
        gt = parseInt(total)
        grandTotal += gt;
        console.log(grandTotal)
    }
    grandTotal = grandTotal.toLocaleString('id-ID');
    document.getElementById('grandTotal').innerHTML = `<strong> Grand total: Rp ${grandTotal}</strong>`;
}
window.onload = function () {
    for (let i = 1; i <= 5; i++) {
        console.log(i)
        let qty = 'quantity' + i
        const savedQuantity = parseInt(document.getElementById(qty).value);
        console.log(qty, savedQuantity)
        if (savedQuantity) {
            console.log(qty)
            document.getElementById(qty).value = savedQuantity;
            updatePrice(i);
            updateGrandTotal();
        }
    }
};

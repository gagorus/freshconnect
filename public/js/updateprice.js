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
    let count = parseInt(document.getElementById('counter').textContent);

    let quant = 'quantity'
    let idx = index
    let qty = quant + idx

    let pstring = 'price'
    let price = pstring + idx

    let bpstring = 'baseprice'
    let bprice = bpstring + idx

    ax = document.getElementById(bprice).textContent


    let harga = parseInt(ax)
    console.log(price, ax)

    const pricePerUnit = harga; // ganti berdasarkan harganya nanti
    const quantity = parseInt(document.getElementById(qty).value);

    const totalPrice = (pricePerUnit * quantity).toLocaleString('id-ID');

    document.getElementById(price).innerHTML = `<strong>Rp ${totalPrice}</strong>`;
}

function updateGrandTotal() {
    let grandTotal = 0;
    let count = parseInt(document.getElementById('counter').textContent);
    for(let i =1; i<=count; i++){

        let price = 'price' + i
        let total = document.getElementById(price).textContent;

        total = total.replaceAll('.' ,'')
        total = total.replace('Rp' ,'')
        total = total.replace(' ' ,'')

        gt = parseInt(total)

        grandTotal += gt;

    }
    // console.log(grandTotal);
    grandTotal = grandTotal.toLocaleString('id-ID');
    document.getElementById('grandTotal').innerHTML = `<strong> Grand total: Rp ${grandTotal}</strong>`;
    updateLinkHref(grandTotal);
}

function updateLinkHref(total) {
    // var grandTotalContent = document.getElementById('grandTotal').textContent // Get the current total
    var route = "/payment/{price}";
    route = route.replace('{price}', total);
    var r = document.getElementById('buyAll');
    r.setAttribute('href',route)

}

window.onload = function () {
    let count = parseInt(document.getElementById('counter').textContent);

    for (let i = 1; i <= count; i++) {
        console.log(i)
        let qty = 'quantity' + i
        const savedQuantity = parseInt(document.getElementById(qty).value);
        if (savedQuantity) {
            // console.log(qty)
            document.getElementById(qty).value = savedQuantity;
            updatePrice(i);

        }
    }
    updateGrandTotal();
};


let applied = false;

function updateTotal() {

    let total = document.getElementById('total').textContent;

    total = total.replace(/\D/g,'')


    harga = parseInt(total)


    if (!applied){
        final = harga * 85/100
        display_harga = final.toLocaleString('id-ID');
        disc = harga - final

        document.getElementById('total').innerHTML = `<strong> Harga total: Rp ${display_harga}</strong>`;
        document.getElementById('disc').innerHTML = ` Diskon: Rp ${disc}`;
        document.getElementById('promo1').innerHTML += `<strong> (Applied)</strong>`;
        applied = true

    }
    else{
        final = harga /(85/100);
        display_harga = final.toLocaleString('id-ID');
        disc = 0
        document.getElementById('total').innerHTML = `<strong> Harga total: Rp ${display_harga}</strong>`;
        document.getElementById('disc').innerHTML = ` Diskon: Rp ${disc}`;
        let app = document.getElementById('promo1').textContent;
        app = app.replace('(Applied)', '');

        document.getElementById('promo1').innerHTML = `${app}`;
        applied = false
    }


}

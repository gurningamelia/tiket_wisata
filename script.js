function imposeMinMax(el){
    if(el.value != ""){
        if(parseInt(el.value) < parseInt(el.min)){
            el.value = el.min;
        }
        if(parseInt(el.value) > parseInt(el.max)){
            el.value = el.max;
        }
    }
}

function imposeMinMax1(el){
    if(el.value != ""){
        if(parseInt(el.value) < parseInt(el.min)){
            el.value = el.min;
        }
        if(parseInt(el.value) > parseInt(el.max)){
            el.value = el.max;
        }
    }
}

function tambah(){
    var harga = 0.0;
    var total = 0.0; 
    var diskon = 0.0;
    var jumlah1=parseFloat(document.register.jmlh_pengunjung.value);
    var jumlah2=parseFloat(document.register.pengunjung_anak.value);
    var twisata = (document.register.tempat_wisata.value);
    
    if (twisata == 1){
        harga = 20000;
    }
    else if (twisata == 2){
        harga = 30000;
    }
    else{
    harga = 10000;
    }
    
    anak = harga * jumlah2; 
    diskon = 0.4 * anak; 
    totalanak = anak - diskon; 
    totalumum = harga * jumlah1;
    total = totalanak + totalumum;
    document.getElementById("tampilharga").innerHTML = "Rp. "+ harga; 
    document.getElementById("tampildiskon").innerHTML = "(Rp. "+ diskon +")"; 
    document.getElementById("tampiltotal").innerHTML = "Rp. "+ total;
}

    
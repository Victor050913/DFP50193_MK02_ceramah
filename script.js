function kiraJumlah() {
    let harga = 2500;
    let slot = document.getElementById("slot").value;

    if (slot === "" || slot <= 0) {
        document.getElementById("jumlah").innerHTML =
            "Jumlah Yuran: RM 0.00";
        return;
    }

    let jumlah = harga * slot;
    document.getElementById("jumlah").innerHTML =
        "Jumlah Yuran: RM " + jumlah.toFixed(2);
}

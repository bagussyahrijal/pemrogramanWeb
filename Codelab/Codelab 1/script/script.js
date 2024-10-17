function jumlahAngka(){
    const angka1 = parseFloat(document.getElementById('angka1').value)
    const angka2 = parseFloat(document.getElementById('angka2').value)

    if (isNaN(angka1) || isNaN(angka2)){
        alert("Tolong Diisi Angkanya")
        return;
    }

    sum = angka1 + angka2

    alert(`Hasilnya adalah: ${sum}`)
}
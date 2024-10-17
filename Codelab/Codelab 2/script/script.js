function validateForm(){
    inputNama = document.getElementById('nama').value;
    inputEmail = document.getElementById('email').value;
    inputAlamat = document.getElementById('alamat').value;

    if(inputNama == "" || inputEmail == "" || inputAlamat == ""){
        alert("Harap isi semua yo rek")
    }

}
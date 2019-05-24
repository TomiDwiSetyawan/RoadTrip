var search = document.getElementById('search');
var tombolCari = document.getElementById('tombol-cari');
var tampil  = document.getElementById('tampil');

// tombolCari.addEventListener('click', function() {
//     alert('berhasil');
// });
search.addEventListener('keyup', function(){
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(){
        if( xhr.readyState == 4 && xhr.status == 200 ){
            tampil.innerHTML = xhr.responseText;
        }
    }

    xhr.open('GET', 'coba.txt', true);
    xhr.send();
});

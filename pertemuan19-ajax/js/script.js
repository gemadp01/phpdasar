// ambil element yang dibutuhkan
let keyword = document.getElementById('keyword');
let tombolCari = document.getElementById('tombolCari');
let container = document.getElementById('container');

tombolCari.style.display = 'none';

// tambahkan trigger pada kolom pencarian
keyword.addEventListener('keyup', function () {
  // buat object ajax
  let xhr = new XMLHttpRequest();

  // cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  // eksekusi ajax
  xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
  xhr.send();
});

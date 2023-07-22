$(document).ready(function () {
  $('#tombolCari').hide();

  $('#keyword').on('keyup', function () {
    // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());

    $('.loader').show();

    $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function (data) {
      $('.loader').hide();
      $('#container').html(data);
    });
  });
});

$(function(){
    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('tambah data mahasiswa');
    });
    $('.tampilModalUbah').on('click', function(){
        $('#formModalLabel').html('ubah data mahasiswa');
        $('.modal-footer button[type=submit]').html('ubah data');
        $('.modal-body form').attr('action', 'http://localhost/MVC/public/mahasiswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/MVC/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
                // console.log(data);
            }
        });
    });
});
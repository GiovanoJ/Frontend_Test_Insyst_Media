$(document).ready(function() {

    new DataTable('#productTable', {
        language: {
            url: '//cdn.datatables.net/plug-ins/2.1.8/i18n/id.json'
        }
    });

    $('#saveBtn').on('click', function() {
        const form = $('#productForm')[0];

        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        const name = $('input[name="name"]').val();
        const price = $('input[name="price"]').val();
        const stock = $('input[name="stock"]').val();

        console.log('Data produk:', { name, price, stock });

        $('#addProductModal').modal('hide');
        form.reset();

        alert('Produk berhasil ditambahkan!');
    });

    $('#addProductModal').on('hidden.bs.modal', function() {
        $('#productForm')[0].reset();
    });

});

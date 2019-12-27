$(document).ready(function () {
    $('.change-status').click(function () {
        Swal.fire({
            title: 'có muốn xóa không?',
            text: "Bạn chắn với điều này chứ!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Có',
            cancelButtonText: 'Không'
        }).then((result) => {
            if (result.value) {
                window.location.href = $(this).data('href');
            }
        });
    });
});

$(document).ready(function () {
    $('.force-delete').click(function () {
        Swal.fire({
            title: 'Có muốn xóa không?',
            text: "Bạn sẽ không khôi phục được thao tác này, bạn chắn với điều này chứ!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Có',
            cancelButtonText: 'Không'
        }).then((result) => {
            if (result.value) {
                window.location.href = $(this).data('href');
            }
        });
    });
});
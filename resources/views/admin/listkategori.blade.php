@extends('layouts.main')

@section('content')
<!-- BEGIN: Content -->
<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">
        <!-- BEGIN: Breadcrumb -->
        <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Kategori</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">List Kategori</a> </div>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Notifications -->
        <div class="intro-x dropdown relative mr-auto sm:mr-6">
            <div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i data-feather="bell" class="notification__icon"></i> </div>
            <div class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 -ml-10 sm:ml-0">
                <div class="notification-content__box dropdown-box__content box">
                    <div class="notification-content__title">Notifications</div>
                    <div class="cursor-pointer relative flex items-center ">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-12.jpg') }}">
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                                <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-4.jpg') }}">
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                                <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-8.jpg') }}">
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Kate Winslet</a>
                                <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-1.jpg') }}">
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Brad Pitt</a>
                                <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-2.jpg') }}">
                            <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a>
                                <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">06:05 AM</div>
                            </div>
                            <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Notifications -->
        <!-- BEGIN: Account Menu -->
        <div class="intro-x dropdown w-8 h-8 relative">
            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('dist/images/profile-1.jpg') }}">
            </div>
            <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                <div class="dropdown-box__content box bg-theme-38 text-white">
                    <div class="p-4 border-b border-theme-40">
                        <div class="font-medium">Johnny Depp</div>
                        <div class="text-xs text-theme-41">Backend Engineer</div>
                    </div>
                    <div class="p-2">
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                    </div>
                    <div class="p-2 border-t border-theme-40">
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>
    <!-- END: Top Bar -->
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            List Kategori Produk
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="button text-white bg-theme-1 shadow-md mr-2 tambah-kategori"> Tambah Produk </button>
            <div class="dropdown relative ml-auto sm:ml-0">
                <button class="dropdown-toggle button px-2 box text-gray-700">
                    <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
                </button>
                <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                    <div class="dropdown-box__content box p-2">
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="file-plus" class="w-4 h-4 mr-2"></i> Buat Ketegori baru </a>
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="users" class="w-4 h-4 mr-2"></i> Cek Produk Kasir </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN: Datatable -->
    <div class="intro-y datatable-wrapper box p-5 mt-5">
        <table id="data-table" class="table table-report table-report--bordered display datatable w-full">
            <thead>
                <tr>
                    <th class="border-b-2 text-center whitespace-no-wrap">ID</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">NAMA</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">DESKRIPSI</th>
                    <th class="border-b-2 text-center whitespace-no-wrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <!-- END: Datatable -->
    <!-- Modal Tambah -->
    <div class="modal" id="header-footer-modal-preview">
        <div class="modal__content">
            <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">
                    Form Tambah Kategori
                </h2>
                <div class="dropdown relative sm:hidden">
                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i> </a>
                    <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                        <div class="dropdown-box__content box p-2">
                            <a href="javascript:;" class="flex items-center p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 grid grid-cols-12 gap-4 row-gap-3">
                <div class="col-span-12 sm:col-span-12">
                    <label>Nama Kategori</label>
                    <input type="text" class="input w-full border mt-2 flex-1 ini-nama" placeholder="Makanan Ringan">
                </div>
                <div class="col-span-12 sm:col-span-12">
                    <label>Deskripsi</label>
                    <textarea class="input w-full border mt-2 ini-deskripsi" name="comment" placeholder="Ini Makanan Ringan" minlength="10" required></textarea>
                </div>
            </div>
            <div class="px-5 py-3 text-right border-t border-gray-200">
                <button type="button" data-dismiss="modal" class="button w-20 border text-gray-700 mr-1">Batalkan</button>
                <button type="button" class="button w-20 bg-theme-1 text-white ini-simpan">Simpan</button>
            </div>
        </div>
    </div>
    <!-- End Modal Tambah -->
    <!-- Modal Edit -->
    <div class="modal" id="header-footer-modal-preview-edit">
        <div class="modal__content">
            <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">
                    Form Tambah Kategori
                </h2>
                <div class="dropdown relative sm:hidden">
                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700"></i> </a>
                    <div class="dropdown-box mt-5 absolute w-40 top-0 right-0 z-20">
                        <div class="dropdown-box__content box p-2">
                            <a href="javascript:;" class="flex items-center p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 grid grid-cols-12 gap-4 row-gap-3">
                <input type="text" class="input w-full border mt-2 flex-1 ini-id" placeholder="Makanan Ringan" hidden>
                <div class="col-span-12 sm:col-span-12">
                    <label>Nama Kategori</label>
                    <input type="text" class="input w-full border mt-2 flex-1 nama-edit" placeholder="Makanan Ringan">
                </div>
                <div class="col-span-12 sm:col-span-12">
                    <label>Deskripsi</label>
                    <textarea class="input w-full border mt-2 deskripsi-edit" name="comment" placeholder="Ini Makanan Ringan" minlength="10" required></textarea>
                </div>
            </div>
            <div class="px-5 py-3 text-right border-t border-gray-200">
                <button type="button" data-dismiss="modal" class="button w-20 border text-gray-700 mr-1">Batalkan</button>
                <button type="button" class="button w-20 bg-theme-1 text-white ini-update">Simpan</button>
            </div>
        </div>
    </div>
    <!-- End Modal Edit -->
</div>
<!-- END: Content -->
</div>
<!-- BEGIN: JS Assets-->
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
<script src="{{ asset('dist/js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>
<script>
    $(document).ready(function() {
        // Fungsi untuk mendapatkan nilai cookie
        function getCookie(name) {
            var cookieName = name + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var cookieArray = decodedCookie.split(';');

            for (var i = 0; i < cookieArray.length; i++) {
                var cookie = cookieArray[i];
                while (cookie.charAt(0) === ' ') {
                    cookie = cookie.substring(1);
                }
                if (cookie.indexOf(cookieName) === 0) {
                    return cookie.substring(cookieName.length, cookie.length);
                }
            }
        }

        var token = getCookie('token');

        if (token) {
            // Token ada dalam cookie, lakukan tindakan yang sesuai
            console.log('Token:', token);
        } else {
            window.location.href = "{{ route('login') }}";
        }

        // Tombol registrasi
        $(".tambah-kategori").click(function() {
            // Show the modal
            $("#header-footer-modal-preview").modal("show");
        });

        var url = 'http://127.0.0.1:8000/api/kategori/list';
        fetch(url, {
            method: 'GET',
            headers: {
                'Authorization': 'Bearer ' + token
            }
        }).then(response => response.json()).then(data => {
                // Panggil fungsi untuk mengisi data ke dalam tbody DataTable
                populateDataTable(data);
        }).catch(error => {
            console.error('Error:', error);
        });

        function populateDataTable(data) {
            var tableBody = $("#data-body");

            // Bersihkan isi tbody sebelum mengisi dengan data baru
            tableBody.empty();

            var rowDataArray = []; // Variabel untuk menyimpan objek baris

            // Perulangan menggunakan $.each()
            $.each(data, function(index, item) {
                for (let i = 0; i < item.length; i++) {
                    // // Create an object with the desired properties
                    var rowData = {
                        id: item[i].id,
                        name: item[i].name,
                        desc: item[i].desc,
                    };

                    // Push the object to the data array
                    rowDataArray.push(rowData);
                }
            });

            var dataTable = $('#data-table').DataTable();
            if (dataTable) {
                // Destroy DataTable
                dataTable.destroy();
            }

            // Initialize DataTable
            var table = $('#data-table').DataTable({
                data: rowDataArray,
                columns: [
                    { data: 'id', className: 'text-center' },
                    { data: 'name', className: 'text-center' },
                    { data: 'desc', className: 'text-center' },
                    {
                        data: null,
                        render: function (data, type, row) {
                            // Create action buttons
                            var editBtn = '<button class="btn btn-primary btn-edit" data-id="' + data.id + '" data-name="' + data.name + '" data-desc="' + data.desc + '">Edit</button> ||';
                            var deleteBtn = '<button class="btn btn-danger btn-delete" data-id="' + data.id + '">Delete</button>';

                            // Combine the buttons
                            var actions = editBtn + ' ' + deleteBtn;
                            return actions;
                        }
                    }
                ]
            });

            // Tombol simpan kategori
            $(".ini-simpan").click(function() {
                // Show the modal
                event.preventDefault(); // Prevent default form submission

                // Get form data
                var nama = $(".ini-nama").val();
                var deskripsi = $(".ini-deskripsi").val();

                // Send data using Ajax
                $.ajax({
                        url: "http://127.0.0.1:8000/api/kategori/tambah-baru",
                        type: "POST",
                        beforeSend: function(xhr) {
                        xhr.setRequestHeader('Authorization', 'Bearer ' + token);
                    },
                    data: {
                        name: nama,
                        desc: deskripsi
                    },
                    success: function(response) {
                        // Success response, show success SweetAlert notification
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message, // Assuming the API returns a 'message' field
                            timer: 3000,
                            showCancelButton: false,
                            showConfirmButton: false
                        }).then (function() {
                            location.reload();
                        });
                    },
                    error: function(xhr, status, error) {
                    // Show error alert
                    swal("Error!", "An error occurred while saving the product.", "error");
                    }
                });
            });

            // Tombol update kategori
            $(".ini-update").click(function() {
                var id = $('.ini-id').val();
                // Ambil nilai input
                var nama = $('.nama-edit').val();
                var deskripsi = $('.deskripsi-edit').val();

                console.log(nama)
                console.log(deskripsi)

                // Kirim permintaan pembaruan produk ke API
                $.ajax({
                    url: "http://127.0.0.1:8000/api/kategori/update-data/" + id,
                    type: "PUT",
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('Authorization', 'Bearer ' + token);
                    },
                    data: {
                        name: nama,
                        desc: deskripsi,
                     },
                    success: function(response) {
                        // Tampilkan SweetAlert berhasil
                        Swal.fire({
                            title: 'Berhasil',
                            text: 'Data kategori berhasil Update.',
                            icon: 'success'
                        }).then(function() {
                            // Lakukan tindakan lain setelah penghapusan berhasil
                            // Misalnya, muat ulang halaman atau perbarui tampilan data
                            location.reload();
                        });
                    },
                    error: function(xhr, status, error) {
                        // Tampilkan pesan error dengan SweetAlert
                        swal("Error!", "Terjadi kesalahan saat memperbarui produk.", "error");
                    }
                });
            });

            // Handle button click events
            $('#data-table').on('click', '.btn-edit', function() {
                $("#header-footer-modal-preview-edit").modal("show");
                var id = $(this).attr("data-id");
                var name = $(this).attr("data-name");
                var desc = $(this).attr("data-desc");
                // Handle edit action
                console.log('Edit clicked for ID:', id);
                $('.ini-id').val(id);
                $('.nama-edit').val(name);
                $('.deskripsi-edit').val(desc);
            });

            $('#data-table').on('click', '.btn-delete', function() {
                var id = $(this).attr("data-id");
                // Handle delete action
                console.log('Delete clicked for ID:', id);

                // Tampilkan SweetAlert konfirmasi hapus
                Swal.fire({
                    title: 'Konfirmasi',
                    text: 'Apakah Anda yakin ingin menghapus data kategori produk ini ini?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus',
                    cancelButtonText: 'Batal'
                }).then(function(result) {
                if (result.isConfirmed) {
                    // Jika pengguna mengonfirmasi hapus, lakukan permintaan Ajax
                    $.ajax({
                    url: 'http://127.0.0.1:8000/api/kategori/hapus-data/' + id,
                    type: 'DELETE',
                    headers: {
                        'Authorization': 'Bearer ' + token
                    },
                    success: function(response) {
                        // Tampilkan SweetAlert berhasil
                        Swal.fire({
                            title: 'Berhasil',
                            text: 'Data kategori berhasil dihapus.',
                            icon: 'success'
                        }).then(function() {
                        // Lakukan tindakan lain setelah penghapusan berhasil
                        // Misalnya, muat ulang halaman atau perbarui tampilan data
                        location.reload();
                        });
                    },
                    error: function(xhr, status, error) {
                        // Tampilkan SweetAlert gagal
                        Swal.fire({
                        title: 'Error',
                        text: 'Terjadi kesalahan saat menghapus data.',
                        icon: 'error'
                        });
                    }
                    });
                }
                });
            });
        }
    });
</script>
<!-- END: JS Assets-->
</body>
</html>
@endsection

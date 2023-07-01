@extends('layouts.main')

@section('content')
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="{{ route('admin.product') }}" class="">Produk</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Tambah Produk Baru</a> </div>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Notifications -->
            <div class="intro-x dropdown relative mr-auto sm:mr-6">
                <div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i data-feather="bell" class="notification__icon"></i> </div>
                <div class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 -ml-10 sm:ml-0">
                    <div class="notification-content__box dropdown-box__content box">
                        <div class="notification-content__title">Notifications</div>
                        <div class="cursor-pointer relative flex items-center ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-14.jpg') }}">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Sean Connery</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-2.jpg') }}">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Leonardo DiCaprio</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-6.jpg') }}">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Robert De Niro</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">06:05 AM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-11.jpg') }}">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Brad Pitt</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-11.jpg') }}">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Denzel Washington</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8 relative">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                    <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('dist/images/profile-14.jpg') }}">
                </div>
                <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                    <div class="dropdown-box__content box bg-theme-38 text-white">
                        <div class="p-4 border-b border-theme-40">
                            <div class="font-medium">Sean Connery</div>
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
        <div class="flex items-center mt-8">
            <h2 class="intro-y text-lg font-medium mr-auto">
                Form Tambah Produk Baru
            </h2>
        </div>
        <!-- BEGIN: Wizard Layout -->
        <div class="intro-y box py-10 sm:py-5 mt-5">
            <div class="px-5 sm:px-20 mt-5 pt-5">
                <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Nama Produk</div>
                        <input type="text" class="input w-full border flex-1 ini-name" placeholder="example@gmail.com">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Kategori</div>
                        <select id="mySelect" class="input w-full border flex-1"></select>
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Harga Beli</div>
                        <input type="text" class="input w-full border flex-1 ini-modal" placeholder="Important Meeting">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Harga Jual</div>
                        <input type="text" class="input w-full border flex-1 ini-price" placeholder="Job, Work, Documentation">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Stock</div>
                        <input type="text" class="input w-full border flex-1 ini-stock" placeholder="Job, Work, Documentation">
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Satuan</div>
                        <select class="input w-full border flex-1 ini-satuan">
                            <option value="pcs"> PCS </option>
                            <option value="lusin"> Lusin </option>
                            <option value="karton"> Karton </option>
                        </select>
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-12">
                        <div class="mb-2">Deskripsi</div>
                        <textarea class="input w-full border mt-2 ini-deskripsi" name="comment" placeholder="Type your comments" minlength="10" required></textarea>
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Status Produk</div>
                        <select class="input w-full border flex-1 ini-status">
                            <option value="1"> Aktifkan Produk </option>
                            <option value="1"> Non Aktifkan Produk </option>
                        </select>
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Tampilkan Produk di kasir</div>
                        <select class="input w-full border flex-1 ini-is_jual">
                            <option value="1"> Tampilkan </option>
                            <option value="1"> Sembunyikan </option>
                        </select>
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-12">
                        <div class="p-5" id="single-file-upload">
                            <div class="preview">
                                <form data-single="true" action="/file-upload" class="dropzone border-gray-200 border-dashed">
                                    <div class="fallback">
                                        <input class="ini-gambar" name="gambar" type="file" />
                                    </div>
                                    <div class="dz-message" data-dz-message>
                                        <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                        <div class="text-gray-600"> This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded. </div>
                                    </div>
                                </form>
                            </div>
                            <div class="source-code hidden">
                                <button data-target="#copy-single-file-upload" class="copy-code button button--sm border flex items-center text-gray-700"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code </button>
                                <div class="overflow-y-auto h-64 mt-3">
                                    <pre class="source-preview" id="copy-single-file-upload"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagform data-single=&quot;true&quot; action=&quot;/file-upload&quot; class=&quot;dropzone border-gray-200 border-dashed&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;fallback&quot;HTMLCloseTag HTMLOpenTaginput name=&quot;file&quot; type=&quot;file&quot; /HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;dz-message&quot; data-dz-messageHTMLCloseTag HTMLOpenTagdiv class=&quot;text-lg font-medium&quot;HTMLCloseTagDrop files here or click to upload.HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;text-gray-600&quot;HTMLCloseTag This is just a demo dropzone. Selected files are HTMLOpenTagspan class=&quot;font-medium&quot;HTMLCloseTagnotHTMLOpenTag/spanHTMLCloseTag actually uploaded. HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/formHTMLCloseTag </code> </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                        {{-- <button class="button w-24 justify-center block bg-gray-200 text-gray-600">Previous</button> --}}
                        <button class="button w-24 justify-center block bg-theme-1 text-white ml-2 simpan-produk">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Wizard Layout -->
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

        // Mendapatkan referensi elemen <select>
        var select = $("#mySelect");

        // Melakukan permintaan Ajax
        $.ajax({
            url: "http://127.0.0.1:8000/api/kategori/list",
            method: "GET",
            headers: {
                "Authorization": "Bearer " + token
            },
            success: function(data) {
                // Menghapus semua opsi saat ini dari elemen <select>
                select.empty();

                // Iterasi melalui data dan membuat opsi baru untuk setiap entri
                $.each(data, function(index, item) {
                    for (let i = 0; i < item.length; i++) {
                        select.append('<option value="' + item[i].id + '">' + item[i].name + '</option>');
                    }
                });
            },
            error: function(xhr, status, error) {
                // Penanganan kesalahan jika diperlukan
            }
        });

        $("#simpan-produk").on("click", function(e) {
            e.preventDefault();

            var namaProduk = $(".ini-name").val();
            var kategori = $("#mySelect").val();
            var hargaBeli = $(".ini-modal").val();
            var hargaJual = $(".ini-price").val();
            var stock = $(".ini-stock").val();
            var satuan = $(".ini-satuan").val();
            var deskripsi = $(".ini-deskripsi").val();
            var statusProduk = $(".ini-status").val();
            var tampilkanProduk = $(".ini-is_jual").val();
            var gambar = $(".ini-gambar").prop("files")[0];

            var formData = new FormData();
            formData.append("name", namaProduk);
            formData.append("category_id", kategori);
            formData.append("modal", hargaBeli);
            formData.append("price", hargaJual);
            formData.append("stock", stock);
            formData.append("satuan", satuan);
            formData.append("desc", deskripsi);
            formData.append("is_active", statusProduk);
            formData.append("is_jual", tampilkanProduk);
            formData.append("gambar", gambar);

            $.ajax({
                url: "http://127.0.0.1:8000/api/produk/tambah-baru",
                method: "POST",
                headers: {
                    "Authorization": "Bearer " + token
                },
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    window.location.href = "{{ route('admin.product') }}";
                },
                error: function(xhr, status, error) {
                    console.log(error);
                    // Error response, show error SweetAlert notification
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: result.message, // Assuming the API returns a 'message' field
                    });
                }
            });
        });
    });
</script>
<!-- END: JS Assets-->
</body>
</html>
@endsection

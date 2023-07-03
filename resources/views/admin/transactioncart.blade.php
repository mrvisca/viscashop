@extends('layouts.main')

@section('content')
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar">
            <!-- BEGIN: Breadcrumb -->
            <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Dashboard</a> </div>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Notifications -->
            <div class="intro-x dropdown relative mr-auto sm:mr-6">
                <div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i data-feather="bell" class="notification__icon"></i> </div>
                <div class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 -ml-10 sm:ml-0">
                    <div class="notification-content__box dropdown-box__content box">
                        <div class="notification-content__title">Notifications</div>
                        <div class="cursor-pointer relative flex items-center ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-13.jpg') }}">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Hugh Jackman</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-15.jpg') }}">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Sylvester Stallone</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-7.jpg') }}">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">John Travolta</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-1.jpg') }}">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-6.jpg') }}">
                                <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Keanu Reeves</a>
                                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                </div>
                                <div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8 relative">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                    <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('dist/images/profile-6.jpg') }}">
                </div>
                <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                    <div class="dropdown-box__content box bg-theme-38 text-white">
                        <div class="p-4 border-b border-theme-40">
                            <div class="font-medium">Hugh Jackman</div>
                            <div class="text-xs text-theme-41">Frontend Engineer</div>
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
                Point of Sale
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <a href="javascript:;" data-toggle="modal" data-target="#new-order-modal" class="button text-white bg-theme-1 shadow-md mr-2">New Order</a>
                <div class="pos-dropdown dropdown relative ml-auto sm:ml-0">
                    <button class="dropdown-toggle button px-2 box text-gray-700">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="chevron-down"></i> </span>
                    </button>
                    <div class="pos-dropdown__dropdown-box dropdown-box mt-10 absolute top-0 right-0 z-20">
                        <div class="dropdown-box__content box p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="activity" class="w-4 h-4 mr-2"></i> <span class="truncate">INV-0206020 - Denzel Washington</span> </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="activity" class="w-4 h-4 mr-2"></i> <span class="truncate">INV-0206022 - Leonardo DiCaprio</span> </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="activity" class="w-4 h-4 mr-2"></i> <span class="truncate">INV-0206021 - Tom Cruise</span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
            <!-- BEGIN: Item List -->
            <div class="intro-y col-span-12 lg:col-span-8">
                <div class="lg:flex intro-y">
                    <div class="relative text-gray-700">
                        <input type="text" class="input input--lg w-full lg:w-64 box pr-10 placeholder-theme-13" placeholder="Search item...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-5 mt-5 kategori">
                    {{-- <div class="col-span-12 sm:col-span-4 xxl:col-span-3 box p-5 cursor-pointer zoom-in">
                        <div class="font-medium text-base">Soup</div>
                        <div class="text-gray-600">5 Items</div>
                    </div>
                    <div class="col-span-12 sm:col-span-4 xxl:col-span-3 box bg-theme-1 p-5 cursor-pointer zoom-in">
                        <div class="font-medium text-base text-white">Pancake & Toast</div>
                        <div class="text-theme-25">8 Items</div>
                    </div>
                    <div class="col-span-12 sm:col-span-4 xxl:col-span-3 box p-5 cursor-pointer zoom-in">
                        <div class="font-medium text-base">Pasta</div>
                        <div class="text-gray-600">4 Items</div>
                    </div>
                    <div class="col-span-12 sm:col-span-4 xxl:col-span-3 box p-5 cursor-pointer zoom-in">
                        <div class="font-medium text-base">Waffle</div>
                        <div class="text-gray-600">3 Items</div>
                    </div>
                    <div class="col-span-12 sm:col-span-4 xxl:col-span-3 box p-5 cursor-pointer zoom-in">
                        <div class="font-medium text-base">Snacks</div>
                        <div class="text-gray-600">8 Items</div>
                    </div>
                    <div class="col-span-12 sm:col-span-4 xxl:col-span-3 box p-5 cursor-pointer zoom-in">
                        <div class="font-medium text-base">Deserts</div>
                        <div class="text-gray-600">8 Items</div>
                    </div> --}}
                </div>
                <div class="grid grid-cols-12 gap-5 mt-5 pt-5 border-t border-theme-5 produk-view">
                    {{-- <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal" class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-3">
                        <div class="box rounded-md p-3 relative zoom-in">
                            <div class="flex-none pos-image relative block">
                                <div class="pos-image__preview image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('dist/images/food-beverage-9.jpg') }}">
                                </div>
                            </div>
                            <div class="block font-medium text-center truncate mt-3">Spaghetti Fettucine Aglio with Beef Bacon</div>
                        </div>
                    </a>
                    <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal" class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-3">
                        <div class="box rounded-md p-3 relative zoom-in">
                            <div class="flex-none pos-image relative block">
                                <div class="pos-image__preview image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('dist/images/food-beverage-2.jpg') }}">
                                </div>
                            </div>
                            <div class="block font-medium text-center truncate mt-3">Milkshake</div>
                        </div>
                    </a>
                    <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal" class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-3">
                        <div class="box rounded-md p-3 relative zoom-in">
                            <div class="flex-none pos-image relative block">
                                <div class="pos-image__preview image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('dist/images/food-beverage-15.jpg') }}">
                                </div>
                            </div>
                            <div class="block font-medium text-center truncate mt-3">Fried/Grilled Banana</div>
                        </div>
                    </a>
                    <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal" class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-3">
                        <div class="box rounded-md p-3 relative zoom-in">
                            <div class="flex-none pos-image relative block">
                                <div class="pos-image__preview image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('dist/images/food-beverage-6.jpg') }}">
                                </div>
                            </div>
                            <div class="block font-medium text-center truncate mt-3">Ultimate Burger</div>
                        </div>
                    </a>
                    <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal" class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-3">
                        <div class="box rounded-md p-3 relative zoom-in">
                            <div class="flex-none pos-image relative block">
                                <div class="pos-image__preview image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('dist/images/food-beverage-14.jpg') }}">
                                </div>
                            </div>
                            <div class="block font-medium text-center truncate mt-3">Virginia Cheese Wedges</div>
                        </div>
                    </a>
                    <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal" class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-3">
                        <div class="box rounded-md p-3 relative zoom-in">
                            <div class="flex-none pos-image relative block">
                                <div class="pos-image__preview image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('dist/images/food-beverage-13.jpg') }}">
                                </div>
                            </div>
                            <div class="block font-medium text-center truncate mt-3">Virginia Cheese Fries</div>
                        </div>
                    </a>
                    <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal" class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-3">
                        <div class="box rounded-md p-3 relative zoom-in">
                            <div class="flex-none pos-image relative block">
                                <div class="pos-image__preview image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('dist/images/food-beverage-10.jpg') }}">
                                </div>
                            </div>
                            <div class="block font-medium text-center truncate mt-3">Spaghetti Fettucine Aglio with Smoked Salmon</div>
                        </div>
                    </a>
                    <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal" class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-3">
                        <div class="box rounded-md p-3 relative zoom-in">
                            <div class="flex-none pos-image relative block">
                                <div class="pos-image__preview image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" src="{{ asset('dist/images/food-beverage-1.jpg') }}">
                                </div>
                            </div>
                            <div class="block font-medium text-center truncate mt-3">Vanilla Latte</div>
                        </div>
                    </a> --}}
                </div>
            </div>
            <!-- END: Item List -->
            <!-- BEGIN: Ticket -->
            <div class="col-span-12 lg:col-span-4">
                <div class="intro-y pr-1">
                    <div class="box p-2">
                        <div class="pos__tabs nav-tabs justify-center flex"> <a data-toggle="tab" data-target="#ticket" href="javascript:;" class="flex-1 py-2 rounded-md text-center active">Keranjang</a> <a data-toggle="tab" data-target="#details" href="javascript:;" class="flex-1 py-2 rounded-md text-center">Details</a> </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-content__pane active" id="ticket">
                        <div class="pos__ticket box p-2 mt-5 item-list">
                            {{-- <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal" class="flex items-center p-3 cursor-pointer transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                <div class="pos__ticket__item-name truncate mr-1">Spaghetti Fettucine Aglio with Beef Bacon</div>
                                <div class="text-gray-600">x 1</div>
                                <i data-feather="edit" class="w-4 h-4 text-gray-600 ml-2"></i>
                                <div class="ml-auto">$112</div>
                            </a>
                            <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal" class="flex items-center p-3 cursor-pointer transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                <div class="pos__ticket__item-name truncate mr-1">Milkshake</div>
                                <div class="text-gray-600">x 1</div>
                                <i data-feather="edit" class="w-4 h-4 text-gray-600 ml-2"></i>
                                <div class="ml-auto">$150</div>
                            </a>
                            <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal" class="flex items-center p-3 cursor-pointer transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                <div class="pos__ticket__item-name truncate mr-1">Fried/Grilled Banana</div>
                                <div class="text-gray-600">x 1</div>
                                <i data-feather="edit" class="w-4 h-4 text-gray-600 ml-2"></i>
                                <div class="ml-auto">$58</div>
                            </a>
                            <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal" class="flex items-center p-3 cursor-pointer transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                <div class="pos__ticket__item-name truncate mr-1">Ultimate Burger</div>
                                <div class="text-gray-600">x 1</div>
                                <i data-feather="edit" class="w-4 h-4 text-gray-600 ml-2"></i>
                                <div class="ml-auto">$111</div>
                            </a>
                            <a href="javascript:;" data-toggle="modal" data-target="#add-item-modal" class="flex items-center p-3 cursor-pointer transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">
                                <div class="pos__ticket__item-name truncate mr-1">Virginia Cheese Wedges</div>
                                <div class="text-gray-600">x 1</div>
                                <i data-feather="edit" class="w-4 h-4 text-gray-600 ml-2"></i>
                                <div class="ml-auto">$98</div>
                            </a> --}}
                        </div>
                        <div class="box p-5 mt-5">
                            <div class="flex">
                                <div class="mr-auto">Subtotal</div>
                                <div>$250</div>
                            </div>
                            <div class="flex mt-4">
                                <div class="mr-auto">Discount</div>
                                <div class="text-theme-6">-$20</div>
                            </div>
                            <div class="flex mt-4">
                                <div class="mr-auto">Tax</div>
                                <div>15%</div>
                            </div>
                            <div class="flex mt-4 pt-4 border-t border-gray-200">
                                <div class="mr-auto font-medium text-base">Charge</div>
                                <div class="font-medium text-base">$220</div>
                            </div>
                        </div>
                        <div class="flex mt-5">
                            <button class="button w-32 border border-gray-400 text-gray-600">Clear Items</button>
                            <button class="button w-32 text-white bg-theme-1 shadow-md ml-auto">Charge</button>
                        </div>
                    </div>
                    <div class="tab-content__pane" id="details">
                        <div class="box p-5 mt-5">
                            <div class="flex items-center border-b pb-5">
                                <div class="">
                                    <div class="text-gray-600">Time</div>
                                    <div>02/06/20 02:10 PM</div>
                                </div>
                                <i data-feather="clock" class="w-4 h-4 text-gray-600 ml-auto"></i>
                            </div>
                            <div class="flex items-center border-b py-5">
                                <div class="">
                                    <div class="text-gray-600">Customer</div>
                                    <div>Keanu Reeves</div>
                                </div>
                                <i data-feather="user" class="w-4 h-4 text-gray-600 ml-auto"></i>
                            </div>
                            <div class="flex items-center border-b py-5">
                                <div class="">
                                    <div class="text-gray-600">People</div>
                                    <div>3</div>
                                </div>
                                <i data-feather="users" class="w-4 h-4 text-gray-600 ml-auto"></i>
                            </div>
                            <div class="flex items-center pt-5">
                                <div class="">
                                    <div class="text-gray-600">Table</div>
                                    <div>21</div>
                                </div>
                                <i data-feather="mic" class="w-4 h-4 text-gray-600 ml-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Ticket -->
        </div>
        <!-- BEGIN: New Order Modal -->
        <div class="modal" id="new-order-modal">
            <div class="modal__content">
                <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">
                        New Order
                    </h2>
                </div>
                <div class="p-5 grid grid-cols-12 gap-4 row-gap-3">
                    <div class="col-span-12">
                        <label>Name</label>
                        <input type="text" class="input w-full border mt-2 flex-1" placeholder="Customer name">
                    </div>
                    <div class="col-span-12">
                        <label>Table</label>
                        <input type="text" class="input w-full border mt-2 flex-1" placeholder="Customer table">
                    </div>
                    <div class="col-span-12">
                        <label>Number of People</label>
                        <input type="text" class="input w-full border mt-2 flex-1" placeholder="People">
                    </div>
                </div>
                <div class="px-5 py-3 text-right border-t border-gray-200">
                    <button type="button" data-dismiss="modal" class="button w-32 border text-gray-700 mr-1">Cancel</button>
                    <button type="button" class="button w-32 bg-theme-1 text-white">Create Ticket</button>
                </div>
            </div>
        </div>
        <!-- END: New Order Modal -->
        <!-- BEGIN: Add Item Modal -->
        <div class="modal" id="add-item-modal">
            <div class="modal__content">
                <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto" id="item-name">
                    </h2>
                </div>
                <div class="p-5 grid grid-cols-12 gap-4 row-gap-3">
                    <div class="col-span-12">
                        <label>Quantity</label>
                        <div class="flex mt-2 flex-1">
                            <button type="button" class="button w-12 border bg-gray-200 text-gray-600 mr-1">-</button>
                            <input type="text" class="input w-full border text-center" placeholder="Item quantity" value="2">
                            <button type="button" class="button w-12 border bg-gray-200 text-gray-600 ml-1">+</button>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <label>Notes</label>
                        <textarea class="input w-full border mt-2 flex-1" placeholder="Item notes"></textarea>
                    </div>
                </div>
                <div class="px-5 py-3 text-right border-t border-gray-200">
                    <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
                    <button type="button" class="button w-24 bg-theme-1 text-white">Add Item</button>
                </div>
            </div>
        </div>
        <!-- END: Add Item Modal -->
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
        var select = $(".kategori");

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
                        select.append('<div class="col-span-12 sm:col-span-4 xxl:col-span-3 box p-5 cursor-pointer zoom-in">' +
                            '<div class="font-medium text-base" data-id="' + item[i].id + '">' + item[i].name + '</div>' +
                        '</div>'
                        );
                    }
                });
            },
            error: function(xhr, status, error) {
                // Penanganan kesalahan jika diperlukan
            }
        });

        // Mendapatkan referensi elemen <select>
        var view = $(".produk-view");

        // Melakukan permintaan Ajax
        $.ajax({
            url: "http://127.0.0.1:8000/api/produk/list",
            method: "GET",
            headers: {
                "Authorization": "Bearer " + token
            },
            success: function(response) {
                // Menghapus semua opsi saat ini dari elemen <select>
                view.empty();

                // Iterasi melalui data dan membuat opsi baru untuk setiap entri
                $.each(response, function(index, list) {
                    for (let p = 0; p < list.length; p++) {
                        const anchorElement = $('<a href="javascript:;" data-toggle="modal" data-target="#add-item-modal" data-id="' + list[p].id + '" data-name="' + list[p].name + '" class="intro-y block col-span-12 sm:col-span-4 xxl:col-span-3">' +
                                '<div class="box rounded-md p-3 relative zoom-in">' +
                                    '<div class="flex-none pos-image relative block">' +
                                        '<div class="pos-image__preview image-fit">' +
                                            '<img alt="Midone Tailwind HTML Admin Template" src="{{ asset("dist/images/food-beverage-9.jpg") }}">' +
                                        '</div>' +
                                    '</div>' +
                                    '<div class="block font-medium text-center truncate mt-3">' + list[p].name + '</div>' +
                                '</div>' +
                            '</a>'
                        );

                        // Tambahkan elemen <a> ke dalam view
                        view.append(anchorElement);

                        // Tambahkan event listener untuk setiap elemen <a>
                        anchorElement.on('click', function() {
                            // Dapatkan nama elemen dari atribut data-name pada elemen yang diklik
                            const itemName = $(this).data('name');
                            console.log(itemName);

                            // Tampilkan nama elemen di dalam modal
                            $("#item-name").text(itemName);
                        });
                    }
                });
            },
            error: function(xhr, status, error) {
                // Penanganan kesalahan jika diperlukan
            }
        });

        // Event listener untuk menyembunyikan modal saat ditutup
        $('#add-item-modal').on('hidden.bs.modal', function() {
        // Bersihkan konten modal ketika ditutup
        $('#item-name').text('');
        });

        // Event listener untuk menghandle submit pada modal
        $('#add-item-modal form').on('submit', function(e) {
            e.preventDefault();

            // Dapatkan nilai input pada form
            const itemName = $('#add-item-modal input[name="item-name"]').val();
            const itemQuantity = $('#add-item-modal input[name="item-quantity"]').val();
            const itemPrice = $('#add-item-modal input[name="item-price"]').val();

            // Buat elemen baru untuk ditambahkan
            const newItemElement = $('<a href="javascript:;" data-toggle="modal" data-target="#add-item-modal" class="flex items-center p-3 cursor-pointer transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">' +
                                        '<div class="pos__ticket__item-name truncate mr-1">' + itemName + '</div>' +
                                        '<div class="text-gray-600">x ' + itemQuantity + '</div>' +
                                        '<i data-feather="edit" class="w-4 h-4 text-gray-600 ml-2"></i>' +
                                        '<div class="ml-auto">$' + itemPrice + '</div>' +
                                    '</a>');

            // Tambahkan elemen baru ke dalam list
            $('.item-list').append(newItemElement);

            // Reset nilai input pada form
            $('#add-item-modal input[name="item-name"]').val('');
            $('#add-item-modal input[name="item-quantity"]').val('');
            $('#add-item-modal input[name="item-price"]').val('');

            // Tutup modal
            $('#add-item-modal').modal('hide');
        });
    });
</script>
<!-- END: JS Assets-->
</body>
</html>
@endsection

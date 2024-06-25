<div class="fixed_product_sticky hidden md:block fixed top-[40%] z-20 bg-white drop-shadow right-0 cursor-pointer" id="openModalButton">
    <div class="flex flex-col items-center justify-center">
        <div class="fixed_product_sticky_icon p-2">
            <i class="fa-solid text-theme fa-cart-shopping text-xl"></i>
        </div>
        <div class="fixed_product_sticky_price">
            <p class="subTotal">
            </p>
        </div>
        <div class="fixed_product_sticky_count bg-theme text-white px-3 py-1">
            <p id="item_count">7 items</p>
        </div>
    </div>
</div>


<!-- Modal -->
<div id="cartModel" class="fixed top-0 left-full inset-0 bg-gray-600 bg-opacity-50 items-center justify-center z-[9999]">
    <div id="cartSlide" class="bg-white shadow-lg py-2 w-full h-screen max-h-full max-w-md absolute -right-[600px] duration-300 top-0">
        <!-- Fixed Product Cart Header -->
        <div class="flex justify-between items-center px-2">
            <div class="icon flex flex-row gap-2 justify-center items-center">
                <div class="fixed_product_sticky_icon">
                    <i class="fa-solid text-theme fa-cart-shopping text-2xl"></i>
                </div>
                <div class="w-6 h-6 bg-theme rounded-full flex items-center justify-center text-white">
                    <span>10</span>
                </div>
            </div>
            <button id="closeModalButton" class="text-gray-600 hover:text-gray-900 bg-red-500 px-2 rounded-sm">
                <i class="fa-solid fa-xmark text-xl text-white"></i>
            </button>
        </div>
        <hr class="mt-2">
        <!--/ Fixed Product Cart Header -->
        <!-- Fixed Product Cart Body -->
        <div class="fixed_product_cart_body h-[700px] pb-[300px] md:pb-[200px] overflow-y-scroll">
            <div class="px-2 py-2">
                <!-- Cart Item -->
                <div class="grid grid-cols-12 border-b pb-1">
                    <div class="col-span-3">
                        <img src="https://mohasagor.com/public/storage/images/product_thumbnail_img/thumbnail_1717475472_7548.jpg" width="80" height="80" alt="">
                    </div>
                    <div class="col-span-9">
                        <div class="flex flex-col w-full gap-1">
                            <div class="flex justify-between gap-4">
                                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
                                <a class="card_remove text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                            <div class="fixed_product_card_size">
                                <strong>Size:</strong>
                                <span>S</span>
                            </div>
                            <div class="fixed_product_card_qty_price flex flex-row items-center justify-between">
                                <!-- fixed product cart quantity start -->
                                <div class="fixed_product_card_qty flex flex-row items-center justify-center border rounded">
                                    <div class="fixed_product_card_qty_minus border-r px-2 cursor-pointer">
                                        <i class="fa-solid fa-minus"></i>
                                    </div>
                                    <input class="product_qty w-10 font-semibold focus:outline-none text-center" type="text" value="1">
                                    <div class="fixed_product_card_qty_plus border-l px-2 cursor-pointer">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <!-- fixed product cart quantity end -->
                                <!-- fixed product cart price start -->
                                <div class="fixed_product_card_close_price">
                                    <p>550 TK</p>
                                </div>
                                <!-- fixed product cart price end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Cart Item -->
                <!-- Cart Item -->
                <div class="grid grid-cols-12 border-b pb-1">
                    <div class="col-span-3">
                        <img src="https://production-qcoom-user.s3-ap-southeast-1.amazonaws.com/static_image/2023-06-01T11:57:16.540_38.jpg" width="80" height="80" alt="">
                    </div>
                    <div class="col-span-9">
                        <div class="flex flex-col w-full gap-1">
                            <div class="flex justify-between gap-4">
                                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
                                <a class="card_remove text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                            <div class="fixed_product_card_size">
                                <strong>Size:</strong>
                                <span>S</span>
                            </div>
                            <div class="fixed_product_card_qty_price flex flex-row items-center justify-between">
                                <!-- fixed product cart quantity start -->
                                <div class="fixed_product_card_qty flex flex-row items-center justify-center border rounded">
                                    <div class="fixed_product_card_qty_minus border-r px-2 cursor-pointer">
                                        <i class="fa-solid fa-minus"></i>
                                    </div>
                                    <input class="product_qty w-10 font-semibold focus:outline-none text-center" type="text" value="1">
                                    <div class="fixed_product_card_qty_plus border-l px-2 cursor-pointer">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <!-- fixed product cart quantity end -->
                                <!-- fixed product cart price start -->
                                <div class="fixed_product_card_close_price">
                                    <p>550 TK</p>
                                </div>
                                <!-- fixed product cart price end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Cart Item -->
                <!-- Cart Item -->
                <div class="grid grid-cols-12 border-b pb-1">
                    <div class="col-span-3">
                        <img src="https://production-qcoom-user.s3-ap-southeast-1.amazonaws.com/static_image/2022-09-11T17:30:23.405__0005_Layer_2.jpg" width="80" height="80" alt="">
                    </div>
                    <div class="col-span-9">
                        <div class="flex flex-col w-full gap-1">
                            <div class="flex justify-between gap-4">
                                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
                                <a class="card_remove text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                            <div class="fixed_product_card_size">
                                <strong>Size:</strong>
                                <span>S</span>
                            </div>
                            <div class="fixed_product_card_qty_price flex flex-row items-center justify-between">
                                <!-- fixed product cart quantity start -->
                                <div class="fixed_product_card_qty flex flex-row items-center justify-center border rounded">
                                    <div class="fixed_product_card_qty_minus border-r px-2 cursor-pointer">
                                        <i class="fa-solid fa-minus"></i>
                                    </div>
                                    <input class="product_qty w-10 font-semibold focus:outline-none text-center" type="text" value="1">
                                    <div class="fixed_product_card_qty_plus border-l px-2 cursor-pointer">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <!-- fixed product cart quantity end -->
                                <!-- fixed product cart price start -->
                                <div class="fixed_product_card_close_price">
                                    <p>550 TK</p>
                                </div>
                                <!-- fixed product cart price end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Cart Item -->
                <!-- Cart Item -->
                <div class="grid grid-cols-12 border-b pb-1">
                    <div class="col-span-3">
                        <img src="https://production-qcoom-user.s3-ap-southeast-1.amazonaws.com/static_image/2023-08-14T12:04:34.330_5.jpg" width="80" height="80" alt="">
                    </div>
                    <div class="col-span-9">
                        <div class="flex flex-col w-full gap-1">
                            <div class="flex justify-between gap-4">
                                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
                                <a class="card_remove text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                            <div class="fixed_product_card_size">
                                <strong>Size:</strong>
                                <span>S</span>
                            </div>
                            <div class="fixed_product_card_qty_price flex flex-row items-center justify-between">
                                <!-- fixed product cart quantity start -->
                                <div class="fixed_product_card_qty flex flex-row items-center justify-center border rounded">
                                    <div class="fixed_product_card_qty_minus border-r px-2 cursor-pointer">
                                        <i class="fa-solid fa-minus"></i>
                                    </div>
                                    <input class="product_qty w-10 font-semibold focus:outline-none text-center" type="text" value="1">
                                    <div class="fixed_product_card_qty_plus border-l px-2 cursor-pointer">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <!-- fixed product cart quantity end -->
                                <!-- fixed product cart price start -->
                                <div class="fixed_product_card_close_price">
                                    <p>550 TK</p>
                                </div>
                                <!-- fixed product cart price end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Cart Item -->
                <!-- Cart Item -->
                <div class="grid grid-cols-12 border-b pb-1">
                    <div class="col-span-3">
                        <img src="https://production-qcoom-user.s3-ap-southeast-1.amazonaws.com/static_image/2023-08-14T16:58:20.253__0004_Q-SBD-SUJ-05.jpg" width="80" height="80" alt="">
                    </div>
                    <div class="col-span-9">
                        <div class="flex flex-col w-full gap-1">
                            <div class="flex justify-between gap-4">
                                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
                                <a class="card_remove text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                            <div class="fixed_product_card_size">
                                <strong>Size:</strong>
                                <span>S</span>
                            </div>
                            <div class="fixed_product_card_qty_price flex flex-row items-center justify-between">
                                <!-- fixed product cart quantity start -->
                                <div class="fixed_product_card_qty flex flex-row items-center justify-center border rounded">
                                    <div class="fixed_product_card_qty_minus border-r px-2 cursor-pointer">
                                        <i class="fa-solid fa-minus"></i>
                                    </div>
                                    <input class="product_qty w-10 font-semibold focus:outline-none text-center" type="text" value="1">
                                    <div class="fixed_product_card_qty_plus border-l px-2 cursor-pointer">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <!-- fixed product cart quantity end -->
                                <!-- fixed product cart price start -->
                                <div class="fixed_product_card_close_price">
                                    <p>550 TK</p>
                                </div>
                                <!-- fixed product cart price end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Cart Item -->
                <!-- Cart Item -->
                <div class="grid grid-cols-12 border-b pb-1">
                    <div class="col-span-3">
                        <img src="https://production-qcoom-user.s3-ap-southeast-1.amazonaws.com/static_image/2023-08-27T11:53:23.244_30.1.jpg" width="80" height="80" alt="">
                    </div>
                    <div class="col-span-9">
                        <div class="flex flex-col w-full gap-1">
                            <div class="flex justify-between gap-4">
                                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
                                <a class="card_remove text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                            <div class="fixed_product_card_size">
                                <strong>Size:</strong>
                                <span>S</span>
                            </div>
                            <div class="fixed_product_card_qty_price flex flex-row items-center justify-between">
                                <!-- fixed product cart quantity start -->
                                <div class="fixed_product_card_qty flex flex-row items-center justify-center border rounded">
                                    <div class="fixed_product_card_qty_minus border-r px-2 cursor-pointer">
                                        <i class="fa-solid fa-minus"></i>
                                    </div>
                                    <input class="product_qty w-10 font-semibold focus:outline-none text-center" type="text" value="1">
                                    <div class="fixed_product_card_qty_plus border-l px-2 cursor-pointer">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <!-- fixed product cart quantity end -->
                                <!-- fixed product cart price start -->
                                <div class="fixed_product_card_close_price">
                                    <p>550 TK</p>
                                </div>
                                <!-- fixed product cart price end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Cart Item -->
                <!-- Cart Item -->
                <div class="grid grid-cols-12 border-b pb-1">
                    <div class="col-span-3">
                        <img src="https://production-qcoom-user.s3-ap-southeast-1.amazonaws.com/static_image/2023-08-27T11:53:23.244_30.1.jpg" width="80" height="80" alt="">
                    </div>
                    <div class="col-span-9">
                        <div class="flex flex-col w-full gap-1">
                            <div class="flex justify-between gap-4">
                                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
                                <a class="card_remove text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                            <div class="fixed_product_card_size">
                                <strong>Size:</strong>
                                <span>S</span>
                            </div>
                            <div class="fixed_product_card_qty_price flex flex-row items-center justify-between">
                                <!-- fixed product cart quantity start -->
                                <div class="fixed_product_card_qty flex flex-row items-center justify-center border rounded">
                                    <div class="fixed_product_card_qty_minus border-r px-2 cursor-pointer">
                                        <i class="fa-solid fa-minus"></i>
                                    </div>
                                    <input class="product_qty w-10 font-semibold focus:outline-none text-center" type="text" value="1">
                                    <div class="fixed_product_card_qty_plus border-l px-2 cursor-pointer">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <!-- fixed product cart quantity end -->
                                <!-- fixed product cart price start -->
                                <div class="fixed_product_card_close_price">
                                    <p>550 TK</p>
                                </div>
                                <!-- fixed product cart price end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Cart Item -->
                <!-- Cart Item -->
                <div class="grid grid-cols-12 border-b pb-1">
                    <div class="col-span-3">
                        <img src="https://production-qcoom-user.s3-ap-southeast-1.amazonaws.com/static_image/2023-08-27T11:53:23.244_30.1.jpg" width="80" height="80" alt="">
                    </div>
                    <div class="col-span-9">
                        <div class="flex flex-col w-full gap-1">
                            <div class="flex justify-between gap-4">
                                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
                                <a class="card_remove text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                            <div class="fixed_product_card_size">
                                <strong>Size:</strong>
                                <span>S</span>
                            </div>
                            <div class="fixed_product_card_qty_price flex flex-row items-center justify-between">
                                <!-- fixed product cart quantity start -->
                                <div class="fixed_product_card_qty flex flex-row items-center justify-center border rounded">
                                    <div class="fixed_product_card_qty_minus border-r px-2 cursor-pointer">
                                        <i class="fa-solid fa-minus"></i>
                                    </div>
                                    <input class="product_qty w-10 font-semibold focus:outline-none text-center" type="text" value="1">
                                    <div class="fixed_product_card_qty_plus border-l px-2 cursor-pointer">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <!-- fixed product cart quantity end -->
                                <!-- fixed product cart price start -->
                                <div class="fixed_product_card_close_price">
                                    <p>550 TK</p>
                                </div>
                                <!-- fixed product cart price end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Cart Item -->
                <!-- Cart Item -->
                <div class="grid grid-cols-12 border-b pb-1">
                    <div class="col-span-3">
                        <img src="https://production-qcoom-user.s3-ap-southeast-1.amazonaws.com/static_image/2023-08-27T11:53:23.244_30.1.jpg" width="80" height="80" alt="">
                    </div>
                    <div class="col-span-9">
                        <div class="flex flex-col w-full gap-1">
                            <div class="flex justify-between gap-4">
                                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
                                <a class="card_remove text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                            <div class="fixed_product_card_size">
                                <strong>Size:</strong>
                                <span>S</span>
                            </div>
                            <div class="fixed_product_card_qty_price flex flex-row items-center justify-between">
                                <!-- fixed product cart quantity start -->
                                <div class="fixed_product_card_qty flex flex-row items-center justify-center border rounded">
                                    <div class="fixed_product_card_qty_minus border-r px-2 cursor-pointer">
                                        <i class="fa-solid fa-minus"></i>
                                    </div>
                                    <input class="product_qty w-10 font-semibold focus:outline-none text-center" type="text" value="1">
                                    <div class="fixed_product_card_qty_plus border-l px-2 cursor-pointer">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <!-- fixed product cart quantity end -->
                                <!-- fixed product cart price start -->
                                <div class="fixed_product_card_close_price">
                                    <p>550 TK</p>
                                </div>
                                <!-- fixed product cart price end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Cart Item -->
                <!-- Cart Item -->
                <div class="grid grid-cols-12 border-b pb-1">
                    <div class="col-span-3">
                        <img src="https://production-qcoom-user.s3-ap-southeast-1.amazonaws.com/static_image/2023-08-27T11:53:23.244_30.1.jpg" width="80" height="80" alt="">
                    </div>
                    <div class="col-span-9">
                        <div class="flex flex-col w-full gap-1">
                            <div class="flex justify-between gap-4">
                                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
                                <a class="card_remove text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                            <div class="fixed_product_card_size">
                                <strong>Size:</strong>
                                <span>S</span>
                            </div>
                            <div class="fixed_product_card_qty_price flex flex-row items-center justify-between">
                                <!-- fixed product cart quantity start -->
                                <div class="fixed_product_card_qty flex flex-row items-center justify-center border rounded">
                                    <div class="fixed_product_card_qty_minus border-r px-2 cursor-pointer">
                                        <i class="fa-solid fa-minus"></i>
                                    </div>
                                    <input class="product_qty w-10 font-semibold focus:outline-none text-center" type="text" value="1">
                                    <div class="fixed_product_card_qty_plus border-l px-2 cursor-pointer">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <!-- fixed product cart quantity end -->
                                <!-- fixed product cart price start -->
                                <div class="fixed_product_card_close_price">
                                    <p>550 TK</p>
                                </div>
                                <!-- fixed product cart price end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Cart Item -->
                <!-- Cart Item -->
                <div class="grid grid-cols-12 border-b pb-1">
                    <div class="col-span-3">
                        <img src="https://production-qcoom-user.s3-ap-southeast-1.amazonaws.com/static_image/2023-08-27T11:53:23.244_30.1.jpg" width="80" height="80" alt="">
                    </div>
                    <div class="col-span-9">
                        <div class="flex flex-col w-full gap-1">
                            <div class="flex justify-between gap-4">
                                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
                                <a class="card_remove text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                            <div class="fixed_product_card_size">
                                <strong>Size:</strong>
                                <span>S</span>
                            </div>
                            <div class="fixed_product_card_qty_price flex flex-row items-center justify-between">
                                <!-- fixed product cart quantity start -->
                                <div class="fixed_product_card_qty flex flex-row items-center justify-center border rounded">
                                    <div class="fixed_product_card_qty_minus border-r px-2 cursor-pointer">
                                        <i class="fa-solid fa-minus"></i>
                                    </div>
                                    <input class="product_qty w-10 font-semibold focus:outline-none text-center" type="text" value="1">
                                    <div class="fixed_product_card_qty_plus border-l px-2 cursor-pointer">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <!-- fixed product cart quantity end -->
                                <!-- fixed product cart price start -->
                                <div class="fixed_product_card_close_price">
                                    <p>550 TK</p>
                                </div>
                                <!-- fixed product cart price end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Cart Item -->
                <!-- Cart Item -->
                <div class="grid grid-cols-12 border-b pb-1">
                    <div class="col-span-3">
                        <img src="https://production-qcoom-user.s3-ap-southeast-1.amazonaws.com/static_image/2023-08-27T11:53:23.244_30.1.jpg" width="80" height="80" alt="">
                    </div>
                    <div class="col-span-9">
                        <div class="flex flex-col w-full gap-1">
                            <div class="flex justify-between gap-4">
                                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
                                <a class="card_remove text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                            <div class="fixed_product_card_size">
                                <strong>Size:</strong>
                                <span>S</span>
                            </div>
                            <div class="fixed_product_card_qty_price flex flex-row items-center justify-between">
                                <!-- fixed product cart quantity start -->
                                <div class="fixed_product_card_qty flex flex-row items-center justify-center border rounded">
                                    <div class="fixed_product_card_qty_minus border-r px-2 cursor-pointer">
                                        <i class="fa-solid fa-minus"></i>
                                    </div>
                                    <input class="product_qty w-10 font-semibold focus:outline-none text-center" type="text" value="1">
                                    <div class="fixed_product_card_qty_plus border-l px-2 cursor-pointer">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <!-- fixed product cart quantity end -->
                                <!-- fixed product cart price start -->
                                <div class="fixed_product_card_close_price">
                                    <p>550 TK</p>
                                </div>
                                <!-- fixed product cart price end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Cart Item -->
                <!-- Cart Item -->
                <div class="grid grid-cols-12 border-b pb-1">
                    <div class="col-span-3">
                        <img src="https://production-qcoom-user.s3-ap-southeast-1.amazonaws.com/static_image/2023-08-27T11:53:23.244_30.1.jpg" width="80" height="80" alt="">
                    </div>
                    <div class="col-span-9">
                        <div class="flex flex-col w-full gap-1">
                            <div class="flex justify-between gap-4">
                                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
                                <a class="card_remove text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                            <div class="fixed_product_card_size">
                                <strong>Size:</strong>
                                <span>S</span>
                            </div>
                            <div class="fixed_product_card_qty_price flex flex-row items-center justify-between">
                                <!-- fixed product cart quantity start -->
                                <div class="fixed_product_card_qty flex flex-row items-center justify-center border rounded">
                                    <div class="fixed_product_card_qty_minus border-r px-2 cursor-pointer">
                                        <i class="fa-solid fa-minus"></i>
                                    </div>
                                    <input class="product_qty w-10 font-semibold focus:outline-none text-center" type="text" value="1">
                                    <div class="fixed_product_card_qty_plus border-l px-2 cursor-pointer">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <!-- fixed product cart quantity end -->
                                <!-- fixed product cart price start -->
                                <div class="fixed_product_card_close_price">
                                    <p>550 TK</p>
                                </div>
                                <!-- fixed product cart price end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Cart Item -->
                <!-- Cart Item -->
                <div class="grid grid-cols-12 border-b pb-1">
                    <div class="col-span-3">
                        <img src="https://production-qcoom-user.s3-ap-southeast-1.amazonaws.com/static_image/2023-08-27T11:53:23.244_30.1.jpg" width="80" height="80" alt="">
                    </div>
                    <div class="col-span-9">
                        <div class="flex flex-col w-full gap-1">
                            <div class="flex justify-between gap-4">
                                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
                                <a class="card_remove text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                            <div class="fixed_product_card_size">
                                <strong>Size:</strong>
                                <span>S</span>
                            </div>
                            <div class="fixed_product_card_qty_price flex flex-row items-center justify-between">
                                <!-- fixed product cart quantity start -->
                                <div class="fixed_product_card_qty flex flex-row items-center justify-center border rounded">
                                    <div class="fixed_product_card_qty_minus border-r px-2 cursor-pointer">
                                        <i class="fa-solid fa-minus"></i>
                                    </div>
                                    <input class="product_qty w-10 font-semibold focus:outline-none text-center" type="text" value="1">
                                    <div class="fixed_product_card_qty_plus border-l px-2 cursor-pointer">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <!-- fixed product cart quantity end -->
                                <!-- fixed product cart price start -->
                                <div class="fixed_product_card_close_price">
                                    <p>550 TK</p>
                                </div>
                                <!-- fixed product cart price end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Cart Item -->
                <!-- Cart Item -->
                <div class="grid grid-cols-12 border-b pb-1">
                    <div class="col-span-3">
                        <img src="https://production-qcoom-user.s3-ap-southeast-1.amazonaws.com/static_image/2023-08-27T11:53:23.244_30.1.jpg" width="80" height="80" alt="">
                    </div>
                    <div class="col-span-9">
                        <div class="flex flex-col w-full gap-1">
                            <div class="flex justify-between gap-4">
                                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
                                <a class="card_remove text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                            <div class="fixed_product_card_size">
                                <strong>Size:</strong>
                                <span>S</span>
                            </div>
                            <div class="fixed_product_card_qty_price flex flex-row items-center justify-between">
                                <!-- fixed product cart quantity start -->
                                <div class="fixed_product_card_qty flex flex-row items-center justify-center border rounded">
                                    <div class="fixed_product_card_qty_minus border-r px-2 cursor-pointer">
                                        <i class="fa-solid fa-minus"></i>
                                    </div>
                                    <input class="product_qty w-10 font-semibold focus:outline-none text-center" type="text" value="1">
                                    <div class="fixed_product_card_qty_plus border-l px-2 cursor-pointer">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <!-- fixed product cart quantity end -->
                                <!-- fixed product cart price start -->
                                <div class="fixed_product_card_close_price">
                                    <p>550 TK</p>
                                </div>
                                <!-- fixed product cart price end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Cart Item -->
                <!-- Cart Item -->
                <div class="grid grid-cols-12 border-b pb-1">
                    <div class="col-span-3">
                        <img src="https://production-qcoom-user.s3-ap-southeast-1.amazonaws.com/static_image/2023-08-27T11:53:23.244_30.1.jpg" width="80" height="80" alt="">
                    </div>
                    <div class="col-span-9">
                        <div class="flex flex-col w-full gap-1">
                            <div class="flex justify-between gap-4">
                                <h3>Men's Double Pocket Solid Shirt- Fushia</h3>
                                <a class="card_remove text-red-600">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                            <div class="fixed_product_card_size">
                                <strong>Size:</strong>
                                <span>S</span>
                            </div>
                            <div class="fixed_product_card_qty_price flex flex-row items-center justify-between">
                                <!-- fixed product cart quantity start -->
                                <div class="fixed_product_card_qty flex flex-row items-center justify-center border rounded">
                                    <div class="fixed_product_card_qty_minus border-r px-2 cursor-pointer">
                                        <i class="fa-solid fa-minus"></i>
                                    </div>
                                    <input class="product_qty w-10 font-semibold focus:outline-none text-center" type="text" value="1">
                                    <div class="fixed_product_card_qty_plus border-l px-2 cursor-pointer">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <!-- fixed product cart quantity end -->
                                <!-- fixed product cart price start -->
                                <div class="fixed_product_card_close_price">
                                    <p>550 TK</p>
                                </div>
                                <!-- fixed product cart price end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Cart Item -->
            </div>
        </div>
        <!--/ Fixed Product Cart Body -->
        <!-- Fixed Product Cart Footer -->
        <div class="fixed_product_cart_footer bg-[#f5f6f7] absolute left-0 bottom-0 w-full py-4">
            <div class="px-2 flex flex-col gap-2">
                <div class="subtotal_container flex flex-row justify-between items-center">
                    <span>Subtotal:</span>
                    <span>342345 Tk</span>
                </div>
                <a href="" class="px-4 py-3 bg-theme font-bold text-white text-center">Checkout</a>
                <a href="" class="px-4 py-3 font-bold bg-black text-white text-center">View Cart</a>
            </div>
        </div>
        <!--/ Fixed Product Cart Footer -->
    </div>
</div>

<script>
    const openModalButton = document.getElementById('openModalButton');
    const closeModalButton = document.getElementById('closeModalButton');
    const modal = document.getElementById('cartModel');
    const sliding = document.getElementById('cartSlide');

    openModalButton.addEventListener('click', () => {
        modal.classList.remove('left-full');
        modal.classList.add('left-0');
        document.body.classList.add("overflow-hidden");
        sliding.classList.remove('-right-[600px]')
        sliding.classList.add('-right-0')
    });

    closeModalButton.addEventListener('click', () => {
        modal.classList.add('left-full');
        modal.classList.remove('left-0');
        document.body.classList.remove("overflow-hidden");
        sliding.classList.remove('-right-0')
        sliding.classList.add('-right-[600px]')
    });

    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.add('left-full');
            modal.classList.remove('left-0');
            sliding.classList.remove('-right-0')
            sliding.classList.add('-right-[600px]')
            document.body.classList.remove("overflow-hidden");
        }
    });
</script>

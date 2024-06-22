@section('css')
    <style>
        .arrow-before::before {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            right: 15px;
            bottom: 0;
            top: 0;
            background-image: url('data:image/svg+xml;base64,PHN2ZyBkYXRhLW5hbWU9IkNvbXBvbmVudCAxOCDigJMgOCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTYiIGhlaWdodD0iMTYiPjxwYXRoIGRhdGEtbmFtZT0iUGF0aCAxMjY3IiBkPSJNNSAybDYgNi02IDYiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2ExYTFhMSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2Utd2lkdGg9IjEuNSIvPjwvc3ZnPg=='); /* Replace with your arrow icon URL */
            background-size: cover;
            margin: auto;
        }
    </style>
@endsection

    <ul class="py-4">
        <li class="group">
            <a href="" class="arrow-before block relative px-4 py-2 text-[14px] hover:text-[#eb5d1e]">Smartphones</a>
            <div class="sub-menu hidden group-hover:grid group-hover:grid-cols-2 text-[13px] bg-white absolute py-4 top-0 left-full z-20 w-full shadow-lg">
                <a href="" class="py-2 px-6">Xiaomi</a>
                <a href="" class="py-2 px-6 ">TECNO</a>
                <a href="" class="py-2 px-6 ">Infinix</a>
                <a href="" class="py-2 px-6 ">vivo</a>
                <a href="" class="py-2 px-6 ">OPPO</a>
                <a href="" class="py-2 px-6 ">Samsung</a>
                <a href="" class="py-2 px-6 ">iPhone</a>
                <a href="" class="py-2 px-6 ">Honor</a>
                <a href="" class="py-2 px-6 ">OnePlus</a>
                <a href="" class="py-2 px-6 ">Symphony</a>
                <a href="" class="py-2 px-6 ">itel</a>
                <a href="" class="py-2 px-6 ">Nokia</a>
                <a href="" class="py-2 px-6 ">Motorola</a>
                <a href="" class="py-2 px-6 ">benco</a>
            </div>
        </li>
        <li class="group">
            <a href="" class="arrow-before block relative text-[14px] px-4 py-2 hover:text-[#eb5d1e]">Electronics & Appliances</a>
            <div class="sub-menu hidden group-hover:grid group-hover:grid-cols-2 bg-white text-[13px] absolute py-4 top-0 left-full w-full z-20 shadow-lg">
                <a href="" class="py-2 px-6">Television</a>
                <a href="" class="py-2 px-6">Air Conditioner</a>
                <a href="" class="py-2 px-6 ">Refrigerator & Freezer</a>
                <a href="" class="py-2 px-6">Washing Machine</a>
                <a href="" class="py-2 px-6 ">Oven</a>
                <a href="" class="py-2 px-6 ">Grinder & Blender</a>
                <a href="" class="py-2 px-6 ">Air Fryer</a>
                <a href="" class="py-2 px-6 ">Induction Cooker</a>
                <a href="" class="py-2 px-6">Rice Cooker</a>
                <a href="" class="py-2 px-6 ">Water Purifiers & Filters</a>
                <a href="" class="py-2 px-6">Geyser</a>
                <a href="" class="py-2 px-6 ">Room Heater</a>
                <a href="" class="py-2 px-6 ">Air Purifier</a>
                <a href="" class="py-2 px-6 ">Food Processor</a>
                <a href="" class="py-2 px-6">Iron</a>
                <a href="" class="py-2 px-6">Electric Kettle</a>
                <a href="" class="py-2 px-6">Gas Burner</a>
            </div>
        </li>
        <li class="group">
            <a href="" class="arrow-before block relative px-4 text-[14px] py-2 hover:text-[#eb5d1e]">Mobile Accessories</a>
        </li>
        <li class=" group">
            <a href="" class="arrow-before block relative px-4 text-[14px] py-2 hover:text-[#eb5d1e]">Computers</a>
        </li>
        <li class=" group">
            <a href="" class="arrow-before block relative px-4 text-[14px] py-2 hover:text-[#eb5d1e]">Computer Accessories</a>
        </li>
        <li class=" group">
            <a href="" class="arrow-before block relative px-4 text-[14px] py-2 hover:text-[#eb5d1e]">Lifestyle</a>
        </li>
    </ul>

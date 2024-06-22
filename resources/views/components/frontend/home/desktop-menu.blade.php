@section('css')
    <style>
        .arrow-before::before {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            right: 0;
            bottom: 0;
            top: 0;
            background-image: url('data:image/svg+xml;base64,PHN2ZyBkYXRhLW5hbWU9IkNvbXBvbmVudCAxOCDigJMgOCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTYiIGhlaWdodD0iMTYiPjxwYXRoIGRhdGEtbmFtZT0iUGF0aCAxMjY3IiBkPSJNNSAybDYgNi02IDYiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2ExYTFhMSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2Utd2lkdGg9IjEuNSIvPjwvc3ZnPg=='); /* Replace with your arrow icon URL */
            background-size: cover;
            margin: auto;
        }
    </style>
@endsection
<div class="col-span-3 bg-[#f5f5f5]">
    <ul class="px-4 py-4">
        <li><a href="" class="arrow-before block relative py-1 mb-1 hover:text-[#eb5d1e]">Smartphones</a></li>
        <li><a href="" class="arrow-before block relative py-1 mb-1 hover:text-[#eb5d1e]">Electronics & Appliances</a></li>
        <li><a href="" class="arrow-before block relative py-1 mb-1 hover:text-[#eb5d1e]">Mobile Accessories</a></li>
        <li><a href="" class="arrow-before block relative py-1 mb-1 hover:text-[#eb5d1e]">Computers</a></li>
        <li><a href="" class="arrow-before block relative py-1 mb-1 hover:text-[#eb5d1e]">Computer Accessories</a></li>
        <li><a href="" class="arrow-before block relative py-1 mb-1 hover:text-[#eb5d1e]">Lifestyle</a></li>
    </ul>
</div>

<div class="sidebar" data-color="purple" data-image="admin_css/assets/img/sidebar-1.jpg">
    <div class="logo">
            <span>Admin Panel By<small> <strong> Kadir YOLCU </strong> </small> </span>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav p-4">

            <li>
                <a href="{{route('admin.index')}}">
                    <i class="material-icons">dashboard</i>
                    Dashboard
                </a>
            </li>

            <li class="mt-4">
                <a href="{{route('admin.yayinevi.index')}}">
                    <i class="material-icons">person</i>
                    Yayın Evi
                </a>
            </li>

            <li class="mt-4">
                <a href="{{route('admin.yazar.index')}}">
                    <i class="material-icons">content_paste</i>
                    Yazarlar
                </a>
            </li>

            <li class="mt-4">
                <a href="{{route('admin.kategori.index')}}">
                    <i class="material-icons">library_books</i>
                    Kategoriler
                </a>
            </li>

            <li class="mt-4">
                <a href="{{route('admin.kitap.index')}}">
                    <i class="material-icons">bubble_chart</i>
                    Kitaplar
                </a>
            </li>

            <li class="mt-4">
                <a href="{{route('admin.slider.index')}}">
                    <i class="material-icons">location_on</i>
                    Slider
                </a>
            </li>

            <li class="mt-4">
                <a href="{{route('admin.order.index')}}">
                    <i class="material-icons text-gray">notifications</i>
                    Siparişlerim
                </a>
            </li>
        </ul>
    </div>
</div>

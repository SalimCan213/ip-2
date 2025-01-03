<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
        <!-- Sidebar Navidation Menus-->
        <ul class="list-unstyled">
            <li><a href="{{url('admin/dashboard')}}"> <i class="icon-home"></i>Ana Sayfa </a></li>
            <li><a href="{{url('view_category')}}"> <i class="icon-grid"></i>Kategori </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Ürünler</a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_product')}}">Ürün Ekle</a></li>
                    <li><a href="{{url('view_product')}}">Ürünleri Görüntüle</a></li>
                </ul>
            </li>

        </ul>
    </nav>


<!DOCTYPE html>
<html>
<head>
    @include('admin.css')

    <style type="text/css">
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        .table_deg
        {
            border: 2px solid greenyellow;
        }

        th
        {
            background-color: skyblue;
            color: white;
            font-size: 19px;
            font-weight: bold;
            padding: 15px;
        }

        td
        {
            border: 1px solid skyblue;
            text-align: center;
            color: white;
        }

        input[type='search']
        {
            margin-left: 230px;
        }
    </style>

</head>
<body>

@include('admin.header')
@include('admin.sidebar')
<!-- Sidebar Navigation end-->
<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">

            <form action="{{url('product_search')}}" method="get">
                @csrf
                <input type="search" name="search">
                <input type="submit" class="btn btn-secondary" value="Ara">
            </form>

            <div class="div_deg">
                <table class="table_deg">
                    <tr>
                        <th>Ürün İsmi</th>
                        <th>Açıklama</th>
                        <th>Ürün Kategorisi</th>
                        <th>Ürün Resmi</th>
                        <th>Düzenle</th>
                        <th>Sil</th>
                    </tr>
                    @foreach($product as $products)
                    <tr>
                        <td>{{$products->title}}</td>
                        <td>{!!Str::limit($products->description,50)!!}</td>
                        <td>{{$products->category}}</td>
                        <td>

                            <img height="120" width="120" src="products/{{$products->image}}">

                        </td>

                        <td>
                            <a class="btn btn-success" href="{{url('update_product',$products->id   )}}">Düzenle</a>
                        </td>

                        <td>
                            <a class="btn btn-danger" href="{{url('delete_product',$products->id)}}">Sil</a>
                        </td>

                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="div_deg">
                {{$product->links()}}
            </div>
        </div>
    </div>
</div>
<!-- JavaScript files-->
<script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
<script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
<script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('admincss/js/charts-home.js')}}"></script>
<script src="{{asset('admincss/js/front.js')}}"></script>
</body>
</html>

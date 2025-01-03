<!DOCTYPE html>
<html>

<head>
    @include('home.css')

    <style type="text/css">
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        table
        {
            border: 2px solid black;
            text-align: center;
            width: 800px;
        }

        th
        {
            border: 2px solid black;
            text-align: center;
            color: white;
            font-weight: bold;
            background-color: black;
        }

        td
        {
            border: 1px solid skyblue;
        }
    </style>
</head>

<body>
<div class="hero_area">

    @include('home.header')

</div>

<div class="div_deg">
    <table>
        <tr>
            <th>Ürün İsmi</th>
            <th>Ürün Resmi</th>
            <th>Favorilerden Kaldır</th>
        </tr>
@foreach($favorites as $favorites)
        <tr>
            <td>{{$favorites->product->title}}</td>
            <td>
                <img width="150" src="/products/{{$favorites->product->image}}">
            </td>
            <td>
                <a class="btn btn-danger" href="{{url('delete_favorite', $favorites->id)}}">Favorilerden Kaldır</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@include('home.footer')

</body>

</html>

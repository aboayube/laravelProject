<html>
<head>
    <title>add Product</title>
    </head>
    <body>
    <form action="/edit/{{$product->id}}" method="POST">
        {{ csrf_field() }}
        <label>name</label><br>
        <input type="text" name="name" value="{{$product->name}}">
        <br>
        <label>pricr</label><br>
        <input type="number" name="price" value="{{$product->price}}"><br>
        <button>add</button>
        <br>
        
        </form>
    
    </body>
</html>
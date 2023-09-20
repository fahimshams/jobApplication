<!DOCTYPE html>
<html >
    <head>
        
        <title>Product Form</title>

      
    </head>
    <body>
        <form action={{ url('api/products') }}  method='post'>
            @csrf
            <label>Name</label>
            <input name='name'>

            <label>Description</label>
            <input name='description'>

            <label>Price</label>
            <input name='price'>

            <button>Enter</button>

        </form>

        <br>
        <br>


        <form action={{ url('/findProductForm') }} method="get">
            <button>Find Product</button>
        </form>

        <form action={{ url('api/products') }} method="get">
            <button>Show All Products</button>
        </form>

    </body>
</html>
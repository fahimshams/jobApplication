
<!DOCTYPE html>
<html >
    <head>
        
        <title>Find Form</title>

      
    </head>
    <body>

        <form action={{ url('/findProduct') }}  method='get'>
           
            <label>Name</label>
            <input name='name'>

    

            <button name="FindProduct">Find</button>

        </form>

      
    </body>
</html>
<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
     
    @include('admin.admincss')
</head>
<body>

    
    <div class="container-scroller" >
        @include('admin.navbar')
        <div style="margin: 100px; position:relative; ">
            <form action="{{ url('/uploadfood') }}" method="post" enctype="multiplart/form-data">
                @csrf
                
                <div>
                    <label for="title">TITLE</label>
                    <input style="color:blue;" type="text"  name="title" placeholder="write a title" required> 
                </div>

                <div>
                    <label for="title">PRICE</label>
                    <input style="color:blue;"  type="num"  name="price" placeholder="price" required> 
                </div>

                <div>
                    <label for="image">IMAGE</label>
                    <input style="color:blue;"  type="text"  name="image" required> 
                </div>

                <div>
                    <label for="description">DESCRIPTION</label>
                    <input style="color:blue;"  type="text"  name="description" placeholder="write a description" required> 
                </div>

                <div>
                    <input style="color:white;"  style="color: black; background-color:rgb(0, 0, 0)" type="submit" value="Save"> 
                </div>
                
                </form>
            </div>
        <h1>MENU DU JOUR </h1>
       
    </div>
    @include('admin.adminscript')
</body>
</html>
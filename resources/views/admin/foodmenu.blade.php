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
                    <input style="color:white;"  style=" background-color:black" type="submit" value="Save"> 
                </div>
                
                </form>
                <div>
                    <table>
                        <th style="padding:30px; background-color:black">food</th>
                        <th style="padding:30px; background-color:black">price</th>
                        <th style="padding:30px; background-color:black">description</th>
                        <th style="padding:30px; background-color:black">image</th>
                        @foreach($data as $dat)
                        <tr>
                            <td>{{ $dat->title }}</td>
                            <td>{{ $dat->price }}</td>
                            <td>{{ $dat->description }}</td>
                            <td><img src="{{ $dat->image }}" alt="" width="100px"></td>
                            
                            
                             
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        <h1>MENU DU JOUR </h1>
       
    </div>
    @include('admin.adminscript')
</body>
</html>
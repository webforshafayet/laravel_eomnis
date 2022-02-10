<!DOCTYPE html>
<html lang="en">

<head>
@include('seller.css')  
<title>seller</title>
</head>

<body>
    <!-- Header -->
    
    @include('seller.header')

    <!-- Search -->
    @include('seller.menu_bottom')
     
    <!-- Main -->
    <main>
        <!-- Products Slider -->
        @include('seller.product')
    </main>

    <!-- Footer -->
    @include('seller.footer')

     <!-- script -->
    @include('seller.script')
</body>

</html>
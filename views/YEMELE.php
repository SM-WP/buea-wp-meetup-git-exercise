<!-- upload image using php --> 
<?php
$image_url = plugin_dir_url(__FILE__) . 'images/img3.jpeg';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rapper Hero Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <!-- HERO SECTION -->
    <section 
        class="h-screen bg-cover bg-center flex items-center justify-center"
        style="background-image: url('<?php echo $image_url; ?>');"
    >

        <!-- Dark Overlay -->
        <div class="bg-black bg-opacity-60 w-full h-full flex items-center justify-center">

            <div class="text-center px-10">

                <h1 class="text-6xl md:text-6xl font-bold text-yellow-400">
                    Making Home Hunting Simple
                </h1>

                <p class="mt-6 text-xl text-gray-200">
                    Just With A Click.
                </p>

                <button class="mt-8 px-8 py-3 bg-purple-600 text-white rounded-lg hover:bg-red-700 transition">
                    Explore Now
                </button>

            </div>

        </div>

    </section>
    <div class=" px-10 py-6 bg-orange-200 ">
        <p> <span class="font-bold text-purple-500 text-xl">BRENDALINE'S</span> <span class="font-bold text-yellow-500 text-xl">ESTATE</span> make finding your perfect home seamless and enjoyable. Explore an extensive selection of quality properties that suit every lifestyle and budget. Beyond helping you discover the ideal house, we also provide premium furniture and home essentials, so you can fully furnish and personalize your space with ease. Whether you’re buying, renting, or looking to upgrade your home, we are your trusted partner in creating a comfortable, stylish, and welcoming living environment."</p>
        <div class="flex">
            <div class="md:w-1/2 h-64 md:h-full   ">
                <img src="<?php echo plugin_dir_url(__FILE__) . 'images/img.jpeg'; ?>" alt="Brendaline's Estate" class="mt-4 rounded-lg shadow-lg">
            </div>  
            <div class="  flex items-center justify-center h-screenitems-center  ">
                <p class="text-center  items-center justify-center text-black font-bold text-2xl">Looling for <span class="font-bold-900 text-purple-500 text-3xl">extensive</span>  selection of quality properties that suit every lifestyle and budget? </p>
               <!-- <div>
                    <button class=" mt-8 px-8 py-3 bg-purple-600 text-white rounded-lg hover:bg-red-700 transition">
                        Learn More
                    </button>
                </div>
-->
            </div> 
        </div>
    </div>

</body>
</html>
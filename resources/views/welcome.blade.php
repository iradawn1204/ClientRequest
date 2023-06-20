<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
         @vite('../resources/css/app.css')
         <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
<header class="bg-white ">
        <nav class="flex flex-row gap-[15%]   items-center w-[100%]  mx-auto ">
            <div class="flex flex-col mt-8 md:ml-10 ml-3">
               <div class="flex flex-row md:gap-3">
               <img src="{{url('blinc.webp')}}" alt="Image" class="md:w-[15%] w-[15%]"/>
               <h1 class="-left-[50%] md:mt-3 mt-2 md:text-[20px] font-bold uppercase">Bitshares Labs</h1>
                </div>

                <div> <h1 class="md:w-[300px] md:min-w-[300px] h-1.5 w-[250px] md:mt-1 -ml-10 bg-gradient-to-r from-pink-500  via-purple-500 to-blue-500  rounded-full" ></h1></div>
            </div>
            <div
                class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60h] left-0 top-[-100%] md:w-auto md: ml-[3%]  w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[2vw] gap-2 text-[15px] font-semibold md:text-[30px]   mt-5 md:mt-7 first-letter:">
                    <li>
                        <a class="hover:text-gray-500" href="#">Home</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#">Projects</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#">How It Works?</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500" href="#">About Us</a>
                    </li>
                  
                </ul>
            </div>
            <div class="flex items-center gap-0 md:mr-[-40%] md:ml-[3%] ml-[20%] md:mt-5 mt-8 ">
            <img src="{{url('userIcon.png')}}" class="md:w-[7%] md:h-[15%] w-[15%] ">
                <a class=" text-black md:text-[24px] text-[15px] font-bold m-2 hover:bg-[#87acec]">Login/Register<a></a>
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
</nav>
    </header>


  <!-- Col-->
 
    <main class="flex flex-col ">


        <!-- Service Title -->

    <section class="flex flex-col place-items-center md:mt-[8%] mt-[15%]">
      <h1 class="md:text-[64px] text-[40px] font-bold">Services We Offer</h1>
      <p class="text-slate-600 md:w-[30%] w-[50%] text-center mt-2 md:font-medium text-[16px]">
      We provide a wide range of services aimed at assisting businesses in  
        establishing a robust digital presence. Our services includes:  
      </p>


    </section>


    <!-- Services-->
    <section class="flex flex-row">



    <!--web-->
    <div class="md:min ">




    </div>












    </section>



    



    </main>
</body> <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>
</html>
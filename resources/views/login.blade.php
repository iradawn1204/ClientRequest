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
 
    <main>
    

    <section class="bg-white ">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:lg-screen lg:py-0 mt-[10%]">
            
            <div class="w-full bg-white rounded-lg shadow dark:border-2 border-2 border-violet-600 md:mt-0 sm:max-w-md xl:p-0 ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-center text-4xl font-bold leading-tight tracking-tight text-gray-900  md:text-4xl">
                        Login 
                    </h1>
                    
                    <form class="space-y-4 md:space-y-6" action="#">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border-2 border-violet-600 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5" placeholder="name@site.com" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border-2 border-purple-600 text-gray-900 sm:text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5" required="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border-[2%] border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-purple-600" required="">
                                </div>
                                <div class="ml-3 text-sm">
                                  <label for="remember" class="text-gray-500">Remember me</label>
                                </div>
                            </div>
                            <a href="#" class="text-sm font-medium text-primary-600 hover:underline ">Forgot password?</a>
                        </div>
                        <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign in</button>
                        <p class="text-sm font-light text-gray-500 ">
                            Don’t have an account yet? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
                        </p>
                    </form>
                </div>
            </div>
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
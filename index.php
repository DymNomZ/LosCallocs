<?php 
require_once 'includes/header.php';
?>
    <body class="min-h-screen bg-[#343f57] m-0 flex flex-col text-white font-serif overflow-hidden">
        <header class="h-20 flex px-6 py-4 bg-[#485268] border-0 border-b-2 border-[#f5e6ca] border-solid">
            <img src="./assets/logo.png" alt="" class="rounded-full border-[#f5e6ca] h-full aspect-square">
            <h2 class="ml-5 text-2xl my-auto font-semibold">SIMS: Store Inventory Management System</h2>
        </header>
        <div class="grid grid-cols-2 flex-grow">
            <div class="flex flex-col justify-center items-center pb-16 font-sans">
                <div class="max-w-[620px]">
                    <p class="text-[#fbf4e7] font-extrabold text-2xl my-5">Streamline your inventory Try <span class="text-3xl">SIMS</span> today<i>!</i></p>
                    <p class="font-semibold my-0 text-justify text-[#b4b7c0]">
                        SIMS is an easy-to-use inventory management system that helps businesses track stock levels, sales, and generate reports. It provides real-time insights to prevent overstocking or stockouts, streamlining operations, saving time, and improving accuracy for small businesses.
                    </p>
                </div>
                <div class="flex gap-4 mt-9">
                    <a class="contact" href="https://www.facebook.com/zillion.gwapo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 13 14" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13 7.04228C13 3.15331 10.0895 0 6.5 0C2.91049 0 0 3.15331 0 7.04228C0 10.5571 2.37656 13.4706 5.48438 13.9994V9.07857H3.83355V7.04228H5.48438V5.49078C5.48438 3.72612 6.45502 2.75058 7.93958 2.75058C8.6508 2.75058 9.39482 2.88828 9.39482 2.88828V4.6215H8.57478C7.76779 4.6215 7.51533 5.16413 7.51533 5.72186V7.04228H9.31792L9.03007 9.07857H7.51562V14C10.6234 13.4715 13 10.5581 13 7.04228Z" fill="#f9eedc"></path>
                        </svg>
                    </a>
                    <a class="contact" href="mailto:yoshi@eloquenceprojects.org">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 15 12" fill="none">
                            <path d="M13.125 0H1.875C1.37788 0.000541441 0.901278 0.201851 0.549762 0.559758C0.198247 0.917665 0.000531772 1.40293 0 1.90909V10.0909C0.000531772 10.5971 0.198247 11.0823 0.549762 11.4402C0.901278 11.7981 1.37788 11.9995 1.875 12H13.125C13.6221 11.9995 14.0987 11.7981 14.4502 11.4402C14.8018 11.0823 14.9995 10.5971 15 10.0909V1.90909C14.9995 1.40293 14.8018 0.917665 14.4502 0.559758C14.0987 0.201851 13.6221 0.000541441 13.125 0ZM12.6502 3.15784L7.82879 6.97602C7.73478 7.05044 7.61909 7.09084 7.5 7.09084C7.38091 7.09084 7.26522 7.05044 7.17121 6.97602L2.34978 3.15784C2.29313 3.11428 2.24555 3.0597 2.2098 2.99726C2.17405 2.93482 2.15085 2.86576 2.14153 2.79411C2.13222 2.72246 2.13699 2.64964 2.15556 2.57988C2.17413 2.51012 2.20613 2.44481 2.2497 2.38776C2.29327 2.3307 2.34754 2.28302 2.40937 2.24751C2.47119 2.21199 2.53933 2.18934 2.60983 2.18087C2.68032 2.17239 2.75177 2.17827 2.82002 2.19816C2.88826 2.21804 2.95195 2.25154 3.00737 2.2967L7.5 5.85443L11.9926 2.2967C12.105 2.21033 12.2462 2.17244 12.3857 2.19124C12.5253 2.21005 12.652 2.28402 12.7384 2.39718C12.8248 2.51033 12.864 2.65357 12.8475 2.79592C12.831 2.93826 12.7601 3.06828 12.6502 3.15784Z" fill="#f9eedc"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="flex justify-center items-center font-sans">
                <div class="bg-[#485268] border border-[#737a8c] border-solid rounded-lg py-7 px-12 flex flex-col">
                    <h2 class="text-2xl text-[#fbf4e7] text-center mb-3 font-bold">Login</h2>

                    <label class="text-[#fbf4e7] mb-1">Username:</label>
                    <input type="text" placeholder="Enter Username">

                    <label class="text-[#fbf4e7] mb-1 mt-3">Password:</label>
                    <input type="password" placeholder="Enter Password">
                    <p class="mt-1 text-[#fbf4e7]">No account? Register <a class="text-blue-500 underline" href="register.php">here</a>.</p>

                    <button class="mt-4 mx-auto text-black bg-[#f7ecd6] border-0 px-5 py-2 rounded-2xl cursor-pointer">Submit</button>
                </div>
            </div>
        </div>
        <img class="w-full h-full absolute top-20 -z-30 max-w-screen-xl" src="./assets/about.png">
        <div class="h-10 bg-[#2b313d] bg-opacity-65 border-slate-800 border-0 border-solid border-t backdrop-blur-xl flex text-center items-center">
            <p class="mx-auto text-lg">John Zillion Reyes | BSCS - 2</p>
        </div>
    </body>
</html>
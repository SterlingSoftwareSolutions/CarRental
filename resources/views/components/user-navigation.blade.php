 <!-- Navifgation  -->

 <!-- hamburger -->
 <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 hover:bg-main-green dark:focus:ring-gray-600">
     <span class="sr-only">Open sidebar</span>
     <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
         <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
     </svg>
 </button>

 <!-- Side Bar  -->
 <aside id="sidebar-multi-level-sidebar" class="drop-shadow-lg fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
     <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-white">
         <div class="logo w-full flex justify-center items-center p-4">
             <img src="{{ URL('images/flg_logo11079.png')}}" alt="Logo Image">
         </div>
         <ul class="space-y-2 font-medium">
             <!-- Dashboard  -->
             <li>
                 <a href="" class="flex items-center p-2 text-gray-500 rounded-lg text-ma hover:bg-main-green group hover:text-white">
                     <svg class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                         <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                         <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                     </svg>
                     <span class="ml-3">Today Booking</span>
                 </a>
             </li>

             <!-- Vehicles  -->
             <li>
                 <a href="" class="flex items-center p-2 text-gray-500 rounded-lg text-ma hover:bg-main-green group hover:text-white">
                     <svg class="w-5 h-5 text-gray hover:text-white transition duration-75 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                         <path d="M15.7993 3C17.2899 3 18.5894 4.01393 18.9518 5.45974L19.337 7H20.25C20.6297 7 20.9435 7.28215 20.9932 7.64823L21 7.75C21 8.1297 20.7178 8.44349 20.3518 8.49315L20.25 8.5H19.714L19.922 9.3265C20.5708 9.72128 21.0041 10.435 21.0041 11.25V19.7468C21.0041 20.7133 20.2206 21.4968 19.2541 21.4968H17.75C16.7835 21.4968 16 20.7133 16 19.7468L15.999 18.5H8.004L8.00408 19.7468C8.00408 20.7133 7.22058 21.4968 6.25408 21.4968H4.75C3.7835 21.4968 3 20.7133 3 19.7468V11.25C3 10.4352 3.43316 9.72148 4.08177 9.32666L4.289 8.5H3.75C3.3703 8.5 3.05651 8.21785 3.00685 7.85177L3 7.75C3 7.3703 3.28215 7.05651 3.64823 7.00685L3.75 7H4.663L5.04898 5.46176C5.41068 4.01497 6.71062 3 8.20194 3H15.7993ZM6.504 18.5H4.499L4.5 19.7468C4.5 19.8848 4.61193 19.9968 4.75 19.9968H6.25408C6.39215 19.9968 6.50408 19.8848 6.50408 19.7468L6.504 18.5ZM19.504 18.5H17.499L17.5 19.7468C17.5 19.8848 17.6119 19.9968 17.75 19.9968H19.2541C19.3922 19.9968 19.5041 19.8848 19.5041 19.7468L19.504 18.5ZM13.7507 14H10.249L10.1472 14.0068C9.78115 14.0565 9.49899 14.3703 9.49899 14.75C9.49899 15.1297 9.78115 15.4435 10.1472 15.4932L10.249 15.5H13.7507L13.8525 15.4932C14.2186 15.4435 14.5007 15.1297 14.5007 14.75C14.5007 14.3358 14.165 14 13.7507 14ZM17 12C16.4477 12 16 12.4477 16 13C16 13.5522 16.4477 13.9999 17 13.9999C17.5522 13.9999 17.9999 13.5522 17.9999 13C17.9999 12.4477 17.5522 12 17 12ZM6.99997 12C6.4477 12 6 12.4477 6 13C6 13.5522 6.4477 13.9999 6.99997 13.9999C7.55225 13.9999 7.99995 13.5522 7.99995 13C7.99995 12.4477 7.55225 12 6.99997 12ZM15.7993 4.5H8.20194C7.39892 4.5 6.69895 5.04652 6.50419 5.82556L5.71058 9H18.2929L17.4968 5.82448C17.3017 5.04596 16.6019 4.5 15.7993 4.5Z" fill="currentColor" />
                     </svg>
                     <span class="ml-3">Booking History</span>
                 </a>
             </li>

             <!-- Users  -->
             <li>
                 <a href="#" class="flex items-center p-2 text-gray-500 rounded-lg text-ma hover:bg-main-green group hover:text-white">
                     <svg class="w-5 h-5 text-gray hover:text-white transition duration-75 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                         <path d="M13 20V18C13 15.2386 10.7614 13 8 13C5.23858 13 3 15.2386 3 18V20H13ZM13 20H21V19C21 16.0545 18.7614 14 16 14C14.5867 14 13.3103 14.6255 12.4009 15.6311M11 7C11 8.65685 9.65685 10 8 10C6.34315 10 5 8.65685 5 7C5 5.34315 6.34315 4 8 4C9.65685 4 11 5.34315 11 7ZM18 9C18 10.1046 17.1046 11 16 11C14.8954 11 14 10.1046 14 9C14 7.89543 14.8954 7 16 7C17.1046 7 18 7.89543 18 9Z"></path>
                     </svg>
                     <span class="ml-3">Users</span>
                 </a>
             </li>

             <!-- Bookings  -->
             <li>
                 <a href="#" class="flex items-center p-2 text-gray-500 rounded-lg text-ma hover:bg-main-green group hover:text-white">
                     <svg fill="currentColor" class="w-5 h-5 text-gray hover:text-white transition duration-75 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 373.678 373.678" xml:space="preserve">
                         <path d="M76.341,187.847c-37.77,0-68.497-30.729-68.497-68.499c0-29.721,19.022-55.079,45.533-64.54 c-0.054-0.397-0.081-0.803-0.081-1.215c0-4.971,4.029-9,9-9h28.092c4.971,0,9,4.029,9,9c0,0.401-0.026,0.797-0.077,1.185 c4.066,1.446,7.995,3.284,11.748,5.501l8.469-10.842c3.061-3.917,8.716-4.611,12.633-1.553c3.917,3.06,4.612,8.716,1.553,12.633 l-50.279,64.371c-3.06,3.919-8.716,4.612-12.633,1.553s-4.612-8.716-1.553-12.633l30.6-39.177 c-7.196-3.802-15.191-5.782-23.507-5.782c-27.844,0-50.497,22.653-50.497,50.499c0,27.845,22.653,50.499,50.497,50.499 c27.846,0,50.499-22.654,50.499-50.499c0-4.659-0.634-9.277-1.884-13.726c-1.344-4.786,1.445-9.755,6.23-11.099 c4.788-1.351,9.755,1.444,11.1,6.229c1.694,6.033,2.554,12.289,2.554,18.595C144.84,157.119,114.111,187.847,76.341,187.847z M54.829,256.796H34.332c-4.971,0-9,4.029-9,9s4.029,9,9,9h20.497c4.971,0,9-4.029,9-9S59.8,256.796,54.829,256.796z M76.358,140.401h-0.035c-4.971,0-8.982,4.029-8.982,9s4.047,9,9.018,9s9-4.029,9-9S81.329,140.401,76.358,140.401z M54.829,224.471 H9c-4.971,0-9,4.029-9,9s4.029,9,9,9h45.829c4.971,0,9-4.029,9-9S59.8,224.471,54.829,224.471z M250.94,286.628c0,4.971-4.029,9-9,9 h-51.964c-4.138,19.103-21.172,33.456-41.496,33.456c-20.843,0-38.227-15.097-41.789-34.93c-7.212-2.285-13.16-7.098-16.355-13.519 c-1.602-3.22-2.413-6.637-2.413-10.157v-60.013c0-4.971,4.029-9,9-9s9,4.029,9,9v60.013c0,0.714,0.178,1.434,0.529,2.139 c0.305,0.614,0.761,1.237,1.354,1.826c5.249-17.49,21.498-30.27,40.675-30.27c20.322,0,37.356,14.354,41.496,33.455h51.964 C246.911,277.628,250.94,281.658,250.94,286.628z M172.937,286.629c0-13.485-10.971-24.456-24.456-24.456 c-13.396,0-24.313,10.828-24.455,24.19c0.003,0.154,0.003,0.31-0.001,0.465c0.107,13.394,11.037,24.256,24.456,24.256 C161.966,311.085,172.937,300.114,172.937,286.629z M133.193,212.304c0,4.971,4.029,9,9,9h10.125c4.971,0,9-4.029,9-9s-4.029-9-9-9 h-10.125C137.223,203.304,133.193,207.334,133.193,212.304z M313.135,277.629h-0.023c-4.971,0-8.988,4.029-8.988,9s4.041,9,9.012,9 s9-4.029,9-9S318.105,277.629,313.135,277.629z M373.636,251.765l-0.027,6.079c-0.017,3.595-0.036,7.681-0.036,12.635 c0,10.762-7.74,20.081-18.651,23.625c-3.543,19.857-20.939,34.98-41.802,34.98c-23.409,0-42.453-19.045-42.453-42.455 s19.044-42.456,42.453-42.456c19.15,0,35.38,12.741,40.655,30.191c1.127-1.144,1.798-2.492,1.798-3.886 c0-4.987,0.02-9.101,0.036-12.72l0.028-6.08c0.034-7.33,0.082-17.368-0.026-22.05c-0.075-3.29-0.163-5.988-0.395-8.323H216.76 c-3.23,0-10.795,0-33.942-22.876c-7.053-6.97-21.072-21.802-23.649-28.05c-1.896-4.595,0.292-9.856,4.887-11.752 c4.528-1.873,9.697,0.227,11.663,4.678c1.224,2.193,8.542,11.172,19.149,21.724c13.359,13.29,20.458,17.593,22.393,18.276h127.841 c-2.896-2.776-6.609-6.066-11.382-10.294c-2.477-2.194-5.196-4.604-8.183-7.284c-2.172-1.949-4.334-4.017-6.426-6.015 c-3.066-2.93-6.237-5.96-9.539-8.727c-2.907-2.436-5.661-4.754-8.279-6.958c-33.4-28.122-42.377-35.681-70.542-35.681h-62.137 c-4.971,0-9-4.029-9-9s4.029-9,9-9h62.137c34.733,0,48.61,11.684,82.136,39.911c2.607,2.195,5.349,4.504,8.245,6.93 c3.753,3.145,7.14,6.381,10.415,9.511c2.084,1.991,4.053,3.872,6.015,5.634c2.952,2.649,5.644,5.034,8.095,7.205 c21.576,19.114,27.375,24.252,27.95,49.678C373.72,234.144,373.674,243.914,373.636,251.765z M337.58,286.536 c-0.051-13.441-11.004-24.362-24.461-24.362c-13.483,0-24.453,10.971-24.453,24.456c0,13.484,10.97,24.455,24.453,24.455 c13.482,0,24.451-10.96,24.461-24.438C337.58,286.61,337.58,286.573,337.58,286.536z M148.491,277.629h-0.022 c-4.971,0-8.988,4.029-8.988,9s4.04,9,9.011,9s9-4.029,9-9S153.462,277.629,148.491,277.629z"></path>
                     </svg>
                     <span class="ml-3">User Details</span>
                 </a>
             </li>
         </ul>
     </div>
 </aside>
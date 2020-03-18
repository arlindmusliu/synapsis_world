<div class="bg-black flex items-center mt-0 fixed w-full z-10 top-0">
    <div class="sticky top-0 container">
        <div class="row justify-between">
            <div class="col-6">
                <a href="/">
                    <img src="/assets/images/logo.svg" alt="">
                </a>
            </div>

            <div class="col-2 md:hidden block">
                <label for="menu-toggle" class="cursor-pointer">
                    <svg class="fill-current text-gray-800 w-8 h-8" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </label>
            </div>

            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div id="menu" class="md:col-6 hidden md:flex justify-center font-bold md:justify-end">
                <ul class="flex w-full p-5 flex-col md:w-auto md:p-0 md:flex-row items-center">
                    <li class="w-full md:w-auto md:mr-6">
                        <a href="/"
                            class="text-white block py-4 md:py-0 border-b border-gray-200 md:border-b-0 md:border-transparent">Home</a>
                    </li>
                    <li class="w-full md:w-auto md:mr-6">
                        <a href="/#about"
                            class="block py-4 md:py-0 border-b border-gray-200 md:border-b-0 md:border-transparent text-white">About</a>
                    </li>
                    <li class="w-full md:w-auto md:mr-6">
                        <a href="/#projects"
                            class="block py-4 md:py-0 border-b border-gray-200 md:border-b-0 md:border-transparent text-white">Projects</a>
                    </li>
                    <li class="w-full md:w-auto md:mr-6">
                        <a href="/#contact"
                            class="block py-4 md:py-0 border-b border-gray-200 md:border-b-0 md:border-transparent text-white">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
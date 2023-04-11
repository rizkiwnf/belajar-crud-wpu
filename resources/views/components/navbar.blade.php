<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .active {
            font-weight: 500;
        }
    </style>
</head>

<body class="">
    <nav class="flex-no-wrap relative flex w-full items-center justify-between bg-neutral-100 py-4 shadow-md shadow-black/5 lg:justify-start"
        data-te-navbar-ref>
        <div class="flex w-full flex-wrap items-center justify-between px-6">
            <button
                class="block border-0 bg-transparent py-2 px-2.5 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 lg:hidden"
                type="button" data-te-collapse-init data-te-target="#navbarSupportedContent1"
                aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="[&>svg]:w-7">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
                        <path fill-rule="evenodd"
                            d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </button>
            <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
                id="navbarSupportedContent1" data-te-collapse-item>
                <a class="mt-2 mr-2 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900  lg:mt-0"
                    href="#">
                    <img src="https://tecdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.png" style="height: 15px"
                        alt="" loading="lazy" />
                </a>
                <!-- Left links -->
                <ul class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row" data-te-navbar-nav-ref>
                    <li class="lg:pr-2" data-te-nav-item-ref>
                        <a class="text-neutral-500 hover:text-neutral-700 focus:text-neutral-700  lg:px-2 {{ $active === 'home' ? 'active' : '' }}"
                            href="/" data-te-nav-link-ref>Dashboard</a>
                    </li>
                    <li class="lg:pr-2" data-te-nav-item-ref>
                        <a class="text-neutral-500 hover:text-neutral-700 focus:text-neutral-700   lg:px-2 {{ $active === 'about' ? 'active' : '' }}"
                            href="/about" data-te-nav-link-ref>Team</a>
                    </li>
                    <li class="lg:pr-2" data-te-nav-item-ref>
                        <a class="text-neutral-500 hover:text-neutral-700 focus:text-neutral-700   lg:px-2 {{ $active === 'posts' ? 'active' : '' }}"
                            href="/posts" data-te-nav-link-ref>Projects</a>
                    </li>
                    <li class="lg:pr-2" data-te-nav-item-ref>
                        <a class="text-neutral-500 hover:text-neutral-700 focus:text-neutral-700   lg:px-2 {{ $active === 'categories' ? 'active' : '' }}"
                            href="/categories" data-te-nav-link-ref>Categories</a>
                    </li>
                </ul>
                <!-- Left links -->

                <ul class="flex">
                    @auth
                        <div class="relative" data-te-dropdown-ref>
                            <a class="flex items-center whitespace-nowrap rounded  px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-black transition duration-150 ease-in-out   motion-reduce:transition-none"
                                href="#" type="button" id="dropdownMenuButton2" data-te-dropdown-toggle-ref
                                aria-expanded="false" data-te-ripple-init data-te-ripple-color="light">
                                Welcome Back {{ auth()->user()->username }}
                                <span class="ml-2 w-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="h-5 w-5">
                                        <path fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </a>
                            <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
                                aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                                <li class="border-b">
                                    <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                        href="/dashboard" data-te-dropdown-item-ref>My Dashboard</a>
                                </li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit"
                                            class="text-left block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                            data-te-dropdown-item-ref>Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <li class="lg:pr-2" data-te-nav-item-ref>
                            <a class="text-neutral-500 hover:text-neutral-700 focus:text-neutral-700   lg:px-2 {{ $active === 'login' ? 'active' : '' }}"
                                href="/login" data-te-nav-link-ref>Login</a>
                        </li>
                        <li class="lg:pr-2" data-te-nav-item-ref>
                            <a class="text-neutral-500 hover:text-neutral-700 focus:text-neutral-700   lg:px-2 {{ $active === 'register' ? 'active' : '' }}"
                                href="/register" data-te-nav-link-ref>Register</a>
                        </li>
                    @endauth
                </ul>

            </div>
        </div>
    </nav>
</body>

</html>

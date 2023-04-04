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

<body class="bg-blue-300">
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
                        <a class="text-neutral-500 hover:text-neutral-700 focus:text-neutral-700  lg:px-2 {{ $tittle === "Home" ? 'active' : '' }}"
                            href="/" data-te-nav-link-ref>Dashboard</a>
                    </li>
                    <li class="lg:pr-2" data-te-nav-item-ref>
                        <a class="text-neutral-500 hover:text-neutral-700 focus:text-neutral-700   lg:px-2 {{ $tittle === "About" ? 'active' : '' }}"
                            href="/about" data-te-nav-link-ref>Team</a>
                    </li>
                    <li class="lg:pr-2" data-te-nav-item-ref>
                        <a class="text-neutral-500 hover:text-neutral-700 focus:text-neutral-700   lg:px-2 {{ $tittle === "Posts" ? 'active' : '' }}"
                            href="/posts" data-te-nav-link-ref>Projects</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
        </div>
    </nav>
</body>

</html>

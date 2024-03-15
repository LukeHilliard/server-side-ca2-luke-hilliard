<footer class="bg-red-600 py-20 mt-20">
    <div class="sm:grid grid-cols-3 w-4/5 pb-10 m-auto border-b-2 border-white">
        <div>
            <h3 class="text-l sm:font-bold text-white">
                Pages
            </h3>

            <ul class="py-4 sm:text-s pt-4 text-white">
                <li class="pb-2">
                    <a href="/">
                        Home
                    </a>
                </li>
                <li class="pb-2">
                    <a href="/blog">
                        Blog
                    </a>
                </li>

                @guest
                    <li class="pb-2">
                        <a href="/login">
                            Login
                        </a>
                    </li>
                    <li class="pb-2">
                        <a href="/register">
                            Register
                        </a>
                    </li>
                @endguest
            </ul>
        </div>


        <div>
            <h3 class="text-l sm:font-bold text-white">
                Find Us
            </h3>

            <ul class="py-4 sm:text-s pt-4 text-white">
                <li class="pb-2">
                    <a href="/">
                        What we do
                    </a>
                </li>
                <li class="pb-2">
                    <a href="/">
                        Address
                    </a>
                </li>
                <li class="pb-2">
                    <a href="/">
                        Phone
                    </a>
                </li>
                <li class="pb-2">
                    <a href="/">
                        Contact
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <h3 class="text-l sm:font-bold text-white">
                Latest posts
            </h3>

            <ul class="py-4 sm:text-s pt-4 text-white">
                <li class="pb-2 cursor-grab ">
                    <a href="{{ url('blog/the-thrill-of-the-track-exploring-our-passion-for-formula-1-racing') }}">
                        Why we love F1
                    </a>
                </li>
                <li class="pb-2">
                    <a href="{{ url('blog/controversy-in-abu-dhabi-2021-hamilton-vs-verstappen') }}">
                        Was Hamilton robbed?
                    </a>
                </li>
                <li class="pb-2">
                    <a href="{{ url('blog/verstappen-s-reign-at-red-bull-racing-a-formula-1-phenomenon-2') }}">
                        Verstappen Red Bull Reign
                    </a>
                </li>
                <li class="pb-2">
                    <a href="{{ url('blog/audi-s-entrance-to-formula-1-a-game-changer-in-the-making') }}">
                        Will Audi dominate in 2028?
                    </a>
                </li>

                <li class="pb-2">
                    <a href="{{ url('blog/unraveling-the-strategies-inside-the-pit-stop-dynamics-in-formula-1') }}">
                       The pit crew
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <p class="w-25 w-4/5 pb-3 m-auto text-xs text-white pt-6">
        Copyright 2024 Race With Luke. All Rights Reserved
    </p>
</footer>

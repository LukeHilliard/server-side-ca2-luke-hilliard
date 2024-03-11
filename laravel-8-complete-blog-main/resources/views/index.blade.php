@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-red text-5xl uppercase font-bold text-shadow-md pb-14">
                    Can't keep up with this season's drama?
                </h1>
                <a
                    href="{{ url('blog/') }}"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://www.racefans.net/wp-content/uploads/2021/12/racefansdotnet-21-12-12-13-44-06-27.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Controversy in Abu Dhabi 2021: Hamilton vs Verstappen
            </h2>

            <p class="py-8 text-gray-500 text-s">
                The Abu Dhabi Grand Prix in 2021 witnessed one of the most intense showdowns in Formula 1 history, with Lewis Hamilton and Max Verstappen battling it out for the championship title.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Hamilton, known for his strategic prowess and Verstappen, hailed as the young prodigy, clashed on the Yas Marina Circuit in a nail-biting finale.</p>

            <a
                href="{{ url('blog/controversy-in-abu-dhabi-2021-hamilton-vs-verstappen') }}"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-red-600 text-white">
        <h2 class="text-2xl pb-5 text-l">
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Aerodynamics
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Race Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Vehicle Dynamics
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Pit Stop Coordination
        </span>
    </div>

    <div class="text-center py-15">
        <h2 class="text-4xl font-bold py-4">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Stay updated with the latest news, analysis, and insights from the Formula 1 world. Explore our recent articles and dive deeper into the world of motorsport.
        </p>
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Featured Article
                </span>

                <h3 class="text-xl font-bold py-5">
                    Unraveling the Strategies: Inside the Pit Stop Dynamics in Formula 1
                </h3>
                <div class="py-5">
                    <p>
                        Delve into the intricacies of pit stop strategies in Formula 1 racing. Learn how teams meticulously plan and execute pit stops to gain crucial time on the track and gain an edge over their rivals. From tire changes to refueling tactics, uncover the secrets behind one of the most critical aspects of motorsport.
                    </p>
                </div>
                <a
                    href="blog/unraveling-the-strategies-inside-the-pit-stop-dynamics-in-formula-1"
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://media.istockphoto.com/id/166272854/photo/racing-team-working-at-pit-stop.jpg?s=612x612&w=0&k=20&c=QDpTVjRXwM633e8SuQR8fdyH3raNwKNVSndQ_sqHf-U=" width="700" alt="">
        </div>
    </div>
@endsection

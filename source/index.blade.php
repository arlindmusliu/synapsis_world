@extends('_layouts.master')

@section('body')
<div class="container my-8 pt-24">
    <div class="row" id="home">
        <div class="flex flex-col col-12 text-center">
            <h1 class="text-6xl text-gray-800">
                We build the future Entrepreneurs
            </h1>
            <img src="/assets/images/home_img.svg" alt="" class="w-full h-auto mt-12">
        </div>
    </div>
</div>
<div class="container my-32 text-gray-800">
    <div class="row" id="about">
        <div class="col-5 pt-20">
            <img src="/assets/images/welcome_img.svg" alt="" class="w-full h-auto">
        </div>
        <div class="col-6 ml-10">
            <h2 class="text-3xl my-4">
                <b>Welcome to Synapsis World</b>
            </h2>
            <h2 class="text-xl">
                <b>Center for Social Innovation & Sustainability</b>
            </h2>
            <div>
                <p class="my-4 text-justify ">
                    Synapsis World is an NGO working to support youth based in Debar, North Macedonia.
                    We focus on collaborative projects to improve the lives of children and increase their inclusion in our society.
                    We welcome cooperation from professionals in the fields of psychology, youth work, entrepreneurship, education,
                    & social policy who seek to form positive networks supporting youth. Our organization is created precisely to
                    create the “synapses”, or healthy connections, between youth, parents, & other members of society to benefit the common good of our community.
                </p>
                <h4 class="text-xl font-bold">Mission</h4>
                <p class="my-4 text-justify ">
                    Our mission is to promote the inclusion of children & young people in our society through projects that equip them with professional skills,
                    positive networks, mentorship, & increased self-esteem to form the “synapses” that build connections to improve our world. 
                </p>
                <h4 class="text-xl font-bold">Vision</h4>
                <p class="mt-4 mb-12 text-justify">
                    We envision a world where the needs of children are seen as the needs of the community, where children and young people are given
                    opportunities to contribute to society, and where our leaders promote children’s rights as human rights.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="bg-gray-800">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-white text-4xl text-center mt-8"><b>Services that we provide</b></h2>
                </h2>
            </div>
        </div>
        <div class="flex flex-row items-center mt-12">
            <div class="col-5">
                <img src="/assets/images/service1_img.svg" alt="service1-img" class="w-full h-auto">
            </div>
            <div class="col-7 ml-10">
                <h2 class="text-white text-xl text-center"><b>What we do</b></h2>
                <p class="mt-12 text-white text-justify">
                    Our organization focuses on three key areas to achieve its mission: Youth Empowerment,
                    Community Development, &Social Entrepreneurship. Within these themes, Synapsis World
                    seeks to provide various services that support our aim to promote youth inclusion in our society.
                    All of our projects seek to empower youth through providing them with new knowledge, skills,
                    & experiential learning opportunities that allow them to test themselves in safe, but challenging,
                    environments. Just as we seek to empower youth, we also set out to prove what we know to be true:
                    that engaging youth as full members of the community is necessary to inspire development that works
                    for all people, regardless of their age.<br> <br>When we promote youth inclusion & empowerment, we do so with
                    the greater community in mind. Finally, under the theme of social entrepreneurship, Synapsis World
                    promotes opportunities for youth & working professionals to engage in & consider projects that create
                    value & opportunity while promoting the good of all people in our community. Within these themes,
                    we seek to engage people of all ages in creative problem solving in various areas of economic, social,
                    & cultural life including: the promotion of tourism, child protection, civic engagement, business &
                    entrepreneurship, children’s and human rights, & mentorship programs. 
                </p>
            </div>
        </div>
    </div>
    <div class="container py-24">
        <div class="flex flex-row items-center">
            <div class="col-7">
                <h2 class="text-white text-xl text text-center font-bold"> We value </h2>
                <ul class="mt-10 mr-20 text-white text-justify">
                    <li class="py-2">
                        <b>Ambition:</b><br> Seeing opportunities where no one else does & having the drive to get things done.
                    </li>
                    <li class="py-2">
                        <b>Cooperation:</b><br> Building relationships to join forces for the good of those around us.
                    </li>
                    <li class="py-2">
                        <b>Creativity:</b><br> Practicing the art of problem solving & thinking outside of the box.
                    </li>
                    <li class="py-2">
                        <b>Commitment:</b><br> Never starting something you can’t finish & always following through.
                    </li>
                    <li class="py-2">
                        <b>Community:</b><br> The connections between people that celebrate difference, excite in what we share, and bring us together for a common aim.
                    </li>
                    <li class="py-2">
                        <b>Support & Inclusion:</b><br> A belief that all people should have a seat at the table & allies that help them raise their voice.
                    </li>
                    <li class="py-2">
                        <b>Social Entrepreneurship:</b><br> Institutions that build and take part in community, creating solutions to the problems we face while supporting others to do the same. 
                    </li>
                </ul>
            </div>
            <div class="col-5">
                <img src="/assets/images/service2_img.svg" alt="service2-img" class="w-full h-auto">
            </div>
        </div>
    </div>
</div>

<div class="flex-row">
    <div class="container text-gray-800">
        <div class="flex-row">
            <h1 class="text-4xl text-center font-bold mt-32">
                Our Partners
            </h1>
        </div>
        <div class="row my-20 items-center">
            <div class="col-3 mx-10">
                <img src="/assets/images/uslogo.svg" class="w-full h-auto" alt="">
            </div>
            <div class="col-3 mx-10">
                <img src="/assets/images/lokalnastruga.svg" class="w-full h-auto" alt="">
            </div>
            <div class="col-3 mx-10">
                <img src="/assets/images/globalweek.svg" class="w-full h-auto" alt="">
            </div>
            <div class="col-3 mx-10">
                <img src="/assets/images/maaalogo.svg" class="w-full h-auto" alt="">
            </div>
            <div class="col-3 mx-10">
                <img src="/assets/images/startuplogo.svg" class="w-full h-auto" alt="">
            </div>
            <div class="col-3 mx-10">
                <img src="/assets/images/globalaflogo.svg" class="w-full h-auto" alt="">
            </div>
            <div class="col-3 mx-10">
                <img src="/assets/images/dibralogo.svg" class="w-full h-auto" alt="">
            </div>
            <div class="col-3 mx-10">
                <img src="/assets/images/ceedlogo.svg" class="w-full h-auto" alt="">
            </div>
            <div class="col-3 mx-10">
                <img src="/assets/images/worldlogo.svg" class="w-full h-auto" alt="">
            </div>
        </div>
    </div>
</div>

<div class="flex-row bg-gray-800" id="projects">
    <div class="container text-white py-20">
        <div class="flex-row">
            <h1 class="text-4xl text-center font-bold">
                Latest projects
            </h1>
        </div>
        @foreach($projects as $project)
        <div class="row my-20 items-center">
            <div class="col-6">
                <img src="{{ $project->cover }}" class="w-full h-auto rounded-lg" alt="">
            </div>
            <div class="col-6">
                <h2 class="text-4xl">
                    {{ $project->title }}
                </h2>
                <p class="mt-2">
                    Supported by <b>{{ $project->sponsor }}</b>
                </p>
                <a href="{{ $project->getUrl() }}">
                <button class="mt-8 px-8 py-3 bg-white text-gray-800 rounded-lg">LEARN MORE</button>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container mt-40 mb-10 text-gray-800">
    <div class="row" id="contact">
        <div class="col-4">
            <img src="/assets/images/logo.svg" class="w-full h-auto" alt="">
        </div>
        <div class="col-2">
        </div>
        <div class="col-6">
            <h1 class="text-3xl font-bold">
                Get in touch with us
            </h1>
            <div class="row mt-12">
                <div class="col-5">
                    <p class="text-xl font-bold">Address </p>
                    <p class="mt-3 text-small">Velho Vllahovic Kulla 3/10 Debar, North Macedonia, 1250 </p>
                </div>
                <div class="col-2">
                </div>
                <div class="col-5">
                    <p class="text-xl font-bold">Contact </p>
                    <p class="mt-3 text-small">info@synapsisworld.org <br> +38970980313 </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
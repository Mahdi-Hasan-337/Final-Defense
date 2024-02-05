@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/course/load_more.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/course/load_more.js') }}"></script>
@endsection

@section('content')
    @include('Components.nav')

    <div class="container-fluid" style="margin:0;padding:0;box-sizing:border-box">

        <!-- Lately Section Start -->
        <section id="latelySection" class="py-5">
            <div class="container">
                <div class="row py-5">
                    <div class="col">
                        <h2 class="fs-2">
                            See what we’ve <strong class="strong">written lately</strong>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 ">
                        <div class="lately-blog-card m-3">
                            <figure class="card-banner">
                                <img src="{{ asset('images/load_more/ai.jpg') }}" loading="lazy"
                                    alt="Python is a high-level programming language">
                            </figure>
                            <div class="card-content">
                                <h3>
                                    <a href="{{ route('artificial_intelligence') }}" class="card-title">
                                        AI Evolution: From Logic to Learning
                                    </a>
                                </h3>
                                <p class="card-text">
                                    Artificial Intelligence (AI) stands as a groundbreaking field at the intersection of
                                    computer science,mathematics, and cognitive science, focused on developing systems and
                                    technologies that simulate human-like intelligence...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 ">
                        <div class="lately-blog-card m-3">
                            <figure class="card-banner">
                                <img src="{{ asset('images/load_more/algo.jpg') }}" loading="lazy"
                                    alt="C language is a versatile and widely used programming language">
                            </figure>
                            <div class="card-content">
                                <h3>
                                    <a href="{{ route('algorithm') }}" class="card-title">
                                        Exploring Computer Algorithms
                                    </a>
                                </h3>
                                <p class="card-text">
                                    Exploring Computer Algorithms" takes you on a captivating journey into the heart of
                                    computation. From sorting and searching to optimization and machine learning...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 ">
                        <div class="lately-blog-card m-3">
                            <figure class="card-banner">
                                <img src="{{ asset('images/load_more/DE.jpeg') }}" loading="lazy"
                                    alt="C++ is an extension of the C programming language">
                            </figure>
                            <div class="card-content">
                                <h3>
                                    <a href="{{ route('digital_electronics') }}" class="card-title">
                                        Digital Electronics
                                    </a>
                                </h3>
                                <p class="card-text">
                                    Wired Wonders: Navigating the Realm of Digital Electronics" invites you to journey into
                                    the
                                    intricate world where electrons dance to shape...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 ">
                        <div class="lately-blog-card m-3">
                            <figure class="card-banner">
                                <img src="{{ asset('images/load_more/micro.jpg') }}" loading="lazy"
                                    alt="Java is a versatile and platform-independent programming language">
                            </figure>
                            <div class="card-content">
                                <h3>
                                    <a href="{{ route('microprocessor') }}" class="card-title">
                                        Power of Microprocessors
                                    </a>
                                </h3>
                                <p class="card-text">
                                    Silicon Symphony: Unveiling the Power of Microprocessors" invites you to dive into the
                                    heart
                                    of computing innovation.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 ">
                        <div class="lately-blog-card m-3">
                            <figure class="card-banner">
                                <img src="{{ asset('images/load_more/mysql.jpg') }}" loading="lazy"
                                    alt="CSS (Cascading Style Sheets) is a styling language">
                            </figure>
                            <div class="card-content">
                                <h3>
                                    <a href="{{ route('mysql') }}" class="card-title">
                                        MySQL's Relational Landscape
                                    </a>
                                </h3>
                                <p class="card-text">
                                    Mastering Data Harmony: Navigating MySQL's Relational Landscape" is your guide to the
                                    world
                                    of structured data management...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 ">
                        <div class="lately-blog-card m-3">
                            <figure class="card-banner">
                                <img src="{{ asset('images/load_more/oop.jpg') }}" loading="lazy"
                                    alt="Python is a high-level programming language">
                            </figure>
                            <div class="card-content">
                                <h3>
                                    <a href="{{ route('oop') }}" class="card-title">
                                        Object-Oriented Programming
                                    </a>
                                </h3>
                                <p class="card-text">
                                    Unleashing Creativity in Code: The Essence of Object-Oriented Programming" is your
                                    gateway
                                    to a revolutionary approach to software development...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 ">
                        <div class="lately-blog-card m-3">
                            <figure class="card-banner">
                                <img src="{{ asset('images/load_more/react.png') }}" loading="lazy"
                                    alt="Python is a high-level programming language">
                            </figure>
                            <div class="card-content">
                                <h3>
                                    <a href="{{ route('react') }}" class="card-title">
                                        Exploring The World of React
                                    </a>
                                </h3>
                                <p class="card-text">
                                    Crafting Dynamic User Experiences: Exploring the World of React" is your gateway to the
                                    forefront of web development...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 ">
                        <div class="lately-blog-card m-3">
                            <figure class="card-banner">
                                <img src="{{ asset('images/load_more/VLSI.jpeg') }}" loading="lazy"
                                    alt="Python is a high-level programming language">
                            </figure>
                            <div class="card-content">
                                <h3>
                                    {{-- <a href="{{ route('constructionsms') }}" class="card-title"> --}}
                                    <a
                                        href="{{ route('constructionsms', ['course' => 'vlsi', 'yt_link' => 'youtube_link_1']) }}">Website</a>
                                    The VLSI Technology.
                                    </a>
                                </h3>
                                <p class="card-text">
                                    Shrinking Horizons: Exploring the Marvels of VLSI Technology" invites you to journey
                                    into
                                    the world...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 ">
                        <div class="lately-blog-card m-3">
                            <figure class="card-banner">
                                <img src="{{ asset('images/load_more/node_js.jpg') }}" loading="lazy"
                                    alt="Python is a high-level programming language">
                            </figure>
                            <div class="card-content">
                                <h3>
                                    <a href="{{ route('constructionsms', ['course' => 'python', 'yt_link' => 'youtube_link_1']) }}"
                                        class="card-title">
                                        Node JS
                                    </a>
                                </h3>
                                <p class="card-text">
                                    Node.js is an open-source, server-side JavaScript runtime environment that allows you to
                                    build scalable and high-performance network applications...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 ">
                        <div class="lately-blog-card m-3">
                            <figure class="card-banner">
                                <img src="{{ asset('images/load_more/CSS2.jpg') }}" loading="lazy"
                                    alt="Python is a high-level programming language">
                            </figure>
                            <div class="card-content">
                                <h3>
                                    <a href="{{ route('constructionsms', ['course' => 'css', 'yt_link' => 'youtube_link_1']) }}"
                                        class="card-title">
                                        CSS - Cascading Style Sheets
                                    </a>
                                </h3>
                                <p class="card-text">
                                    CSS stands for Cascading Style Sheets. It is a programming language used for styling and
                                    formatting the appearance of web pages. With CSS, you can define how HTML elements
                                    should be displayed on a webpage, including their font styles, colors, sizes, layouts,
                                    and positioning...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 ">
                        <div class="lately-blog-card m-3">
                            <figure class="card-banner">
                                <img src="{{ asset('images/load_more/mongobd.png') }}" loading="lazy"
                                    alt="Python is a high-level programming language">
                            </figure>
                            <div class="card-content">
                                <h3>
                                    <a href="{{ route('constructionsms', ['course' => 'mongodb', 'yt_link' => 'youtube_link_1']) }}"
                                        class="card-title">
                                        MongoBD
                                    </a>
                                </h3>
                                <p class="card-text">
                                    MongoDB is a powerful, flexible, and scalable document-oriented database that provides a
                                    non-relational approach to storing and retrieving data in a JSON-like format. It offers
                                    high performance and built-in features for replication and sharding, making it suitable
                                    for handling large volumes of data in modern applications...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 ">
                        <div class="lately-blog-card m-3">
                            <figure class="card-banner">
                                <img src="{{ asset('images/load_more/Jqury.jpg') }}" loading="lazy"
                                    alt="Python is a high-level programming language">
                            </figure>
                            <div class="card-content">
                                <h3>
                                    <a href="{{ route('constructionsms', ['course' => 'Jquery', 'yt_link' => 'youtube_link_1']) }}"
                                        class="card-title">
                                        jQury
                                    </a>
                                </h3>
                                <p class="card-text">
                                    jQuery is a fast, lightweight, and feature-rich JavaScript library that simplifies HTML
                                    document traversal, event handling, animations, and AJAX interactions for web
                                    development...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Lately Section End -->
    </div>

    @include('Components.footer')
@endsection

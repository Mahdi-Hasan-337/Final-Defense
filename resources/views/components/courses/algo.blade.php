@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/course/algo.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/course/algo.js') }}"></script>
@endsection

@section('content')
    @include('Components.nav')
    <!-- Info Section Start -->
    <section id="infoSection" class="info p-4">
        <div class="container">
            <h1 class="python text-center  mb-5 mt-2">Computer Algorithom</h1>
            <p id="infoCollapse">
            <div class="message" class="body">
                We are under construction. <br>Please be patient and stay with us. <br>Something great is loading.
            </div> <span id="dots">...</span><span id="more">..
            </span>
            <button class="fw-bold" onclick="myFunction()" id="myBtn">Read More</button>
            </p>
        </div>
    </section>
    <!-- Info Section End -->
    <!-- Courses Section Start -->
    <section id="courses" class=" my-3 py-5">
        <div class="container">
            <div class="row">
                <!-- Columns 1 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <table class="table table-bordered">
                        <thead class="fs-5 text-center">
                            <tr>
                                <th>Youtube</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($yt_links as $index => $yt_link)
                                <tr>
                                    <td class="py-3">
                                        <ol>
                                            <li><a
                                                    href="{{ route('constructionsms', ['course' => 'algorithm', 'yt_link' => $yt_link]) }}">Youtube
                                                    Link</a></li>
                                        </ol>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a href="{{ route('constructionsms', ['course' => 'algorithm', 'yt_link' => 'youtube_link_1']) }}">Youtube
                                                Link</a></li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a href="{{ route('constructionsms', ['course' => 'algorithm', 'yt_link' => 'youtube_link_1']) }}">Youtube
                                                Link</a></li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a href="{{ route('constructionsms', ['course' => 'algorithm', 'yt_link' => 'youtube_link_1']) }}">Youtube
                                                Link</a></li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a href="{{ route('constructionsms', ['course' => 'algorithm', 'yt_link' => 'youtube_link_1']) }}">Youtube
                                                Link</a></li>
                                    </ol>
                                </td>
                            </tr> --}}
                        </tbody>
                        <!-- Extra List -->
                        <tbody class="courseMore" id="col1CourseMore">
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a
                                                href="{{ route('constructionsms', ['course' => 'algorithm', 'yt_link' => 'youtube_link_1']) }}">Youtube
                                                Link</a></li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a
                                                href="{{ route('constructionsms', ['course' => 'algorithm', 'yt_link' => 'youtube_link_1']) }}">Youtube
                                                Link</a></li>
                                    </ol>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="courseBtnOverlay">
                        <button class="fw-bold" onclick="myCourseFunction('col1CourseMore')">Show More</button>
                    </div>
                </div>
                <!-- Columns 2 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <table class="table table table-bordered">
                        <thead class="fs-5 text-center">
                            <tr>
                                <th>Websites</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li>
                                            <a
                                                href="{{ route('constructionsms', ['course' => 'algorithm', 'yt_link' => 'youtube_link_1']) }}">Website</a>
                                        </li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a
                                                href="{{ route('constructionsms', ['course' => 'algorithm', 'yt_link' => 'youtube_link_1']) }}">Website</a>
                                        </li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a
                                                href="{{ route('constructionsms', ['course' => 'algorithm', 'yt_link' => 'youtube_link_1']) }}">Website</a>
                                        </li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a
                                                href="{{ route('constructionsms', ['course' => 'algorithm', 'yt_link' => 'youtube_link_1']) }}">Website</a>
                                        </li>
                                    </ol>
                                </td>
                            </tr>
                        </tbody>
                        <!-- Extra List -->
                        <tbody class="courseMore" id="col2CourseMore">
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a
                                                href="{{ route('constructionsms', ['course' => 'algorithm', 'yt_link' => 'youtube_link_1']) }}">Website</a>
                                        </li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a
                                                href="{{ route('constructionsms', ['course' => 'algorithm', 'yt_link' => 'youtube_link_1']) }}">Website</a>
                                        </li>
                                    </ol>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="courseBtnOverlay">
                        <button class="fw-bold" onclick="myCourseFunction('col2CourseMore')">Show More</button>
                    </div>
                </div>
                <!-- Columns 3 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <table class="table table table-bordered">
                        <thead class="fs-5 text-center">
                            <tr>
                                <th>Paid Courses</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a href="https://www.udemy.com">udemy premium course Link 1</a></li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a href="https://www.udemy.com">udemy premium course Link 2</a></li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a href="https://www.udemy.com">udemy premium course Link 3</a></li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a href="https://www.udemy.com">udemy premium course Link 4</a></li>
                                    </ol>
                                </td>
                            </tr>
                        </tbody>
                        <!-- Extra List -->
                        <tbody class="courseMore" id="col3CourseMore">
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a href="https://www.leadinguniversity.com">Lu Link 5</a></li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a href="https://www.leadinguniversity.com">Lu Link 6</a></li>
                                    </ol>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="courseBtnOverlay">
                        <button class="fw-bold" onclick="myCourseFunction('col3CourseMore')">Show More</button>
                    </div>
                </div>
                <!-- Columns 4 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <table class="table table table-bordered">
                        <thead class="fs-5 text-center">
                            <tr>
                                <th class="text-uppercase">lu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a href="https://www.leadinguniversity.com">Lu Link 1</a></li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a href="https://www.leadinguniversity.com">Lu Link 2</a></li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a href="https://www.leadinguniversity.com">Lu Link 3</a></li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a href="https://www.leadinguniversity.com">Lu Link 4</a></li>
                                    </ol>
                                </td>
                            </tr>
                        </tbody>
                        <!-- Extra List -->
                        <tbody class="courseMore" id="col4CourseMore">
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a href="https://www.leadinguniversity.com">Lu Link 5</a></li>
                                    </ol>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3">
                                    <ol>
                                        <li><a href="https://www.leadinguniversity.com">Lu Link 6</a></li>
                                    </ol>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="courseBtnOverlay">
                        <button class="fw-bold" onclick="myCourseFunction('col4CourseMore')">Show More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses Section End -->
    </div>
    @include('Components.footer')
@endsection

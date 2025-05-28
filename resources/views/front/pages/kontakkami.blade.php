@extends('front.layout.app')
@section('content')
    <section class="md:h-screen w-full">
        <div class="container-fluid relative">
            <div class="grid grid-cols-1">
                <div class="border-0 w-full">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15854.152215999416!2d109.9140206!3d-7.2825185!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f6df11c9f3039%3A0x0!2zN8KwMTYnNTcuMSJTIDEwOcKwNTQnNTkuNyJF!5e0!3m2!1sen!2sid!4v1685296800000!5m2!1sen!2sid"
                        style="border:0" class="h-screen w-full" allowfullscreen loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                </div>

                <div
                    class="md:flex justify-center fixed top-2/4 -translate-y-2/4 ltr:md:-translate-x-2/4 rtl:md:translate-x-2/4 md:start-2/4 start-3 md:end-auto end-3 m-auto">
                    <div
                        class="max-w-[400px] w-full bg-white dark:bg-slate-900 rounded-md shadow-xl dark:shadow-gray-800 px-6 py-8">
                        <a href="{{ url('/') }}"><img src="Logo-removebg-preview.png" class="mx-auto" alt=""></a>
                        <div class="text-center mt-4">
                            <a href="https://maps.google.com/?q=-7.2825185,109.9165955" target="_blank" rel="noopener noreferrer"
                               class="inline-block px-6 py-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">
                              Buka di Google Maps
                            </a>
                          </div>

                        {{-- <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                            <p class="mb-0" id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="name" class="font-semibold">Your Name:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="user" class="size-4 absolute top-3 start-4"></i>
                                            <input name="name" id="name" type="text"
                                                class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Name :">
                                        </div>
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-start">
                                        <label for="email" class="font-semibold">Your Email:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                            <input name="email" id="email" type="email"
                                                class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Email :">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1">
                                <div class="mb-5">
                                    <div class="text-start">
                                        <label for="subject" class="font-semibold">Your Question:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="book" class="size-4 absolute top-3 start-4"></i>
                                            <input name="subject" id="subject"
                                                class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Subject :">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <div class="text-start">
                                        <label for="comments" class="font-semibold">Your Comment:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="message-circle" class="size-4 absolute top-3 start-4"></i>
                                            <textarea name="comments" id="comments"
                                                class="form-input ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                placeholder="Message :"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="submit" name="send"
                                class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full justify-center items-center">Send
                                Message</button>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="fixed bottom-3 end-3">
        <a href="{{ url('/') }}" class="back-button size-9 inline-flex items-center justify-center tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full"><i data-feather="arrow-left" class="size-4"></i></a>
    </div>
@endsection

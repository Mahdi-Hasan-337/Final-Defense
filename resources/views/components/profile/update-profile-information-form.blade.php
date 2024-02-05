<section>
    @auth
        <form action="{{ route('profile.updates', encrypt(Auth::user()->id)) }}" method="post" enctype="multipart/form-data">
            @csrf
            <h2 class="modal-title text-center mb-2" id="updatemodalLabel">Update Profile</h2>

            <div class="modal-body">
                <input type="hidden" name="update_id" value="{{ encrypt(Auth::user()->id) }}">
                <div class="mb-3 d-flex justify-content-center">
                    @if (Auth::user()->featured_image)
                        <img class="d-flex justify-content-center"
                            style="width: 100px; height: 100px; object-fit: cover; border: 2px solid black;"
                            src="{{ asset('uploads/' . Auth::user()->featured_image) }}" alt="">
                    @else
                        <!-- Default image if featured_image is not set -->
                        <img class="text-center"
                            style="width: 100px; height: 100px; object-fit: cover; border: 2px solid black;"
                            src="{{ asset('images/campusdotcrew.png') }}" alt="Default Avatar">
                    @endif
                </div>

                <div class="mb-3 d-flex justify-content-center">
                    <input type="file" id="featuredImage" name="featured_image" class="form-control">
                </div>

                <div class="full d-flex justify-content-between">
                    <div class="full1 col-6" style="padding-right:0.5rem;">

                        <div class="row g-3 align-items-center mb-3">
                            <div class="col-3">
                                <label class="form-label">Name</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Enter Name" value="{{ Auth::user()->name }}">
                            </div>
                        </div>

                        <div class="row g-3 align-items-center mb-3">
                            <div class="col-3">
                                <label class="form-label">Email</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="email" id="email" class="form-control"
                                    placeholder="Enter Email" value="{{ Auth::user()->email }} " readonly>
                            </div>
                        </div>

                        <div class="row g-3 align-items-center mb-3">
                            <div class="col-3">
                                <label class="form-label">Phone</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="phone" id="phone" class="form-control"
                                    placeholder="Enter Phone" value="{{ Auth::user()->mobile }}">
                            </div>
                        </div>
                    </div>

                    <div class="full2 col-6" style="padding-left:0.5rem;">
                        <div class="row g-3 align-items-center mb-3">
                            <div class="col-3">
                                <label class="form-label">Facebook</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="facebook" id="facebook" class="form-control"
                                    placeholder="Enter Facebook Account Link" value="{{ Auth::user()->facebook }}">
                            </div>
                        </div>

                        <div class="row g-3 align-items-center mb-3">
                            <div class="col-3">
                                <label class="form-label">Telegram</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="telegram" id="email" class="form-control"
                                    placeholder="Enter Telegram Account Link" value="{{ Auth::user()->telegram }}">
                            </div>
                        </div>

                        <div class="row g-3 align-items-center mb-3">
                            <div class="col-3">
                                <label class="form-label">Github</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="github" id="phone" class="form-control"
                                    placeholder="Enter Github Account Link" value="{{ Auth::user()->github }}">
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" name="updatedata" class="col-12 btn btn-primary mb-3 p-2"><i
                        class='fa-solid fa-pen-to-square'></i> UPDATE</button>
            </div>
        </form>
    @endauth

    {{-- <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header> --}}
    {{-- <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form> --}}

    {{-- <form method="post" action="{{ route('profile.update', Auth::user()->id) }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form> --}}
</section>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FavIcon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/icons/fav-icon.png') }}">
    <!-- Bootstap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Main css file -->
    <link rel="stylesheet" href="{{ asset('assets/style/main.css') }}">

    <title>rs4it System</title>
</head>

<body>

    <div class="overview clients d-flex">

        <div class="sidebar d-flex flex-column" id="sidebar">

            <button id="sidebarBtn">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor"
                    height="20px" width="20px" version="1.1" id="Layer_1" viewBox="0 0 297 297"
                    xml:space="preserve">
                    <g>
                        <g>
                            <g>
                                <path
                                    d="M279.368,24.726H102.992c-9.722,0-17.632,7.91-17.632,17.632V67.92c0,9.722,7.91,17.632,17.632,17.632h176.376     c9.722,0,17.632-7.91,17.632-17.632V42.358C297,32.636,289.09,24.726,279.368,24.726z" />
                                <path
                                    d="M279.368,118.087H102.992c-9.722,0-17.632,7.91-17.632,17.632v25.562c0,9.722,7.91,17.632,17.632,17.632h176.376     c9.722,0,17.632-7.91,17.632-17.632v-25.562C297,125.997,289.09,118.087,279.368,118.087z" />
                                <path
                                    d="M279.368,211.448H102.992c-9.722,0-17.632,7.91-17.632,17.633v25.561c0,9.722,7.91,17.632,17.632,17.632h176.376     c9.722,0,17.632-7.91,17.632-17.632v-25.561C297,219.358,289.09,211.448,279.368,211.448z" />
                                <path
                                    d="M45.965,24.726H17.632C7.91,24.726,0,32.636,0,42.358V67.92c0,9.722,7.91,17.632,17.632,17.632h28.333     c9.722,0,17.632-7.91,17.632-17.632V42.358C63.597,32.636,55.687,24.726,45.965,24.726z" />
                                <path
                                    d="M45.965,118.087H17.632C7.91,118.087,0,125.997,0,135.719v25.562c0,9.722,7.91,17.632,17.632,17.632h28.333     c9.722,0,17.632-7.91,17.632-17.632v-25.562C63.597,125.997,55.687,118.087,45.965,118.087z" />
                                <path
                                    d="M45.965,211.448H17.632C7.91,211.448,0,219.358,0,229.081v25.561c0,9.722,7.91,17.632,17.632,17.632h28.333     c9.722,0,17.632-7.91,17.632-17.632v-25.561C63.597,219.358,55.687,211.448,45.965,211.448z" />
                            </g>
                        </g>
                    </g>
                </svg>
            </button>

            <a href="/" class="d-flex"><img src="assets/icons/logo.png" alt=""></a>

            <div class="items d-flex flex-column gap-3" id="items">
                <a href="/" class="d-flex align-items-center gap-3 py-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                        fill="none">
                        <path
                            d="M16.5332 3V5H12.7999V3H16.5332ZM7.19985 3V9H3.46652V3H7.19985ZM16.5332 11V17H12.7999V11H16.5332ZM7.19985 15V17H3.46652V15H7.19985ZM18.3999 1H10.9332V7H18.3999V1ZM9.06652 1H1.59985V11H9.06652V1ZM18.3999 9H10.9332V19H18.3999V9ZM9.06652 13H1.59985V19H9.06652V13Z"
                            fill="currentColor" />
                    </svg>
                    <span>Overview</span>
                </a>
                <a href="{{ route('getCategory') }}" class="d-flex align-items-center gap-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14"
                        fill="none">
                        <path
                            d="M12.1323 7.57373C13.193 8.34521 13.9363 9.39044 13.9363 10.7841V13.2727H17.0333V10.7841C17.0333 8.97566 14.2692 7.90555 12.1323 7.57373Z"
                            fill="currentColor" />
                        <path
                            d="M10.8394 6.63636C12.5505 6.63636 13.9364 5.15148 13.9364 3.31818C13.9364 1.48489 12.5505 0 10.8394 0C10.4755 0 10.1349 0.0829544 9.80969 0.199091C10.4523 1.05352 10.8394 2.14023 10.8394 3.31818C10.8394 4.49614 10.4523 5.58284 9.80969 6.43727C10.1349 6.55341 10.4755 6.63636 10.8394 6.63636Z"
                            fill="currentColor" />
                        <path
                            d="M6.19389 6.63636C7.90497 6.63636 9.29086 5.15148 9.29086 3.31818C9.29086 1.48489 7.90497 0 6.19389 0C4.48282 0 3.09692 1.48489 3.09692 3.31818C3.09692 5.15148 4.48282 6.63636 6.19389 6.63636ZM6.19389 1.65909C7.04556 1.65909 7.74238 2.40568 7.74238 3.31818C7.74238 4.23068 7.04556 4.97727 6.19389 4.97727C5.34223 4.97727 4.64541 4.23068 4.64541 3.31818C4.64541 2.40568 5.34223 1.65909 6.19389 1.65909Z"
                            fill="currentColor" />
                        <path
                            d="M6.19394 7.46582C4.12671 7.46582 0 8.57741 0 10.784V13.2726H12.3879V10.784C12.3879 8.57741 8.26117 7.46582 6.19394 7.46582ZM10.8394 11.6135H1.54848V10.7923C1.70333 10.195 4.10348 9.12491 6.19394 9.12491C8.28439 9.12491 10.6845 10.195 10.8394 10.784V11.6135Z"
                            fill="currentColor" />
                    </svg>
                    <span>Categories</span>
                </a>
                <a href="{{ route('getNickname') }}" class="d-flex align-items-center gap-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                        fill="none">
                        <path
                            d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM10 18C5.59 18 2 14.41 2 10C2 5.59 5.59 2 10 2C14.41 2 18 5.59 18 10C18 14.41 14.41 18 10 18Z"
                            fill="currentColor" />
                        <path
                            d="M6 14C7.10457 14 8 13.1046 8 12C8 10.8954 7.10457 10 6 10C4.89543 10 4 10.8954 4 12C4 13.1046 4.89543 14 6 14Z"
                            fill="currentColor" />
                        <path
                            d="M10 8C11.1046 8 12 7.10457 12 6C12 4.89543 11.1046 4 10 4C8.89543 4 8 4.89543 8 6C8 7.10457 8.89543 8 10 8Z"
                            fill="currentColor" />
                        <path
                            d="M14 14C15.1046 14 16 13.1046 16 12C16 10.8954 15.1046 10 14 10C12.8954 10 12 10.8954 12 12C12 13.1046 12.8954 14 14 14Z"
                            fill="currentColor" />
                    </svg>
                    <span>Nicknames</span>
                </a>
                <a href="{{ route('getInvitation') }}" class="d-flex align-items-center gap-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                        fill="none">
                        <path
                            d="M15.825 11.325C16.0056 11.325 16.1549 11.2657 16.2729 11.1471C16.391 11.0285 16.45 10.8785 16.45 10.6971C16.45 10.5157 16.391 10.3667 16.2729 10.25C16.1549 10.1333 16.0056 10.075 15.825 10.075H12.825C12.6445 10.075 12.4951 10.1343 12.3771 10.2529C12.259 10.3715 12.2 10.5215 12.2 10.7029C12.2 10.8843 12.259 11.0333 12.3771 11.15C12.4951 11.2667 12.6445 11.325 12.825 11.325H15.825ZM15.825 14.15C16.0056 14.15 16.1549 14.0907 16.2729 13.9721C16.391 13.8535 16.45 13.7035 16.45 13.5221C16.45 13.3407 16.391 13.1917 16.2729 13.075C16.1549 12.9583 16.0056 12.9 15.825 12.9H12.825C12.6445 12.9 12.4951 12.9593 12.3771 13.0779C12.259 13.1965 12.2 13.3465 12.2 13.5279C12.2 13.7093 12.259 13.8583 12.3771 13.975C12.4951 14.0917 12.6445 14.15 12.825 14.15H15.825ZM12.6 5H18.5C18.9 5 19.25 5.15 19.55 5.45C19.85 5.75 20 6.1 20 6.5V18.5C20 18.9 19.85 19.25 19.55 19.55C19.25 19.85 18.9 20 18.5 20H1.5C1.1 20 0.75 19.85 0.45 19.55C0.15 19.25 0 18.9 0 18.5V6.5C0 6.1 0.15 5.75 0.45 5.45C0.75 5.15 1.1 5 1.5 5H7.425V1.5C7.425 1.1 7.575 0.75 7.875 0.45C8.175 0.15 8.525 0 8.925 0H11.1C11.5 0 11.85 0.15 12.15 0.45C12.45 0.75 12.6 1.1 12.6 1.5V5ZM8.925 6.5H11.1V1.5H8.925V6.5ZM6.85 12.9C7.225 12.9 7.54375 12.7688 7.80625 12.5063C8.06875 12.2438 8.2 11.925 8.2 11.55C8.2 11.175 8.06875 10.8562 7.80625 10.5938C7.54375 10.3313 7.225 10.2 6.85 10.2C6.475 10.2 6.15625 10.3313 5.89375 10.5938C5.63125 10.8562 5.5 11.175 5.5 11.55C5.5 11.925 5.63125 12.2438 5.89375 12.5063C6.15625 12.7688 6.475 12.9 6.85 12.9ZM3.8 15.825H9.775V15.475C9.775 15.175 9.7 14.9083 9.55 14.675C9.4 14.4417 9.20833 14.2833 8.975 14.2C8.44167 14.0167 8.025 13.8958 7.725 13.8375C7.425 13.7792 7.13333 13.75 6.85 13.75C6.53333 13.75 6.19583 13.7875 5.8375 13.8625C5.47917 13.9375 5.075 14.05 4.625 14.2C4.375 14.2833 4.175 14.4417 4.025 14.675C3.875 14.9083 3.8 15.175 3.8 15.475V15.825ZM7.425 6.5H1.5V18.5H18.5V6.5H12.6C12.6 6.96667 12.4458 7.33333 12.1375 7.6C11.8292 7.86667 11.4417 8 10.975 8H9.025C8.575 8 8.19583 7.86667 7.8875 7.6C7.57917 7.33333 7.425 6.96667 7.425 6.5Z"
                            fill="currentColor" />
                    </svg>
                    <span>Invitations</span>
                </a>
                <a href="{{ route('getSarname') }}" class="d-flex align-items-center gap-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                        fill="none">
                        <path
                            d="M2 2H18V14H3.17L2 15.17V2ZM2 0C0.9 0 0.00999999 0.9 0.00999999 2L0 20L4 16H18C19.1 16 20 15.1 20 14V2C20 0.9 19.1 0 18 0H2ZM4 10H12V12H4V10ZM4 7H16V9H4V7ZM4 4H16V6H4V4Z"
                            fill="currentColor" />
                    </svg>
                    <span>Sarname</span>
                </a>
                <a href="{{ route('getEvent') }}" class="d-flex align-items-center gap-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                        fill="none">
                        <path
                            d="M7 19H13M7 19V14M7 19H1.6C1.26863 19 1 18.7314 1 18.4V14.6C1 14.2686 1.26863 14 1.6 14H7M13 19V7M13 19H18.4C18.7314 19 19 18.7314 19 18.4V1.6C19 1.26863 18.7314 1 18.4 1H13.6C13.2686 1 13 1.26863 13 1.6V7M7 14V7.6C7 7.26863 7.26863 7 7.6 7H13"
                            stroke="currentColor" stroke-width="1.5" />
                    </svg>
                    <span>Events</span>
                </a>

                <a href="{{ route('getPlace') }}" class="d-flex align-items-center gap-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                        fill="none">
                        <path
                            d="M7 19H13M7 19V14M7 19H1.6C1.26863 19 1 18.7314 1 18.4V14.6C1 14.2686 1.26863 14 1.6 14H7M13 19V7M13 19H18.4C18.7314 19 19 18.7314 19 18.4V1.6C19 1.26863 18.7314 1 18.4 1H13.6C13.2686 1 13 1.26863 13 1.6V7M7 14V7.6C7 7.26863 7.26863 7 7.6 7H13"
                            stroke="currentColor" stroke-width="1.5" />
                    </svg>
                    <span>Places</span>
                </a>

            </div>



            <a href="{{ route('logout') }}" class="logout d-flex align-items-center gap-2"
                onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                    fill="none">
                    <path
                        d="M14 5L12.59 6.41L14.17 8H6V10H14.17L12.59 11.58L14 13L18 9L14 5ZM2 2H9V0H2C0.9 0 0 0.9 0 2V16C0 17.1 0.9 18 2 18H9V16H2V2Z"
                        fill="currentColor" />
                </svg>
                logout
            </a>

        </div>

        <div class="page">

            <div class="navbar d-flex align-items-center justify-content-between">



                <div class="profile d-flex align-items-center gap-2">

                    <div class="data d-flex flex-column">
                        <h3>{{ Auth::user()->name }}</h3>
                        <h4>Admin</h4>
                    </div>
                </div>

            </div>

            <div class="add-client add-company pt-4 px-3 mb-5">

                <h2 class="d-flex align-items-center gap-2 mb-4 pt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                        fill="none">
                        <path
                            d="M8 10C5.32571 10 0 11.3371 0 14V16H16V14C16 11.3371 10.6743 10 8 10ZM2.67429 13.7143C3.63429 13.0514 5.95429 12.2857 8 12.2857C10.0457 12.2857 12.3657 13.0514 13.3257 13.7143H2.67429ZM8 8C10.2057 8 12 6.20571 12 4C12 1.79429 10.2057 0 8 0C5.79429 0 4 1.79429 4 4C4 6.20571 5.79429 8 8 8ZM8 2.28571C8.94857 2.28571 9.71429 3.05143 9.71429 4C9.71429 4.94857 8.94857 5.71429 8 5.71429C7.05143 5.71429 6.28571 4.94857 6.28571 4C6.28571 3.05143 7.05143 2.28571 8 2.28571Z"
                            fill="#2D3245" />
                    </svg>
                    Edit Invitation
                </h2>

                <form method="POST" class="data" action="{{ route('updateInvitation') }}">
                    @csrf

                    <input name="id" value="{{ $Invitation->id }}" hidden>

                    <div class="top bg-white p-4 mb-5">

                        <div class="head mb-4 d-flex align-items-center justify-content-between">
                            <h2>Invitation information</h2>
                        </div>

                        <div class="mb-4">

                            <div class="line d-flex justify-content-between gap-3 mb-4">

                                <div class="input d-flex flex-column gap-2">
                                    <label>person name</label>

                                    <input id="name" type="text" class="p-3 @error('name') is-invalid @enderror"
                                        name="name" value="{{$Invitation->name}}" required autocomplete="name"
                                        autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="input d-flex flex-column gap-2">
                                    <label> email</label>

                                    <input id="email" type="email"
                                        class="p-3 @error('email') is-invalid @enderror" name="email"
                                        value="{{$Invitation->email}}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>



                            </div>

                            <div class="line d-flex justify-content-between gap-3 mb-4">

                                <div class="input d-flex flex-column gap-2">
                                    <label> phone</label>

                                    <input id="phone" type="phone"
                                        class="p-3 @error('phone') is-invalid @enderror" name="phone"
                                        value="{{$Invitation->phone}}" required autocomplete="phone" autofocus>

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="input d-flex flex-column gap-2">
                                    <label> Position</label>

                                    <input id="position" type="text"
                                        class="p-3 @error('position') is-invalid @enderror" name="position"
                                        value="{{$Invitation->position}}" required autocomplete="position" autofocus>

                                    @error('position')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>



                            </div>


                            <div class="line d-flex justify-content-between gap-3 mb-4">

                                <div class="input d-flex flex-column gap-2">
                                    <label>sarname</label>
                                    <select name="sarname_id" id="" class="p-3" required>
                                        <option value="{{$Invitation->Sarname->title}}" >{{$Invitation->Sarname->title}}</option>
                                        @foreach ($sarnames as $Invitation)
                                            <option value="{{ $Invitation->id }}">{{ $Invitation->title }}</option>
                                        @endforeach


                                    </select>
                                    @error('sarname_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="input d-flex flex-column gap-2">
                                    <label>nickname</label>
                                    <select name="nickname_id" id="" class="p-3" required>
                                        <option value="{{$Invitation->Nickname}}">{{$Invitation->Nickname}}</option>
                                        @foreach ($nicknames as $Invitation)
                                            <option value="{{ $Invitation->id }}">{{ $Invitation->title }}</option>
                                        @endforeach


                                    </select>
                                    @error('nickname_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                            </div>
                            <div class="line d-flex justify-content-between gap-3 mb-4">

                                <div class="input d-flex flex-column gap-2">
                                    <label>category</label>
                                    <select name="category_id" id="" class="p-3" required>
                                        <option value="{{$Invitation->Category}}"  >{{$Invitation->Category}}</option>
                                        @foreach ($categories as $Invitation)
                                            <option value="{{ $Invitation->id }}">{{ $Invitation->title }}</option>
                                        @endforeach


                                    </select>
                                    @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="input d-flex flex-column gap-2">
                                    <label>event</label>
                                    <select name="event_id" id="" class="p-3" required>
                                        <option value="{{$Invitation->Event}}">{{$Invitation->Event}}</option>
                                        @foreach ($events as $Invitation)
                                            <option value="{{ $Invitation->id }}">{{ $Invitation->title }}</option>
                                        @endforeach


                                    </select>
                                    @error('event_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                            </div>
                            <div class="line d-flex justify-content-between gap-3 mb-4">

                                <div class="input d-flex flex-column gap-2">
                                    <label>type</label>
                                    <select name="type" id="" class="p-3" required>
                                        <option value="{{$Invitation->type}}">{{$Invitation->type}}</option>

                                        <option value="داخلي">داخلي</option>
                                        <option value="خارجي">خارجي</option>



                                    </select>
                                    @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="input d-flex flex-column gap-2">
                                    <label>staus</label>
                                    <select name="status" id="" class="p-3" required>
                                        <option value="{{$Invitation->status}}">{{$Invitation->status}}</option>

                                        <option value="مؤكد">مؤكد</option>
                                        <option value="تم التسليم">تم التسليم</option>
                                        <option value="ملغي">ملغي</option>



                                    </select>
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input d-flex flex-column gap-2">
                                    <label> company</label>

                                    <input id="company" type="text"
                                        class="p-3 @error('company') is-invalid @enderror" name="company"
                                        value="{{$Invitation->company}}" required autocomplete="company" autofocus>

                                    @error('company')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                            </div>

                        </div>

                        <div class="bottom d-flex align-items-center justify-content-between">
                            <div class="clear d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18"
                                    viewBox="0 0 14 18" fill="none">
                                    <path
                                        d="M11 6V16H3V6H11ZM9.5 0H4.5L3.5 1H0V3H14V1H10.5L9.5 0ZM13 4H1V16C1 17.1 1.9 18 3 18H11C12.1 18 13 17.1 13 16V4Z"
                                        fill="currentColor" />
                                </svg>
                                <input type="reset" value="Clear">
                            </div>
                            <div class="buttons d-flex align-items-center gap-4">
                                <a href="{{ route('getInvitation') }}">Cancel</a>
                                <button type="submit">Save</button>
                            </div>
                        </div>

                </form>









            </div>



        </div>

    </div>



















    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!--  -->
    <script src="{{ asset('assets/js/index.js') }}"></script>
</body>

</html>

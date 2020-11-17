<div style="width: 100%">
<!-- Chats Page Start -->
<div class="chats">
    <div class="d-flex flex-column justify-content-center text-center h-100 w-100">
        <div class="container">
            <div class="avatar avatar-lg mb-2">
                <img class="avatar-img" src="{{asset('chat/assets/media/avatar/4.png')}}" alt="">
            </div>

            <h5>Welcome, Christina!</h5>
            <p class="text-muted">Please select a chat to Start messaging.</p>

            <button class="btn btn-outline-primary no-box-shadow" type="button" data-toggle="modal" data-target="#startConversation">
                Start a conversation
            </button>
        </div>
    </div>
</div>
<!-- Chats Page End -->

<!-- Call Log Page Start -->
<div class="calls px-0 py-2 p-xl-3">
    <div class="container-xl">
        <div class="row">
            <div class="col">
                <div class="card card-bg-1 mb-3">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center">
                            <div class="avatar avatar-lg mb-3">
                                <img class="avatar-img" src="../assets/media/avatar/2.png" alt="">
                            </div>

                            <div class="d-flex flex-column align-items-center">
                                <h5 class="mb-1">Catherine Richardson</h5>
                                <p class="text-white rounded px-2 bg-primary">+01-202-265462</p>
                            </div>
                        </div>
                    </div>

                    <div class="card-options">
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                                </svg>

                                <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/dots-vertical.svg" alt=""> -->
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Clear Call Log</a>
                                <a class="dropdown-item" href="#">Block</a>
                            </div>
                        </div>
                    </div>

                    <div class="chat-closer d-xl-none">
                        <!-- Chat Back Button (Visible only in Small Devices) -->
                        <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted" type="button" data-close="">
                            <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>

                            <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/arrow-left.svg" alt=""> -->
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <div class="row calls-log">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="avatar avatar-primary mr-2">
                                            <span>
                                                <svg class="hw-24" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M14.414 7l3.293-3.293a1 1 0 00-1.414-1.414L13 5.586V4a1 1 0 10-2 0v4.003a.996.996 0 00.617.921A.997.997 0 0012 9h4a1 1 0 100-2h-1.586z"/>
                                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                                </svg>

                                                <!-- <img class="injectable hw-24" src="./../assets/media/heroicons/solid/phone-incoming.svg" alt=""> -->
                                            </span>
                            </div>

                            <div class="media-body">
                                <h6>Incoming Call</h6>

                                <div class="d-flex flex-column flex-sm-row align-items-sm-center align-items-start">
                                    <p class="text-muted mb-0">Just now</p><span class="d-none d-sm-block text-muted mx-2">•</span>
                                    <p class="text-muted mb-0">2m 35s</p>
                                </div>
                            </div>

                            <div class="media-options ml-1 d-none d-sm-block">
                                <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted" type="button" >
                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>

                                    <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="avatar avatar-primary mr-2">
                                            <span>
                                                <svg class="hw-24" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M17.924 2.617a.997.997 0 00-.215-.322l-.004-.004A.997.997 0 0017 2h-4a1 1 0 100 2h1.586l-3.293 3.293a1 1 0 001.414 1.414L16 5.414V7a1 1 0 102 0V3a.997.997 0 00-.076-.383z"/>
                                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                                  </svg>

                                                <!-- <img class="injectable hw-24" src="./../assets/media/heroicons/solid/phone-outgoing.svg" alt=""> -->
                                            </span>
                            </div>

                            <div class="media-body">
                                <h6>Outgoing Call</h6>

                                <div class="d-flex flex-column flex-sm-row align-items-sm-center align-items-start">
                                    <p class="text-muted mb-0">5 mins ago</p><span class="d-none d-sm-block text-muted mx-2">•</span>
                                    <p class="text-muted mb-0">12m 25s</p>
                                </div>
                            </div>

                            <div class="media-options ml-1 d-none d-sm-block">
                                <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted" type="button" >
                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>

                                    <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="avatar avatar-primary mr-2">
                                            <span>
                                                <svg class="hw-24" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M14.414 7l3.293-3.293a1 1 0 00-1.414-1.414L13 5.586V4a1 1 0 10-2 0v4.003a.996.996 0 00.617.921A.997.997 0 0012 9h4a1 1 0 100-2h-1.586z"/>
                                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                                </svg>
                                                <!-- <img class="injectable hw-24" src="./../assets/media/heroicons/solid/phone-incoming.svg" alt=""> -->
                                            </span>
                            </div>

                            <div class="media-body">
                                <h6 class="text-danger">Missed Call</h6>

                                <div class="d-flex flex-column flex-sm-row align-items-sm-center align-items-start">
                                    <p class="text-muted mb-0">18 mins ago</p>
                                </div>
                            </div>

                            <div class="media-options ml-1 d-none d-sm-block">
                                <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted" type="button" >
                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="avatar avatar-primary mr-2">
                                            <span>
                                                <svg class="hw-24" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M17.924 2.617a.997.997 0 00-.215-.322l-.004-.004A.997.997 0 0017 2h-4a1 1 0 100 2h1.586l-3.293 3.293a1 1 0 001.414 1.414L16 5.414V7a1 1 0 102 0V3a.997.997 0 00-.076-.383z"/>
                                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                                </svg>

                                                <!-- <img class="injectable hw-24" src="./../assets/media/heroicons/solid/phone-outgoing.svg" alt=""> -->
                                            </span>
                            </div>

                            <div class="media-body">
                                <h6>Outgoing Call</h6>

                                <div class="d-flex flex-column flex-sm-row align-items-sm-center align-items-start">
                                    <p class="text-muted mb-0">Yesterday at 10:45PM</p><span class="d-none d-sm-block text-muted mx-2">•</span>
                                    <p class="text-muted mb-0">25m 18s</p>
                                </div>
                            </div>

                            <div class="media-options ml-1 d-none d-sm-block">
                                <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted" type="button" >
                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="avatar avatar-primary mr-2">
                                            <span>
                                                <svg class="hw-24" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M14.414 7l3.293-3.293a1 1 0 00-1.414-1.414L13 5.586V4a1 1 0 10-2 0v4.003a.996.996 0 00.617.921A.997.997 0 0012 9h4a1 1 0 100-2h-1.586z"/>
                                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                                </svg>
                                                <!-- <img class="injectable hw-24" src="./../assets/media/heroicons/solid/phone-incoming.svg" alt=""> -->
                                            </span>
                            </div>

                            <div class="media-body">
                                <h6>Incoming Call</h6>

                                <div class="d-flex flex-column flex-sm-row align-items-sm-center align-items-start">
                                    <p class="text-muted mb-0">16/05/2020 at 11:49AM</p><span class="d-none d-sm-block text-muted mx-2">•</span>
                                    <p class="text-muted mb-0">0m 56s</p>
                                </div>
                            </div>

                            <div class="media-options ml-1 d-none d-sm-block">
                                <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted" type="button" >
                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="avatar avatar-primary mr-2">
                                            <span>
                                                <svg class="hw-24" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M14.414 7l3.293-3.293a1 1 0 00-1.414-1.414L13 5.586V4a1 1 0 10-2 0v4.003a.996.996 0 00.617.921A.997.997 0 0012 9h4a1 1 0 100-2h-1.586z"/>
                                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                                </svg>
                                                <!-- <img class="injectable hw-24" src="./../assets/media/heroicons/solid/phone-incoming.svg" alt=""> -->
                                            </span>
                            </div>

                            <div class="media-body">
                                <h6>Incoming Call</h6>

                                <div class="d-flex flex-column flex-sm-row align-items-sm-center align-items-start">
                                    <p class="text-muted mb-0">14/05/2020 at 11:49AM</p><span class="d-none d-sm-block text-muted mx-2">•</span>
                                    <p class="text-muted mb-0">24m 19s</p>
                                </div>
                            </div>

                            <div class="media-options ml-1 d-none d-sm-block">
                                <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted" type="button" >
                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Call Log Page End -->

<!-- Friends Page Start -->
<div class="friends px-0 py-2 p-xl-3">
    <div class="container-xl">
        <div class="row">
            <div class="col">
                <div class="card card-body card-bg-1 mb-3">
                    <div class="d-flex flex-column align-items-center">
                        <div class="avatar avatar-lg mb-3">
                            <img class="avatar-img" src="../assets/media/avatar/3.png" alt="">
                        </div>

                        <div class="d-flex flex-column align-items-center">
                            <h5 class="mb-1">Catherine Richardson</h5>
                            <!-- <p class="text-white rounded px-2 bg-primary">+01-202-265462</p> -->
                            <div class="d-flex mt-2">
                                <div class="btn btn-primary btn-icon rounded-circle text-light mx-2">
                                    <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                    </svg>
                                    <!-- <img class="injectable hw-24" src="./../assets/media/heroicons/outline/chat.svg" alt=""> -->
                                </div>
                                <div class="btn btn-success btn-icon rounded-circle text-light mx-2">
                                    <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>

                                    <!-- <img class="injectable hw-24" src="./../assets/media/heroicons/outline/phone.svg" alt=""> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-options">
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                                </svg>

                                <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/dots-vertical.svg" alt=""> -->
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Remove</a>
                                <a class="dropdown-item" href="#">Block</a>
                            </div>
                        </div>
                    </div>

                    <div class="chat-closer d-xl-none">
                        <!-- Chat Back Button (Visible only in Small Devices) -->
                        <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted" type="button" data-close="">
                            <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>

                            <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/arrow-left.svg" alt=""> -->
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row friends-info">
            <div class="col">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="small text-muted mb-0">Local Time</p>
                                    <p class="mb-0">10:25 PM</p>
                                </div>
                                <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <!-- <img class="injectable text-muted hw-20" src="./../assets/media/heroicons/outline/clock.svg" alt=""> -->
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="small text-muted mb-0">Birthdate</p>
                                    <p class="mb-0">20/11/1992</p>
                                </div>
                                <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>

                                <!-- <img class="injectable text-muted hw-20" src="./../assets/media/heroicons/outline/calendar.svg" alt=""> -->
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="small text-muted mb-0">Phone</p>
                                    <p class="mb-0">+01-222-364522</p>
                                </div>
                                <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <!-- <img class="injectable text-muted hw-20" src="./../assets/media/heroicons/outline/phone.svg" alt=""> -->
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="small text-muted mb-0">Email</p>
                                    <p class="mb-0">catherine.richardson@gmail.com</p>
                                </div>
                                <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <!-- <img class="injectable text-muted hw-20" src="./../assets/media/heroicons/outline/mail.svg" alt=""> -->
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="small text-muted mb-0">Website</p>
                                    <p class="mb-0">www.catherichardson.com</p>
                                </div>
                                <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <!-- <img class="injectable text-muted hw-20" src="./../assets/media/heroicons/outline/globe.svg" alt=""> -->
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="small text-muted mb-0">Address</p>
                                    <p class="mb-0">1134 Ridder Park Road, San Fransisco, CA 94851</p>
                                </div>
                                <svg class="text-muted hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                                <!-- <img class="injectable text-muted hw-20" src="./../assets/media/heroicons/outline/home.svg" alt=""> -->
                            </div>
                        </li>
                    </ul>
                </div>


                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="small text-muted mb-0">Facebook</p>
                                    <a class="font-size-sm font-weight-medium" href="#">@cathe.richardson</a>
                                </div>
                                <svg class="text-muted hw-20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                </svg>
                                <!-- <img class="injectable text-muted hw-20" src="./../assets/media/icons/facebook.svg" alt=""> -->
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="small text-muted mb-0">Twitter</p>
                                    <a class="font-size-sm font-weight-medium" href="#">@cathe.richardson</a>
                                </div>
                                <svg class="text-muted hw-20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                                </svg>
                                <!-- <img class="injectable text-muted hw-20" src="./../assets/media/icons/twitter.svg" alt=""> -->
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="small text-muted mb-0">Instagram</p>
                                    <a class="font-size-sm font-weight-medium" href="#">@cathe.richardson</a>
                                </div>
                                <svg class="text-muted hw-20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                                </svg>
                                <!-- <img class="injectable text-muted hw-20" src="./../assets/media/icons/instagram.svg" alt=""> -->
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="media align-items-center">
                                <div class="media-body">
                                    <p class="small text-muted mb-0">Linkedin</p>
                                    <a class="font-size-sm font-weight-medium" href="#">@cathe.richardson</a>
                                </div>
                                <svg class="text-muted hw-20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                    <rect x="2" y="9" width="4" height="12" />
                                    <circle cx="4" cy="4" r="2" />
                                </svg>
                                <!-- <img class="injectable text-muted hw-20" src="./../assets/media/icons/linkedin.svg" alt=""> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Friends Page End -->

<!-- Profile Settings Start -->
<div class="profile">
    <div class="page-main-heading sticky-top py-2 px-3 mb-3">

        <!-- Chat Back Button (Visible only in Small Devices) -->
        <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted d-xl-none" type="button" data-close="">
            <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            <!-- <img class="injectable hw-20" src="./../assets/media/heroicons/outline/arrow-left.svg" alt=""> -->
        </button>

        <div class="pl-2 pl-xl-0">
            <h5 class="font-weight-semibold">Settings</h5>
            <p class="text-muted mb-0">Update Personal Information &amp; Settings</p>
        </div>
    </div>

    <div class="container-xl px-2 px-sm-3">
        <div class="row">
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header">
                        <h6 class="mb-1">Account</h6>
                        <p class="mb-0 text-muted small">Update personal &amp; contact information</p>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="firstName">First Name</label>
                                    <input type="text" class="form-control form-control-md" id="firstName" placeholder="Type your first name" value="Catherine">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" class="form-control form-control-md" id="lastName" placeholder="Type your last name" value="Richardson">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="mobileNumber">Mobile number</label>
                                    <input type="text" class="form-control form-control-md" id="mobileNumber" placeholder="Type your mobile number" value="+01-222-364522">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="birthDate">Birth date</label>
                                    <input type="text" class="form-control form-control-md" id="birthDate" placeholder="dd/mm/yyyy" value="20/11/1992">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="emailAddress">Email address</label>
                                    <input type="email" class="form-control form-control-md" id="emailAddress" placeholder="Type your email address" value="catherine.richardson@gmail.com">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="webSite">Website</label>
                                    <input type="text" class="form-control form-control-md" id="webSite" placeholder="Type your website" value="www.catherichardson.com">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Address">Address</label>
                                    <input type="text" class="form-control form-control-md" id="Address" placeholder="Type your address" value="1134 Ridder Park Road, San Fransisco, CA 94851">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer d-flex justify-content-end">
                        <button type="button" class="btn btn-link text-muted mx-1">Reset</button>
                        <button type="button" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">
                        <h6 class="mb-1">Social network profiles</h6>
                        <p class="mb-0 text-muted small">Update personal &amp; contact information</p>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="facebookId">Facebook</label>
                                    <input type="text" class="form-control form-control-md" id="facebookId" placeholder="Username">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="twitterId">Twitter</label>
                                    <input type="text" class="form-control form-control-md" id="twitterId" placeholder="Username">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="instagramId">Instagram</label>
                                    <input type="text" class="form-control form-control-md" id="instagramId" placeholder="Username">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="linkedinId">Linkedin</label>
                                    <input type="text" class="form-control form-control-md" id="linkedinId" placeholder="Username">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer d-flex justify-content-end">
                        <button type="button" class="btn btn-link text-muted mx-1">Reset</button>
                        <button type="button" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">
                        <h6 class="mb-1">Password</h6>
                        <p class="mb-0 text-muted small">Update personal &amp; contact information</p>
                    </div>

                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="current-password">Current Password</label>
                                        <input type="password" class="form-control form-control-md" id="current-password" placeholder="Current password" autocomplete="on">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="new-password">New Password</label>
                                        <input type="password" class="form-control form-control-md" id="new-password" placeholder="New password" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="repeat-password">Repeat Password</label>
                                        <input type="password" class="form-control form-control-md" id="repeat-password" placeholder="Repeat password" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card-footer d-flex justify-content-end">
                        <button type="button" class="btn btn-link text-muted mx-1">Reset</button>
                        <button type="button" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">
                        <h6 class="mb-1">Privacy</h6>
                        <p class="mb-0 text-muted small">Update personal &amp; contact information</p>
                    </div>

                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush list-group-sm-column">

                            <li class="list-group-item py-2">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <p class="mb-0">Profile Picture</p>
                                        <p class="small text-muted mb-0">Select who can see my profile picture</p>
                                    </div>
                                    <div class="dropdown mr-2">
                                        <button class="btn btn-outline-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Public
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Public</a>
                                            <a class="dropdown-item" href="#">Friends</a>
                                            <a class="dropdown-item" href="#">Selected Friends</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item py-2">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <p class="mb-0">Last Seen</p>
                                        <p class="small text-muted mb-0">Select who can see my last seen</p>
                                    </div>
                                    <div class="dropdown mr-2">
                                        <button class="btn btn-outline-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Public
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Public</a>
                                            <a class="dropdown-item" href="#">Friends</a>
                                            <a class="dropdown-item" href="#">Selected Friends</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item py-2">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <p class="mb-0">Groups</p>
                                        <p class="small text-muted mb-0">Select who can add you in groups</p>
                                    </div>
                                    <div class="dropdown mr-2">
                                        <button class="btn btn-outline-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Public
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Public</a>
                                            <a class="dropdown-item" href="#">Friends</a>
                                            <a class="dropdown-item" href="#">Selected Friends</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item py-2">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <p class="mb-0">Status</p>
                                        <p class="small text-muted mb-0">Select who can see my status updates</p>
                                    </div>
                                    <div class="dropdown mr-2">
                                        <button class="btn btn-outline-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Public
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Public</a>
                                            <a class="dropdown-item" href="#">Friends</a>
                                            <a class="dropdown-item" href="#">Selected Friends</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item py-2">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <p class="mb-0">Read receipts</p>
                                        <p class="small text-muted mb-0">If turn off this option you won't be able to see read recipts</p>
                                    </div>
                                    <div class="custom-control custom-switch mr-2">
                                        <input type="checkbox" class="custom-control-input" id="readReceiptsSwitch" checked="">
                                        <label class="custom-control-label" for="readReceiptsSwitch">&nbsp;</label>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div class="card-footer d-flex justify-content-end">
                        <button type="button" class="btn btn-link text-muted mx-1">Reset</button>
                        <button type="button" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">
                        <h6 class="mb-1">Security</h6>
                        <p class="mb-0 text-muted small">Update personal &amp; contact information</p>
                    </div>

                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush list-group-sm-column">
                            <li class="list-group-item py-2">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <p class="mb-0">Use two-factor authentication</p>
                                        <p class="small text-muted mb-0">Ask for a code if attempted login from an unrecognised device or browser.</p>
                                    </div>
                                    <div class="custom-control custom-switch mr-2">
                                        <input type="checkbox" class="custom-control-input" id="twoFactorSwitch" checked="">
                                        <label class="custom-control-label" for="twoFactorSwitch">&nbsp;</label>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item py-2">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <p class="mb-0">Get alerts about unrecognised logins</p>
                                        <p class="small text-muted mb-0">You will be notified if anyone logs in from a device or browser you don't usually use</p>
                                    </div>
                                    <div class="custom-control custom-switch mr-2">
                                        <input type="checkbox" class="custom-control-input" id="unrecognisedSwitch" checked="">
                                        <label class="custom-control-label" for="unrecognisedSwitch">&nbsp;</label>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div class="card-footer d-flex justify-content-end">
                        <button class="btn btn-link text-muted mx-1">Reset</button>
                        <button class="btn btn-primary" type="button">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Profile Settings End -->

</div>

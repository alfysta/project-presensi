@push('mystyle')
    <link href="{{ asset('vendor/assets/dist/css/bottommenu.css') }}" rel="stylesheet" />
@endpush
<div class="appBottomMenu">
    <a href="/" class="item">
        <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-hand" width="24"
                height="24" style="width:25px;height:25px" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M18 9l-6 -6l-9 9h2v7a2 2 0 0 0 2 2h3.5"></path>
                <path d="M9 21v-6a2 2 0 0 1 2 -2h2"></path>
                <path
                    d="M16 17.5l-.585 -.578a1.516 1.516 0 0 0 -2 0c-.477 .433 -.551 1.112 -.177 1.622l1.762 2.456c.37 .506 1.331 1 2 1h3c1.009 0 1.497 -.683 1.622 -1.593c.252 -.938 .378 -1.74 .378 -2.407c0 -1 -.939 -1.843 -2 -2h-1v-2.636c0 -.754 -.672 -1.364 -1.5 -1.364s-1.5 .61 -1.5 1.364v4.136z">
                </path>
            </svg>
        </div>
    </a>
    <a href="{{ route('history.index') }}" class="item">
        <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-check" width="24"
                height="24" style="width:25px;height:25px" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M11.5 21h-5.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v6"></path>
                <path d="M16 3v4"></path>
                <path d="M8 3v4"></path>
                <path d="M4 11h16"></path>
                <path d="M15 19l2 2l4 -4"></path>
            </svg>
        </div>
    </a>
    <a href="{{ route('presensi.index') }}" class="item">
        <div class="col">
            <div class="action-button large">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-camera-check text-white w-64" width="24" height="24"
                    style="width:32px;height:32px" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                        d="M11 20h-6a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v4">
                    </path>
                    <path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                    <path d="M15 19l2 2l4 -4"></path>
                </svg>
            </div>
        </div>
    </a>
    <a href="{{route('izin.index')}}" class="item">
        <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-certificate" width="24"
                height="24" style="width:25px;height:25px" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                <path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5"></path>
                <path d="M6 14m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                <path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5"></path>
            </svg>
        </div>
    </a>
    <a href="javascript:;" class="item">
        <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-share" width="24"
                height="24" style="width:25px;height:25px" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                <path d="M6 21v-2a4 4 0 0 1 4 -4h3"></path>
                <path d="M16 22l5 -5"></path>
                <path d="M21 21.5v-4.5h-4.5"></path>
            </svg>
        </div>
    </a>
</div>

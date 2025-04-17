<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>美原体育館協会</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="flex items-center justify-between px-28 py-6 bg-white shadow">
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-indigo-900 text-white rounded-full flex items-center justify-center">
                <!-- 美原体育館協会のLOGO -->
                <span class="text-2xl">＋</span>
            </div>
            <span class="text-2xl font-bold">NPO法人美原体育館協会</span>
        </div>

        <!-- ナビゲーション -->
        <nav class="flex space-x-6 items-center text-gray-500 transition text-sm">
            <a href="#" class="hover:bg-gray-200 transition hover:text-black py-1 px-3 rounded">ホーム</a>
            <a href="#" class="hover:bg-gray-200 transition hover:text-black py-1 px-3 rounded">新着情報</a>
            <a href="#" class="hover:bg-gray-200 transition hover:text-black py-1 px-3 rounded">スポーツ教室</a>
            <a href="#" class="hover:bg-gray-200 transition hover:text-black py-1 px-3 rounded">施設案内</a>

            <div class="flex items-center px-4 space-x-3 text-gray-500 transition">
                
                <!-- Instagram Logo -->
                <a href="https://www.instagram.com/youraccount" target="_blank" aria-label="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"
                        class="w-7 h-7 fill-current hover:text-gray-900 transition transition">
                        <g fill="currentColor" fill-rule="nonzero">
                        <g transform="scale(8,8)">
                            <path d="M11.46875,5c-3.55078,0 -6.46875,2.91406 -6.46875,6.46875v9.0625c0,3.55078 2.91406,6.46875 6.46875,6.46875h9.0625c3.55078,0 6.46875,-2.91406 6.46875,-6.46875v-9.0625c0,-3.55078 -2.91406,-6.46875 -6.46875,-6.46875zM11.46875,7h9.0625c2.47266,0 4.46875,1.99609 4.46875,4.46875v9.0625c0,2.47266 -1.99609,4.46875 -4.46875,4.46875h-9.0625c-2.47266,0 -4.46875,-1.99609 -4.46875,-4.46875v-9.0625c0,-2.47266 1.99609,-4.46875 4.46875,-4.46875zM21.90625,9.1875c-0.50391,0 -0.90625,0.40234 -0.90625,0.90625c0,0.50391 0.40234,0.90625 0.90625,0.90625c0.50391,0 0.90625,-0.40234 0.90625,-0.90625c0,-0.50391 -0.40234,-0.90625 -0.90625,-0.90625zM16,10c-3.30078,0 -6,2.69922 -6,6c0,3.30078 2.69922,6 6,6c3.30078,0 6,-2.69922 6,-6c0,-3.30078 -2.69922,-6 -6,-6zM16,12c2.22266,0 4,1.77734 4,4c0,2.22266 -1.77734,4 -4,4c-2.22266,0 -4,-1.77734 -4,-4c0,-2.22266 1.77734,-4 4,-4z"/>
                        </g>
                        </g>
                    </svg>
                </a>

                <!-- LINE Logo -->
                <a href="https://www.line.me/en/" target="_blank" aria-label="LINE">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                        class="w-7 h-7 fill-current hover:text-gray-900 transition transition">
                    <path d="M23.007812 5C11.600129 5 2.0058594 12.5508 2.0058594 22.236328C2.0058594 30.874232 9.6073525 37.884555 19.505859 39.232422C19.733605 39.281857 19.977406 39.361175 20.132812 39.429688C20.118043 39.515147 20.153199 39.911316 20.105469 40.273438C20.105469 40.273438 20.105469 40.275391 20.105469 40.275391C20.092619 40.352451 19.881057 41.615404 19.835938 41.878906L19.837891 41.876953C19.762771 42.309977 19.521995 43.033546 20.193359 44.048828C20.529042 44.556469 21.285396 44.987587 21.962891 45C22.640385 45.01241 23.208997 44.789728 23.832031 44.447266C28.380052 41.946356 33.321386 39.124288 37.214844 35.580078C41.108302 32.035869 44.005859 27.639151 44.005859 22.236328C44.005809 12.551142 34.415496 5 23.007812 5zM23.007812 8C33.10213 8 41.005859 14.567511 41.005859 22.236328C41.005859 26.578505 38.734856 30.139288 35.195312 33.361328C31.801217 36.450969 27.286874 39.09321 22.943359 41.494141C23.000899 41.149653 23.072266 40.71875 23.072266 40.71875L23.076172 40.695312L23.080078 40.671875C23.155098 40.109193 23.364983 39.264995 22.923828 38.162109L22.921875 38.160156L22.921875 38.158203C22.588283 37.333404 21.970623 36.974887 21.476562 36.738281C20.982502 36.501675 20.514934 36.37997 20.126953 36.296875L20.068359 36.285156L20.007812 36.277344C11.219504 35.121092 5.0058594 29.123568 5.0058594 22.236328C5.0058594 14.567856 12.913496 8 23.007812 8zM18.333984 17.136719C17.769984 17.136719 17.310547 17.592344 17.310547 18.152344L17.310547 25.845703C17.310547 26.406703 17.768984 26.861328 18.333984 26.861328C18.897984 26.861328 19.357422 26.405703 19.357422 25.845703L19.357422 18.152344C19.357422 17.592344 18.898984 17.136719 18.333984 17.136719zM21.853516 17.136719C21.743516 17.136719 21.633344 17.154453 21.527344 17.189453C21.109344 17.328453 20.828125 17.715344 20.828125 18.152344L20.828125 25.845703C20.828125 26.406703 21.288516 26.861328 21.853516 26.861328C22.419516 26.861328 22.878906 26.405703 22.878906 25.845703L22.878906 21.087891L26.853516 26.455078C27.045516 26.709078 27.351875 26.861328 27.671875 26.861328C27.780875 26.861328 27.890094 26.843594 27.996094 26.808594C28.416094 26.671594 28.697266 26.284703 28.697266 25.845703L28.697266 18.150391C28.697266 17.590391 28.238828 17.136719 27.673828 17.136719C27.108828 17.136719 26.648438 17.590391 26.648438 18.150391L26.648438 22.912109L22.671875 17.542969C22.479875 17.288969 22.172516 17.136719 21.853516 17.136719zM11.466797 17.138672C10.902797 17.138672 10.443359 17.592344 10.443359 18.152344L10.443359 25.847656C10.443359 26.408656 10.901797 26.863281 11.466797 26.863281L15.345703 26.863281C15.910703 26.863281 16.368187 26.405703 16.367188 25.845703C16.367188 25.285703 15.910703 24.830078 15.345703 24.830078L12.488281 24.830078L12.488281 18.152344C12.488281 17.592344 12.031797 17.138672 11.466797 17.138672zM31.095703 17.138672C30.531703 17.138672 30.072266 17.594297 30.072266 18.154297L30.072266 18.15625L30.072266 21.998047L30.072266 22L30.072266 22.001953L30.072266 25.845703C30.072266 26.406703 30.532703 26.861328 31.095703 26.861328L34.974609 26.861328C35.539609 26.861328 36 26.405703 36 25.845703C36 25.285703 35.539609 24.830078 34.974609 24.830078L32.119141 24.830078L32.119141 23.013672L34.974609 23.013672C35.540609 23.013672 36 22.558047 36 21.998047C36 21.437047 35.539609 20.982422 34.974609 20.982422L34.974609 20.986328L32.119141 20.986328L32.119141 19.169922L34.974609 19.169922C35.540609 19.169922 36 18.714297 36 18.154297C36 17.594297 35.539609 17.138672 34.974609 17.138672L31.095703 17.138672z"/>
                    </svg>
                </a>

                <!-- X Logo -->
                <a href="https://twitter.com/" target="_blank" aria-label="X (Twitter)">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"
                        class="w-7 h-7 fill-current hover:text-gray-900 transition transition">
                    <g fill="currentColor" fill-rule="nonzero">
                        <g transform="scale(8.53333,8.53333)">
                        <path d="M26.37,26l-8.795,-12.822l0.015,0.012l7.93,-9.19h-2.65l-6.46,7.48l-5.13,-7.48h-6.95l8.211,11.971l-0.001,-0.001l-8.66,10.03h2.65l7.182,-8.322l5.708,8.322zM10.23,6l12.34,18h-2.1l-12.35,-18z"></path>
                        </g>
                    </g>
                    </svg>
                </a>
            </div>
        </nav>
    </header>
    
</body>
</html>
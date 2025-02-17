@extends('layouts.main')
@section('content')
    <div class="header">
        @yield('header')
    </div>
    <div class="wrap">
        <div class="section platformer">
                (0.0)
        </div>
        <div class="section attract" id="attractWrap">
            <h1>Test</h1>
            <div class="panel" id="infoPane">
                <div class="">

                </div>
                <div class="">
                    What the hell
                </div>
            </div>
            <div id="paneShadow"></div>

        </div>
        <div class="section attract">
            <h1>Test</h1>
        </div>
        <div class="section work" id="workCont">

        </div>
        <div class="section contact">

        </div>
    </div>
    <div class="footer">

    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        (function(){
            const el = (sel, par) => (par || document).querySelector(sel);
            const elWrap = el("#attractWrap");
            const elTilt = el("#infoPane");
            const settings = {
                reverse: 1,        // Reverse tilt: 1, 0
                max: 20,           // Max tilt: 35
                perspective: 1000, // Parent perspective px: 1000
                scale: 1,          // Tilt element scale factor: 1.0
                axis: "",          // Limit axis. "y", "x"
            };

            elWrap.style.perspective = `${settings.perspective}px`;

            const tilt = (evt) => {

                const bcr = elWrap.getBoundingClientRect();
                const x = Math.min(1, Math.max(0, (evt.clientX - bcr.left) / bcr.width));
                const y = Math.min(1, Math.max(0, (evt.clientY - bcr.top) / bcr.height));
                const reverse = settings.reverse ? -1 : 1;
                const tiltX = reverse * (settings.max / 2 - x * settings.max);
                const tiltY = reverse * (y * settings.max - settings.max / 2);
                elTilt.style.transition = `0s ease`;
                elTilt.style.transform = `
                rotateX(${settings.axis === "x" ? 0 : tiltY}deg)
                rotateY(${settings.axis === "y" ? 0 : tiltX}deg)
                scale(${settings.scale})
              `;
            }
            const recenter = (evt) => {

                elTilt.style.transition = `.3s ease`;
                elTilt.style.transform = `
                rotateX(0deg)
                rotateY(0deg)
                scale(1)
                `;
            }

            elWrap.addEventListener("mousemove", tilt);
            elWrap.addEventListener("mouseleave", recenter);
            console.log('elWrap');
            console.log(elWrap);
        })()
    </script>
@endsection

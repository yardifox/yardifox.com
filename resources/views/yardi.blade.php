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

        <div class="section work" id="workCont">

        </div>
        <div class="section contact" id="contactCont">
            <div class="col l-col">
                <form>
                    <label>
                        <input type="text" placeholder="Name"/>
                    </label>
                    <label>
                        <input type="text" placeholder="Name"/>
                    </label>
                    <label>
                        <textarea placeholder="Message"></textarea>
                    </label>
                    <button type="submit">Get In Touch</button>
                </form>
            </div>
            <div class="cal r-col">

            </div>
        </div>
    </div>
    <div class="footer">
        <svg class="navBtn" id="navBtnWork" viewBox="266.5,143.5,391,178" xmlns="http://www.w3.org/2000/svg" style="margin-top: -50px;max-width: 160px;cursor: pointer;">
            <g>
                <path fill="#FF0066" d="M267,144l390,47l-8,98l-356,32z"></path>
                <text x="375" y="250" font-family="Verdana" font-size="50" fill="white">Work</text>

            </g>
        </svg>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        (function(){
            const el = (sel, par) => (par || document).querySelector(sel);
            const elWrap = el("#attractWrap");
            const elTilt = el("#infoPane");
            const navWork = el("#navBtnWork");
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

            const scrollToWork = (evt) =>{
                const element = document.getElementById('contactCont');
                element.scrollIntoView({ behavior: 'smooth' });
            }

            elWrap.addEventListener("mousemove", tilt);
            elWrap.addEventListener("mouseleave", recenter);
            navWork.addEventListener("click", scrollToWork);
            console.log('elWrap');
            console.log(elWrap);
        })()
    </script>
@endsection

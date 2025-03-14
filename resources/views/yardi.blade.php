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
    <div class="footer" id="footer">
        <button class="rippleBtn" style="background:transparent;">
        <svg class="navBtn" id="navBtnWork" viewBox="266.5,143.5,391,178" xmlns="http://www.w3.org/2000/svg" style="margin-top: -50px;max-width: 160px;cursor: pointer;">
            <g>
                <path fill="#FF0066" d="M267,144l390,47l-8,98l-356,32z"></path>
                <text x="375" y="250" font-family="Verdana" font-size="50" fill="white">Work</text>

            </g>
        </svg>
        </button>
    </div>
@endsection
@section('scripts')
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script> -->
    <script type="text/javascript">
        document.addEventListener('scroll', gsaplaunch);
        document.addEventListener('mousedown', gsaplaunch);
        document.addEventListener('mousemove', gsaplaunch);
        document.addEventListener('touchstart', gsaplaunch);
        document.addEventListener('scroll', gsaplaunch);
        document.addEventListener('keydown', gsaplaunch);
        function gsaplaunch () {
            window.$gsap||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set._.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
                $.src='//cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js';z.t=+new Date;$.type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');

            document.removeEventListener('scroll', gsaplaunch);
            document.removeEventListener('mousedown', gsaplaunch);
            document.removeEventListener('mousemove', gsaplaunch);
            document.removeEventListener('touchstart', gsaplaunch);
            document.removeEventListener('scroll', gsaplaunch);
            document.removeEventListener('keydown', gsaplaunch);
        }
        let navBtnArray = [];
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

            const touchesMoved = (evt) => {
                console.log('touches Moved');
                console.log(evt);
            }

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
            const touchTilt = (evt) => {
                console.log('touchTilt')
                console.log(evt);
                const bcr = elWrap.getBoundingClientRect();
                const x = Math.min(1, Math.max(0, (evt.pageX - bcr.left) / bcr.width));
                const y = Math.min(1, Math.max(0, (evt.pageY - bcr.top) / bcr.height));
                const reverse = settings.reverse ? -1 : 1;
                const tiltX = reverse * (settings.max / 2 - x * settings.max);
                const tiltY = reverse * (y * settings.max - settings.max / 2);
                elTilt.style.transition = `.3s ease`;
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
                // element.scrollIntoView({ behavior: 'smooth' });
                window.scrollTo({
                    top: Math.round(element.getBoundingClientRect().top + document.documentElement.scrollTop),
                    behavior: 'smooth',
                })
            }
            document.body.addEventListener('touchstart',touchTilt);
            document.body.addEventListener('touchmove',touchTilt);
            elWrap.addEventListener("mousemove", tilt);
            elWrap.addEventListener("mouseleave", recenter);
            navWork.addEventListener("click", scrollToWork);
            console.log('elWrap');
            console.log(elWrap);

            class Button {
                constructor(HTMLButtonElement) {
                    this.button = HTMLButtonElement;
                    this.width = this.button.offsetWidth;
                    this.height = this.button.offsetHeight;
                    this.left = this.button.offsetLeft;
                    this.top = this.button.offsetTop;
                    this.x = 0;
                    this.y = 0;
                    this.center = {};
                    this.cursorX = 0;
                    this.cursorY = 0;
                    this.magneticPullX = 0.4;
                    this.magneticPullY = 0.9;
                    this.isHovering = false;
                    this.magnetise();
                    this.createRipple();
                }

                onEnter = () => {
                    gsap.to(this.button, 0.4, {
                        x: this.x * this.magneticPullX,
                        y: this.y * this.magneticPullY,
                        ease: Power4.easeOut
                    });
                };

                onLeave = () => {
                    gsap.to(this.button, 0.7, {
                        x: 0,
                        y: 0,
                        ease: Elastic.easeOut.config(1.1, 0.5)
                    });
                };

                resetCenter = (e) =>{
                   this.center = {
                        x: this.button.offsetLeft + this.width / 2,
                        y: this.button.offsetTop + this.height / 2
                    };
                   this.left = this.button.offsetLeft;
                   this.top = this.button.offsetTop;
                   console.log('this.left: ', this.button.offsetLeft);
                   console.log('this.top: ', this.button.offsetTop);
                   console.log(this.center);
                }
                magnetise = () => {
                    document.querySelector("body").removeEventListener("mousemove",this.magnetise);
                    document.querySelector("body").addEventListener("mousemove", (e) => {
                        this.cursorX = e.clientX;
                        this.cursorY = e.offsetY;
                        // console.log("cursorX",e.clientX);
                        // console.log("cursorY",e.offsetY);

                        this.center = {
                            x: this.left + this.width / 2,
                            y: this.top + this.height / 2
                        };
                        // console.log('left',this.left);
                        // console.log('top',this.top);

                        this.x = this.cursorX - this.center.x;
                        this.y = this.cursorY -  this.center.y;
                        // console.log("center.x",center.x);
                        // console.log("center.y",center.y);

                        const distance = Math.sqrt(this.x * this.x + this.y * this.y);
                        const hoverArea = this.isHovering ? 0.6 : 0.5;

                        // console.log('distance',distance);

                        if (distance < this.width * hoverArea) {
                            if (!this.isHovering) {
                                this.isHovering = true;
                            }
                            this.onEnter();
                        } else {
                            if (this.isHovering) {
                                this.onLeave();
                                this.isHovering = false;
                            }
                        }
                    });
                };

                createRipple = () => {
                    this.button.addEventListener("click", () => {
                        const circle = document.createElement("span");
                        const diameter = Math.max(
                            this.button.clientWidth,
                            this.button.clientHeight
                        );
                        const radius = diameter / 2;

                        const offsetLeft = this.left + this.x * this.magneticPullX;
                        const offsetTop = this.top + this.y * this.magneticPullY;

                        circle.style.width = circle.style.height = `${diameter}px`;
                        circle.style.left = `${this.cursorX - offsetLeft - radius}px`;
                        circle.style.top = `${this.cursorY - offsetTop - radius}px`;
                        circle.classList.add("ripple");

                        const ripple = this.button.getElementsByClassName("ripple")[0];

                        if (ripple) {
                            ripple.remove();
                        }

                        this.button.appendChild(circle);
                    });
                };
            }

            const buttons = document.getElementsByClassName("rippleBtn");
            for (const button of buttons) {
                const btnObj = new Button(button);
                navBtnArray.push( btnObj );
                console.log(navBtnArray);
            }

        })()
        window.addEventListener('resize', (e)=>{
            for (const button of navBtnArray) {
                button.resetCenter(e);
                // button.magnetise();
                console.log('button',button);
            }
        });
    </script>
@endsection

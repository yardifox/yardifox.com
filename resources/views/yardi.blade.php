@extends('layouts.main')
@section('head')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ProfilePage",
            "dateCreated": "2025-1-10T12:30:00-05:00",
            "dateModified": "2025-3-19T12:30:00-05:00",
            "mainEntity":{
                "@type": "Person",
                "name": "Yardi Fox",
                "alternateName": "yardifox",
                "interactionStatistic":[{
                    "@type": "InteractionCounter",
                    "interactionType": "https://schema.org/LikeAction",
                    "userInteractionCount": 1
                }],
                "agentInteractionStatistic": {
                  "@type": "InteractionCounter",
                  "interactionType": "https://schema.org/DrawAction",
                  "userInteractionCount": 50
                },
                "description": "FullStack Creative Developer",
                "image": "https://media.licdn.com/dms/image/v2/C4E03AQEFU3ZDPqnmFg/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1516305256323?e=1747872000&v=beta&t=KEt_LNHA2uNsSitBzinz4-Yv5h6Tsq4iqb1QPvIhSow",
                "sameAs": [
                  "https://www.linkedin.com/in/yardi/",
                  "https://x.com/yardifox",
                  "https://github.com/yardifox",
                  "https://www.instagram.com/yardifox/",
                  "https://in.pinterest.com/yardifox/",
                  "https://bsky.app/profile/yardifox.bsky.social",
                  "https://developer.apple.com/forums/profile/yardifox",
                  "https://www.mobygames.com/person/201612/yardi-fox/"
                ]
            }
        }
    </script>
@endsection
@section('content')
    <div class="header">
        @yield('header')
    </div>
    <header class="header" id="header">
        <button class="rippleBtn" id="navBtnAbout">
            About
        </button>
        <button class="rippleBtn" style="background:transparent;">
            <svg class="navBtn" id="navBtnWork" viewBox="266.5,143.5,391,178" xmlns="http://www.w3.org/2000/svg" style="margin-top: -50px;max-width: 160px;cursor: pointer;">
                <g>
                    <path fill="#FF0066" d="M267,144l390,47l-8,98l-356,32z"></path>
                    <text x="375" y="250" font-family="Verdana" font-size="50" fill="white">Work</text>

                </g>
            </svg>
        </button>
        <button class="rippleBtn"  id="navBtnContact">
            Contact
        </button>
    </header>
    <div class="wrap">
        <div class="section platformer">
               <div id="ninjaSprite" class="sprite phx">(0.0)</div>
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
                        <input type="text" placeholder="Email"/>
                    </label>
                    <label>
                        <textarea placeholder="Message"></textarea>
                    </label>
                    <button type="submit" class="threeDTitle">Get In Touch</button>
                </form>
            </div>
            <div class="cal r-col">

            </div>
        </div>
    </div>
    <div class="footer" id="footer">
    </div>
@endsection
@section('scripts')
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script type="text/javascript" src="{{ asset("/js/ninja.js")}}"/>-->
    <script type="text/javascript">
        let loadButtons = null;
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
            loadButtons();
        }
        let navBtnArray = [];
        (function(){
            const el = (sel, par) => (par || document).querySelector(sel);
            const elWrap = el("#attractWrap");
            const elTilt = el("#infoPane");
            const navWork = el("#navBtnWork");
            const navAbout = el("#navBtnAbout");
            const navContact = el("#navBtnContact");
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
                const element = document.getElementById('threeDom');
                // element.scrollIntoView({ behavior: 'smooth' });
                window.scrollTo({
                    top: Math.round(element.getBoundingClientRect().top + document.documentElement.scrollTop) +150,
                    behavior: 'smooth',
                })
            }
            const scrollToContact = (evt)=>{
                const element = document.getElementById('contactCont');
                // element.scrollIntoView({ behavior: 'smooth' });
                window.scrollTo({
                    top: Math.round(element.getBoundingClientRect().top + document.documentElement.scrollTop),
                    behavior: 'smooth',
                })
            }
            const scrollToAbout = (evt)=>{

                const element = document.getElementById('attractWrap');
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
            navAbout.addEventListener("click", scrollToAbout);
            navContact.addEventListener("click", scrollToContact);
            console.log('elWrap');
            console.log(elWrap);
            loadButtons = ()=>{

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
            }

        })()
        function setupButtons(){

        }
        window.addEventListener('resize', (e)=>{
            for (const button of navBtnArray) {
                button.resetCenter(e);
                // button.magnetise();
                console.log('button',button);
            }
        });

        (function(){

            console.log('ninja.js loaded');
            let ninja = document.querySelector('#ninjaSprite');
            ninja.style.position = "absolute";

            let sx = 0;
            let sy = 0;
            let vxl = 0;
            let vxr = 0;
            let vy = 0;
            let spriteHeight = ninja.offsetHeight;

            function update(){
                sx +=  vxl;
                sx += vxr;
                sy += vy;
                if ( sy  + spriteHeight  >=(window.innerHeight + Math.round(window.scrollY)) ){
                    sy = (window.innerHeight + Math.round(window.scrollY) - spriteHeight );
                    vy = 0;
                }
                console.log((window.innerHeight + Math.round(window.scrollY)));
                console.log(sy + spriteHeight);

                ninja.style.left = sx + 'px';
                ninja.style.top = sy+ 'px';

                requestAnimationFrame(update);

            }
            update();
            let lastScroll = 0;
            window.addEventListener("scroll", () =>{
                let currentScroll = document.documentElement.scrollTop || document.body.scrollTop; // Get Current Scroll Value

                if (currentScroll > 0 && lastScroll <= currentScroll){
                    lastScroll = currentScroll;
                    scrollPosY = (window.scrollY / document.body.clientHeight);
                    sy -= scrollPosY*9;
                }else{
                    lastScroll = currentScroll;
                    //document.getElementById("scrollLoc").innerHTML = "Scrolling UP";
                }
            })
            setInterval(function Gravity(){
                vy += 0.09;
            },20)

        })();
    </script>
@endsection

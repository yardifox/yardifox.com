@extends('layouts.main')
@section('head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap"></noscript>
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
        <button class="rippleBtn" id="navBtnAbout" aria-lable="About Section">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-2.25 -2.635 13.31 5.045" style="margin-top: -50px;max-width: 160px;cursor: pointer;">
                <g>
                <path d="M 11.057 -2.635 L 10.521 1.435 L 10.959 2.41 L -1.665 0.948 L -2.25 -1.635 L -2.08 -2.074 Z" fill="#FF0066"/>
                <text x="11" y="11" font-family="Verdana" font-size="50" fill="white">About</text>
                </g>
            </svg>
        </button>
        <button class="rippleBtn" style="background:transparent;" aria-label="Work Section">
            <svg class="navBtn" id="navBtnWork" viewBox="266.5,143.5,391,178" xmlns="http://www.w3.org/2000/svg" style="margin-top: -50px;max-width: 160px;cursor: pointer;">
                <g>
                    <path fill="#FF0066" d="M267,144l390,47l-8,98l-356,32z"></path>
                    <text x="375" y="250" font-family="Verdana" font-size="50" fill="white">Work</text>

                </g>
            </svg>
        </button>
        <button class="rippleBtn"  id="navBtnContact" aria-label="Contact Section">
            Contact
        </button>
    </header>
    <div class="wrap">
        <div class="section platformer">
               <div id="ninjaSprite" class="sprite phx">(0.0)</div>
        </div>
        <div class="section attract" id="attractWrap">
            <h1 class="name" id="name"  style="
    -webkit-transition: padding 0.1s linear;
    -moz-transition: padding 0.1s linear;
    -ms-transition: padding 0.1s linear;
    -o-transition: padding 0.1s linear;
    transition: padding 0.1s linear;
    font-family: 'Russo One', sans-serif;
    text-align: left;
    flex: 1 100%;
    padding-top: 20px;
    font-size: clamp(20px, 15vw, 75px);
    font-weight: 700;
    font-style: italic;
    color: #c10000;
    text-shadow:
      0 1px 0 #c7c7c7,
      0 2px 0 #c7c7c7,
      0 3px 0 #c7c7c7,
      0 4px 0 #c7c7c7,
      0 5px 0 #c7c7c7,
      0 6px 0 #c7c7c7,
      0 7px 0 #c7c7c7,
      0 8px 0 #c7c7c7,
      0 9px 0 #c7c7c7,
      0 10px 0 #c7c7c7,
      0 11px 0 #c7c7c7,
      1px 15px 10px rgba(16, 16, 16, .3),
      1px 20px 20px rgba(16, 16, 16, .2),
      1px 25px 42px rgba(16, 16, 16, .2);
">Yardi Fox</h1>
            <div class="panel" id="infoPane">
                <div class="">

                </div>
                <div class="infoCont" id="aboutContent">
                    <h2 id="infoContH2" style='font-size: 1.9em;font-family: "Russo One", sans-serif;'>Creative Technologist & Game Dev Explorer</h2>
                    <p style="font-size:1.4em;">
                        I'm Yardi Fox — a creative technologist and coder who approaches development as both a craft and a puzzle. I specialize in designing elegant, often unconventional solutions to complex problems, whether in game mechanics, interactive design, or visual programming.
                    </p>
                </div>
            </div>
            <div id="paneShadow"></div>

        </div>

        <div class="section work" id="workCont">

        </div>
        <div class="section contact" id="contactCont">
            <div class="col l-col">
                <form class="" id="ypContactForm">
                    <label>
                        <input type="text" name="name" placeholder="Name"/>
                    </label>
                    <label>
                        <input type="text" name="email" placeholder="Email"/>
                    </label>
                    <label>
                        <textarea name="message" placeholder="Message"></textarea>
                    </label>
                    <div class="g-recaptcha"
                         data-sitekey="6Lc-S2ErAAAAADZNX3frKgGJ95Ns-VKUEhwrKjLN"
                         data-callback="onSubmit"
                         data-size="invisible">
                    </div>
                    <button id="contSubmit" type="submit" class="threeDTitle">Get In Touch</button>
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
        // Lazy Load Recaptcha
        let recaptchaLoaded = false;

        let scrollPosY = getScrollY();

        function loadRecaptcha(){
            if(recaptchaLoaded) return;

            const script = document.createElement('script');
            script.src = "https://www.google.com/recaptcha/api.js?onload=onLoadCallback&render=explicit";
            script.async = true;
            script.defer = true;
            document.body.appendChild(script);
            recaptchaLoaded = true;
        }

        // Load reCAPTCHA when contact section comes into view
        const contactCont = document.getElementById('contactCont');
        const observer = new IntersectionObserver(entries => {
            if(entries[0].isIntersecting){
                loadRecaptcha();
                observer.disconnect();
            }
        },{ threshold: 0.1 });

        observer.observe(contactCont);


        // Contact Form submission handling
        const infoPane = document.getElementById('infoPane');
        const cForm = document.getElementById('ypContactForm');
        const paneShadow = document.getElementById('paneShadow');
        const ypName = document.getElementById('name');
        let shadowScrollMultipliyer = 1;

        function onLoadCallback() {
            grecaptcha.render(document.querySelector('.g-recaptcha'), {
                sitekey: '6Lc-S2ErAAAAADZNX3frKgGJ95Ns-VKUEhwrKjLN',
                callback: onSubmit,
                size: 'invisible'
            });
        }

        function onSubmit(token){
            const formData = new FormData(cForm);
            formData.append('g-recaptcha-response', token);
            console.log(cForm);
            console.log(formData);
            const data = Object.fromEntries(formData.entries());

            console.log(data);

            fetch('{{route("api.contact.post")}}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(data)
            })
                .then( response => response.json())
                .then(json => console.log('Response: ', json))
                .catch(error => console.error('Error: ', error));
        }

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
            // show the main pane

            setTimeout((e)=>{
                infoPane.style.opacity = 1;
            },800);
            const el = (sel, par) => (par || document).querySelector(sel);
            const elWrap        = el("#attractWrap");
            const elTilt        = el("#infoPane");
            const elTextTilt    = el('#aboutContent');
            const h2TextTilt    = el('#infoContH2');
            const navWork       = el("#navBtnWork");
            const navAbout      = el("#navBtnAbout");
            const navContact    = el("#navBtnContact");


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
                let scrollY = getScrollY();
                let tiltTranslateY = `translateY(0)`;
                if(document.body.clientWidth > 550){
                    tiltTranslateY = scrollY *8.23 < 7 ? `translateY(${scrollPosY * 8.23}em)` : 'translateY(4em)';
                }

                const bcr = elWrap.getBoundingClientRect();
                const x = Math.min(1, Math.max(0, (evt.clientX - bcr.left) / bcr.width));
                const y = Math.min(1, Math.max(0, (evt.clientY - bcr.top) / bcr.height));

                const reverse = settings.reverse ? -1 : 1;
                const tiltX = reverse * (settings.max / 2 - x * settings.max);
                const tiltY = reverse * (y * settings.max - settings.max / 2);

                const textTiltX = tiltX * 2.95;
                const textTiltY = -tiltY * 2.95;
                elTilt.style.transition = `0s ease`;
                elTilt.style.transform = `
                ${tiltTranslateY}
                rotateX(${settings.axis === "x" ? 0 : tiltY}deg)
                rotateY(${settings.axis === "y" ? 0 : tiltX}deg)
                scale(${settings.scale})
              `;
                elTextTilt.style.transition = `0s ease`;
                elTextTilt.style.transform = `
                translateX(${settings.axis === "x" ? 0 : textTiltX}px)
                translateY(${settings.axis === "y" ? 0 : textTiltY}px)
                scale(${settings.scale})
                `;
                elTextTilt.style.textShadow = `
                    ${settings.axis === "x" ? 0 :-tiltX*1.9}px ${settings.axis === "y" ? 0 :tiltY*1.9}px 1px rgba(0,0,0,0.5)
                `;
                h2TextTilt.style.webkitFilter  = `
                    drop-shadow(${settings.axis === "x" ? 0 :-tiltX*1.9}px ${settings.axis === "y" ? 0 :tiltY*1.9}px 2px #000000);
                `;
                h2TextTilt.style.filter  = `
                    drop-shadow(${settings.axis === "x" ? 0 :-tiltX*1.9}px ${settings.axis === "y" ? 0 :tiltY*1.9}px 2px #000000);
                `;
                console.log('h2TextTilt');
                console.log(h2TextTilt)
            }
            const touchTilt = (evt) => {
                let scrollY = getScrollY();
                let tiltTranslateY = `translateY(0)`;
                if(document.body.clientWidth > 550){
                    tiltTranslateY = scrollY *8.23 < 7 ? `translateY(${scrollPosY * 8.23}em)` : 'translateY(4em)';
                }
                console.log('touchTilt')
                console.log(evt);
                const bcr = elWrap.getBoundingClientRect();
                const x = Math.min(1, Math.max(0, (evt.pageX - bcr.left) / bcr.width));
                const y = Math.min(1, Math.max(0, (evt.pageY - bcr.top) / bcr.height));
                const reverse = settings.reverse ? -1 : 1;
                const tiltX = reverse * (settings.max / 2 - x * settings.max);
                const tiltY = reverse * (y * settings.max - settings.max / 2);
                const textTiltX = tiltX * 2.95;
                const textTiltY = -tiltY * 2.95;
                elTilt.style.transition = `.3s ease`;
                elTilt.style.transform = `
                rotateX(${settings.axis === "x" ? 0 : tiltY}deg)
                rotateY(${settings.axis === "y" ? 0 : tiltX}deg)
                scale(${settings.scale})
              `;
                elTextTilt.style.transition = `0s ease`;
                elTextTilt.style.transform = `
                translateX(${settings.axis === "x" ? 0 : textTiltX}px)
                translateY(${settings.axis === "y" ? 0 : textTiltY}px)
                scale(${settings.scale})
                `;
                elTextTilt.style.textShadow = `
                    ${settings.axis === "x" ? 0 :-tiltX*1.9}px ${settings.axis === "y" ? 0 :tiltY*1.9}px 1px rgba(0,0,0,0.5)
                `;
                h2TextTilt.style.webkitFilter  = `
                    drop-shadow(${settings.axis === "x" ? 0 :-tiltX*1.9}px ${settings.axis === "y" ? 0 :tiltY*1.9}px 2px #000000);
                `;
                h2TextTilt.style.filter  = `
                    drop-shadow(${settings.axis === "x" ? 0 :-tiltX*1.9}px ${settings.axis === "y" ? 0 :tiltY*1.9}px 2px #000000);
                `;
            }
            const recenter = (evt) => {

                elTilt.style.transition = `.3s ease`;
                elTilt.style.transform = `
                    rotateX(0deg)
                    rotateY(0deg)
                    scale(1)
                `;

                elTextTilt.style.transition = `.3s ease`;

                elTextTilt.style.transform = `
                    rotateX(0deg)
                    rotateY(0deg)
                    scale(1)
                `;
                elTextTilt.style.textShadow = `
                    1px 1px 1px rgba(0,0,0,0.8)
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

        function getScrollY(){
            return (window.scrollY / document.body.clientHeight);
        }

        /**
         * Ninja Character code
         */
        (function(){
            setTimeout((e)=>{
                infoPane.classList.add('loaded');
            },1200);
            setTimeout((e)=>{
                infoPane.style.minHeight = '300px';
            },2200);
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
                // console.log((window.innerHeight + Math.round(window.scrollY)));
                // console.log(sy + spriteHeight);

                ninja.style.left = sx + 'px';
                ninja.style.top = sy+ 'px';

                // update shadow width:
                const paneStyle = window.getComputedStyle(infoPane);
                // paneShadow.style.opacity = paneStyle.opacity;
                const pTransform = paneStyle.transform;
                ypName.style.transform = dampenMatrix3D(pTransform,0.12);
                const rotateY = extractRotateYFromMatrix3D(pTransform);
                let pWidth = parseInt(paneStyle.width);
                //paneShadow.style.transform = rotateY ? `rotateX(${rotateY.toFixed(2)}deg`: '';
                paneShadow.style.transform = dampenMatrix3D(pTransform,0.19);
                paneShadow.style.width = rotateY ? (pWidth  -(Math.abs(rotateY) * 3.23))+'px' : pWidth+'px';
                // console.log('rotateY');
                // console.log(rotateY);
                paneShadow.style.marginLeft = (rotateY * 8.5)+'px';
                paneShadow.style.opacity = (parseInt(paneStyle.height) * 0.0012) * shadowScrollMultipliyer;
                requestAnimationFrame(update);

            }
            update();
            let lastScroll = 0;
            window.addEventListener("scroll", () =>{
                let currentScroll = document.documentElement.scrollTop || document.body.scrollTop; // Get Current Scroll Value

                let nameH1 = document.getElementById('name');
                let infoPane = document.getElementById('infoPane');
                scrollPosY = getScrollY();
                shadowScrollMultipliyer =  (scrollPosY * 0.40) * 9.95 + 1;
                if(document.body.clientWidth > 550){
                    // nameH1.style.paddingTop = scrollPosY *8.23 < 4 ? scrollPosY *8.23 +'em' : '4em';
                    nameH1.style.transform  = scrollPosY *8.23 < 6 ? `translateY(${scrollPosY * 8.23}em)` : `translateY(4em)`;
                    infoPane.style.transform  = scrollPosY *8.23 < 7 ? `translateY(${scrollPosY * 8.23}em)` : `translateY(4em)`;
                }
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
                vy += 0.12;
            },5)


            cForm.addEventListener('submit', (e)=>{
                e.preventDefault();
                grecaptcha.execute();
            });
        })();
        function extractRotateYFromMatrix3D(matrix3dString) {
            const values = matrix3dString
                .match(/matrix3d\(([^)]+)\)/)?.[1]
                .split(',')
                .map(parseFloat);

            if (!values || values.length !== 16) {
                //throw new Error("Invalid matrix3d string");
                return false;
            }

            const m11 = values[0]; // a1
            const m13 = values[2]; // a3

            const radians = Math.atan2(m13, m11);
            const degrees = radians * (180 / Math.PI);

            return degrees;
        }
        function extractRotateXFromMatrix3D(matrix3dString) {
            const values = matrix3dString
                .match(/matrix3d\(([^)]+)\)/)?.[1]
                .split(',')
                .map(parseFloat);

            if (!values || values.length !== 16) {
                //throw new Error("Invalid matrix3d string");
                return false;
            }

            const m22 = values[5]; // a6
            const m23 = values[6]; // a7

            const radians = Math.atan2(m23, m22);
            const degrees = radians * (180 / Math.PI);

            return degrees;
        }
        function dampenMatrix3D(matrix3dString, dampingAmount) {
            const values = matrix3dString
                .match(/matrix3d\(([^)]+)\)/)?.[1]
                .split(',')
                .map(parseFloat);

            if (!values || values.length !== 16) {
                return false;
            }

            // Identity matrix3d
            const identity = [
                1, 0, 0, 0,  // row 1
                0, 1, 0, 0,  // row 2
                0, 0, 1, 0,  // row 3
                0, 0, 0, 1   // row 4
            ];

            const dampened = values.map((val, index) => {
                const idVal = identity[index];
                return idVal + (val - idVal) * dampingAmount;
            });

            const result = `matrix3d(${dampened.map(n => n.toFixed(10)).join(',')})`;
            return result;
        }
    </script>
@endsection

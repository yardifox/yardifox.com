import * as THREE from 'three';
import { OrbitControls } from "jsm/controls/OrbitControls.js";

import { GLTFLoader } from "jsm/loaders/GLTFLoader.js";

// import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';


// const loader = new GLTFLoader();

const scene = new THREE.Scene();

const w = window.innerWidth;
const h = window.innerHeight;

const fov = 75;
const aspect = w / h;
const near = 0.1;
const far = 150;
const camera = new THREE.PerspectiveCamera( fov, aspect, near, far );

//@Todo: wrap in int function
const geometry = new THREE.BoxGeometry( 1, 1, 1 );
const material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
const cube = new THREE.Mesh( geometry, material );
//scene.add( cube );



camera.position.z = 15;
camera.position.x = 2;
camera.position.y = 1;
// camera.rotation.x = -5;

const loader = new GLTFLoader();
let scrollPosY = 0;

const geo = new THREE.IcosahedronGeometry(1.0, 2);
geo.center();
const mat = new THREE.MeshStandardMaterial({
    color: 0xffffff,
    flatShading: true,
});
const mesh = new THREE.Mesh(geo, mat);
//scene.add(mesh);

// Background
let buffgeoBack  = new THREE.IcosahedronGeometry(40,2);
buffgeoBack.center();
var simpleMaterial = new THREE.MeshBasicMaterial( {
    // map:[
    //     [0.75,0.6,0.4,0.25],
    //     ['#1B1D1E', '#3D4143', '#72797D', '#b0babf']
    // ],
    color:0x74b0d2,
    side:THREE.BackSide,
    flatShading: true,
})
var m = new THREE.ShaderMaterial({
    uniforms: {
        color1: {
            value: new THREE.Color(0x040792)
        },
        color2: {
            value: new THREE.Color(0x99C6F7)
        }
    },
    side:THREE.BackSide,
    vertexShader: `
    varying vec2 vUv;

    void main() {
      vUv = uv;
      gl_Position = projectionMatrix * modelViewMatrix * vec4(position,1.0);
    }
  `,
    fragmentShader: `
    uniform vec3 color1;
    uniform vec3 color2;

    varying vec2 vUv;

    void main() {

      gl_FragColor = vec4(mix(color1, color2, vUv.y), 1.0);
    }
  `,
    wireframe: false
});
let back = new THREE.Mesh(buffgeoBack, m);

console.log(back);
scene.add(back);
// Point Light
const light = new THREE.PointLight(0xffffff, 500, 200);
light.position.set(3,10,20);
light.castShadow = true;
light.shadow.mapSize.width = 4096;
light.shadow.mapSize.height = 4096;
scene.add(light);
const wireMat = new THREE.MeshBasicMaterial({ color: 0xffffff, wireframe: true })
const wireMesh = new THREE.Mesh(geo, wireMat);
// wireMesh.scale.setScalar(1.0001);
// mesh.add(wireMesh);

const hemiLight = new THREE.HemisphereLight(0xffffff, 0xaa5500);
hemiLight.castShadow = true;

scene.add(hemiLight);

const renderer = new THREE.WebGLRenderer();

renderer.setSize( w, h );

let insertElm = document.getElementById('workCont');
renderer.domElement.id = "threeDom";
insertElm.insertAdjacentElement('afterend',renderer.domElement);
//document.body.appendChild( renderer.domElement );

// const controls = new OrbitControls(camera, renderer.domElement);
// controls.enableDamping = true;
// controls.dampingFactor = 0.04;

let sgb = null;
var clock, mixer;
loader.load( './js/castle.glb', (gltf) =>{
    console.log('gltf');
    console.log(gltf);
    if (gltf.animations.length > 0) {
        mixer = new THREE.AnimationMixer( gltf.scene );
        gltf.animations.forEach( clip => { mixer.clipAction( clip ).loop = THREE.LoopRepeat; } );
        mixer.clipAction( gltf.animations[ 0 ] ).play();
    }
    sgb = gltf.scene;
    // sgb = sgb.children[0];
    scene.add(sgb)
    console.log(sgb);
    sgb.scale.setScalar(12);
}, undefined, (error) => {
  console.log(error);
});

function resizeStage(){
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix()
    renderer.setSize( window.innerWidth - 15, window.innerHeight );
}

let goalPos = 0;
function animate(d) {
    goalPos = Math.PI * scrollPosY;
    if ( mixer ) mixer.update( 0.05 );
    renderer.render( scene, camera );
    camera.position.z = scrollPosY * 12;
    camera.position.y = scrollPosY * 2;
    if(sgb){
        sgb.rotation.y -= (sgb.rotation.y - (goalPos * 1.0)) * 0.1;
        sgb.rotation.x -= (sgb.rotation.x - (goalPos * 0.02)) * 0.2;
    }
    //console.log(`scrollPosY: %c${scrollPosY}`, "color: #ffff00");
    //controls.update();
}
window.addEventListener('resize', resizeStage);
renderer.setAnimationLoop( animate );

const manager = new THREE.LoadingManager();
let sceneData = {};

window.addEventListener("scroll", () =>{
    scrollPosY = (window.scrollY / document.body.clientHeight);
})

console.log(THREE);

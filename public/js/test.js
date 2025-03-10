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

const loader = new GLTFLoader();
let scrollPosY = 0;

const geo = new THREE.IcosahedronGeometry(1.0, 2);
geo.center();
const mat = new THREE.MeshStandardMaterial({
    color: 0xffffff,
    flatShading: true,
});
const mesh = new THREE.Mesh(geo, mat);
scene.add(mesh);

const wireMat = new THREE.MeshBasicMaterial({ color: 0xffffff, wireframe: true })
const wireMesh = new THREE.Mesh(geo, wireMat);
wireMesh.scale.setScalar(1.0001);
mesh.add(wireMesh);

const hemiLight = new THREE.HemisphereLight(0xffffff, 0xaa5500);
scene.add(hemiLight);

const renderer = new THREE.WebGLRenderer();

renderer.setSize( w, h );

let insertElm = document.getElementById('workCont');
insertElm.insertAdjacentElement('afterend',renderer.domElement);
//document.body.appendChild( renderer.domElement );

// const controls = new OrbitControls(camera, renderer.domElement);
// controls.enableDamping = true;
// controls.dampingFactor = 0.04;

let sgb = null;

loader.load( './js/sgb_test.glb', (gltf) =>{
    sgb = gltf.scene;
    //sgb.center();
    scene.add(sgb)
}, undefined, (error) => {
  console.log(error);
});

function resizeStage(){
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix()
    renderer.setSize( window.innerWidth - 15, window.innerHeight );
}

let goalPos = 0;
function animate() {
    goalPos = Math.PI * scrollPosY;
    renderer.render( scene, camera );
    camera.position.z = scrollPosY * 12;
    camera.position.y = scrollPosY * 2;
    if(sgb){
        sgb.rotation.y -= (sgb.rotation.y - (goalPos * 1.0)) * 0.1;
        sgb.rotation.x -= (sgb.rotation.x - (goalPos * 0.2)) * 0.2;
    }
    console.log(`scrollPosY: %c${scrollPosY}`, "color: #ffff00");
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

import * as THREE from 'three';
import { OrbitControls } from 'three/addons/controls/OrbitControls.js';
import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';

// const controls = new OrbitControls( camera, renderer.domElement );
// const loader = new GLTFLoader();

const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

const geometry = new THREE.BoxGeometry( 1, 1, 1 );
const material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
const cube = new THREE.Mesh( geometry, material );
scene.add( cube );

camera.position.z = 5;

const renderer = new THREE.WebGLRenderer();
renderer.setSize( window.innerWidth - 15, window.innerHeight );
let insertElm = document.getElementById('workCont');
insertElm.insertAdjacentElement('afterend',renderer.domElement);
//document.body.appendChild( renderer.domElement );


function resizeStage(){
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix()
    renderer.setSize( window.innerWidth - 15, window.innerHeight );
}
function animate() {
    renderer.render( scene, camera );
}
window.addEventListener('resize', resizeStage);
renderer.setAnimationLoop( animate );

console.log(THREE);


$(window).scroll(function() {
    animateTriangles();
});

function animateTriangles() {
    if($('#dreiecke')[0]) {
        var trianglePositionTop = $('.visual').height() - 150;
    }
    //console.log('trianglePositionTop');
//
    if ($(window).scrollTop() > trianglePositionTop) {
        $('#dreiecke').css('position', 'fixed').css('top', 0);
    } else {
        $('#dreiecke').css('position', 'absolute').css('top', 'inherit');
    }
}


//Create and load the bodymovin animation
var animContainer = document.getElementById('dreiecke');
var getUrl = window.location;
var baseUrl = getUrl.protocol + "//" + getUrl.host;
var animationData = {
    container : animContainer,
    renderer : 'svg',
    loop : 'true',
    autoplay : 'true',
    path : baseUrl + '/typo3conf/ext/vs_sitepackage/Resources/Public/Json/triangles.json'
}
//console.log(baseUrl + '/typo3conf/ext/vs_sitepackage/Resources/Public/Json/triangles.json');
var animation = bodymovin.loadAnimation(animationData);
//var currentFrameSpan = document.getElementById('frame');
var currentFrame = 0;

/*
	Get the scroll Container, set speed (more speed mean more animation during scroll)
	nastPosition is set by the scroll event
	newPosition remain 0.0 in order to stop the animation
*/
var scrollContainer = document.getElementById('bg-triangles');
var speed = 5;
var lastPosition = 0.0;
var newPosition = 0.0;


$('#bg-triangles').on('wheel', findScrollDirectionOtherBrowsers);
$(window).on("scroll", findScrollDirectionOtherBrowsers);

function findScrollDirectionOtherBrowsers(event){
    //method by @Vasi : https://stackoverflow.com/questions/31223341/detecting-scroll-direction
    //Soit delta l'orientation du scroll (-1 = bas, 1 = haut) multiplié à la vitesse de déplacement
    var delta;

    if (event.wheelDelta > 0){
        //Si l'évènement du scroll est positif alors l'orientation et positive
        delta = speed * -1;
    }else{
        //sinon elle est négative
        delta = speed * 1;
    }

    lastPosition = delta;
}

function moveTo(easing){
    //compute the new speed of the animation with an easing
    var dx = newPosition - lastPosition;
    lastPosition += dx * easing;
    //set new speed to the animation
    animation.setSpeed(lastPosition);
}

//render
function render(){
    moveTo(0.1);
    currentFrame = Math.round(animation.currentFrame);
    // currentFrameSpan.innerHTML = currentFrame;
    window.requestAnimationFrame(render);
}

render();
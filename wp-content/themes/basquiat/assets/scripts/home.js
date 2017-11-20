console.log("ok")


// Get the element to move on mousemove
var homeIntroBkg = document.querySelector('.home-intro__bkg');
var intro__content= document.querySelector('.intro__content');
var citation__content= document.querySelector('.citation__content');


// Listen to mousemove event
window.addEventListener('mousemove', function myFunction(e) {
    console.log('event', e);
    var x = e.clientX;    // Get the horizontal coordinate
    var y = e.clientY;
    homeIntroBkg.style.transform = 'translateX(' + x/400 + '%) ' + 'translateY(' + y/120 + '%)';
    intro__content.style.transform = 'translateX(-' + x/400 + '%) ' + 'translateY(-' + y/120 + '%)';
});











/*window.addEventListener('mousemove', (e) =>{
    console.log('fuck');
    let x = e.clientX;    // Get the horizontal coordinate
    let y = e.clientY;
    homeIntroBkg.style.transform = 'translateX(' + x/100 + '%) ' + 'translateY(' + y/40 + '%)';
});*/
// function to execute at mousemove
















window.sr = ScrollReveal();
sr.reveal('.briography-image', { duration: 1000, origin: 'bottom', viewFactor: 0.4, reset: false });
sr.reveal('.home-profile-text-wrapper__text', { duration: 1000, origin: 'bottom', viewFactor: 0.4, reset: false });
sr.reveal('.citation__content', { duration: 1000, origin: 'bottom', viewFactor: 0.4, reset: false , scale:1.2});
sr.reveal('.perceverant-content-img', { duration: 1000, origin: 'bottom', viewFactor: 0.4, reset: false , scale:1.2});
sr.reveal('.home-perceverant-text-wrapper', { duration: 2000, origin: 'bottom', viewFactor: 0.6, reset: false , scale:1.2});
//sr.reveal('.home-perceverant-text-wrapper', { duration: 1000, origin: 'bottom', viewFactor: 0.4, reset: true });
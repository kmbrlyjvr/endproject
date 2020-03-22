const images = document.querySelectorAll("[data-src]]");

function preLloadImage(img) {
    const src = img.getAttribute("data-src");

    if (!src){
         return;
    }

    img.src = src;
}

const imgOptions = {};

const imgObserver = new IntersectionObserver((entries, imgObserver) => {
    entries.forEach(entry => {
        if(!entry.isIntersection) {
            return;
        } else {
            preLloadImage(entry.target);
            imgObserver.unobserver(entry.target);
        }
    })
});
//define options in js object
let options = {
root: null, //null is the viewport
rootMargin: "0px 0px -200px 0px",
threshold: .1 //threshold is the persentage of the element that needs to be visible to trigger the callback. 1 = 100%
};


let callback = (entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    } else {
      entry.target.classList.remove('visible');
    }
  });
};

//instantiate new observer and set targets to observe
let observer = new IntersectionObserver(callback, options);
let targets = document.querySelectorAll('h3');

targets.forEach(target => {
  observer.observe(target);
});
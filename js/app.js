document.addEventListener("DOMContentLoaded", function () {
  new Splide("#splide", {
    type: "loop",
    perPage: 1,
    focus: "center",
  }).mount();
  new Splide("#splideGallary", {
    type: "loop",
    perPage: 4,
    height: '10rem',
    'heightRatio': 0.5,
    cover: true,
    interval: 3000,
	breakpoints: {
		'1025': {
			perPage: 1,
		},
		'414': {
			perPage: 1,
		},
	},
    focus: "center",
    autoplay: true,
  }).mount();
});

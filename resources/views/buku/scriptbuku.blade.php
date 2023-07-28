<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">

<script>
 document.addEventListener('DOMContentLoaded', function () {
      new Splide('#het-sd', {
        perPage: 5,
        perMove: 1,
        gap: "30px",
        type:"loop",
        pagination: false,
        breakpoints: {
		640: {
			perPage: 2,
		},
     }
      }).mount();

      new Splide('#het-smp', {
        perPage: 5,
        perMove: 1,
        gap: "30px",
        type:"loop",
        pagination: false,
        breakpoints: {
		640: {
			perPage: 2,
		},
     }
      }).mount();

      new Splide('#het-sma', {
        perPage: 5,
        perMove: 1,
        gap: "30px",
        type:"loop",
        pagination: false,
        breakpoints: {
		640: {
			perPage: 2,
		},
     }
      }).mount();

      new Splide('#pls-sd-pdp', {
        perPage: 5,
        perMove: 1,
        gap: "30px",
        type:"loop",
        pagination: false,
        breakpoints: {
		640: {
			perPage: 2,
		},
     }
      }).mount();

      new Splide('#pls-sd-mulok', {
        perPage: 5,
        perMove: 1,
        gap: "30px",
        type:"loop",
        pagination: false,
        breakpoints: {
		640: {
			perPage: 2,
		},
     }
      }).mount();

      new Splide('#pls-sd-agama', {
        perPage: 5,
        perMove: 1,
        gap: "30px",
        type:"loop",
        pagination: false,
        breakpoints: {
		640: {
			perPage: 2,
		},
     }
      }).mount();


      new Splide('#pls-smp-mulok', {
        perPage: 5,
        perMove: 1,
        gap: "30px",
        type:"loop",
        pagination: false,
        breakpoints: {
		640: {
			perPage: 2,
		},
     }
      }).mount();

      new Splide('#pls-smp-agama', {
        perPage: 5,
        perMove: 1,
        gap: "30px",
        type:"loop",
        pagination: false,
        breakpoints: {
		640: {
			perPage: 2,
		},
     }
      }).mount();

    });
</script>
<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
 
    <!-- Your HTML content here -->

    <!-- <h1 id="header">Header</h1>
    <p id="paragraph1">Paragraph 1</p>
    <p id="paragraph2">Paragraph 2</p> -->

    <div class="hero h-[50vh] relative" style="background-image: url(https://media.istockphoto.com/id/1173935107/photo/long-wave-on-the-coast-dawn-on-the-sea-tunisia.jpg?s=612x612&w=0&k=20&c=Q-O-34NjJpbiOtNlGGUGEllKATijp34X_xfZphY7VtE=);">
  <div class="hero-overlay bg-opacity-60"></div>
  <div class="hero-content text-center text-neutral-content">
    <div class="max-w-md">
      <h1 id="header" class="mb-5 text-5xl font-bold">Oh Hi there 👀!</h1>
      <p id="paragraph1" class="mb-5">Jemima Kibandi is an enthusiastic individual dedicated to expanding my knowledge and skills in web development.
        I have sought assistance in diverse areas, including Laravel, Tailwind CSS, GSAP animations,
          and more. <br>Look at my Projects below 😁
    </p>
      <button class="btn btn-primary">Scroll to see More</button>
    </div>
  </div>
</div>


    <script>
    // Wait for the DOM to be ready
    document.addEventListener("DOMContentLoaded", function () {
        // Define your animation
        const tl = gsap.timeline();

        // Animate the header
        tl.from("#header", {
            opacity: 0,
            y: -50,
            duration: 1,
            ease: "power3.out",
        });

        // Animate the paragraphs
        tl.from("#paragraph1, #paragraph2", {
            opacity: 0,
            y: 50,
            duration: 1,
            ease: "power3.out",
        });
    });
</script>

</div>
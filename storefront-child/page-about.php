<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=5, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . "/assets/css/root.css" ?>" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . "/assets/css/tailwind.css" ?>" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . "/assets/css/navbar.css" ?>" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . "/assets/css/footer.css" ?>" />
  <title>Astak</title>
</head>

<body>
  <?php get_template_part('template-parts/navbar') ?>

  <section class="bg-blue-dark">
    <div style="background: url(<?php echo get_stylesheet_directory_uri() . "/assets/images/paper.jpg" ?>)"
      class="py-32">
      <div class="container mx-auto flex justify-between">
        <div class="fadeIn">
          <h1 class="font-crimson text-9xl text-white">
            Astak
            <br />
            Incense &<br />
            Singing Bowls
          </h1>
          <p class="text-white text-lg pt-5">
            Nulla quis lorem ul liberto
            <br />
            malesude fouget. Maouos blandit
            <br />
            liqut elit.
          </p>
        </div>
        <div class="border-10 border-white relative translate-y-64">
          <img class="max-w-lg" width="512px" height="512px"
            src="<?php echo get_stylesheet_directory_uri() . "/assets/images/hero.jpg" ?>" alt="hero-image" />
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container mx-auto text-center py-32">
      <h2 class="font-crimson text-blue-darker text-8xl">
        About Our
        <br /> Singing Bowls
      </h2>
      <div class="px-64 pt-8 text-blue-darker">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo
        quaerat excepturi cum illum ipsum modi in impedit ea? Dolores ipsum
        doloremque officia ut quia in cum enim error fuga ratione. Lorem
        ipsum dolor sit amet consectetur adipisicing elit. Amet nisi
        explicabo sequi distinctio voluptates, mollitia nihil sapiente
        asperiores magnam unde! Odio quos architecto obcaecati, sapiente est
        tenetur distinctio alias quia?
      </div>
      <img class="mx-auto" height="450px" width="1280px"
        style="filter: drop-shadow(0px 4px 2px #1b2b43) drop-shadow(0px 0px 10px lightgray)"
        src="<?php echo get_stylesheet_directory_uri() . "/assets/images/bowl-202.png" ?>" alt="bowls" />
    </div>
  </section>
  <section class="relative bg-blue-lighter">
    <div class="container mx-auto flex justify-between py-32 pb-64">
      <div class="relative z-10">
        <img class="max-w-2xl" src="<?php echo get_stylesheet_directory_uri() . "/assets/images/nature-1.jpg" ?>"
          alt="happy-image" />
        <img class="absolute max-w-sm -bottom-32 left-16"
          src="<?php echo get_stylesheet_directory_uri() . "/assets/images/happy.jpg" ?>" alt="happy-image" />
      </div>
      <div class="max-w-[42rem]">
        <h2 class="font-crimson text-8xl text-blue-darker">
          View Our Gallery
        </h2>
        <p class="text-blue-darker mt-5">
          Nulla quis lorem ut libero malesuada feugiat. Sed porttitor lectus
          <br />
          nibh. Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl
          <br />
          tempus convallis quis ac lectus.
        </p>
        <button class="mt-8 bg-blue-darker text-white uppercase font-crimson text-xl tracking-very-wide px-8 py-3">View
          Gallery</button>
        <div class="absolute right-0 bottom-32 z-0">
          <Wave />
          <Wave />
          <Wave />
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container mx-auto text-center py-32">
      <h2 class="font-crimson text-blue-darker text-8xl">
        Shop For
        <br /> Singing Bowls
      </h2>
      <div class="px-64 pt-8 text-blue-darker">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo
        quaerat excepturi cum illum ipsum modi in impedit ea? Dolores ipsum
        doloremque officia ut quia in cum enim error fuga ratione. Lorem
        ipsum dolor sit amet consectetur adipisicing elit. Amet nisi
        explicabo sequi distinctio voluptates, mollitia nihil sapiente
        asperiores magnam unde! Odio quos architecto obcaecati, sapiente est
        tenetur distinctio alias quia?
      </div>
      <button
        class="mt-8 mb-16  bg-blue-darker text-white uppercase font-crimson text-xl tracking-very-wide px-8 py-3">Try it
        out</button>
      <img style="filter: drop-shadow(0px 4px 2px #1b2b43) drop-shadow(0px 0px 10px lightgray)"
        src="<?php echo get_stylesheet_directory_uri() . '/assets/images/bowl-136.png' ?>" alt="bowls" />
    </div>
  </section>

  <?php get_template_part('template-parts/footer') ?>
</body>

</html>
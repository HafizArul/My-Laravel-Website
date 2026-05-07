<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/blog-style.css">
    <title>Website Sederhana</title>
</head>
<body background="/img/leaves.png">
    <div class="isi cf">
        <h1>My Website</h1>
        <ul>
            <li><a class="{{ request()->is('/') ? 'active-page' : '' }}" href="/">Home</a></li>
            <li><a class="{{ request()->is('blog') ? 'active-page' : '' }}" href="/blog">Blog</a></li>
            <li><a class="{{ request()->is('supports') ? 'active-page' : '' }}" href="#">Supports</a></li>
            <li><a class="{{ request()->is('products') ? 'active-page' : '' }}" href="#">Products</a></li>
            <li><a class="{{ request()->is('contact') ? 'active-page' : '' }}" href="/contact">Contact</a></li>
            <li><a class="{{ request()->is('about') ? 'active-page' : '' }}" href="/about">About Me</a></li>
        </ul>
        <div class="gambar" style="background-image: url('/img/Bulan.jpg');"></div>
        <h2>Article's Title</h2>
        <div class="main">
            <div class="penulis">
                <p>Created by Hafiz Arul at February 13, 2025</p>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime blanditiis deleniti quasi, officia minima provident, saepe facere sit iusto enim vel dolorem tempora eum nesciunt debitis vitae eaque pariatur atque odit accusamus eius sunt optio. Libero doloribus omnis modi, perferendis quisquam tenetur, quibusdam itaque, quam illum officiis perspiciatis? Hic suscipit, repellendus ullam eaque sapiente, accusantium sunt dolorem, labore quibusdam nemo dicta magnam voluptas quae expedita deserunt repellat aliquam tempora dignissimos. Vero eveniet veniam sit officia soluta facere est accusantium, nisi ratione maiores delectus assumenda at esse ab a quasi provident earum amet dolor? Voluptatum perferendis aspernatur, soluta dolor a dolore.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, assumenda laborum! Dolorem tempora sint asperiores tempore, vel deleniti laudantium accusantium quasi nulla eius repellendus eum perspiciatis, dicta itaque. Nostrum, ad.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima nesciunt nam inventore recusandae quam dolorum maiores distinctio. Nihil quaerat nesciunt aspernatur deleniti culpa est amet cupiditate mollitia accusantium fugit vero voluptatem beatae molestiae et laboriosam obcaecati vitae at pariatur, nisi consectetur repudiandae nostrum suscipit nulla tempora? Eveniet numquam tenetur hic totam, iure commodi, atque dolores deserunt repellendus, iusto error reprehenderit.</p>
        </div>
        <div class="ttgpenulis">
            <h4>Creator's Biodata</h4>
            <img src="/img/4x6.jpg" alt="">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione dicta distinctio magni! Numquam veritatis dicta beatae alias magnam ab, eius placeat laboriosam tenetur illo error deserunt aliquid ad, corrupti voluptatem voluptatibus maiores odio. Tenetur, sit ipsa nesciunt doloribus magnam perspiciatis et architecto. Reiciendis iure officiis optio suscipit voluptatibus esse iusto?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea nobis rerum consequatur laboriosam, non culpa sapiente nisi maiores natus voluptates cum porro animi quam illum rem labore dicta, perferendis ipsa ducimus provident quia, et alias? A praesentium eligendi pariatur in hic voluptates mollitia, maiores at? Deleniti, aspernatur! Obcaecati at accusantium architecto modi similique accusamus iste beatae debitis optio animi? Tenetur.</p>
        </div>
    </div>
    <div class="copyright">
        <p class="copy">Copyright 2025 Hafiz Arul &copy;</p>
    </div>
</body>
</html>
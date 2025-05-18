<?php 
$data = file_get_contents('data/pizza.json');
$menu = json_decode($data, true);

$menu = $menu["menu"];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <title>WPU Hut</title>
  </head>
  <body class="bg-gray-100">
    
  <nav class="bg-gray-800 shadow">
    <div class="container mx-auto px-4">    
        <div class="flex justify-between h-16 items-center">
            <a class="text-white" href="#">
                <img src="img/logo.png" class="w-28">
            </a>
            <button class="text-white md:hidden">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            <div class="hidden md:block">
                <div class="flex space-x-4">
                    <a class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md font-medium" href="#">All Menu</a>
                </div>
            </div>
        </div>
    </div>
  </nav>

    <div class="container mx-auto px-4">

        <div class="my-8">
            <h1 class="text-3xl font-bold text-gray-800">All Menu</h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php foreach ($menu as $row) : ?>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="img/menu/<?= $row["gambar"]; ?>" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h5 class="text-xl font-semibold mb-2"><?= $row["nama"]; ?></h5>
                    <p class="text-gray-600 mb-4"><?= $row["deskripsi"]; ?></p>
                    <h5 class="text-xl font-semibold mb-3">Rp. <?= $row["harga"]; ?></h5>
                    <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded inline-block">Pesan Sekarang</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>

    <!-- jQuery and other scripts -->
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
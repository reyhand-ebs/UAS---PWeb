<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
        include 'header.php';
    ?>
    <section class="container-fluid px-0">
        <div class="row">
            <div class="col px-0">
                <img src="img.png" alt="bookshelf" style="width: 100%; height: 500px; filter: blur(3px);">
                <div class="p-5 mb-4 position-absolute top-0">
                    <div class="py-5 mx-5 my-5" style="color: black;">
                        <p class="display-6 fw-bold">BOKEK</p>
                        <p class="col-md-8 fs-5">BOKEK memberikan tidak hanya kemudahan untuk mencari buku yang anda
                            cari,
                            tetapi juga memberikan rekomendasi terkait buku yang sedang trending</p>
                        <button class="btn btn-primary btn-md" type="button">Example button</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-5" style="color: black;">
            <div class="col-4 px-0">
                <img src="3_Pointing.gif" class="img-fluid" alt="pointing" style="height: 400px;">
            </div>
            <div class="col-8 align-center">
                <div class="container fluid">
                    <p class="display-6 fw-bold">ABOUT BOKEK</p>
                    <p class="">adalah sebuah website yang menyediakan daftar buku dan juga memberikan rekomendasi kepada pembaca
                        agar memudahkan memberikan bacaan lebih banyak lagi</p>
                    <button class="btn btn-primary btn-md" type="button">Example button</button>
                </div>
            </div>
        </div>
    </section>
    <?php
        include 'footer.php';
    ?>
</body>

</html>
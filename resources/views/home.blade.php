<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home</title>
        <style>

.konten {
  padding-top: 10rem;
  padding-bottom: calc(10rem - 4.5rem);
  background: linear-gradient(to bottom, rgba(43, 36, 32, 0.8) 0%, rgba(29, 27, 26, 0.8) 100%), url("picture.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
}

        </style>
    </head>
    <body>
        @include('navbar')
        
        <!-- Page Content-->
        <section>
            <div class="konten">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-6 text-light">
                        {{-- <img src="picture.jpg" class="img-thumbnail" alt="Cinque Terre"> --}}
                        <h1 class="mt-5">Its all about leather</h1>
                        <p>the art of leathercraft course is platform for all leather artisan around the world. you can find inspiration , ask your problem in crafting with profesional , and upgrade your tool,skill and knowledge. our content creator from worldwide with many style around the world. </p>
                        <p>not only that you can also keep in touch with well known artisan and designer with a lot of experience who can advice you for your leather journey. </p>
                        {{-- <button class="btn btn-light" href="/galery">Join Now !</button> --}}
                        <a class="btn btn-primary btn-light" href="/membership" role="button">Join Now !</a>
                    </div>
                </div>
                {{-- <img src="picture.jpg" class="img-fluid" alt="Cinque Terre"> --}}
            </div>
        </div>
{{-- 
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="picture.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">For those about to rock...</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </section>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

<?php
$title = 'EXACOM - Contact' ;
require_once "require/header.php";
?>
<main>
    <div class="breadcrum container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
    </div>
    <div class="container">
        <h1 class="m-5 text-center">Contacter-nous</h1>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3 mb-5">
            <form action="">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Votre nom...">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Votre prénom...">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Votre message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn">Envoyer</button>
            </form>
        </div>
    </div>
</main>
<?php
require_once "require/footer.php"; 
?>
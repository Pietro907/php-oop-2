<div class="col-4 p-2 my-2">
    <div class="card h-100 d-flex justify-content-center align-items-center p-4">

        <!-- immagine prodotto -->
        <img class="w-100" src="<?php echo $info->immagine ?>" alt="">

        <!-- nome -->
        <h5 class="text-center p-3"><?php echo $info->nome ?></h5>

        <!-- quantità -->
        <p><?php echo $info->categorie?->categoria ?></p>

        <!-- categoria animale -->
        <h5 class="my-1"><?php echo $result ?></h5>

        <!-- icona categoria -->
        <i style="font-size: 25px;" class="py-2 <?php echo $info->icona ?>"></i>

        <!-- prezzo -->
        <h5><?php echo $info->prezzo ?></h5>


    </div>
</div>
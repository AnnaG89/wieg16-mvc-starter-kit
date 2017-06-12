<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1 class="text-center">Galleri Gustafsson!</h1>
        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <?php
                foreach ($artistData as $value):?>
                    <div class="col-lg-4 text-center">
                        <img class="img-circle" src="<?= $value['artist']['image_url'] ?>"
                             alt="Generic placeholder image"
                             width="140" height="140">
                        <h2><?= $value['artist']['name'] ?></h2>
                        <p>
                            <button type="button" class="btn btn-default" data-toggle="modal"
                                    data-target="#myModal<?= $value['artist']['id'] ?>">
                                Se mer &raquo;</button>
                        </p>
                    </div>

                          <!-- Modal -->
                    <div class="modal fade" id="myModal<?= $value['artist']['id'] ?>" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel"><?= $value['artist']['name'] ?></h4>
                                </div>
                                <div class="modal-body">
                                    <div style="display: flex; flex-direction: rox;">
                                        <div style="flex-grow: 1;">
                                            <img class="img-circle" src="<?= $value['artist']['image_url'] ?>"
                                                 width="140"
                                                 height="140">
                                        </div>
                                        <div style="flex-grow: 1;">
                                            <p>Födelseår: <?= $value['artist']['birthyear'] ?></p>
                                            <p>Stad: <?= $value['artist']['city'] ?></p>
                                        </div>
                                    </div>

                                    <hr>
                                    <?php foreach ($value['artworks'] as $artwork) { ?>
                                        <div style="display: flex; flex-direction: row">
                                            <div style="flex-grow: 1;">
                                                <p>Namn: <?= $artwork['name'] ?></p>
                                                <p>Tillverkningsdatum: <?= $artwork['creation_date'] ?></p>
                                            </div>
                                            <div style="flex-grow: 1;">
                                                <img src="<?= $artwork['artwork_url'] ?>" width="140" height="140">
                                            </div>
                                            <div>
                                                <a class='btn btn-default btn-sm' href='/delete_artwork?id=<?= $artwork['id'] ?>'
                                                   role='button'>Ta bort konstverk</a>
                                                <hr style="margin: 10px;">
                                                <a class='btn btn-default btn-sm' href='/update_artwork_view?id=<?= $artwork['id'] ?>'
                                                   role='button'>Ändra</a>
                                            </div>
                                        </div>
                                        <hr>
                                    <?php } ?>
                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-default btn-sm"
                                       href="/create_artwork_view?id=<?= $value['artist']['id'] ?>" role="button">Lägg till
                                        konstverk</a>
                                    <a class='btn btn-default btn-sm' href='/update_artist_view?id=<?= $value['artist']['id'] ?>'
                                       role='button'>Uppdatera konstnär</a>
                                    <a class='btn btn-default btn-sm' href='/delete_artist?id=<?= $value['artist']['id'] ?>'
                                       role='button'>Ta bort konstnär</a>
                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Stäng
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>


                <?php endforeach; ?>
            </div>
            <hr>
            <p class="text-center">
                <a class="btn btn-default btn-lg" href="/create_artist_view" role="button">Lägg till konstnär</a>
                <a class="btn btn-default btn-lg" href="/create_artwork_view" role="button">Lägg till konstverk</a>
            </p>
        </div>
    </div>
</div>
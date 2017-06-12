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
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#myModal<?= $value['artist']['id'] ?>">
                                View details &raquo;</button>
                        </p>
                    </div><!-- /.col-lg-4 -->

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
                                                <p>Konstverk: <?= $artwork['name'] ?></p>
                                                <p>Tillverkningsår: <?= $artwork['creation_date'] ?></p>
                                            </div>
                                            <div style="flex-grow: 1;">
                                                <img src="<?= $artwork['artwork_url'] ?>" width="140" height="140">
                                            </div>
                                            <div>
                                                <a class='btn btn-primary btn-sm' href='/delete_artwork?id=<?= $artwork['id'] ?>'
                                                   role='button'>Ta bort konstverk</a>
                                                <hr style="margin: 10px;">
                                                <a class='btn btn-primary btn-sm'
                                                   href='/update_artwork_view?id=<?= $artwork['id'] ?>'
                                                   role='button'>Ändra</a>
                                            </div>
                                        </div>
                                        <hr>
                                    <?php } ?>
                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-primary btn-sm" href="/create_artwork?id=<?= $value['artist']['id'] ?>" role="button">Lägg till konstverk</a>
                                    <a class='btn btn-primary btn-sm' href='/update?id=<?= $value['artist']['id'] ?>'
                                       role='button'>Uppdatera konstnär</a>
                                    <a class='btn btn-primary btn-sm' href='/delete?id=<?= $value['artist']['id'] ?>' role='button'>Ta bort konstnär</a>
                                    <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Stäng</button>

                                </div>
                            </div>
                        </div>
                    </div>


                <?php endforeach; ?>
            </div>
            <hr>
            <p class="text-center">
                <a class="btn btn-primary btn-lg" href="/create" role="button">Lägg till konstnär</a>
                <a class="btn btn-primary btn-lg" href="/create_artwork" role="button">Lägg till konstverk</a>
            </p>
        </div>
    </div>


    <!--

            <div class="row">
                <?php
    foreach ($allArtists as $value):?>
                    <tr>
                        <td><img style="max-height: 60px;" src=" <?= $value['image_url'] ?>"/></td>
                    </tr>
                    <br>
                    <tr>
                      <td><?= $value['name'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </div>


<br><br>

            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Namn</th>
                            <th>Födelseår</th>
                            <th>Stad</th>
                            <th>Bild</th>
                            <th>Ändra/Ta bort</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
    foreach ($allArtists as $value):?>
                            <tr>
                                <td><?= $value['id'] ?></td>
                                <td><?= $value['name'] ?></td>
                                <td><?= $value['birthyear'] ?></td>
                                <td><?= $value['city'] ?></td>
                                <td><img style="max-height: 60px;" src=" <?= $value['image_url'] ?>"/></td>
                                <td>
                                    <a class='btn btn-primary btn-sm' href='/delete?id=<?= $value['id'] ?>' role='button'>Ta Bort</a>
                                    <a class='btn btn-primary btn-sm' href='/update?id=<?= $value['id'] ?>' role='button'>Ändra</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> -->


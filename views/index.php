<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Galleri Gustafsson!</h1>
        <div class="container">
            <!-- Example row of columns -->
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
        </div>
        <p><a class="btn btn-primary btn-lg" href="/create" role="button">Lägg till konstnär</a></p>
    </div>
</div>

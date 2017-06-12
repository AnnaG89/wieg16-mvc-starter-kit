
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Lägg till ett KONSTVERK!</h1>
        <div>
            <form action="/add_artwork" method="post">

                <div class="form-group">
                    <label>Konstnär:</label>
                    <select name="artist_id" id="artist_id">
                        <option value="">Välj konstnär</option>
                        <?php foreach ($allArtists as $artist) { ?>
                            <option value="<?= $artist['id'] ?>"><?= $artist['name']?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Namn: </label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label>Tillverkningsår: </label>
                    <input type="date" name="creation_date" class="form-control">
                </div>

                <div class="form-group">
                    <label>Bildurl: </label>
                    <input type="text" name="artwork_url" class="form-control">
                </div>

                <p style="display:none;" id="error-message">Du måste fylla i alla formulärfält!</p>
                <button type="submit" href="index.php" class="btn btn-default">Lägg till</button>
            </form>
            <a role="button" href="/" class="btn btn-default">Avbryt</a>
        </div>
    </div>
</div>

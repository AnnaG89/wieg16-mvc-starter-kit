<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Ändra konstverk.</h1>
        <div>
            <form action="/update_artwork" method="post">
                <div class="form-group">
                    <input type="hidden" name="artist-id" class="form-control" value="<?= $_GET['artist-id'] ?>">
                </div>
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control" value="<?= $oneArtwork['id'] ?>">
                </div>

                <div class="form-group">
                    <label>Namn:</label>
                    <input type="text" name="name" class="form-control" value="<? echo $oneArtwork['name'] ?>">
                </div>
                <div class="form-group">
                    <label>Tillverkningsdatum: </label>
                    <input type="date" name="creation_date" class="form-control" value="<? echo $oneArtwork['creation_date'] ?>">
                </div>
                <div class="form-group">
                    <label>Url: </label>
                    <input type="text" name="artwork_url" class="form-control" value="<? echo $oneArtwork['artwork_url'] ?>">
                </div>

                <button type="submit" class="btn btn-default">Ändra</button>
            </form>
        </div>
    </div>
</div>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Ändra.</h1>


        <div>
            <form action="/update-artist" method="post">
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control" value="<?= $_GET['id'] ?>">
                </div>
                <div class="form-group">
                    <label>Namn:</label>
                    <input type="text" name="uname" class="form-control" value="<? echo $oneArtist['name'] ?>">
                </div>
                <div class="form-group">
                    <label>Födelseår: </label>
                    <input type="text" name="ubirthyear" class="form-control" value="<? echo $oneArtist['birthyear'] ?>">
                </div>
                <div class="form-group">
                    <label>Stad: </label>
                    <input type="text" name="ucity" class="form-control" value="<? echo $oneArtist['city'] ?>">
                </div>
                <div class="form-group">
                    <label>Bild url: </label>
                    <input type="text" name="uimg" class="form-control" value="<? echo $oneArtist['image_url'] ?>">
                </div>
                <button type="submit" class="btn btn-default">Ändra</button>
            </form>

        </div>
    </div>
</div>

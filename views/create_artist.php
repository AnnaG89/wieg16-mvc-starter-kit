<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Lägg till en konstnär!</h1>
        <div>
            <form id="create_artist_view" action="/create_artist" method="post">
                <div class="form-group">
                    <label>Namn:</label>
                    <input type="text" name="fname" class="form-control">
                </div>
                <div class="form-group">
                    <label>Födelseår: </label>
                    <input type="text" name="fbirthyear" class="form-control">
                </div>
                <div class="form-group">
                    <label>Stad: </label>
                    <input type="text" name="fcity" class="form-control">
                </div>
                <div class="form-group">
                    <label>Bildurl: </label>
                    <input type="text" name="fimg" class="form-control">
                </div>
                <p style="display:none;" id="error-message">Du måste fylla i alla formulärfält!</p>
                <button type="submit" href="index.php" class="btn btn-default">Lägg till</button>
            </form>
        </div>
    </div>
</div>

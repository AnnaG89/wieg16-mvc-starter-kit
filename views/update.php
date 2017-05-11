<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Ändra.</h1>
        <?php
        foreach ($oneArtist as $item):?>
        <div>
            <form action="/update-artist" method="post">
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control" value="<?= $_GET['id'] ?>">
                </div>
                <div class="form-group">
                    <label>Namn:</label>
                    <input type="text" name="uname" class="form-control" value="<? echo $item['name'] ?>">
                </div>
                <div class="form-group">
                    <label>Födelseår: </label>
                    <input type="text" name="ubirthyear" class="form-control" value="<? echo $item['birthyear'] ?>">
                </div>
                <div class="form-group">
                    <label>Stad: </label>
                    <input type="text" name="ucity" class="form-control" value="<? echo $item['city'] ?>">
                </div>
                <button type="submit" class="btn btn-default">Lägg till</button>
            </form>
            <? endforeach; ?>
        </div>
    </div>
</div>

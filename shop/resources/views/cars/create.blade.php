<form method="POST" action="/cars">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="titel" class="control-label">Titel</label>
        <input type="text" class="form-control" id="titel" name="titel">
    </div>
    <div class="form-group">
        <label for="description" class="control-label">Beschreibung</label>
        <textarea class="form-control" id="description" name="description"></textarea>
    </div>
    <div class="form-group">
        <label for="price" class="control-label">Preis</label>
        <input type="text" class="form-control" id="price" name="price">
    </div>
    <div class="form-group">
        <label for="kw" class="control-label">KW</label>
        <input type="text" class="form-control" id="kw" name="kw">
    </div>
    <div class="form-group">
        <label for="km" class="control-label">Kilometer</label>
        <input type="text" class="form-control" id="km" name="km">
    </div>
    <div class="form-group">
        <label for="color" class="control-label">Farbe</label>
        <input type="text" class="form-control" id="color" name="color">
    </div>
    <div class="form-group">
        <label for="model" class="control-label">Modell</label>
        <input type="text" class="form-control" id="model" name="model">
    </div>

    <div class="form-group">
        <input type="submit" value="Submit">
    </div>

</form>
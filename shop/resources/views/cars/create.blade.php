<form method="POST" action="/cars">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="titel" class="control-label">Titel</label>
        <input type="text" class="form-control" id="titel">
    </div>
    <div class="form-group">
        <label for="description" class="control-label">Beschreibung</label>
        <textarea name="lyrics" class="form-control" id="description"></textarea>
    </div>
    <div class="form-group">
        <label for="price" class="control-label">Preis</label>
        <input type="text" class="form-control" id="price">
    </div>
    <div class="form-group">
        <label for="kw" class="control-label">KW</label>
        <input type="text" class="form-control" id="kw">
    </div>
    <div class="form-group">
        <label for="km" class="control-label">Kilometer</label>
        <input type="text" class="form-control" id="km">
    </div>
    <div class="form-group">
        <label for="color" class="control-label">Farbe</label>
        <input type="text" class="form-control" id="color">
    </div>
    <div class="form-group">
        <label for="model" class="control-label">Modell</label>
        <input type="text" class="form-control" id="model">
    </div>


</form>
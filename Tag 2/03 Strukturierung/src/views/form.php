<h1 class="form-title">Anmeldung für Kundenevent</h1>

<p>Füllen Sie das folgende Formular aus um sich für unseren Kundenevent 2016 anzumelden.</p>

<!-- SCHRITT 2 -->
<?php if(count($errors) > 0): ?>
    <ul class="errors">
        <?php foreach($errors as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<!-- /SCHRITT 2 -->

<form action="index.php" method="post">

    <fieldset>
        <legend class="form-legend">Kontaktdaten</legend>
        <div class="form-group">
            <label class="form-label" for="name">Ihr Name</label>
            <input class="form-control" type="text" id="name" name="name" value="<?= $name ?>">
        </div>
        <div class="form-group">
            <label class="form-label" for="email">Ihre Email-Adresse</label>
            <input class="form-control" type="email" id="email" name="email" value="<?= $email ?>">
        </div>
        <div class="form-group">
            <label class="form-label" for="phone">Ihre Telefonnummer</label>
            <input class="form-control" type="text" id="phone" name="phone" value="<?= $phone ?>">
        </div>
    </fieldset>

    <fieldset>
        <legend class="form-legend">Unterkunft</legend>
        <div class="form-group">
            <label class="form-label" for="people">Wie viele Personen werden von Ihrer Firma teilnehmen?</label>
            <input class="form-control" min="0" type="number" id="people" name="people" value="<?= $people ?>">
        </div>
        <div class="form-group option-group">

            <p class="form-label">In welchem Hotel möchten Sie übernachten?</p>

            <div class="radio">
                <label for="hotel1">
                    <input type="radio"
                        name="hotel"
                        id="hotel1"
                        value="InterContinental Davos"
                        <?= $hotel === 'InterContinental Davos' || $hotel === '' ? 'checked' : '' ?>
                    >
                    InterContinental Davos
                </label>
            </div>

            <div class="radio">
                <label for="hotel2">
                    <input type="radio"
                        name="hotel"
                        id="hotel2"
                        value="Steinberger Grandhotel Belvédère"
                        <?= $hotel === 'Steinberger Grandhotel Belvédère' ? 'checked' : '' ?>
                    >
                    Steinberger Grandhotel Belvédère
                </label>
            </div>
        </div>
        <div class="form-group option-group">
            <div class="checkbox">

                <p class="form-label">Shuttle-Bus-Service</p>

                <label for="shuttle">
                    <input id="shuttle"
                        name="shuttle"
                        value="1"
                        type="checkbox"
                        <?= $shuttle == '1' ? 'checked' : '' ?>
                    >
                    Wir möchten den Shuttle-Bus-Service beanspruchen
                </label>
            </div>
        </div>
    </fieldset>

    <fieldset>
        <legend class="form-legend">Ihr individuelles Programm</legend>

        <div class="form-group">
            <label class="form-label" for="program">Was möchten Sie am Abend unternehmen?</label>
            <select class="form-control" id="program" name="program">
                <?php
                $options = [
                    'Kein Abendprogramm',
                    'Billardturnier',
                    'Bowlingturnier',
                    'Weindegustation',
                    'Asiatischer Kochkurs',
                    'Tankzurs für Webentwickler',
                    'Ying & Yang Yoga Einsteigerkurs',
                ];

                foreach($options as $option): ?>
                <option value="<?= $option ?>" <?= $program === $option ? 'selected' : '' ?>>
                    <?= $option ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    
    <div class="form-group">
        <label for="note" class="form-label">Haben Sie sonst noch einen Wunsch oder eine Bemerkung?</label>
        <textarea name="note" id="note" rows="3" class="form-control"><?= $note ?></textarea>
    </div>
    
</fieldset>

<div class="form-actions">
    <input class="btn btn-primary" type="submit" value="Anmelden">
    <a href="http://www.google.com" class="btn">Anmeldung abbrechen</a>
</div>

</form>

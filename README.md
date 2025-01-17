# Contao form-scr-default (EN)

With the extension, standard selections for the form elements select, checkbox and radio
button can be predefined dynamically.

Versions:

- Contao ^5.3: ``^2.0``
- Contao ^4.9: ``^1.0``

The [ProtectedSelect](https://github.com/christianbarkowsky/contao-protectedselect) extension is supported from version 2.0.2.

# Contao form-scr-default (DE)

Mit der Erweiterung können Standardauswahlen für die Formularelemente Select, Checkbox und
Radiobutton dynamisch vorgegeben werden.

Versionen:

- Contao ^5.3: ``^2.0``
- Contao ^4.9: ``^1.0``

Ab Version 2.0.2 wird die Erweiterung [ProtectedSelect](https://github.com/christianbarkowsky/contao-protectedselect)
unterstützt

Die Standardwerte für die drei Elemente können bisher nur fest bzw. statisch vorgegeben
werden - bei Elementen wie Textfelder ist es aber möglich, ein Standardwert über ein Insert-Tag
dynamisch einzubinden.

Mit der Erweiterung wird die dynamische Vorbelegung auch auf die o.g. Formularfeldtypen
erweitert und so kann z. B. bei einer Auswahl an Anreden (Frau | Herr) beim erneuten Aufruf
des Formulars erneut gesetzt werden.

Für den Zugriff auf Werte gibt es drei Inserttags:

    {{form_rawvalue::<feldname>}} - zieht die Werte aus der aktuellen Formular-Session
    {{form_rawvalue_get::<feldname>}} - zieht die Werte aus dem entsprechenden GET-Parameter
    {{form_rawvalue_post::<feldname>}} - zieht die Werte aus dem entsprechenden POST-Parameter (ab Version 2.0.2)

Bei dem Einsatz des GET-Parameters sollten Sonderzeichen und Umlaute vermieden werden. Mehrere
Werte für "multiselect" können per "komma-separierter Liste" angegeben werden - siehe Beispiel.

Die Vorbelegung ist auch über andere geeignete Inserttags möglich.

Mehr zu Installation und Beispielen für form-scr-default unter https://www.e-spin.de/form-scr-default.html

![Screenshot widget](https://github.com/e-spin/form-scr-default-bundle/blob/master/doc/e-spin_form-scr-default.jpg?raw=true "Screenshot widget")

# Contao form-scr-default

Mit der Erweiterung "e-spin_form-scr-default" können Standardauswahlen für die Formularelemente Selectbox, Checkbox und Radiobutton dynamisch vorgegeben werden.

Die Standardwerte für die drei Elemente können bisher nur fest bzw. statisch vorgebenen werden - bei Elementen wie Textfelder ist es aber möglich, ein Standardwert über ein Insert-Tag dynamisch einzubinden.

Mit der Erweiterung wird die dynamische Vorbelegung auch auf die o.g. Formularfeldtypen erweitert und so kann z.B. bei einer Auswahl an Anreden (Frau | Herr) beim erneuten Aufruf des Formulares erneut gesetzt werden.

Für den Zugriff auf Werte der Selectbox gibt es zwei Inserttags:

    {{form_rawvalue::<feldname>}} - zieht die Werte aus dem FORM_DATA-Array der aktuellen Session
    {{form_rawvalue_get::<feldname>}} - zieht die Werte aus dem entsprechenden GET-Parameter

Bei dem Einsatz des GET-Parameters sollten Sonderzeichen und Umlaute vermieden werden. Mehrere Werte für "multiselect" können per "Komma separierter Liste" angegeben werden - siehe Beispiel.

Die Vorbelegung ist auch über andere geeignete Inserttags möglich.


Mehr zu Installation und Beispielen für form-scr-default unter http://www.e-spin.de/form-scr-default.html
class validator {
    mezok = new Array();
    form;

    constructor(form) {
        this.form = form;
    }

    ujMezo(name, text) {
        this.mezok.push({
                name: name,
                text: text
            }
        );
    }

    validate() {
        let i;
        for (i in this.mezok) {
            let nev = document.forms[this.form][this.mezok[i].name].value;
            if (nev == "") {
                alert("A " + this.mezok[i].text + " mező kitöltése kötelező");
                document.forms[this.form][this.mezok[i].name].focus();
                return false;
            }
        }
        return true;
    }
}
class Floatbar{
    constructor() {
        this.floatbar = document.getElementById("floatbar");
        this.hidden = false;

        this.hideFloatbar();

        this.starred = "false"
        this.titleContent = "Lorem Ipsum"
        this.subtitleContent = "Lorem ipsum dolor sit amet"
        this.infotextContent = "13:37"

        this.starredDoc = document.getElementById("starred");
        this.titleDoc = document.getElementById("title");
        this.subtitleDoc = document.getElementById("subtitle");
        this.infotextDoc = document.getElementById("infotext");

        // this.initFillFloatbar();
    }

    toggleFloatbar(){
        if(this.hidden){
            this.showFloatbar();
        } else {
            this.hideFloatbar();
        }
    }

    hideFloatbar(){
        this.hidden = true;
        this.floatbar.classList.add('hide');
    }
    
    showFloatbar(){
        this.floatbar.classList.remove('hide');
        this.hidden = false;
    }

    initFillFloatbar(){
        this.fillFloatbar(this.titleContent, this.subtitleContent, this.infotextContent, this.starred)
    }

    fillFloatbar(titleContent, subtitleContent, infotextContent, starred = false){
        this.starred = starred;
        this.titleDoc.innerHTML = titleContent;
        this.subtitleDoc.innerHTML = subtitleContent;
        this.infotextDoc.innerHTML = infotextContent;

        this.getViewFav()

        this.showFloatbar()
    }

    updateFavorite() {
        if(this.starred) {
            this.removeFavorite()
        } else {
            this.addToFavorite()
        }
    }

    addToFavorite() {
        this.starred = true

        this.getViewFav()

        console.log("backend update added to favorite")
        // update backend localstorage
    }

    removeFavorite() {
        this.starred = false

        this.getViewFav()

        console.log("backend update removed from favorite")
        // update backend localstorage
    }

    getViewFav() {
        if(this.starred) {
            this.starredDoc.classList.remove('btn-fav');
            this.starredDoc.classList.add('btn-fav-checked');
        } else {
            this.starredDoc.classList.remove('btn-fav-checked');
            this.starredDoc.classList.add('btn-fav');
        }
    }

}

let floatbar = new Floatbar()

console.log('JS Loaded')
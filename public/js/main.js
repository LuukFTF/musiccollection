class Floatbar{
    constructor() {
        this.floatbar = document.getElementById("floatbar");
        this.hidden = false;

        this.hideFloatbar();
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
}
let floatbar = new Floatbar()

console.log('JS Loaded')
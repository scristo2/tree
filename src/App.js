
export class App{

    constructor(){

         this.addStyle();
         
    }


    addStyle(){

        var head = document.querySelectorAll('head')[0];
        var style = document.createElement('link');
        style.href = "./src/index.css?cache=345";
        style.rel = "stylesheet";
        style.type = "text/css";
        head.appendChild(style);
    }
}
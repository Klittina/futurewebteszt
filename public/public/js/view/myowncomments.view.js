import MyowncommentView from "./myowncomment.view.js";

class MyowncommentsView{
    constructor(block,parentElement){
        parentElement.html(`<div class="commentsDiv">
        </div>`)
        this.divElement = parentElement.children("div:last-child");
        block.forEach(element => {
            new MyowncommentView(element,this.divElement);
        });  
    }
}
export default MyowncommentsView;
import MyownpostView from "./myownpost.view.js";

console.log("apádfaszát");
class MyownpostsView{
    constructor(block,parentElement){
        parentElement.html(`<div class="postsDiv">
        </div>`)
        this.divElement = parentElement.children("div:last-child");
        block.forEach(element => {
            new MyownpostView(element,this.divElement);
        });  
    }
}
export default MyownpostsView;
import MyownpostModel from "../model/myownposts.model.js";
import MyownpostsView from "../view/myownposts.view.js";
import MycommentsModel from "../model/mycomments.model.js";
import MyowncommentsView from "../view/myowncomments.view.js";

class MyownpostController{
    #myownpostmodel;
    #mycommentsmodel;
    #token;
    constructor(){
        const token = $('meta[name="csrf-token"]').attr("content");
        this.#token = token;
        this.#myownpostmodel = new MyownpostModel(token);
        this.#mycommentsmodel  = new MycommentsModel(token);

        $("#post").on("click", (event) => {
            console.log("posztjaim");
            this.#myownpostmodel.dataIn(
                "/api/user/post",
                this.Myownpost
            );
            console.log(this.Myownpost);
        });
        $("#kom").on("click", (event) => {
            console.log("kommentek");
            this.#mycommentsmodel.dataIn(
                "/api/user/comments",
                this.Myowncomment
            );
        });
        $(window).on("everydetailElement",(event)=>{
            this.TermekmegintEsemeny(event.detail);
        }) 
    }
    Myownpost(block) {
        console.log("megjelenitem");
        new MyownpostsView(block,$("section")); 
    };
    Myowncomment(block){
        new MyowncommentsView(block,$("section"));
    }
}
export default MyownpostController;
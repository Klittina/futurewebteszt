class MyowncommentView{
    #element;
    constructor(element, parentelement){
        this.#element = element;
        console.log(element);
        parentelement.append(`<div class="dataDiv">
        <div class ="cim">${element.posztcim}</div>
        <div class ="cim">${element.comment}</div>
        <div class ="kommentiro">
        <p>${element.vezeteknev} ${element.keresztnev}</p>
        </div>
        <div class = "delete"><button id="torles${element.comment_id}">Komment törlése</button></div>
        <div class = "delete"><button id="szerkesztes${element.comment_id}">Komment szerkesztése</button></div>
        </div>`);
        this.deleteElement = $(`#torles${element.comment_id}`);
        this.deleteElement = $(`#szerkesztes${element.comment_id}`);
        this.deleteElement.on("click", () => {
            this.clickTrigger("deleteElement");
        });
    }
    clickTrigger(esemenynev) {
        console.log("rákattintottam trigger eseménny", this.#element);
        const esemeny = new CustomEvent(esemenynev, { detail: this.#element });
        window.dispatchEvent(esemeny);
    }
}
export default MyowncommentView;
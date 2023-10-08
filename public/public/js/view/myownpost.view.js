class MyownpostView{
    #element;
    constructor(element, parentElement){
        this.#element = element;
        console.log(element);
        parentElement.append(`<div id="dataDiv${element.post_id}">
        <div class ="cim">${element.posztcim}</div>
        <div class ="tartalom">${element.tartalom}</div>
        <button id="posztszerkesztese${element.post_id}">Poszt szerkesztése</button>
        <button id="torles${element.post_id}">Poszt törlése</button>
        </div>`);
        this.divElement = $(`#dataDiv${element.post_id}`);
        this.editElement = $(`#posztszerkesztese${element.post_id}`);
        this.deleteElement = $(`#torles${element.post_id}`);
        
        this.divElement.on("click", () => {
            this.clickTrigger("everydetailElement");
        });
        this.editElement.on("click", () => {
            this.clickTrigger("editElement");
        });
        this.deleteElement.on("click", () => {
            this.clickTrigger("deleteElement");
        });
    }
    clickTrigger(esemenynev) {
        console.log("rákattintottam trigger eseménny", this.#element);
        //const esemeny = new CustomEvent(esemenynev, { detail: this.#element });
        //window.dispatchEvent(esemeny);
    }
}
export default MyownpostView;
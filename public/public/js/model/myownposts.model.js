class MyownpostModel{
    #postsBlock = [];
    constructor(token){
        this.token = token;
    }

    dataIn(endpoint, callback) {
        fetch(endpoint, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": this.token,
            },
        })
            .then((response) => response.json())
            .then((data) => {
                console.log(data);
                callback(data);
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    }

}
export default MyownpostModel;
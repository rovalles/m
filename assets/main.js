//brb
window.onload = function(){
    let body = document.getElementsByTagName("body")[0];

    document
        .querySelectorAll("a")
        .forEach( (element) => {
            element.addEventListener("mouseenter", function(){
                //let currentClass = this.getAttribute("class");
                //body.setAttribute("class");
                console.log(this, this.getAttribute("class"));
            });
        });
    //body.setAttribute("class", )
    //console.log(body);
};

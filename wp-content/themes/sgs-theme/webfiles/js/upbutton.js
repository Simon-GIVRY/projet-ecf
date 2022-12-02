// document.addEventListener("scroll", e => {
//     if (scrollY > 500 && !document.querySelector(".scrollUp")) {
//         let elBody = document.querySelector("body")

//         let elDiv = document.createElement("div")
//         elDiv.setAttribute("class", "scrollUp")
//         let divText = document.createTextNode("^")

//         elDiv.append(divText);
//         elBody.append(elDiv);

//         elDiv.addEventListener("click", ()=>{
//             window.scrollTo({top: 0, behavior: 'smooth'});
//         })
//     }

//     if (scrollY <= 500 && document.querySelector(".scrollUp")) {
//         document.querySelector(".scrollUp").remove()
//     }
// })


let elScrollUp = document.querySelector('.scrollUp');
let elMain = document.querySelector('main');

document.addEventListener("scroll", e => {
    console.log("scroll")
    if (scrollY >= 300 && !document.querySelector('.scrollUp')) {
        console.log("if");
        elDiv = document.createElement('div')
        elDiv.setAttribute("class", "scrollUp")

        elMain.append(elDiv);

        elDiv.addEventListener("click", ()=>{
        window.scrollTo({top: 0, behavior: 'smooth'})});
    }

    if (scrollY <= 500 && document.querySelector(".scrollUp")) {
        document.querySelector(".scrollUp").remove()
    }
})
document.addEventListener("DOMContentLoaded", function(event) {
    let elsImgW = document.getElementsByClassName("img-w");

    for(let element of elsImgW){

        let wrapper = document.createElement('div');
        wrapper.classList.add("img-c");

        element.parentNode.insertBefore(wrapper, element);
        wrapper.appendChild(element);

        let elsImgSrc = element.getElementsByTagName("img");
        if(elsImgSrc.length > 0){
            element.style.backgroundImage = 'url(' + elsImgSrc[0].src + ')';
        }
    }
});
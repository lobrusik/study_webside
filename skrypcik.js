console.log("test");

function mix() {
    x = 200;
    y = 200;
    elem = document.getElementsByClassName('choc');
    for (let e of elem) {
      let randomX = Math.floor(Math.random()*x);
      let randomY = Math.floor(Math.random()*y);
      e.style.top = randomX + 'px';
      e.style.left = randomY + 'px';
    }
  };
  
  const THUMBNAILS = document.querySelectorAll(".thumbnail img");
  const POPUP = document.querySelector(".popup");
  const POPUP_CLOSE = document.querySelector(".popup_close");
  const POPUP_IMG = document.querySelector(".popup__img");

  THUMBNAILS.forEach((thumbnail)=> {
    thumbnail.addEventListener("click",(e) => {
        POPUP.classList.remove("hidden");
        POPUP_IMG.src=e.target.src;
    });
  });

  POPUP_CLOSE.addEventListener("click",()=>{
    POPUP.classList.add("hidden");
  });

  const myFunction = () =>{

  }
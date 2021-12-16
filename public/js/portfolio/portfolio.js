//images array
const img = ["http://127.0.0.1:8000/img/frontend/portfolio/one.png", "http://127.0.0.1:8000/img/frontend/portfolio/two.png", "http://127.0.0.1:8000/img/frontend/portfolio/three.png", "http://127.0.0.1:8000/img/frontend/portfolio/four.png", "http://127.0.0.1:8000/img/frontend/portfolio/five.png" ];


//topic one array
const topicOne = ["Topic 1", "Topic 2", "Topic 3", "Topic 4", "Topic 5"];




var i = 0;


/*next slide*/
   
function nextSlide() {

      

      if(i<4) {
        i = i + 1;
      } else {
        i =0;
      }
      console.log(i);

      //----------left side content animation and everything 
      document.getElementById("portTitleOne").innerHTML = topicOne[i];



      

      //----------right side content animation and everything below----------

     //next image will appear
     document.getElementById("active-port-img").src = img[i];

    // prev button throw animation
    
    const prevbtnthrow = document.querySelector(".prevbtnThrow");

 
    const nextmymove = document.querySelector(".nextmove");
    const nextbtnoutmove = document.querySelector(".nextbtnoutmove");
      
    //----- next button basic ------
    // animation for image
    nextmymove.style.animation = "";
    setTimeout(() => nextmymove.style.animation = "fadeDown 2s ease-in both", 1);
    //animation for dot
    nextbtnoutmove.style.animation = "";
    setTimeout(() => nextbtnoutmove.style.animation = "moveout 2s linear both", 1);

    //-------  next button advanced (ghost button activation)------
    nextGhost = document.getElementById("next-ghost");
    const nextghostMove = document.querySelector(".next-clone");
    nextghostMove.style.animation = "";
    setTimeout(() => nextghostMove.style.animation = "ghostAnimate 2s", 1);
    
    //animation for throwing prev button
    prevbtnthrow.style.animation = "";
    setTimeout(() => prevbtnthrow.style.animation = "prevThrow 2s linear both", 1);

    //animation for prev button in
    const prevbtnIn = document.querySelector(".prebtnin");
    prevbtnIn.style.animation = "";
    setTimeout(() => prevbtnIn.style.animation = "prevIn 2s", 1);
  
}





/*prev slide*/

function prevSlide() {

    if(i>0) {
      i = i - 1;
    }
    else {
      i =4;
    }

    



  //----------left side content animation and everything 
  document.getElementById("portTitleOne").innerHTML = topicOne[i];



  //----------right side content animation and everything below----------
    document.getElementById("active-port-img").src = img[i];

  // next button throw animation
    
  const nextbtnthrow = document.querySelector(".nextbtnThrow");

const prev = document.getElementById("prev");
const prevmove = document.querySelector(".prevmove");
const prevbtnoutmove = document.querySelector(".prevbtnoutmove");


    prevmove.style.animation = "";
    setTimeout(() => prevmove.style.animation = "fadeUp 2s ease-in both", 1);
    prevbtnoutmove.style.animation = "";
    setTimeout(() => prevbtnoutmove.style.animation = "movein 2s linear both", 10);

     //-------  next button advanced (ghost button activation)------
     prevGhost = document.getElementById("prev-ghost");
     const prevghostMove = document.querySelector(".prev-clone");
     prevghostMove.style.animation = "";
     setTimeout(() => prevghostMove.style.animation = "ghostAnimate 2s", 1);

     //animation for throwing next button
     nextbtnthrow.style.animation = "";
    setTimeout(() => nextbtnthrow.style.animation = "nextThrow 2s linear both", 1);

    //animation for next button in
    const nextbtnIn = document.querySelector(".nextbtnin");
    nextbtnIn.style.animation = "";
    setTimeout(() => nextbtnIn.style.animation = "nextIn 2s", 1);
}


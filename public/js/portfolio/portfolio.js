// var imgMainUrl = "http://127.0.0.1:8000/img/frontend/portfolio/";

//images array
const img = [imgMainUrl + "/1-hotel-mgt.jpg", imgMainUrl + "/2-contact-center.jpg", imgMainUrl +"/3-restaurant-mgt.jpg", imgMainUrl +"/4-membership.jpg", imgMainUrl +"/5-banquet.jpg", imgMainUrl + "/6-micro-finance.jpg", imgMainUrl + "/7-higher-purchase.jpg", imgMainUrl + "/8-accounting.jpg", imgMainUrl + "/9-leasing.jpg", imgMainUrl + "/10-islamic-finance.jpg", imgMainUrl + "/11-fixed-deposit.jpg", imgMainUrl + "/12-saving.jpg", imgMainUrl + "/13-pawning.jpg", imgMainUrl + "/14-hr.jpg", imgMainUrl + "/15-broadcasting.jpg", imgMainUrl + "/16-container-yard-mgt.jpg"  ];


//topic one array
const topicOne = ["Hotel Management", "Contact Center", "Restaurant Management", "Membership", "Banquet", "Micro Finance", "Higher Purchase", "Accounting", "Leasing", "Islamic Finance", "Fixed Deposit", "Savings", "Pawning", "HR", "Broadcasting", "Container Yard Management" ];


var i = 0;


/*next slide*/
   
function nextSlide() {

  var x;
  var y;
  
      

      if(i<15) {
        i = i + 1;
        x = i + 1;
        y = i - 1;
      } else {
        i =0;
        x = i + 1;
        y = 15;
      }

      if(i == 15) {
        x = 0;
      }

      
    document.getElementById('next-img').src = img[x];

    //small image - prev
    document.getElementById('prev-img').src = img[y];

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
    setTimeout(() => nextmymove.style.animation = "fadeDown 1s ease-in both", 1);
    //animation for dot
    nextbtnoutmove.style.animation = "";
    setTimeout(() => nextbtnoutmove.style.animation = "moveout 1s linear both", 1);

    //-------  next button advanced (ghost button activation)------
    nextGhost = document.getElementById("next-ghost");
    // const nextghostMove = document.querySelector(".next-clone");
    // nextghostMove.style.animation = "";
    // setTimeout(() => nextghostMove.style.animation = "ghostAnimate 1s", 1);
    
    //animation for throwing prev button
    prevbtnthrow.style.animation = "";
    setTimeout(() => prevbtnthrow.style.animation = "prevThrow 1s linear both", 1);

    //animation for prev button in
    const prevbtnIn = document.querySelector(".prebtnin");
    prevbtnIn.style.animation = "";
    setTimeout(() => prevbtnIn.style.animation = "prevIn 1s", 1);


    prevCloneActivation = document.querySelector(".prev-clone");
    prevCloneActivation.style.zIndex = 1;
  
}





/*prev slide*/

function prevSlide() {



    var x;
    var y;

    if(i>0) {
      i = i - 1;
      x = i + 1;
      y = i - 1;
    }
    else {
      i = 15;
      x = 0;
      y = 14;
    }

    if(i == 0) {
      y =15;
    }

  console.log("i=" + i);
  console.log("x=" + x);
  console.log("y=" + y);
  console.log("--------");


    //small img next
    document.getElementById('next-img').src = img[x];

    //small image - prev
    document.getElementById('prev-img').src = img[y];


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
    setTimeout(() => prevmove.style.animation = "fadeUp 1s ease-in both", 1);
    //prev small image in animation
    prevbtnoutmove.style.animation = "";
    setTimeout(() => prevbtnoutmove.style.animation = "movein 1s linear both", 10);

     //-------  next button advanced (ghost button activation)------
     prevGhost = document.getElementById("prev-ghost");
    //  const prevghostMove = document.querySelector(".prev-clone");
    //  prevghostMove.style.animation = "";
    //  setTimeout(() => prevghostMove.style.animation = "ghostAnimate 1s", 1);

     //animation for throwing next button
     nextbtnthrow.style.animation = "";
    setTimeout(() => nextbtnthrow.style.animation = "nextThrow 1s linear both", 1);

    //animation for next button in
    const nextbtnIn = document.querySelector(".nextbtnin");
    nextbtnIn.style.animation = "";
    setTimeout(() => nextbtnIn.style.animation = "nextIn 1s", 1);

    nextCloneActivation = document.querySelector(".next-clone");
    nextCloneActivation.style.zIndex = 1;
}


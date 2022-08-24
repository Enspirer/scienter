// var imgMainUrl = "http://127.0.0.1:8000/img/frontend/portfolio/";

//images array
const img = [
    imgMainUrl + "/1-hotel-mgt.jpg",
    imgMainUrl + "/3-restaurant-mgt.jpg",
    imgMainUrl + "/4-membership.jpg",
    imgMainUrl + "/5-banquet.jpg",
    imgMainUrl + "/6-micro-finance.jpg",
    imgMainUrl + "/7-higher-purchase.jpg",
    imgMainUrl + "/8-accounting.jpg",
    // imgMainUrl + "/9-leasing.jpg", 
    // imgMainUrl + "/10-islamic-finance.jpg", 
    // imgMainUrl + "/11-fixed-deposit.jpg", 
    // imgMainUrl + "/12-saving.jpg", 
    // imgMainUrl + "/13-pawning.jpg", 
    // imgMainUrl + "/14-hr.jpg", 
    // imgMainUrl + "/15-broadcasting.jpg", 
    // imgMainUrl + "/16-container-yard-mgt.jpg"
];


//topic one array
const topicOne = [
    "Destinity Property Management",
    "Destinity Restaurant Management",
    "Destinity Club Management",
    "Human Resource Management",
    "eFinancials - Core Banking ",
    "Mobile Apps / Systems to Support Digitalization ",
    "Other Supporting Solutions",
    "Integration",
    "Other Business Solutions",
];

const portText = [
    "Destinity Property Management is a web-based information system that enables organizations comprehensive controllability over their stakeholders. Destinity is a complete solution that provides real-time information and control elements, customizable to suit different stages of the management hierarchy. The system is developed with significant oversight and influence by the industry leaders, where a sophisticated dashboard provides valuable information. Destinity is an acclaimed information system due to its incredible reliability and multiple substantiated modules that provide managers with vital information that enables effective decision-making.",
    "Destinity Restaurant Management System is a refined information system that enables swift and effective management of restaurants, cafes and diners. The system provides highly detailed and sophisticated information facilities that enhance the quality of service. This system can manage restaurants of any calibre. Also, the system specializes in communicating with the kitchen and operational staff with impactful guidance. From the initial impression of the customer, the system enables comprehensive control over all relevant indicators.",
    "Destinity Club Management Solution is a comprehensive Membership Club Management system that enables unparalleled efficiency in managing and controlling members and other relevant deliverables. This system incorporates customizability at its core. Hence, the Destinity Club Management Solution can be curated to cover any form of club or society with incredible ease. The Member Portal, Member costing identification, Member Face Recognition, and Property Booking are a few of the facilities of this modernized product.",
    "The HR Management System by Scienter is a comprehensive IT - HR solution that provides various modules such as employee profiles, recruitment, commitments, appraisals, evaluations and promotions. Also, leave application, training, benefits and termination, grievance handling, disciplinary actions, and letter generation are mm, included in the Human Resource Management platform. The system provides a user-friendly Employee desk that enables centralized, efficient and easy management.",
    "Core Product<br> eFinancials by Scienter is a Complete Banking System designed to provide a quick and reliable system for banking institutions. eFinancials is a decentralized system that provides a wide array of uses. The system supports leasing, Loans, recovery management, impairment, credit risk rating, scorecard, recovery call centre and yard management. This system enables all forms of data processing functions that are critical for any banking or financial institute.",
    "Scienter eFinancials System is a phenomenally evolved system customizable to highly-specific requirements. This system possesses superior technology, evolving with the innovations of the industry.",
    "eFinancials System further extends to Lead Management, Central CRIB Management & even Anti-Money Laundering (AML) Functions.",
    "The Scienter eFinancials Core-Banking systems integration with third-party services such ATM Integration, CEFT Integration, and SLIPS Integration.",
    "Browse Our arsenal of IT solutions suitable for any organization. We strive to provide a customizable, effective and efficient solution to all our stakeholders."
]


var i = 0;


/*next slide*/

function nextSlide() {

    var x;
    var y;



    if (i < 8) {
        i = i + 1;
        x = i + 1;
        y = i - 1;
    } else {
        i = 0;
        x = i + 1;
        y = 8;
    }

    if (i == 8) {
        x = 0;
    }


    document.getElementById('next-img').src = img[x];

    //small image - prev
    document.getElementById('prev-img').src = img[y];

    //----------left side content animation and everything 
    document.getElementById("portTitleOne").innerHTML = topicOne[i];
    document.getElementById("portTextOne").innerHTML = portText[i];





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

    if (i > 0) {
        i = i - 1;
        x = i + 1;
        y = i - 1;
    } else {
        i = 8;
        x = 0;
        y = 5;
    }

    if (i == 0) {
        y = 8;
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
    document.getElementById("portTextOne").innerHTML = portText[i];



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

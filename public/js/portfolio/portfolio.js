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
    "Destinity Property Management System",
    "Destinity Restaurant Management System ",
    "Destinity Club Management Solution",
    "Human Resource Management",
    "Core Product",
    "Mobile Apps / Systems to Support Digitalization",
    "Other Supporting Solutions",
];

const portText = [
    "Destinity is a flagship Creation by Scienter that has culminated various avenues in providing a complete information system. Destinity addresses multiple scopes such as reservations, front office, Revenue Management, Point of Sale, Food Costing, Menu Engineering, Payroll with time & attendance, Banquet Management, Accounting and a fully flexed booking engine. The system incorporates a front desk app, mobile order tracking app, and housekeeping app & includes a channel manager, interfaces of IP TV, Wifi, and Doorlock integration. The Destinity Property Management System is useful for many levels of system users throughout the property.",
    "Destinity Restaurant Management System specializes in controlling a sophisticated eatery or dining experience. From the point of sale, online ordering, inventory management, commissary and inventory management, the Destinity Restaurant Management system provides KDS integration. This includes online ordering, digital menu, food costing, menu management, delivery app(driver/rider), loyalty management, accounting and finance with contact centre management. ",
    "Destinity Club Management Solution is designed specifically for clubs such as gyms, libraries, fitness centres, and facility organizations. The system incorporates a membership management function, facility booking, member portal, restaurant management, inventory management, accounting and finance, mobile order taking, fixed assets management and payroll. The system is inclusive of the Fixed Assets Management and Payroll with time & attendance.",
    "The HR Management System by Scienter is a comprehensive IT - HR solution that provides various modules such as employee profiles, recruitment, commitments, appraisals, evaluations and promotions. Also; leave application, training, benefits and termination, grievance handling, disciplinary actions, and letter generation are included in the Human Resource Management platform. The system provides a user-friendly Employee desk that enables centralized, efficient and easy management ability,",
    "eFinancials by Scienter is a complete Information system designed solely for Banking & Similar Financial Institutions. This is a centralized module that supports a wide array of Information. eFinancials in leasing, Loan origination, revolving loan, recovery, impairment, credit risk rating, scorecard, recovery call centre and yard management too. Also, the system enables comprehensive Fixed deposits, savings, microfinance, treasury management gold loans, Forex, Factoring, Accounting & Finance. This includes general ledger, accounts payable, accounts receivables and fixed assets too.",
    "The eFinancials System is incorporated into mobile applications operating on Andriod & IOS platforms. eWallet, Loan Origination, Recovery, Internet Banking, Slipless Banking, and Audit & Digital Customer Onboarding are a few of its functions.",
    "eFinancials System further extends to Lead Management, Central CRIB Management & even Anti-Money Laundering (AML) Functions."
]


var i = 0;


/*next slide*/

function nextSlide() {

    var x;
    var y;



    if (i < 6) {
        i = i + 1;
        x = i + 1;
        y = i - 1;
    } else {
        i = 0;
        x = i + 1;
        y = 6;
    }

    if (i == 6) {
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

    if (i > 0) {
        i = i - 1;
        x = i + 1;
        y = i - 1;
    } else {
        i = 6;
        x = 0;
        y = 5;
    }

    if (i == 0) {
        y = 6;
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

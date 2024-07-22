// product nav
let productLink = document.querySelector(".product-link");
let productNavBox = document.querySelector(".products");
let productNavIn = document.querySelector(".drop-product-nav");

let navInns = document.querySelector(".nav-ins");
let toogleIcon = document.querySelector(".toogle-icon");

// productLink.addEventListener("click", () => {
//     productNavBox.style.display = "block";
// });

// productNavIn.addEventListener("click", (event) => {
//     event.stopPropagation();
// });
// productNavBox.addEventListener("click", () => {
//     productNavBox.style.display = "none";
// });

// usecase nav
let useCaseLink = document.querySelector(".use-case");
let useCaseNavBox = document.querySelector(".use-cases");
let useCaseNavIn = document.querySelector(".drop-usecase-nav");

useCaseLink.addEventListener("click", () => {
    useCaseNavBox.style.display = "block";
});
useCaseNavIn.addEventListener("click", (event) => {
    event.stopPropagation();
});
useCaseNavBox.addEventListener("click", () => {
    useCaseNavBox.style.display = "none";
});

let heroUseCaseLink = document.querySelector(".use-case");
let heroUseCaseNavBox = document.querySelector(".use-cases");
let heroUseCaseNavIn = document.querySelector(".drop-usecase-nav");

heroUseCaseLink.addEventListener("click", () => {
    useCaseNavBox.style.display = "block";
});
heroUseCaseNavIn.addEventListener("click", (event) => {
    event.stopPropagation();
});
heroUseCaseNavBox.addEventListener("click", () => {
    useCaseNavBox.style.display = "none";
});

// toogle
// let smLinkProduct = document.querySelector(".sm-product");
// let smLinkProducts = document.querySelector(".sm-links-product");
// let closebtn = document.querySelector(".closebtn");
let smLinkUsecases = document.querySelector(".sm-links-usecase");

toogleIcon.addEventListener("click", () => {
    if (navInns.style.display == "block") {
        navInns.style.display = "none";
    } else {
        navInns.style.display = "block";
    }
    // smLinkProducts.style.display = "none";
    smLinkUsecases.style.display = "none";
});

// smLinkProduct.addEventListener("click", () => {
//     smLinkProducts.style.display = "flex";
// });
// closebtn.addEventListener("click", () => {
//     smLinkProducts.style.display = "none";
// });

let smLinkUsecase = document.querySelector(".sm-usecase");
let closebtnUseCase = document.querySelector(".closebtn-usecase");

smLinkUsecase.addEventListener("click", () => {
    smLinkUsecases.style.display = "flex";
});
closebtnUseCase.addEventListener("click", () => {
    smLinkUsecases.style.display = "none";
});

// how it works
// let stepOne = document.querySelector(".step-one");
// let stepTwo = document.querySelector(".step-two");
// let stepThree = document.querySelector(".step-three");
// let stepFour = document.querySelector(".step-four");

// let captionOne = document.querySelector(".caption-one");
// let captionTwo = document.querySelector(".caption-two");
// let captionThree = document.querySelector(".caption-three");
// let captionFour = document.querySelector(".caption-four");

let captionSubOne = document.querySelector(".caption-sub-one");
let captionSubTwo = document.querySelector(".caption-sub-two");
let captionSubThree = document.querySelector(".caption-sub-three");
let captionSubFour = document.querySelector(".caption-sub-four");

// function stepOneHandler() {
//     stepOne.classList.add("active");
//     stepTwo.classList.remove("active");
//     stepThree.classList.remove("active");
//     stepFour.classList.remove("active");
//     captionSubOne.style.display = "block";
//     captionSubTwo.style.display = "none";
//     captionSubThree.style.display = "none";
//     captionSubFour.style.display = "none";
// }

// function stepTwoHandler() {
//     stepTwo.classList.add("active");
//     stepOne.classList.remove("active");
//     stepThree.classList.remove("active");
//     stepFour.classList.remove("active");

//     captionSubTwo.style.display = "block";
//     captionSubOne.style.display = "none";
//     captionSubThree.style.display = "none";
//     captionSubFour.style.display = "none";
// }

// function stepThreeHandler() {
//     stepThree.classList.add("active");
//     stepOne.classList.remove("active");
//     stepTwo.classList.remove("active");
//     stepFour.classList.remove("active");
//     captionSubThree.style.display = "block";
//     captionSubOne.style.display = "none";
//     captionSubTwo.style.display = "none";
//     captionSubFour.style.display = "none";
// }
// function stepFourHandler() {
//     stepThree.classList.remove("active");
//     stepOne.classList.remove("active");
//     stepTwo.classList.remove("active");
//     stepFour.classList.add("active");
//     captionSubThree.style.display = "none";
//     captionSubOne.style.display = "none";
//     captionSubTwo.style.display = "none";
//     captionSubFour.style.display = "block";
// }
// stepOne.addEventListener("click", () => {
//     stepOneHandler();
// });
// stepTwo.addEventListener("click", () => {
//     stepTwoHandler();
// });
// stepThree.addEventListener("click", () => {
//     stepThreeHandler();
// });
// stepFour.addEventListener("click", () => {
//     stepThreeHandler();
// });

// function switchSteps() {
//     if (stepOne.classList.contains("active")) {
//         stepTwoHandler();
//     } else if (stepTwo.classList.contains("active")) {
//         stepThreeHandler();
//     } else if (stepThree.classList.contains("active")) {
//         stepFourHandler();
//     } else {
//         stepOneHandler();
//     }
// }
// setInterval(() => {
//     switchSteps();
// }, 9000);
